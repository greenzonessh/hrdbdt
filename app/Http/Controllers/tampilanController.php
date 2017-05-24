<?php

namespace App\Http\Controllers;

use App\Models\m_actor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class tampilanController extends Controller
{
    public function viewIndex(){

        $data = m_actor::paginate(10);

        return view('index',compact('data'));
    }
}
