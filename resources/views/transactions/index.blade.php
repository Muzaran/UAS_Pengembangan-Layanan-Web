<!-- resources/views/transactions/index.blade.php -->

@extends('layouts.app')

@section('title', 'Daftar Transaksi Penjualan')

@section('content')
    <div class="d-flex align-items-center justify-content-between">
        <a href="{{ route('transactions.create') }}" class="btn btn-success">Tambah Transaksi</a>
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
                <th>User</th>
                <th>Produk</th>
                <th>Jumlah</th>
                <th>Total Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @if($transactions->count() > 0)
                @foreach($transactions as $transaction)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $transaction->user ? $transaction->user->name : 'User tidak ditemukan' }}</td>
                        <td class="align-middle">{{ $transaction->product ? $transaction->product->name : 'Produk tidak ditemukan' }}</td>
                        <td class="align-middle">{{ $transaction->quantity }}</td>
                        <td class="align-middle">{{ $transaction->total_price }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('transactions.show', $transaction->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('transactions.edit', $transaction->id) }}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('transactions.destroy', $transaction->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus transaksi?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="6">Transaksi tidak ditemukan</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
