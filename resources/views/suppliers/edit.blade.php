@extends('layouts.app')

@section('title', 'Edit Supplier')

@section('contents')
    <div class="card">
        <div class="card-header">Edit Supplier</div>
        <div class="card-body">
            <form action="{{ route('suppliers.update', $supplier->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" name="name" class="form-control" value="{{ $supplier->name }}" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" value="{{ $supplier->email }}" required>
                </div>
                <div class="form-group">
                    <label for="phone">Telepon</label>
                    <input type="text" name="phone" class="form-control" value="{{ $supplier->phone }}" required>
                </div>
                <div class="form-group">
                    <label for="address">Alamat</label>
                    <textarea name="address" class="form-control" rows="3" required>{{ $supplier->address }}</textarea>
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
            </form>
        </div>
    </div>
@endsection
