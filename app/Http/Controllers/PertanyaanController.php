<?php

namespace App\Http\Controllers;

use App\Models\Pertanyaan;
use Illuminate\Http\Request;

class PertanyaanController extends Controller
{
     /**
     * index
     *
     * @return void
     */
    public function index($test_id){
        $pertanyaan = Pertanyaan::latest();
        $pertanyaan = Pertanyaan::where('test_id',$test_id)->get();
        return view('pertanyaan1', compact('pertanyaan'));
    }
}
