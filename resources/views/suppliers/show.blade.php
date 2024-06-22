@extends('layouts.app')

@section('title', 'Detail Supplier')

@section('contents')
    <div class="card">
        <div class="card-header">Detail Supplier</div>
        <div class="card-body">
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" name="name" class="form-control" value="{{ $supplier->name }}" readonly>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" value="{{ $supplier->email }}" readonly>
            </div>
            <div class="form-group">
                <label for="phone">Telepon</label>
                <input type="text" name="phone" class="form-control" value="{{ $supplier->phone }}" readonly>
            </div>
            <div class="form-group">
                <label for="address">Alamat</label>
                <textarea name="address" class="form-control" rows="3" readonly>{{ $supplier->address }}</textarea>
            </div>
            <a href="{{ route('suppliers') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
@endsection
