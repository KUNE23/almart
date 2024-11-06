@extends('layouts.master')
@section('title','Supplier')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                    <h3>Halaman Tambah Data Supplier</h3>
                    <a class="btn btn-primary" href="/supplier">Kembali</a>
                        </div>
                        <div class="card-body">
                        <form action="/supplier/simpan" method="post">
                            @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Nama Supplier</label>
                            <input
                                type="text"
                                class="form-control"
                                name="nama"
                                id=""
                                value="{{ old('nama') }}"
                                aria-describedby="helpId"
                                placeholder=""
                            />
                           @error('nama')
                           <div class="alert alert-danger mt-2">
                            {{ $message }}
                           </div>
                           @enderror
                        </div>
                             <div class="mb-3">
                                <label for="" class="form-label">Alamat</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="alamat"
                                    id=""
                                    value="{{ old('alamat') }}"
                                    aria-describedby="helpId"
                                    placeholder=""
                                />
                               @error('alamat')
                               <div class="alert alert-danger mt-2">
                                {{ $message }}
                               </div>
                               @enderror
                             </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Nomor Telepon</label>
                                            <input
                                                type="number"
                                                class="form-control"
                                                name="notelp"
                                                id=""
                                                value="{{ old('notelp') }}"
                                                aria-describedby="helpId"
                                                placeholder=""
                                            />
                                        @error('notelp')
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