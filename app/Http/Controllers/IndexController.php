<?php

namespace App\Http\Controllers;
use Validator,Redirect,Response;
use Illuminate\Http\Request;
use Session;
use DB;
Use App\User;
Use App\Օtherquestions;
use App\Applicationall;
use App\Newsubscriber;

class IndexController extends Controller
{
 
     public function showIndex(){
        return view('index');
    }

    public function insertdate(Request $request){
              $state = $request->input('state');
              $region = $request->input('region');
              $street = $request->input('street');
              $apartment = $request->input('apartment');
              $phone = $request->input('phone');
              $meknabanutyun = $request->input('meknabanutyun');
              $date = date("Y.m.d h:i:sa");
              $mane=ucfirst(Auth()->user()->name);
              $shenq=$request->input('shenq');
        $data=array('problemothercomment'=>'test',
                    'status'=>'Նոր հայտ',
                    'group'=>'Ներտնային սպասարկեող',
                    'manwork'=>'անայտաշխատակից',
                    'comment'=>'test',
                    'phone'=>$phone,
                    'apartment'=>$apartment,
                    'userid'=>'test',
                    'region'=>$region,
                    'street'=>$street,
                    'adddate'=>$date,
                    'state'=>$state,
                    'cratmane'=>$mane,
                    'problem'=>$meknabanutyun, 
                    'building'=>$shenq);
        print_r($data);

         DB::table('applicationalls')->insert($data);
        

         $products = Applicationall::all();
        return redirect()->intended('date');

         // return view('tabel', ['products'=>$products]);
      
    }


    public function updatedate(Request $request){
            $id = $request->input('id');
            // echo $comment2 = $request->input('comment');
            $comment2 = $request->input('comment');
            $comment1 = $request->input('comments');
            $status = $request->input('status');
            echo $username = $request->input('username');
            $date=date("Y.m.d h:i:sa");
            $comment = $comment1." ".$comment2."  ".$username." ".$date." ## ";
            //         $data=array('id'=>$id,
            // 'comment'=>$comment,
            // 'status'=>$status);

        $applicationall = Applicationall :: find($id);

         $applicationall->comment = $comment;
         $applicationall->status = $request->get('status');

         $applicationall->save();
        // DB::table('applicationalls')
        // ->where('id', $id)  // find your user by their email
        // ->limit(1)  // optional - to ensure only one record is updated.
        // ->update($data);
        // print_r($data);

        //  DB::table('applicationalls')->insert($data);
         // echo "Record inserted successfully.<br/>";
         // echo '<a href = "/dashboard">Click Here</a> to go back.';
         $products = Applicationall::all();

         return view('tabel', ['products'=>$products]);
      
    }

    public function showData(Request $request) {
       $pashton = ucfirst(Auth()->user()->group);
       $name =  ucfirst(Auth()->user()->name);

        if($pashton == "Ներտնային սպասարկման մասնագետ"){

             $products = Applicationall::where('manwork', '=', $name)->get();

        }

         if($pashton ==  "Ներտնային սպասարկման ավագ մասնագետ" ){
             $products = Applicationall::all();
         }else {
           $products = Applicationall::all();
         }
 

        return view('tabel', ['products'=>$products]);
    }


     public function showDateall(Request $request) {
       $pashton = ucfirst(Auth()->user()->group);
       $name =  ucfirst(Auth()->user()->name);

        if($pashton == "Ներտնային սպասարկման մասնագետ"){

             $products = Applicationall::where('manwork', '=', $name)->get();

        }

         if($pashton ==  "Ներտնային սպասարկման ավագ մասնագետ" ){
             $products = Applicationall::all();
         }else {
           $products = Applicationall::all();
         }
 

        return view('tabel', ['products'=>$products]);
    }

    public function insertotherquestions(Request $request) {
     
              $name = $request->input('name');
              $campnineam = $request->input('campnineam');
              $whoproblem = $request->input('whoproblem');
              $date = date("Y.m.d h:i:sa");

              $mane=ucfirst(Auth()->user()->name);
              $whom=$request->input('whom');


        $data=array('name'=>$name,
                    'status'=>'Նոր հայտ',
                    'campnineam'=>$campnineam,
                    'whoproblem'=>$whoproblem,
                    'whom'=>$whom,
                    'registrar'=>$mane,
                    'status'=>'նոր նամակ',
                    'date'=>$date,);

         DB::table('օtherquestions')->insert($data);

        return redirect()->intended('dashboard');

    }
    public function showօtherquestions(Request $request) {
     
            $infos = Օtherquestions::all();


           
            return view('otherquestions', ['infos'=>$infos]);
        
    }

     public function insertnewavailable(Request $request){
              $state = $request->input('state');
              $region = $request->input('region');
              $street = $request->input('street');
              $apartment = $request->input('apartment');
              $phone = $request->input('phone');
              $meknabanutyun = $request->input('meknabanutyun');
              $date = date("Y.m.d h:i:sa");
              $mane=ucfirst(Auth()->user()->name);
              $shenq=$request->input('shenq');
              $available=$request->input('available');
        $data=array('problemothercomment'=>'test',
                    'status'=>'Նոր Բաժանորդ',
                    'group'=>'Ներտնային սպասարկեող',
                    'manwork'=>'անայտաշխատակից',
                    'comment'=>'test',
                    'phone'=>$phone,
                    'apartment'=>$apartment,
                    'userid'=>'test',
                    'region'=>$region,
                    'street'=>$street,
                    'adddate'=>$date,
                    'state'=>$state,
                    'cratmane'=>$mane,
                    'problem'=>$meknabanutyun, 
                    'building'=>$shenq,
                    'available'=> $available);
        print_r($data);

         DB::table('Newsubscriber')->insert($data);
        

         
        return redirect()->intended('date');

         // return view('tabel', ['products'=>$products]);
      
    }

}
