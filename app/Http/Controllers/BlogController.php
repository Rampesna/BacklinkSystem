<?php

namespace App\Http\Controllers;

use App\Helpers\General;
use App\Models\BlogTableModel;
use App\Models\LinksTableModel;
use App\Models\PurchasedLinksTableModel;
use App\Models\UserSitesTableModel;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index()
    {
        $allPosts = BlogTableModel::all();
        return view('Blog.Pages.index', compact('allPosts'));
    }

    public function post($id)
    {

    }

    public function search($keyword, $page = 1)
    {

    }

}
