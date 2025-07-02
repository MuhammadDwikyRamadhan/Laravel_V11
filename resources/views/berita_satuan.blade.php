<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="m-5">
      <article class="py-8 max-w-screen-md border-b border-gray-300">
        <h2 class="mb-1 text-3xl font-bold text-gray-900">{{ $posts['Judul'] }}</h2>
        <div class="text-base text-gray-500">{{ $posts['Author'] }}, 15 Agustus 2024</div>
        <p class="my-4 font-light">{{ $posts['Isi'] }}</p>
        <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo;Back</a>

      </article>

    </div>
</x-layout>
