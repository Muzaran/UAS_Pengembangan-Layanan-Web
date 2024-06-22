@extends('layouts.app')
  
@section('title', 'Daftar Supplier')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <form action="{{ route('suppliers') }}" method="GET" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
                <input name="search" type="text" placeholder="Cari supplier..." value="{{ request('search') }}" class="form-control bg-light border-0 small">
                <div class="input-group-append">
                    <button class="btn btn-success" type="submit">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
            </div>
        </form>
        <a href="{{ route('suppliers.create') }}" class="btn btn-success">Tambah Supplier</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-success">
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @if($suppliers->count() > 0)
                @foreach($suppliers as $supplier)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $supplier->name }}</td>
                        <td class="align-middle">{{ $supplier->email }}</td>
                        <td class="align-middle">{{ $supplier->phone }}</td>
                        <td class="align-middle">{{ $supplier->address }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('suppliers.show', $supplier->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('suppliers.edit', $supplier->id) }}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('suppliers.destroy', $supplier->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Yakin ingin menghapus supplier?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="6">Supplier tidak ditemukan</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
