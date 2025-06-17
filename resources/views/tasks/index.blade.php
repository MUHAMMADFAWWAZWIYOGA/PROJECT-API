@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold">Daftar Tugas</h2>
    <a href="#" class="btn btn-success"><i class="bi bi-plus-circle"></i> Tambah Tugas</a>
</div>
<div class="row g-4">
    <div class="col-md-6 col-lg-4">
        <div class="card shadow border-0 h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <h5 class="card-title mb-0">Analisis Kebutuhan</h5>
                    <span class="badge bg-info">In Progress</span>
                </div>
                <p class="card-text text-muted mb-2">Proyek Contoh</p>
                <div class="mb-2">
                    <span class="text-secondary small">Progress</span>
                    <div class="progress" style="height: 8px;">
                        <div class="progress-bar bg-success" style="width: 50%"></div>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <div>
                        <span class="badge bg-warning text-dark">Deadline: 2025-06-10</span>
                    </div>
                    <div class="btn-group">
                        <a href="#" class="btn btn-sm btn-outline-primary" title="Detail"><i class="bi bi-eye"></i></a>
                        <a href="#" class="btn btn-sm btn-outline-warning" title="Edit"><i class="bi bi-pencil"></i></a>
                        <a href="#" class="btn btn-sm btn-outline-danger" title="Hapus"><i class="bi bi-trash"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Card tugas lain bisa di-loop di sini -->
</div>
@endsection 