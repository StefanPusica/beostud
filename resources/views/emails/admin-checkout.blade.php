<x-layout>
    <h1>Nova narudžbina od {{ $data['name'] }}</h1>
    <p>Email: {{ $data['email'] }}</p>
    <p>Telefon: {{ $data['phone'] }}</p>
    <p>Detalji narudžbine:</p>
    <ul>
        @foreach ($items as $item)
            <li>{{ $item->name }} - Količina: {{ $item->quantity }}</li>
        @endforeach
    </ul>
</x-layout>