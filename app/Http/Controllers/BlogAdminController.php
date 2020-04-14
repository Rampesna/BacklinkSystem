<?php

namespace App\Http\Controllers;

use App\Helpers\General;
use App\Models\BlogCategoriesTableModel;
use App\Models\BlogCommentsTableModel;
use App\Models\BlogTableModel;
use App\Models\LinksTableModel;
use App\Models\PurchasedLinksTableModel;
use App\Models\UserSitesTableModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class BlogAdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($page = 1)
    {
        $countControl = BlogTableModel::all()->count();
        if (($countControl <= (($page - 1) * 10)) && $countControl > 0) {
            return redirect()->route('all-posts', 1);
        } else {
            if (is_null($page) || $page == 1) {
                $allPosts = BlogTableModel::orderBy('updated_at', 'DESC')->limit(10)->get();

            } else {
                $allPosts = BlogTableModel::skip(($page - 1) * 10)->take(10)->orderBy('updated_at', 'DESC')->get();
            }
            $allPostsCount = BlogTableModel::all()->count();
            return view('Pages.Blog.index', compact(
                'allPosts',
                'allPostsCount',
                'page'
            ));
        }
    }

    public function addPostForm()
    {
        $categories = BlogCategoriesTableModel::all();
        return view('Pages.Blog.add-post', compact('categories'));
    }

    public function addPost(Request $request)
    {
        if (
            is_null($request->news_title) ||
            is_null($request->news_content) ||
            is_null($request->news_description) ||
            is_null($request->news_keywords) ||
            is_null($request->news_image) ||
            is_null($request->news_categories)
        ) {
            $errorMessage = "Eksik Alanlar Mevcut! Lütfen Kontrol Ederek Tekrar Deneyin";
            $categories = BlogCategoriesTableModel::all();
            return view('Pages.Blog.add-post', compact('categories', 'errorMessage'));
        } else {
            $newPost = new BlogTableModel;
            $newPost->title = $request->news_title;
            $newPost->content = $request->news_content;
            $newPost->seo_description = $request->news_description;
            $newPost->seo_keywords = $request->news_keywords;
            $categoryString = "";
            $counter = 0;
            foreach ($request->news_categories as $category) {
                if ($counter == 0) {
                    $categoryString .= $category;
                } else {
                    $categoryString .= "," . $category;
                }
                $counter += 1;
            }
            $newPost->categories = $categoryString;
            if (!is_null($request->file('news_image'))) {
                $imageMimeType = $request->file('news_image')->getClientMimeType();
                if (
                    $imageMimeType == "image/jpeg" ||
                    $imageMimeType == "image/png"
                ) {
                    $imageName = strtotime(date("YmdHis")) . '.' . $request->file('news_image')->getClientOriginalExtension();
                    request()->news_image->move(base_path('assets-landing/blog/images/'), $imageName);
                    $newPost->image = 'assets-landing/blog/images/' . $imageName;
                } else {
                    $errorMessage = "Sadece 'PNG' ve 'JPG' Türünde Dosya Yüklenebilir! Lütfen Kontrol Ederek Tekrar Deneyin";
                    $categories = BlogCategoriesTableModel::all();
                    return view('Pages.Blog.add-post', compact('categories', 'errorMessage'));
                }
            }
            $newPost->save();
            return redirect()->route('all-posts');
        }
    }

    public function editPost($id)
    {
        try {
            $id = Crypt::decrypt($id);
            $post = BlogTableModel::find($id);
            $categories = BlogCategoriesTableModel::all();
            $postCategories = explode(',', $post->categories);
            return view('Pages.Blog.edit-post', compact('post', 'categories', 'postCategories'));
        } catch (\Exception $e) {
            return abort(404);
        }
    }

    public function updatePost(Request $request)
    {
        $post = BlogTableModel::find($request->id);
        if (
            is_null($request->news_title) ||
            is_null($request->news_content) ||
            is_null($request->news_description) ||
            is_null($request->news_keywords) ||
            is_null($request->news_categories)
        ) {
            $errorMessage = "Eksik Alanlar Mevcut! Lütfen Kontrol Ederek Tekrar Deneyin";
            $categories = BlogCategoriesTableModel::all();
            $postCategories = explode(',', $post->categories);
            return view('Pages.Blog.edit-post', compact('post', 'categories', 'postCategories', 'errorMessage'));
        } else {
            $post->title = $request->news_title;
            $post->content = $request->news_content;
            $post->seo_description = $request->news_description;
            $post->seo_keywords = $request->news_keywords;
            $categoryString = "";
            $counter = 0;
            foreach ($request->news_categories as $category) {
                if ($counter == 0) {
                    $categoryString .= $category;
                } else {
                    $categoryString .= "," . $category;
                }
                $counter += 1;
            }
            $post->categories = $categoryString;
            if (!is_null($request->file('news_image'))) {
                $imageMimeType = $request->file('news_image')->getClientMimeType();
                if (
                    $imageMimeType == "image/jpeg" ||
                    $imageMimeType == "image/png"
                ) {
                    $imageName = strtotime(date("YmdHis")) . '.' . $request->file('news_image')->getClientOriginalExtension();
                    request()->news_image->move(base_path('assets-landing/blog/images/'), $imageName);
                    $post->image = 'assets-landing/blog/images/' . $imageName;
                } else {
                    $errorMessage = "Sadece 'PNG' ve 'JPG' Türünde Dosya Yüklenebilir! Lütfen Kontrol Ederek Tekrar Deneyin";
                    $categories = BlogCategoriesTableModel::all();
                    $postCategories = explode(',', $post->categories);
                    return view('Pages.Blog.edit-post', compact('post', 'categories', 'postCategories', 'errorMessage'));
                }
            }
            $post->save();
            return redirect()->route('all-posts');
        }
    }

    public function deletePost($id)
    {
        try {
            $id = Crypt::decrypt($id);
            BlogTableModel::where('id', $id)->delete();
            return redirect()->route('all-posts');
        } catch (\Exception $e) {
            return abort(404);
        }
    }

    public function categories($page = 1)
    {
        $countControl = BlogCategoriesTableModel::all()->count();
        if (($countControl <= (($page - 1) * 10)) && $countControl > 0) {
            return redirect()->route('all-posts', 1);
        } else {
            if (is_null($page) || $page == 1) {
                $allCategories = BlogCategoriesTableModel::orderBy('name', 'DESC')->limit(10)->get();

            } else {
                $allCategories = BlogCategoriesTableModel::skip(($page - 1) * 10)->take(10)->orderBy('name', 'DESC')->get();
            }
            $allCategoriesCount = BlogCategoriesTableModel::all()->count();
            return view('Pages.Blog.categories', compact(
                'allCategories',
                'allCategoriesCount',
                'page'
            ));
        }
    }

    public function addCategoryForm()
    {
        return view('Pages.Blog.category');
    }

    public function addCategory(Request $request)
    {
        if (
        is_null($request->category_name)
        ) {
            $errorMessage = "Eksik Alanlar Mevcut! Lütfen Kontrol Ederek Tekrar Deneyin";
            return view('Pages.Blog.add-category', compact('errorMessage'));
        } else {
            $newCategory = new BlogCategoriesTableModel;
            $newCategory->name = $request->category_name;
            $newCategory->save();
            return redirect()->route('all-categories');
        }
    }

    public function editCategory($id)
    {
        try {
            $id = Crypt::decrypt($id);
            $category = BlogCategoriesTableModel::find($id);
            return view('Pages.Blog.category', compact('category'));
        } catch (\Exception $e) {
            return abort(404);
        }
    }

    public function updateCategory(Request $request)
    {
        $category = BlogCategoriesTableModel::find($request->category_id);
        if (
        is_null($request->category_name)
        ) {
            $errorMessage = "Eksik Alanlar Mevcut! Lütfen Kontrol Ederek Tekrar Deneyin";
            return view('Pages.Blog.category', compact('category', 'errorMessage'));
        } else {
            $category->name = $request->category_name;
            $category->save();
            return redirect()->route('all-categories');
        }
    }

    public function deleteCategory($id)
    {
        try {
            $id = Crypt::decrypt($id);
            BlogCategoriesTableModel::where('id', $id)->delete();
            return redirect()->route('all-categories');
        } catch (\Exception $e) {
            return abort(404);
        }
    }

    public function waitingComments($page = 1)
    {
        $countControl = BlogCommentsTableModel::where('status', 0)->count();
        if (($countControl <= (($page - 1) * 10)) && $countControl > 0) {
            return redirect()->route('waiting-comments', 1);
        } else {
            if (is_null($page) || $page == 1) {
                $allComments = BlogCommentsTableModel::where('status', 0)->orderBy('created_at', 'DESC')->limit(10)->get();
            } else {
                $allComments = BlogCommentsTableModel::where('status', 0)->skip(($page - 1) * 10)->take(10)->orderBy('created_at', 'DESC')->get();
            }
            $allCommentsCount = count($allComments);
            return view('Pages.Blog.comments', compact(
                'allComments',
                'allCommentsCount',
                'page'
            ));
        }
    }

    public function confirmComment(Request $request)
    {
        $comment = BlogCommentsTableModel::find($request->comment_id);
        $comment->status = 1;
        $comment->content = $request->edited_comment;
        $comment->save();
        return redirect()->route('waiting-comments', 1);
    }

    public function deleteComment($id)
    {
        try {
            $id = Crypt::decrypt($id);
            BlogCommentsTableModel::where('id',$id)->delete();
            return redirect()->route('waiting-comments', 1);
        }catch (\Exception $e){
            return abort(404);
        }
    }
}
