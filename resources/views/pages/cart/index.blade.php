<x-layout>
    <section id="cartSection">
        <div class="container">
            <x-heading pageName="Vaša korpa"></x-heading>

            @forelse($itemsWithQuantities as $item)
                <x-cart-item 
                    id="{{ $item->id }}"
                    name="{{ $item->name }}"
                    image_path="{{ $item->image_path }}"
                    description="{{ $item->description }}"
                    quantity_in_cart="{{ $item->quantity_in_cart }}"
                    price_per_day="{{ $item->price_per_day }}"
                    total_price="{{ $item->total_price }}"
                />
            @empty
                <p class="cart-section-text">Vaša korpa je prazna.</p>
            @endforelse

            @if($itemsWithQuantities->count())
            <div class="text-end mt-4">
                <a href="{{ route('checkout.show') }}" class="beostud-btn white">Nastavi</a>
            </div>
            @endif
        </div>
    
    </section>
</x-layout>
