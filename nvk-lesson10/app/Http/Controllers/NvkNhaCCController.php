<?php

namespace App\Http\Controllers;

use App\Models\NvkNhaCC;    
use Illuminate\Http\Request;

class NvkNhaCCController extends Controller
{
    //lay du lieu tu db thong qua ORM
    public function list(){
        //$nvkNhaCCs = NvkNhaCC::all();
        $nvkNhaCCs = NvkNhaCC::paginate(15);
        return view('NvkNhaCC.List',['nvkNhaCCs'=>$nvkNhaCCs]);
    }
}
