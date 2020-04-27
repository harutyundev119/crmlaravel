<?php

namespace App\Http\Controllers;
Use App\Applicationall;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function viewApplication($id)
    {   
     

        $applications = Applicationall::where('id','=',$id)->get();

        return view('applicationdetail', ['applications'=>$applications]);
    }
}
