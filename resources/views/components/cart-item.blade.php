@props([
    'id',
    'name' => '/', 
    'image_path' => "", 
    'description' => "", 
    'quantity_in_cart' => null,
    'price_per_day' => null,
    'total_price' => null,
])

<div class="cart-item d-flex justify-content-between align-items-center mb-3 border-bottom pb-3">
    <div class="d-flex align-items-center gap-3">
        <img src="{{ asset($image_path) }}" alt="{{ $name }}" style="width: 80px; height: auto;">
        <div>
            <div class="d-flex">
                <strong class="cart-text">{{ $name }}</strong>
                <form method="POST" action="{{ route('cart.remove') }}" class="cart-remove-form ms-2">
                    @csrf
                    <input type="hidden" name="item_id" value="{{ $id ?? '' }}">
                    <button type="submit" class="btn-close" aria-label="Ukloni"></button>
                </form>
            </div>
            <br>
            <small class="cart-text-grey">{{ $description }}</small>
        </div>
    </div>
    <div class="text-end">
        <p class="mb-0 cart-text-grey">Količina: <span class="cart-text">{{ $quantity_in_cart }}</span></p>
        {{-- <p class="mb-0 cart-text-grey">Cena po danu: <span class="cart-text">€{{ $price_per_day }}</span></p>
        <p class="fw-bold cart-text-grey">Ukupno: <span class="cart-text">€{{ number_format($total_price, 2) }}</span></p> --}}
    </div>
</div>