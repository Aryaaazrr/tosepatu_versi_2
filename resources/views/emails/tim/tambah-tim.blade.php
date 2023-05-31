<x-mail::message>
<x-slot name="title">
    Selamat Datang, {{ $user->username }}!
</x-slot>

<x-mail::panel>
<div>
    Selamat datang di {{ config('app.name') }}. Anda telah ditambahkan sebagai anggota tim.
</div>
    
<ul>
    <li>ID Tim: {{ $user->id_users }}</li>
    <li>Nama Tim: {{ $user->username }}</li>
    <li>Email: {{ $user->email }}</li>
</ul>
</x-mail::panel>

<x-mail::button :url="$url" color="success">
    Lihat Disini
</x-mail::button>

<x-slot name="footer">
    Terima kasih,<br>
    {{ config('app.name') }}
</x-slot>
</x-mail::message>
