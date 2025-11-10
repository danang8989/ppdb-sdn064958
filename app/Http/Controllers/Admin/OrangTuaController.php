<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{CalonSiswa, OrangTua};
use Session;

class OrangTuaController extends Controller
{
    public function index(){
        $orang_tua = OrangTua::orderBy('id', 'desc')->limit(10);

        $orang_tua = $orang_tua->simplePaginate(15);
        
        return view('apps.admin.orang_tua.index')->with('orang_tua', $orang_tua);
    }
}
