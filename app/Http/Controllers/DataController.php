<?php

namespace App\Http\Controllers;
use Validator,Redirect,Response;
use Illuminate\Http\Request;
use Session;
use DB;
Use App\User;
use App\Applicationall;



class DataController extends Controller
{
   public function showData(Request $request) {

        $products = Applicationall::where('manwork', '=', 'աշխատակից')->get();

        $user = User::where('group', '=', 'Ներտնային սպասարկող')->get();

        return view('tabelall', ['products'=>$products] , ['users'=>$user]);
    }


    public function updateinfo(Request $request) {
    	   echo $mane = $request->input('mane');
            $id = $request->input('id');

            $applicationall = Applicationall :: find($id);

            $applicationall->manwork = $request->get('mane');
          

            $applicationall->save();
         


        if(ucfirst(Auth()->user()->position) == "Ներտնային սպասարկման մասնագետ"){

             $products = Applicationall::where('manwork', '=', 'աշխատակից')->get();

        }else if(ucfirst(Auth()->user()->position) ==  "Ներտնային սպասարկման ավագ մասնագետ" )

        $products = Applicationall::where('manwork', '=', 'աշխատակից')->get();


        $user = User::where('group', '=', 'Ներտնային սպասարկող')->get();

        return view('tabelall', ['products'=>$products] , ['users'=>$user]);
    }






}
