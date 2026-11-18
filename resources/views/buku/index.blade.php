@extends('layout')

@section('buku.content')

<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Data Buku</h2>

        <a href="/buku/create" class="btn btn-primary">
            Tambah Buku
        </a>
    </div>

    <table class="table table-bordered table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun</th>
                <th width="200">Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach($buku as $b)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $b->judul }}</td>
                <td>{{ $b->penulis }}</td>
                <td>{{ $b->penerbit }}</td>
                <td>{{ $b->tahun_terbit }}</td>

                <td>
                    <a href="/buku/{{ $b->id }}/edit"
                       class="btn btn-warning btn-sm">
                        Edit
                    </a>

                    <form action="/buku/{{ $b->id }}"
                          method="POST"
                          class="d-inline">

                        @csrf
                        @method('DELETE')

                        <button type="submit"
                                class="btn btn-danger btn-sm">
                            Hapus
                        </button>

                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>

</div>

@endsection
