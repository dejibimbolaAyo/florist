<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    //
    public function index()
    {
        # code...
        return view('dashboard.admin.orders');
    }

    public function getOrders()
    {
        # code...
    }

    public function postOrder(Request $request, $product_id = null)
    {
        # code...
        if ($product_id == null) {
            return false;
        }
        $product = Product::find($product_id);
        $user = Auth::user();
        $order = Order::create([
            'user_id' => $user->id,
            'product_id' => $product_id,
            'remarks' => ''
        ]);

        $request->session()->flash('alert-success', "Order for ". $product->name . " placed successfully");
        return redirect('user/products');
    }

    public function findOrderById($orderId = null)
    {
        # code...
        if($orderId == null) return false;
    }

    public function updateOrder($orderId = null)
    {
        # code...
        if($orderId == null) return false;

    }

    public function deleteOrder($orderId = null)
    {
        # code...
        if($orderId == null) return false;

    }
}
