<div class="container mx-auto p-4">
    <h1 class="text-3xl font-bold mb-6">Galeri Foto</h1>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach($galleries as $gallery)
            <div class="bg-white p-4 shadow-lg rounded-lg">
                <img src="{{ asset('storage/' . $gallery->image) }}" alt="{{ $gallery->title }}" class="w-full h-48 object-cover rounded-md">
                <h2 class="text-xl font-semibold mt-4">{{ $gallery->title }}</h2>
            </div>
        @endforeach
    </div>
</div>