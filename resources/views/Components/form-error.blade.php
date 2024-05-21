@props(['name'])

@error($name)
<p class="text-xm text-red-500 font-semibold">{{ $message}}</p>
@enderror