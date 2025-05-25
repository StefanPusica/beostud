@props([
  'home' => false,
  'rental' => false,
  'category' => null,
  'subcategory' => null,
  'item' => null,
])

<nav class="breadcrumb mt-2 mb-5">
    @if($home)
        <div class="breadcrumb-box">
            <a href="{{ url('/') }}">Početna</a>
            &nbsp;<img src="/images/icons/arrow-right.svg" alt="" />&nbsp;
        </div>
    @endif

    @if($rental)
        <div class="breadcrumb-box">
            <a href="{{ url('/rental') }}">Rental</a>
            &nbsp;<img src="/images/icons/arrow-right.svg" alt="" />&nbsp;
        </div>
    @endif

    @if($category)
        <div class="breadcrumb-box">
            <a href="{{ url('/rental/' . $category->slug) }}">{{ $category->name }}</a>
            @if($subcategory)
                &nbsp;<img src="/images/icons/arrow-right.svg" alt="" />&nbsp;
            @endif
        </div>
    @endif

    @if($subcategory)
        <div class="breadcrumb-box">
            <a href="{{ url('/rental/' . $category->slug . '/' . $subcategory->slug) }}">{{ $subcategory->name }}</a>
        </div>
    @endif
</nav>
