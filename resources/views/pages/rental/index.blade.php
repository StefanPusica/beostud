<x-layout>
  <!-- Rental section start -->
  <section id="rentalPageSection">
      <div class="container">
        <x-heading pageName="Rental"></x-heading>
        <div class="row flex-wrap align-items-center justify-content-center mt-5">

          {{-- Stare statične komponente (možeš ukloniti ako sve ide iz baze) --}}
          {{-- <x-rental-category-item name="Lighting"></x-rental-category-item> --}}

          {{-- Dinamičke kategorije --}}
          @foreach($categories as $category)
              <x-rental-category-item
                  :name="$category->name"
                  :slug="$category->slug"
              />
          @endforeach

          <x-rental-category-item name="PDF List of all" image="/images/icons/download-icon.svg" />
        </div>
      </div>
  </section>
  <!-- Rental section end -->
</x-layout>
