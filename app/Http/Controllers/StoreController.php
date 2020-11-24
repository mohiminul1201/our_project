<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customerinfo;
class StoreController extends Controller
{
    public function customer(){
    	return view('store.pages.customer');
    }

    		// add
    public function add(Request $req){
    	   $validatedData = $req->validate([
        'secrial_number' => 'required|max:50',
        'cus_name' => 'required',
        
    ]);
    	$secrial_number =$req->secrial_number;
    	$cus_name =$req->cus_name;


    	$obj = new Customerinfo();

    	$obj->secrial_number = $secrial_number;
    	$obj->cus_name = $cus_name;
    	if($obj -> save()){
    	// echo 'inserted successfully';
    		return redirect('store/customer')->with('inserted','inserted successfully');
    }


    }





    public function purchase(){
    	return view('store.pages.purchase');
    }

    		// purchase



    public function sales(){
    	return view('store.pages.sales');
    }
    public function inventory(){
    	return view('store.pages.inventory');
    }
    public function supplier(){
    	return view('store.pages.supplier');
    }

            // suplier add
    public function sup_add(Request $req){
    	   $validatedData = $req->validate([
        'secrial_number' => 'required|max:50',
        'sup_name' => 'required',
        
    ]);
    	$secrial_number =$req->secrial_number;
    	$sup_name =$req->sup_name;


    	$obj = new Customerinfo();

    	$obj->secrial_number = $secrial_number;
    	$obj->sup_name = $sup_name;
    	if($obj -> save()){
    	// echo 'inserted successfully';
    		return redirect('store/customer')->with('inserted','inserted successfully');
    }


    }

}
