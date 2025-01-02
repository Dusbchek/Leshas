<div>

<div class="rounded-xl p-2 border-[1px] border-gray-300 shadow-md mt-4 mb-2">
    <div class="">

<h1 class="text-xl font-bold text-center">Métodos de pago</h1>

@foreach ($paymentMethods as $paymentMethod)
<label name="paymentMethod" type="select" value="{{ $paymentMethod->id }}">
    <div>
<input class="flex flex-row">
<h1 class="truncate w-[152px]">{{ $paymentMethod->billing_details->name }} </h1>
<h1 class="ml-4 jusitfy-end">****{{ $paymentMethod->card->last4 }}</h1>
</input>
</div>
</label>
@endforeach
    </div>

</div>
</div>
