<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Http\Requests\StoreCardRequest;
use App\Http\Requests\UpdateCardRequest;
use App\Models\CardProduct;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCardRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCardRequest $request)
    {
        if (Auth::check()) {
        $prod = CardProduct::where('card_id', Auth::user()->card->id)->where('product_id', $request->productId)->first();
            if ($prod == null) {
        
                $pivot = new CardProduct();
                $pivot->amount = $request->qtybutton;
                $pivot->card_id = Auth::user()->card->id;
                $pivot->product_id = $request->productId;
                $pivot->save();
            }else {
                
                $amount = $request->qtybutton;
                $prod->amount += $amount;
                $prod->save();
            }


        }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function show(Card $card)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function edit(Card $card)
    {
        // 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCardRequest  $request
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCardRequest $request, Card $card)
    {
        // $quantity = $request->qtybutton;
        // $card->amount += $card->product->price * $quantity; 
        // $card->save();
        // return redirect()->back();
        
            // $card->cardproduct = $request->qtybutton;
            // $card->cardproduct->save();
            
        
            return redirect()->back();
    



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function destroy(Card $card)
    {
        //
    }
}
