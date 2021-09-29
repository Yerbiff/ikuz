<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\New_order;

class NeworderController extends Controller
{
    function newOrder(Request $req)
    {
        $new_order = new New_order;
        $new_order->user_id = $req->user_id;
        $new_order->animal_id = 1337;
        $new_order->time = $req->time;
        $new_order->animal = $req->animal;
        $new_order->info = $req->info;
        $new_order->save();
        return redirect('zlecenia');
    }
    function getOrder()
    {
        $data = New_order::all();
        return view('zlecenia', ['new_orders'=>$data]);
    }
    function delete($id)
    {
        $data = New_order::find($id);
        $data-> delete();
        return redirect('zlecenia');
    }
//    function edit($id)
//    {
//        $data = New_order::find($id);
//        return view('edit', ['new_orders'=>$data]);
//    }



}
