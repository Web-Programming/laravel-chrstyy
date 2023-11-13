@extends('layout.master')
@section('title', 'Halaman List Prodi')

@section('content')
    <div class="row pt-4">
        <div class="col">
            <h2>Prodi</h2>
            <div class="d-md-flex justify-content-md-end">
                <a href="{{ route('prodi.index') }}" class="btn btn-primary">Tambah</a>
            </div>
            @if (session()->has('info'))
                <div class="alert alert-success">
                    {{ session()->get('info') }}
                </div>
            @endif
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <td>Nama</td>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($prodis as $item)
                        <tr>
                            <td>
                                {{ $item->nama }}
                            </td>
                            <td><a href="{{ url('prodi/' . $item->id) }}" class="btn btn-warning">Detail</a></td>
                            <td><a href="{{ url('prodi/' . $item->id . '/edit') }}" class="btn btn-info">Ubah</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
