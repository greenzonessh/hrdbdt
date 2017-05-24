<?php

namespace App\Http\Controllers;

use App\Models\m_actor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class tampilanController extends Controller
{
    public function viewIndex(){

        $data = DB::connection('read')->orderBy('last_update','ASC')->get();

        return view('index',compact('data'));
    }
}
