<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CheckOutController extends Controller
{
    public function index()
    {
        $stripe = new \Stripe\StripeClient('pk_test_51PvLQnBaRdacjjhQSyag9tcXd5HJaHFBdgasnOmXs3RVH8GP4ApotWSUNbBdZimsvgEqB8NXNETc65j9VwcUnIMo00WbbHn1IV');
        $order = Order::where('user_id', '=', auth()->user()->id)->where('payment_intent', null)->first();
//        if (is_null($order)){
//            return redirect()->route('checkout_success.index');
//        }
        $intent = $stripe->paymentIntents->create([
            'amount' => "1000",
            'currency' => 'usd',
            'payment_method_types' => ['card'],
        ]);

        return Inertia::render("Checkout",[
            'intent' => $intent,
            'order' => $order
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $res = Order::where('user_id', auth()->id())->where('payment_intent', null)->first();
        if (!is_null($res)) {
            $res->total = $request->total;
            $res->total_decimal = $request->total_decimal;
            $res->items = json_encode($request->items);
            $res->save();
        }else{
            $res = new Order();
            $res->user_id = auth()->id();
            $res->total = $request->total;
            $res->total_decimal = $request->total_decimal;
            $res->items = json_encode($request->items);
            $res->save();
        }
        return redirect()->route('checkout.index');
    }

    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    public function update(Request $request)
    {
        $order = Order::where('user_id', auth()->id())->where('payment_intent', null)->first();
        if (!is_null($order)) {
            $order->payment_intent = $request->payment_intent;
            $order->save();
            return redirect()->route('checkout_success.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
