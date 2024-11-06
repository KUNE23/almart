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
                    <h3>Halaman Data Supplier</h3>
                    <a class="btn btn-primary" href="/supplier/tambah">Tambah</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr class="">
                                            <th scope="col">ID</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Alamat</th>
                                            <th scope="col">Nomor Telepon</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($supplier as $supplier)
                                        <tr class="">
                                            <td>{{  $loop->iteration }}</td>
                                            <td>{{  $supplier->nama }}</td>
                                            <td>{{  $supplier->alamat }}</td>
                                            <td>{{  $supplier->notelp }}</td>
                                            <td>
                                                <a class="btn btn-warning" href="/supplier/show/{{ $supplier->id }}">Edit</a>
                                                <a class="btn btn-danger" href="/supplier/delete/{{ $supplier->id }}"
                                                onclick="return confirm('Apakah Data Akan Dihapus?')">Hapus</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection