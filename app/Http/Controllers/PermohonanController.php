<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Permohonan;

class PermohonanController extends Controller
{
    function index (){
        // $data['list_permohonan'] = permohonan::all();
        return view('pengguna_jasa.permohonan.index',);
    }
}
