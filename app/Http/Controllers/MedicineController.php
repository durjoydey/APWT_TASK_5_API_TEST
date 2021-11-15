<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Medicine;

class MedicineController extends Controller
{
    //
    public function create(){
        return view('pages.medicine.create');
    }
    public function createSubmit(Request $request){
        $var = new Medicine();
        $var->m_name = $request->m_name;
        $var->man_date = $request->man_date;
        $var->ex_date = $request->ex_date;
        $var->m_category = $request->m_category;
        $var->stock = $request->stock;
        $var->save();
        return "Added";

    }
    public function list(){

        $medicines = Medicine::all();
        return view('pages.medicine.list')->with('medicines',$medicines);
    }

    public function APIList(){
        return Medicine::all();
    }
    public function APIPost(Request $req){
        $var = new Medicine();
       
        $var->m_name= $request->m_name;
        $var->man_date = $request->man_date;
        $var->ex_date= $request->ex_date;
        $var->m_category = $request->m_category;
        $var->stock= $request->stock;
        $var->save();

        return $req;
    }
  
}