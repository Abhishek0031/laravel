<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use App\Models\State;
use Illuminate\Http\Request;

class DropDownController extends Controller
{

    public function index(Country $country){
        $data=$country->all();
        return view('dropeDown',compact('data'));
    }

    function state($cid){
        $data=State::where(['ctr_id'=>$cid])->get();
        echo json_encode($data);
    }

    function city($sid,$cid){
         if($sid==0){
            $sid=5;
        }
        
        $data=City::where(['state_id'=>$cid,'ctry_id'=>$sid])->get();
        echo json_encode($data);
    }


    public function diaplay(){
       $view= City::paginate(10);
       return view('dropeDown',compact('view'));
    }
}
