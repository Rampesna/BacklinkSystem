<?php

namespace App\Http\Controllers;

use App\Helpers\LogSystem;
use App\Models\EmailVerificationsTableModel;
use App\Models\LinksTableModel;
use App\Models\PurchasedLinksTableModel;
use App\Models\SalesTableModel;
use App\Models\UserSitesTableModel;
use App\Models\UsersTableModel;
use Illuminate\Http\Request;
use App\Helpers\Alexa;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class RegisterController extends Controller
{

    public function registerForm()
    {
        return view('auth.register');
    }

    public function registerPost(Request $request)
    {
        if (
            is_null($request->name_surname) ||
            is_null($request->username) ||
            is_null($request->email) ||
            is_null($request->phone) ||
            is_null($request->password)
        ) {
            $errorMessage = "Eksik Bilgiler Mevcut! Lütfen Eksik Yerleri Tamamlayıp Tekrar Deneyin.";
            return view('auth.register', compact('errorMessage'));
        } else {
            if(!is_null(UsersTableModel::where('username',$request->username)->first())){
                $errorMessage = "Bu Kullanıcı Adı Zaten Alınmış! Lütfen Başka Bir Kullanıcı Adı Belirleyin.";
                return view('auth.register', compact('errorMessage'));
            }else{
                if(!is_null(UsersTableModel::where('email',$request->email)->first())){
                    $errorMessage = "Bu E-posta Adresi Alınmış! Lütfen Başka Bir E-posta Adresi Belirleyin.";
                    return view('auth.register', compact('errorMessage'));
                }else{
                    if(!is_null(UsersTableModel::where('phone',$request->phone)->first())){
                        $errorMessage = "Bu Telefon Numarası Zaten Alınmış! Lütfen Başka Bir Telefon Numarası Girin.";
                        return view('auth.register', compact('errorMessage'));
                    }else{
                        $newUser = new UsersTableModel;
                        $newUser->name_surname = ucwords($request->name_surname);
                        $newUser->username = $request->username;
                        $newUser->email = $request->email;
                        $newUser->password = bcrypt($request->password);
                        $newUser->phone = $request->phone;
                        $newUser->balance = 0;
                        $newUser->is_activated = 1;
                        $newUser->is_banned = 0;
                        $newUser->is_admin = 0;
                        $newUser->is_premium = 0;
                        $newUser->auth_level = 0;
                        $newUser->save();

                        //$newToken = Str::random(32);
                        //while (EmailVerificationsTableModel::where('token', $newToken)->count() > 0) {
                        //    $newToken = Str::random(32);
                        //}
                        //$newEmailVerification = new EmailVerificationsTableModel;
                        //$newEmailVerification->user_id = $newUser->id;
                        //$newEmailVerification->token = $newToken;
                        //$newEmailVerification->save();

                        //Mail::send("Emails.test", ["verificationToken" => $newToken], function ($message) use ($request) {
                        //    $message->to($request->email, $request->username)->subject("Backlinksatisi.com E-posta Doğrulama");
                        //});

                        return redirect()->route('login');
                    }
                }
            }

        }
    }

    public function emailVerification($token)
    {
        $controlToken = EmailVerificationsTableModel::where('token', $token)->first();
        if (is_null($controlToken)) {
            return abort(404);
        } else {
            if ($controlToken->is_used == 1) {
                return redirect()->route('verification-result', ["status" => "false"]);
            } else {
                $getUser = UsersTableModel::find($controlToken->user_id);
                if ($getUser->is_activated == 0) {
                    $getUser->is_activated = 1;
                    $getUser->save();

                    $controlToken->is_used = 1;
                    $controlToken->save();

                    return redirect()->route('verification-result', ["status" => "true"]);
                }
            }
        }
    }

    public function verificationResult($status)
    {
        if ($status == "true") {
            $message = "Hesabınız Başarıyla Aktif Edilmiştir! Giriş Yapabilirsiniz.";
            return view('Emails.verificationResult',compact('message'));
        } elseif ($status == "false") {
            $message = "Bu E-posta Adresi Zaten Doğrulanmış! Giriş Sayfasını Kullanarak Sisteme Giriş Yapabilirsiniz.";
            return view('Emails.verificationResult',compact('message'));
        } else {
            return abort(404);
        }
    }

    public function resendVerificationForm()
    {
        return view();
    }

    public function resendVerification(Request $request)
    {
        if (is_null($request->email)) {

        } else {
            $getUser = UsersTableModel::where('email', $request->email)->first();
            $getVerificationToken = EmailVerificationsTableModel::where('user_id', $getUser->id)->first();
            if ($getVerificationToken->is_used == 0) {
                Mail::send("Emails.test", ["verificationToken" => $getVerificationToken->token], function ($message) use ($getUser) {
                    $message->to($getUser->email, $getUser->username)->subject("Backlinksatisi.com E-posta Doğrulama");
                });
            }
            return redirect()->route('login');
        }
    }
}
