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

class BlogController extends Controller
{

    public function index($page = 1)
    {
        $categories = BlogCategoriesTableModel::all();
        $countControl = BlogTableModel::all()->count();
        if (($countControl <= (($page - 1) * 10)) && $countControl > 0) {
            return redirect()->route('blog.index', 1);
        } else {
            if (is_null($page) || $page == 1) {
                $allPosts = BlogTableModel::orderBy('updated_at', 'DESC')->limit(10)->get();
            } else {
                $allPosts = BlogTableModel::skip(($page - 1) * 10)->take(10)->orderBy('updated_at', 'DESC')->get();
            }
            $allPostsCount = BlogTableModel::all()->count();
            return view('Blog.Pages.index', compact(
                'allPosts',
                'allPostsCount',
                'categories',
                'page'
            ));
        }
    }

    public function single($id)
    {
        $post = BlogTableModel::find($id);
        if(is_null($post)){
            return redirect()->route('blog.index');
        }else{
            $post->views = $post->views + 1;
            $post->save();
            $tags = explode(',', $post->seo_keywords);
            $randoms = BlogTableModel::all()->random(2);
            $postComments = BlogCommentsTableModel::where('post_id', $post->id)->where('status', 1)->get();
            return view('Blog.Pages.post', compact('post', 'tags', 'randoms', 'postComments'));
        }
    }

    public function search(Request $request)
    {
        $page = 1;
        $keyword = $request->keyword;
        $categories = BlogCategoriesTableModel::all();
        $allPosts = BlogTableModel::
        where('title', 'like', '%' . $request->keyword . '%')->
        orWhere('content', 'like', '%' . $request->keyword . '%')->
        orderBy('updated_at', 'DESC')->limit(10)->
        get();
        $allPostsCount = count($allPosts);
        if ($allPostsCount == 0) {
            return redirect()->route('blog.index');
        } else {
            return view('Blog.Pages.search', compact(
                'allPosts',
                'allPostsCount',
                'categories',
                'page',
                'keyword'
            ));
        }
    }

    public function searchKeyword($keyword, $page = 1)
    {
        $categories = BlogCategoriesTableModel::all();
        $allPosts = BlogTableModel::
        where('title', 'like', '%' . $keyword . '%')->
        orWhere('content', 'like', '%' . $keyword . '%')->
        orderBy('updated_at', 'DESC')->limit(10)->
        get();
        $allPostsCount = count($allPosts);
        if ($allPostsCount == 0) {
            return redirect()->route('blog.index');
        } else if (($allPostsCount <= (($page - 1) * 10)) && $allPostsCount > 0) {
            return redirect()->route('keyword', [$keyword, 1]);
        }
        return view('Blog.Pages.search', compact(
            'allPosts',
            'allPostsCount',
            'categories',
            'page',
            'keyword'
        ));
    }

    public function submitComment(Request $request)
    {
        $post = BlogTableModel::find($request->post_id);
        $ip_address = General::getIpAddress();
        $control = BlogCommentsTableModel::where('post_id', $request->post_id)->where('ip_address', $ip_address)->where('email', $request->comment_email)->first();
        if (is_null($control)) {
            $newComment = new BlogCommentsTableModel;
            $newComment->post_id = $request->post_id;
            $newComment->name_surname = $request->comment_name_surname;
            $newComment->email = $request->comment_email;
            $newComment->content = $request->comment_content;
            $newComment->ip_address = $ip_address;
            $newComment->status = 0;
            $newComment->save();
            return redirect()->route('blog.single', [$post->id, \App\Helpers\General::trimUrl($post->title)]);
        }
    }

}
