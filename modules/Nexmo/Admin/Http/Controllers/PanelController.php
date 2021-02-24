<?php

namespace Nexmo\Admin\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PanelController extends Controller
{


    public function index()
    {
        return view('Admin::admin.layout.master');
    }
}
