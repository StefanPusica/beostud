<x-layout>
  <section id="subcategoryItemsSection">
    <div class="container">
      <x-heading :pageName="$subcategory->name" />
        
        <x-breadcrumb
            :home="true"
            :rental="true"
            :category="$subcategory->category"
            :subcategory="$subcategory"
        />

      @if($items->count())
        <div class="row gx-4 gy-4 mt-4">
          @foreach($items as $item)
            <x-rental-item
              :name="$item->name"
              :image="$item->image_path"
              :id="$item->id"
            />
          @endforeach
        </div>
      @else
        <p class="text-muted mt-4">Nema dostupnih proizvoda u ovoj podkategoriji.</p>
      @endif

      <div id="cart-alert" style="display:none;" class="alert alert-success position-fixed z-3">
        <!-- Popunjava se JS-om -->
      </div>
    </div>
  </section>
</x-layout>
