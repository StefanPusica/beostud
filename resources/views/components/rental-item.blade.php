@props([
  'name' => '',
  'image' => null,
  'id' => null,
])

<div class="col-lg-4 mb-5 mb-3 d-flex flex-column justify-content-center align-items-center">
    <img class="rental-item-image mb-3" src="{{ asset($image) }}" alt="{{ $name }}" />
    <h2 class="rental-item-heading h4 fw-bolder">{{ $name }}</h2>

    <form method="POST"
      action="{{ route('cart.add') }}"
      class="rental-item-form d-flex gap-1 input rental-item-input-holder"
      data-item-id="{{ $id }}">
        @csrf
        <input type="hidden" name="item_id" value="{{ $id }}" />
        <input type="number" name="quantity" value="1" min="1" class="rental-item-input" />
        <button type="submit" class="btn p-0 border-0 bg-transparent">
            <img src="{{ asset("/images/icons/cart24.svg") }}" alt="Dodaj" />
        </button>
    </form>

</div>
