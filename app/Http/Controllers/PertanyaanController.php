<?php

namespace App\Http\Controllers;

use App\Models\Pertanyaan;
use Illuminate\Http\Request;

class PertanyaanController extends Controller
{
    public function index(){
        $pertanyaan = Pertanyaan::all();
        return view('pertanyaan',compact('pertanyaan'));
    }
}
