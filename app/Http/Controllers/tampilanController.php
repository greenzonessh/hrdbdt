<?php

namespace App\Http\Controllers;

use App\Models\m_actor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class tampilanController extends Controller
{
    public function viewIndex(){

        $data = m_actor::on('write')->orderBy('last_update','ASC')->get();

        return view('index',compact('data'));
    }
}
