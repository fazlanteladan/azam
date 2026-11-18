@extends('layout')

@section('buku.content')

<div class="container mt-4">

    <div class="card">

        <div class="card-header bg-primary text-white">
            <h4>Tambah Buku</h4>
        </div>

        <div class="card-body">

            @if ($errors->any())

                <div class="alert alert-danger">

                    <ul class="mb-0">

                        @foreach ($errors->all() as $error)

                            <li>{{ $error }}</li>

                        @endforeach

                    </ul>

                </div>

            @endif

            <form action="/buku" method="POST">

                @csrf

                <div class="mb-3">

                    <label class="form-label">
                        Judul Buku
                    </label>

                    <input type="text"
                           name="judul"
                           class="form-control"
                           value="{{ old('judul') }}"
                           required>

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Penulis
                    </label>

                    <input type="text"
                           name="penulis"
                           class="form-control"
                           value="{{ old('penulis') }}"
                           required>

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Penerbit
                    </label>

                    <input type="text"
                           name="penerbit"
                           class="form-control"
                           value="{{ old('penerbit') }}"
                           required>

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Tahun Terbit
                    </label>

                    <input type="number"
                           name="tahun_terbit"
                           class="form-control"
                           value="{{ old('tahun_terbit') }}"
                           required>

                </div>

                <button type="submit"
                        class="btn btn-success">
                    Simpan
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

