<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product as Items;
use Cart;

class Product extends Component
{

    public function increment($id)
    {
        $product = Items::findOrFail($id);
        Cart::add($product->id, $product->name , $product->price, 1);
    }

    public function decrement($id)
    {
        $cart = Cart::getContent();
        $item = $cart->where('id', $id)->first();
        if ($item) {
            if ($item->quantity != 1) {
                \Cart::update($id, array('quantity' => array(
                    'relative' => false,
                    'value' => $item->quantity - 1,
                ), ));
            }else{
                Cart::remove($id);
            }
        }
    }

    public function addToCart($id)
    {
        $product = Items::findOrFail($id);

        Cart::add($product->id, $product->name , $product->price, 1);
    }

    public function removeFromCart($id)
    {
        Cart::remove($id);
    }

    public function clearCart()
    {
        Cart::clear();
    }

    public function render()
    {
        return view('livewire.product',[
            'products' => Items::all(),
        ]);
    }
}
