@extends('layouts.master')
@section('title','ProdukMasuk')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Tambah Data Barang Masuk</h3>
                            <a class="btn btn-primary" href="/produkmasuk">Kembali</a>
                        </div>
                        <div class="card-body">
                        <form action="/produkmasuk/simpan" method="post">
                            @csrf  
                            <div class="mb-3">
                                <label for="id_supplier" class="form-label">Nama Supplier</label>
                                <select
                                    class="form-select form-select-lg"
                                    name="id_supplier"
                                    id=""
                                >
                                @foreach($supplier as $supplier)
                                    <option selected>Piih Supplier</option>
                                    <option value="{{ $supplier->id }}">{{ $supplier->nama }}</option>
                                    @endforeach
                                </select>
                                @error('id_supplier')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="id_produk" class="form-label">Nama Produk</label>
                                <select
                                    class="form-select form-select-lg"
                                    name="id_produk"
                                    id=""
                                >
                                @foreach($produk as $produk)
                                    <option selected>Pilih Produk</option>
                                    <option value="{{ $produk->id }}">{{ $produk->namaproduk }}</option>
                                    @endforeach
                                </select>
                                @error('id_produk')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Jumlah Produk</label>
                                <input
                                    type="number"
                                    class="form-control"
                                    name="jumlah"
                                    id=""
                                    value="{{ old('jumlah') }}"
                                    aria-describedby="helpId"
                                    placeholder=""
                                />
                                @error('jumlah')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <button class="btn btn-primary">Simpan</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection