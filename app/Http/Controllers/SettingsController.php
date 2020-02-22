<?php

namespace App\Http\Controllers;

use App\Helpers\General;
use App\Models\LandingSettingsTableModel;
use App\Models\LinksTableModel;
use App\Models\PurchasedLinksTableModel;
use App\Models\UserSitesTableModel;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function landingSettings()
    {
        $landingSettings = LandingSettingsTableModel::find(1);
        return view('Pages.Settings.landing-settings', compact('landingSettings'));
    }

    public function updateLandingSettings(Request $request)
    {
        if(is_null($request->title) || is_null($request->description) || is_null($request->keywords))
        {
            $errorMessage = "Eksik veya Hatalı Bilgiler Mevcut! Kontrol Ederek Tekrar Deneyin.";
            $landingSettings = LandingSettingsTableModel::find(1);
            return view('Pages.Settings.landing-settings', compact('landingSettings','errorMessage'));
        }else{
            $getSettings = LandingSettingsTableModel::find(1);
            $getSettings->title = $request->title;
            $getSettings->description = $request->description;
            $getSettings->keywords = $request->keywords;
            $getSettings->save();
            return redirect()->route('landing-settings');
        }
    }
}
