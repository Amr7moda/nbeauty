<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PagesController extends Controller
{
    public function cart()
    {
        return view('web.cart');
    }

    public function checkout()
    {
        return view('web.checkout');
    }

    public function home(Request $request)
    {
        if (session('success')) {
            toast(session('success'), 'success');
        }

        $search = $request->input('search');

        $search = Product::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->get();

        $skin = Product::latest()->take(2)->where('category_id', '=', 2)->get();
        $lash = Product::latest()->take(2)->where('category_id', '=', 1)->get();
        $sale = Product::where('sale', '=', 1)->get();
        return view('web.home', compact(['skin', 'lash', 'sale', 'search']));
    }

    public function search()
    {
        $search_content = $_GET['search_content'];
        if ($search_content == '') {
            $output = 'aa';
        } else {
            $replies = Product::where('name', 'like', '%' . $search_content . '%')->get();
            $output = '';
            foreach ($replies as $reply) {
                if ($reply->sale  == 0) {
                    $output .= '
            <img src="/storage/' . $reply->image . '" style="width:80px">
            <h5>' . $reply->name . '</h5>
            <p class="font" style="font-size: 20px;">' . $reply->price . ' KD </p>
            <a href=' . route('cart.store', $reply->id) . '>
            <button class="btn btn-lg p-2 shadow b1" type="submit">
                Add To Cart
                <span class="glyphicon glyphicon-shopping-cart"></span>
            </button>
            </a>
            <hr>
            ';
                } else {
                    $output .= '
                <img src="/storage/' . $reply->image . '" style="width:80px">
                <h5>' . $reply->name . '</h5>
                <span class="font" style="text-decoration: line-through; color:#999;">' . $reply->price . ' KD </span>
                <span class="font" style="font-size: 20px; color:#f3268b;font-weight: bold;">' . $reply->aftersale . ' KD </span>               
                <h5></h5>
                <a href=' . route('cart.store', $reply->id) . '>
                <button class="btn btn-lg p-2 shadow b1" type="submit">
                    Add To Cart
                    <span class="glyphicon glyphicon-shopping-cart"></span>
                </button>
                </a>
                <hr>
                ';
                }
            }
        }
        return $data = array(
            'row_result' => $output,
        );
    }
}
