<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPanelController extends Controller
{
    public function index()
    {
        $global_titles  = [
            'title'=>'Ecommerce Website',
            'description'=>'An Ecommerce Admin Panel'

        ];
            return view('AdminPanel.dashboard',$global_titles);

    }
}
