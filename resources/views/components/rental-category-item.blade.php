@props([
  'name' => '',
  'image' => null,
  'slug' => null,
  'parentSlug' => null,
])

@php
    $href = $slug
        ? ($parentSlug ? url('/rental/' . $parentSlug . '/' . $slug) : url('/rental/' . $slug))
        : '#';
@endphp

<a href="{{ $href }}" class="col-md-4">
  <div class="card rental-card d-flex justify-content-center align-items-center mb-4">
    <div class="card-body">
        <div class="d-flex justify-content-center align-items-center">
            @if($image)
              <img src="{{ $image }}" alt="" />
            @endif
            <h1 class="card-title">{{ $name }}</h1>
        </div>    
    </div>
  </div>
</a>
