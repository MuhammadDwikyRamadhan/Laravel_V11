<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="m-5">
    @foreach ($posts as $p)
      <article class="py-8 max-w-screen-md border-b border-gray-300">
        <a href="/berita_satuan/{{ $p['ID'] }}">
        <h2 class="mb-1 text-3xl font-bold text-gray-900">{{ $p['Judul'] }}</h2>
        </a>
        <div class="text-base text-gray-500">{{ $p['Author'] }}, 15 Agustus 2024</div>
        <p class="my-4 font-light">{{ Str::limit($p['Isi'], 200) }}</p>
        <a href="/berita_satuan/{{ $p['ID'] }}" class="font-medium text-blue-500 hover:underline">Read More&raquo;</a>
      </article>
    @endforeach

    </div>
</x-layout>
