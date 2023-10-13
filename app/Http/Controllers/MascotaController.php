<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mascota;

class MascotaController extends Controller
{
    public function index(){
        return Mascota::all();
    }
    public function store(Request $request){
        return Mascota::create($request->all());
    }
    public function update(Request $request,$id){
        $mascota = Mascota::find($id);
        return $mascota->update($request->all());
    }
    public function destroy($id){
        $mascota = Mascota::find($id);
        return $mascota->delete();
    }
}
