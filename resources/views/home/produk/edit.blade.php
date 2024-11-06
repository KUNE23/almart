@extends('layouts.master')
@section('title','Produk')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="cotainer-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                        <h3>Halaman Edit Data Produk</h3>
                        <a class="btn btn-primary" href="/produk">Kembali</a>
                        </div>
                        <div class="card-body">
                            <form action="/produk/update/{{ $produk->id }}" method="post" enctype="multipart/form-data" >
                                @csrf 
                                <div class="mb-3">
                                    <label for="" class="form-label">Nama Produk</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="namaproduk"
                                        id=""
                                        value="{{ $produk->namaproduk }}"
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                    @error('namaproduk')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Harga</label>
                                    <input
                                        type="number"
                                        class="form-control"
                                        name="harga"
                                        id=""
                                        value="{{ $produk->harga }}"
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                  @error('harga')
                                  <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                  </div>
                                  @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Stok</label>
                                    <input
                                        type="number"
                                        class="form-control"
                                        name="stok"
                                        id=""
                                        value="{{ $produk->stok }}"
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                    @error('stok')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    <div class="mb-3">
                                        <label for="" class="form-label">Kode Produk</label>
                                        <input
                                            type="number"
                                            class="form-control"
                                            name="kodeproduk"
                                            id="kodeproduk"
                                            aria-describedby="helpId"
                                            placeholder=""
                                        />
                                       @error('kodeproduk')
                                       <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                       </div>
                                       @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Gambar</label>
                                    <input
                                        type="file"
                                        class="form-control"
                                        name="gambar"
                                        id=""
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                   @error('gambar')
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