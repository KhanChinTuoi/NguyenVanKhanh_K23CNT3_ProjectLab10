<?php

namespace App\Http\Controllers;

use App\Models\NvkVattu;    
use Illuminate\Http\Request;

class NvkVattuController extends Controller
{
    //
    public function list(){
        //$nvkNhaCCs = NvkNhaCC::all();
        $nvkVattus = NvkVattu::paginate(15);
        return view('NvkVattu.List',['nvkVattus'=>$nvkVattus]);
    }
}
