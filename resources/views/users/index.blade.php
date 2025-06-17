@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Daftar Pengguna</h2>
    <a href="#" class="btn btn-success">+ Tambah Pengguna</a>
</div>
<div class="card shadow-sm">
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Peran</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Budi</td>
                    <td>budi@email.com</td>
                    <td><span class="badge bg-success">Manager</span></td>
                    <td>
                        <a href="#" class="btn btn-sm btn-warning">Edit</a>
                        <a href="#" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                </tr>
                <!-- Data pengguna lain bisa di-loop di sini -->
            </tbody>
        </table>
    </div>
</div>
@endsection 