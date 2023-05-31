<x-mail::message>
<x-slot name="title">
    Halo, {{ $user->username }}!
</x-slot>

<x-mail::panel>
<div>
    Selamat datang di {{ config('app.name') }}. Akun anda telah diperbarui oleh pusat.
</div>
        
<ul>
    <li>ID Tim: {{ $user->id_users }}</li>
    <li>Nama Tim: {{ $user->username }}</li>
    <li>Email: {{ $user->email }}</li>
</ul>
<div>
    Silahkan cek akun anda telah diperbarui oleh pusat.
</div>
</x-mail::panel>

<x-mail::button :url="$url" color="success">
    Lihat Disini
</x-mail::button>

<x-slot name="footer">
    Terima kasih,<br>
    {{ config('app.name') }}
</x-slot>
</x-mail::message>
