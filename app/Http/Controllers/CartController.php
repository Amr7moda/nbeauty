<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\checkout;
use App\Models\Order;
use App\Models\Product;
use Carbon\Carbon;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class CartController extends Controller
{
    public function addToCart(Product $product)
    {
        if (session()->has('cart')) {
            $cart = new Cart(session()->get('cart'));
        } else {
            $cart = new Cart();
        }

        $cart->add($product);
        session()->put('cart', $cart);

        return redirect()->back();
    }

    public function showCart()
    {

        if (session()->has('cart')) {
            $cart = new Cart(session()->get('cart'));
        } else {
            $cart = null;
        }

        return view('web.cart', compact('cart'));
    }

    public function removeCart(request $request, $id)
    {
        $cart = session()->get('cart');
        // dd( $cart->totalprice -= $cart->items[$id]['price']);
        if (array_key_exists($id, $cart->items)) {
            if ($cart->items[$id]['qty'] > 0) {
                $cart->totalqty -= 1;
                $cart->items[$id]['qty'] -= 1;
                if ($cart->items[$id]['aftersale'] == 0) {
                    $cart->totalprice -= $cart->items[$id]['price'];
                } else {
                    $cart->totalprice -= $cart->items[$id]['aftersale'];
                }
            }
        }
        if ($cart->items[$id]['qty'] == 0) {
            unset($cart->items[$id]);
        }
        return Redirect::back();
    }

    public function addCart(Request $request, $id)
    {
        $cart = session()->get('cart');

        if (array_key_exists($id, $cart->items)) {
            if ($cart->items[$id]['qty'] > 0) {
                $cart->totalqty += 1;
                $cart->items[$id]['qty'] += 1;
                if ($cart->items[$id]['aftersale'] == 0) {
                    $cart->totalprice += $cart->items[$id]['price'];
                } else {
                    $cart->totalprice += $cart->items[$id]['aftersale'];
                }
            }
        }
        return Redirect::back();
    }


    public function clearAllCart(Request $request)
    {
        $request->session()->flush();
        return Redirect::back();
    }

    public function checkout($totalprice)
    {
        $cart = session()->get('cart');
        return view('web.checkout', compact(['totalprice', 'cart']));
    }

    public function charge(Request $request)
    {
        $cart = session()->get('cart');
        $charge = Stripe::charges()->create([
            'currency' => 'usd',
            'source' => $request->stripeToken,
            'amount' => $request->totalprice,
            'description' => 'Test'
        ]);
        $chargeid = $charge['id'];

        $time = Carbon::now();
        $user = Auth::user();
        $uniqid = Str::random(9);
        $name = [
            'id' => $uniqid,
            'name' =>  $request->name,
            'address' => $request->address,
            'country' => $request->country,
            'city' => $request->city,
            'phone' => $request->phone,
            'time' => $time->toDateString(),
            'user_id' => $user->id
        ];

        if (session()->has('cart')) {
            $cart = session()->get('cart');
        } else {
            $cart = new Cart();
        }

        session()->put('cart', [$name, $cart]);

        if ($chargeid) {
            Order::create([
                'cart_data' => serialize(session()->get('cart')),
                'totaleprice' => $request->totalprice,
                'user_id' => $user->id
            ]);
            session()->forget('cart');
            return redirect()->route('home')->with('success', "Payment Was Done Succesfully, Thanks");
        } else {
            return redirect()->back();
        }
    }
}
