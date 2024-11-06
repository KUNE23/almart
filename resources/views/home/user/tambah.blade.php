@extends('layouts.master')
@section('title','User')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                    <h3>Halaman Tambah Data User</h3>
                    <a class="btn btn-primary" href="/user">Kembali</a>
                        </div>
                        <div class="card-body">
                        <form action="/user/simpan" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label">Nama User</label>
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
                                <label for="" class="form-label">Username</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="username"
                                    id=""
                                    value="{{ old('username') }}"
                                    aria-describedby="helpId"
                                    placeholder=""
                                />
                                @error('username')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Email</label>
                                <input
                                    type="email"
                                    class="form-control"
                                    name="email"
                                    id=""
                                    value="{{ old('email') }}"
                                    aria-describedby="helpId"
                                    placeholder=""
                                />
                              @error('email')
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
                            <div class="mb-3">
                                <label for="" class="form-label">Password</label>
                                <input
                                    type="password"
                                    class="form-control"
                                    name="password"
                                    id=""
                                    value="{{ old('password') }}"
                                    aria-describedby="helpId"
                                    placeholder=""
                                />
                              @error('password')
                              <div class="alert alert-danger mt-2">
                                {{ $message }}
                              </div>
                              @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Level</label>
                                <input
                                    type="tex"
                                    class="form-control"
                                    name="level"
                                    id=""
                                    value="{{ old('level') }}"
                                    aria-describedby="helpId"
                                    placeholder=""
                                />
                             @error('level')
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