<div class="berita-list">
    @foreach($beritas as $berita)
        <div class="berita-item">
            <div class="gambar-berita">
                <img src="{{ $berita->gambar }}" alt="Gambar Berita">
            </div>
            <div class="berita-content">
                <h2>{{ $berita->judul }}</h2>
                <p class="tanggal">{{ $berita->tanggal}}</p>
                <p>{{ $berita->konten }}</p>
            </div>
        </div>
    @endforeach
</div>
