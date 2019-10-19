<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\classicmodels;
//use App\employees;
use DB;
class ControllerSystem extends Controller
{
    //
    public function showData(){
        //$orders = order::all();
        $data = DB::table('orders')
        ->join('customers','orders.customerNumber','=','customers.customerNumber')
        ->select('orders.orderNumber','orders.orderDate','orders.requiredDate','orders.shippedDate','orders.status'
        ,'orders.comments','customers.customerNumber','customers.contactLastName','customers.contactFirstName')
        ->orderby(orders.orderNumber)
        ->get();
        //$employees = employees::all();
        return view('Order_index',compact('data'));
    }

}
