<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers as MainBaseController;

abstract class AdminBaseController extends MainBaseController
{
    public function __constract(){
        $this->middleware('auth');
        $this->middleware('status');
    }
}
