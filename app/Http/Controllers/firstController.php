<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Illuminate\Routing\Redirector;
use Redirect;
use App\BISModel;
use View;
use link;
use Illuminate\Support\Facades\Input;
//use Illuminate\Support\Facades\Redirect;
use Image;
use Illuminate\Support\Collection;
use Illuminate\Pagination\Paginator;
use Session;
class firstController extends Controller
{
        function insert(Request $req){
         $username=$req->input('firstname');
         $email=$req->input('email');
         $phone=$req->input('phone');
         $userpass=$req->input('userpass');
         $date=$req->input('date');
         //$gender=$req->input('gender');
         $images=$req->input('imageup');
         //$address=$req->input('address');
         $religion=$req->input('Religion');
                	$rak=array(
        		'User_name'=>$username,
        		'E_mail'=>$email,
        		'Mobile_number'=>$phone,
        		'Password'=>md5($userpass),
        		'Date'=>$date,
                'Images'=>$images,
        		'Religion'=>$religion
        	);
        $reg=DB::table('for_login')->insert($rak);
        if($reg==true){
            session()->flash('message6','Successfully Registered!Login HERE');
            return view('frontEnd.signin');

        	//echo "Successfully registered";
        }
            else{
                    session()->flash('message7','There Was Problem To SignUp');
                    return view('frontEnd.signup');
            }
    }
    function check(Request $req){
    	$email=$req->input('username');
    	$pass=$req->input('password');
    	$login=DB::table('for_login')->where(['E_mail'=>$email, 'Password'=>md5($pass)])->get();
    	if(count($login)>0){
            session_start();
            $_SESSION['pass']=$email;
           return view('frontEnd.Home');
    		//echo "<center><h1>Welcome $email</h1></center>";
    	}else{
    		return view('frontEnd.signin');
    	}

    }
    function search_details(Request $req){

        $item=$req->input('customerid');
        if(is_numeric($item))
        {
        $searcheddata=DB::table('store_info')->select('C_ID','C_name','Date','Description','Paid','Dues','Image')->where(['C_ID'=>$item])->get();
        if (count($searcheddata)>='1') {
            # code...
            return view('frontEnd.search_welcome',['searcheddata'=>$searcheddata]);
            /*if(isset('editinfo')){
                    return view('frontEnd.BIS_edit',['searcheddata'=>$searcheddata]);
            }*/
        }else{
            session()->flash('message4','No Record Found!TRY AGAIN');
            return view('frontEnd.Search');
        }
        
        }
        else if(is_string($item))
        {
        $searcheddata=DB::table('store_info')->select('C_ID','C_name','Date','Description','Paid','Dues','Image')->where(['C_name'=>$item])->get();
        if (count($searcheddata)>='1'){
            return view('frontEnd.search_welcome',['searcheddata'=>$searcheddata]);
        }else{
            session()->flash('message4','No Record Found!TRY AGAIN');
            return view('frontEnd.Search');
        }

        }
        else
        {
            session()->flash('message5','NOT FOUND!Make Sure Your Input is Valid Then Try Again');
            return view('frontEnd.Search');
        }

    }

    function data(Request $req){

        $data=DB::table('store_info')->select('Paid')->sum('Paid');
        $data1=DB::table('store_info')->select('Dues')->sum('Dues');
        session()->flash('paid',$data);
        session()->flash('dues',$data1);
        $all=DB::table('store_info')->paginate(6);
        return view('frontEnd.Profile',['all'=>$all])->render();
        #$array=array($data,$data1);
        #return $array;
        //$data=array($data);

        //return view('frontEnd.Profile',['data'=>$data]);

        /*if (count($data[0])>0) {
            return view('frontEnd.Data',['data'=>$data]);
        }
        else{
            echo "Sorry!!!Data Could Not Found";
        }*/
    }

    function add_details(Request $req){
        $customername=$req->input('customername');
        $date=$req->input('date');
        $description=$req->input('description');
        $paid=$req->input('paid');
        $dues=$req->input('dues');
        $image=$req->input('image');
        $rak=array(
                'C_name'=>$customername,
                'Date'=>$date,
                'Description'=>$description,
                'Paid'=>$paid,
                'Dues'=>$dues,
                'Image'=>$image
            );
        $reg=DB::table('store_info')->insert($rak);
        
        if($reg==true){
            session()->flash('message','Successfully Save Customer Details');
            return view('frontEnd.BIS_add');
            //flash('Successfully Stored!!!')->success();
            //return Home();
        }else{
            session()->flash('message1','There was problem to save!TRY AGAIN');
            return view('frontEnd.BIS_add');
        }

    }
    function delete_details(Request $req){
        $cid=$req->input('customerid');
        $del=DB::delete('delete from store_info where C_ID = ?',[$cid]);
        //$rowsnum=mysqli_affected_rows($del);
        if($del==true){
            session()->flash('message2','Successfully Deleted Record!');
            return view('frontEnd.BIS_delete');
        }else{
            session()->flash('message3','There Was Problem To Delete!TRY AGAIN');
            return view('frontEnd.BIS_delete');
        }
    }
    function edit(Request $req){
        
         $cid=$req->input('cid');
         $cname=$req->input('cname');
         $date=$req->input('date');
         $description=$req->input('description');
         $paid=$req->input('paid');
         $dues=$req->input('dues');
         $edit=DB::update('UPDATE store_info SET C_name=?,Date=?,Description=?,Paid=?,Dues=? WHERE C_ID=?',[$cname,$date,$description,$paid,$dues,$cid]);
         if ($edit==true) {
             session()->flash('editmessage','Records Updated Successfully!');
             return view('frontEnd.Search');
         }else{
             session()->flash('editmessage1','Unsuccessful To Update!');
             return view('frontEnd.Search');
         }
    }


    //
}
