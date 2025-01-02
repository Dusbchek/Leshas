<?php

namespace App\Livewire;

use Livewire\Component;

class ProductPay extends Component
{

    public $product;

    public function render()
    {
        return view('livewire.product-pay', [
            'paymentMethods' => auth()->user()->paymentMethods()
            ]);
    }
}
