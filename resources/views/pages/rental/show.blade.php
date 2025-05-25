<x-layout>
    <section id="rentalItemSection">
        <div class="container">
            <x-heading :pageName="$category->name" />

            <x-breadcrumb
                :home="true"
                :rental="true"
                :category="$category"
            />

            {{-- Prikaz item-a bez podkategorije --}}
            @if($items->count())
                <div class="row gx-5">
                    @foreach($items as $item)
                        <x-rental-item
                            :name="$item->name"
                            :image="$item->image_path"
                            :id="$item->id"
                        />
                    @endforeach
                </div>
            @endif

            {{-- Prikaz podkategorija ako ih ima --}}
            @if($subcategories->count())
                <h3 class="mt-5 sub-heading">Izaberite podkategoriju</h3>
                <div class="row gx-4 gy-4 mt-3">
                    @foreach($subcategories as $sub)
                        <x-rental-category-item
                            :name="$sub->name"
                            :slug="$sub->slug"
                            :parentSlug="$category->slug"
                        />
                    @endforeach
                </div>
            @endif

            <div id="cart-alert" style="display:none;" class="alert alert-success position-fixed z-3">
                <!-- biće ispunjen JS-om -->
            </div>
        </div>
    </section>
</x-layout>
