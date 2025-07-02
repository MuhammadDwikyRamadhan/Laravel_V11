<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  <div class="m-4">
  @foreach ($jurusan as $j)
  <article class="py-8 max-w-screen-md border-b border-gray-300">
  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title"><strong>{{ $j['Jurusan'] }}</strong></h5>
      <h6 class="card-subtitle mb-2 text-body-secondary">{{ $j['Kepanjangan'] }}</h6>
      <p class="card-text">{{ Str::limit($j['Isi'], 100) }}</p>
      <a href="/detail_jurusan/{{ $j['ID'] }}" class="card-link font-medium text-blue-500 hover:underline">Read More&raquo;</a>
    </div>
  </div>
  </article>
  @endforeach

  </div>

</x-layout>
