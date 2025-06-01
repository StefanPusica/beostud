<style>
    body {
        font-family: DejaVu Sans, sans-serif;
    }
</style>

<h2>Nova narudžbina od {{ $data['name'] }}</h2>

<p><strong>Email:</strong> {{ $data['email'] }}<br>
<strong>Telefon:</strong> {{ $data['phone'] ?? 'Nije uneto' }}</p>

<hr>

<h3>Informacije o kompaniji i projektu</h3>
<p>
<strong>Kompanija:</strong> {{ $data['company'] }}<br>
<strong>Naziv projekta:</strong> {{ $data['project_name'] }}<br>
<strong>Početak projekta:</strong> {{ \Carbon\Carbon::parse($data['project_start'])->format('d.m.Y') }}<br>
<strong>Završetak projekta:</strong> {{ \Carbon\Carbon::parse($data['project_end'])->format('d.m.Y') }}
</p>

@if(!empty($data['note']))
<hr>

<h3>Napomena</h3>
<p>{{ $data['note'] }}</p>
@endif

<hr>

<h3>Detalji narudžbine – oprema</h3>
<ul>
@foreach ($items as $item)
    <li>{{ $item->name }} – Količina: {{ $item->quantity }}</li>
@endforeach
</ul>

<hr>

<p style="font-size: 12px; color: #666;">
Ova poruka je automatski generisana putem forme za iznajmljivanje sa sajta.
</p>
