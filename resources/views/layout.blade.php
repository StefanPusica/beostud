<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title ?? 'Beostud'}}</title>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/portfolioAnimations.js') }}"></script>
    <script src="{{ asset('js/rentalCardAnimations.js') }}"></script>
    {{-- <script src="{{ asset('js/gallery.js') }}"></script> --}}
    @vite(['resources/js/app.js', 'resources/sass/app.scss'])
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <x-header />
    {{$slot}}
    <x-footer />

</body>
</html>