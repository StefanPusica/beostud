@props([
    'url' => '/', 
    'active' => false, 
    'icon' => null, 
    'image' => null,
    'mobile' => null,
])

<a href="{{$url}}" class="nav-link">
    @if($icon)
        <i class="fa fa-{{$icon}} mr-1"> </i>
    @endif
    @if ($image)
        <div class="cart-holder d-flex justify-content-center align-items-center">
            <img src="{{ asset($image) }}" alt="" class="nav-icon" />   
            <div class="cart-number d-flex justify-content-center align-items-center">
                <p class="cart-number-value">{{ array_sum(session('cart', [])) }}</p>
            </div>
        </div>
    @endif
    {{$slot}}
</a>
