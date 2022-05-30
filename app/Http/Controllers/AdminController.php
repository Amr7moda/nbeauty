<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin()
    {
        $orders = Order::get();
        $orders = $orders->transform(function ($cart, $key) {
            return unserialize($cart->cart_data);
        });
        $ord = Order::get();
        return view('admin.admin', compact('ord', 'orders'));
    }


    public function adminstore(Request $request)
    {

        $id = $request->id;
        $status = $request->status;
        Order::where('id', $id)->update(array('status' => $status));

        return redirect(route('admin.orders'));
    }
}
