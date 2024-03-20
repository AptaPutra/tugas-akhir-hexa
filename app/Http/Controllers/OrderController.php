<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;

use App\Models\Order;
use App\Models\merk;

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
             'name' => 'required',
             'vehicle' => 'required',
             'merk' => 'required',
             'option' => 'required',
            
            
            ]);
            // dd($params);
             if ($orders = Order::create($params)) {
     
                 return redirect('order')->with('success', 'Added!');

                
         }
     }

     public function destroy(string $id): RedirectResponse
     {
        $orders = Order::findOrFail($id);
 
         if ($orders->delete()) {
             return redirect(route('order'))->with('success', 'Deleted!');
         }
 
         return redirect(route('order'))->with('error', 'Sorry, unable to delete this!');
     }
 
    
     
    
   
    }
