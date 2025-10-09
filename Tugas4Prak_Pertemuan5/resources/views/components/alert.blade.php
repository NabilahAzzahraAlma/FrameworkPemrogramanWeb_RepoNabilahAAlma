@props(['type' => 'info'])

<div {{ $attributes->merge(['class' => "alert alert-$type"]) }}>
    {{ $slot }}
</div>
{{-- 4. Cek file resources/views/component/alert.blade.php, kemudian ganti isinya dengan kode berikut:

```
@props(['type' => 'info'])

<div {{ $attributes->merge(['class' => "alert alert-$type"]) }}> {{ $slot }} </div>
```
 --}}
