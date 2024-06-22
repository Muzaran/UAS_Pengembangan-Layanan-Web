<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;

class SupplierController extends Controller
{
        public function index()
        {
            $suppliers = Supplier::all();
            return view('suppliers.index', compact('suppliers'));
        }

        public function create()
        {
            return view('suppliers.create');
        }

        public function store(Request $request)
        {
            Supplier::create($request->all());
            return redirect()->route('suppliers')->with('success', 'Supplier berhasil ditambahkan');
        }

        public function show(Supplier $supplier)
        {
            return view('suppliers.show', compact('supplier'));
        }

        public function edit(Supplier $supplier)
        {
            return view('suppliers.edit', compact('supplier'));
        }

        public function update(Request $request, Supplier $supplier)
        {
            $supplier->update($request->all());
            return redirect()->route('suppliers')->with('success', 'Supplier berhasil diperbarui');
        }

        public function destroy(Supplier $supplier)
        {
            $supplier->delete();
            return redirect()->route('suppliers')->with('success', 'Supplier berhasil dihapus');
        }
}


