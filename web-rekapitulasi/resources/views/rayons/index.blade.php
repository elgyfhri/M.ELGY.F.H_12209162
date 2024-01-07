@extends('layouts.template')

@section('content')

<div class="container border py-4 rounded">
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(session('deleted'))
        <div class="alert alert-warning">{{ session('deleted') }}</div>
    @endif

    <div class="d-flex justify-content-end mb-3">
        <a class="btn btn-secondary" href="{{ route('rayons.create') }}">Tambah</a>
    </div>

    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Rayons</th>
                <th>Pembimbing Siswa</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($rayon as $item)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $item->rayon }}</td>
                    <td class="d-flex justify-content-center">
                        <a href="{{ route('rayons.edit', $item->id) }}" class="btn btn-primary me-3">Edit</a>
                        <form action="{{ route('rayons.delete', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">Tidak ada data rayon.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
