<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;

use App\Models\Order;

class OrderController extends Controller
{
    public function index(): Response
    {
        $orders = Order::all();

        return response(view('OrderFolder.order', ['orders' => $orders]));
    }

    public function create(): Response
    {
        return response(view('OrderFolder.ordercreate'));
    }

    public function order(Request $request)
     {
         
         $params =  $request->validate([
             'sku' => 'required|unique:order|max:255',
             'name' => 'required',
            ]);
            // dd($params);
             if ($orders = Order::create($params)) {
     
                 return redirect('order')->with('success', 'Added!');
         }
     }


 
    
     
    
   
    }
