<?php

namespace App\Http\Controllers;

use App\Models\m_actor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class tampilanController extends Controller
{
    public function viewIndex(){

        $data = m_actor::orderBy('last_update','DESC')->paginate(10);

        return view('index',compact('data'));
    }

    public function viewMaster(){
        $data = m_actor::on('pgsql-master')->select('*')->orderBy('last_update','DESC')->paginate(10);

        return view('indexmaster',compact('data'));
    }

    public function viewSlave01(){
        $data = m_actor::on('pgsql-slave01')->select('*')->orderBy('last_update','DESC')->paginate(10);

        return view('indexslave01',compact('data'));
    }

    public function viewTambah(){

        return view('tambahdata');
    }

    public function tambah(Request $request){

        DB::transaction(function ($request) use ($request) {
            $insert = new m_actor();
            $insert->first_name = $request->first_name;
            $insert->last_name = $request->last_name;
            $insert->save();
        });

        redirect('/master');
    }
}
