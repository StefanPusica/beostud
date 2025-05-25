<x-layout>
    <h1>Hvala na vašoj narudžbini, {{ $data['name'] }}!</h1>
    <p>Detalji vaše narudžbine:</p>
    <ul>
        @foreach ($items as $item)
            <li>{{ $item->name }} - Količina: {{ $item->quantity }}</li>
        @endforeach
    </ul>
    <p>Javićemo vam se uskoro!</p>
</x-layout>