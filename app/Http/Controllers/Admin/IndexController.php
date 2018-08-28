<?php
/*  User: tao    Date: 2018/8/23   Time: 22:33  */


namespace App\Http\Controllers\Admin;
use Hash;


class IndexController
{

    public function index() {

        return view('admin.index.index',[
            'menu_index'    => 'active',

        ]);

    }
}
