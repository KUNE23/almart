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
                            <h3>Halaman Data User</h3>
                            <a class="btn btn-primary" href="/user/tambah">Tambah</a>
                        </div>
                        <div class="card-body">
                            <div class="tale-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr class="">
                                            <th scope="col">ID</th>
                                            <th scope="col">Nama User</th>
                                            <th scope="col">Username</th>
                                            <th scope="col">Nomor Telepon</th>
                                            <th scope="col">Level</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($user as $user)
                                        <tr class="">
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $user->nama }}</td>
                                            <td>{{ $user->username }}</td>
                                            <td>{{ $user->notelp }}</td>
                                            <td>{{ $user->level }}</td>
                                            <td>
                                                <a class="btn btn-success" href="/user/show/{{ $user->id }}">Edit</a>
                                                <a class="btn btn-danger" href="/user/delete/{{ $user->id }}"
                                                onclick="retun confirm('Apakah Data Akan Dihapus?')">Hapus</a>
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