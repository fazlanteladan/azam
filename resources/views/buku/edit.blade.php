@extends('layout')

@section('buku.content')

<div class="container mt-4">

    <div class="card">

        <div class="card-header bg-warning">
            <h4>Edit Buku</h4>
        </div>

        <div class="card-body">

            <form action="/buku/{{ $buku->id }}"
                  method="POST">

                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">
                        Judul Buku
                    </label>

                    <input type="text"
                           name="judul"
                           value="{{ $buku->judul }}"
                           class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Penulis
                    </label>

                    <input type="text"
                           name="penulis"
                           value="{{ $buku->penulis }}"
                           class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Penerbit
                    </label>

                    <input type="text"
                           name="penerbit"
                           value="{{ $buku->penerbit }}"
                           class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Tahun Terbit
                    </label>

                    <input type="number"
                           name="tahun_terbit"
                           value="{{ $buku->tahun_terbit }}"
                           class="form-control">
                </div>

                <button type="submit"
                        class="btn btn-primary">
                    Update
                </button>

                <a href="/buku"
                   class="btn btn-secondary">
                    Kembali
                </a>

            </form>

        </div>
    </div>
</div>

@endsection
