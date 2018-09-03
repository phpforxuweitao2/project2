<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LayoutController extends Controller
{
    // 排版的设定列表页
    public function index()
    {
        return view('admin.layout.index');
    }
}
