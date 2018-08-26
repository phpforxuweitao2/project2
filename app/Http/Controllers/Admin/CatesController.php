<?php
/*  User: tao    Date: 2018/8/26   Time: 15:02  */


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class CatesController extends Controller
{
    public function index() {
        return view('admin.cates.index');
    }
}