<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    /**
     * 首页
     *
     * @author 刘富胜
     */
    public function home()
    {
        return view('static_pages/home');
    }

    /**
     * 帮助页
     *
     * @author 刘富胜
     */
    public function help()
    {
        return view('static_pages/help');
    }

    /**
     * 关于页
     *
     * @author 刘富胜
     */
    public function about()
    {
        return view('static_pages/about');
    }
}


