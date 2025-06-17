@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold text-primary">Daftar Proyek</h2>
</div>
<div class="row g-4">
    <div class="col-md-6 col-lg-4">
        <div class="card project-card h-100 border-0 shadow-lg position-relative">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <h5 class="card-title mb-0 text-primary">Proyek Contoh</h5>
                    <span class="badge badge-gradient">Active</span>
                </div>
                <p class="card-text text-muted mb-2">Deskripsi singkat proyek yang menarik dan jelas.</p>
                <div class="mb-2">
                    <span class="text-secondary small">Progress</span>
                    <div class="progress" style="height: 10px;">
                        <div class="progress-bar progress-bar-animated bg-gradient-blue" style="width: 60%"></div>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <div>
                        <span class="badge bg-info bg-gradient">06/2025</span>
                        <span class="badge bg-warning text-dark bg-gradient">07/2025</span>
                    </div>
                    <div class="btn-group">
                        <a href="/projects/1" class="btn btn-sm btn-outline-primary" title="Detail"><i class="bi bi-eye"></i></a>
                        <a href="#" class="btn btn-sm btn-outline-warning" title="Edit"><i class="bi bi-pencil"></i></a>
                        <a href="#" class="btn btn-sm btn-outline-danger" title="Hapus"><i class="bi bi-trash"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Card proyek lain bisa di-loop di sini -->
</div>
@endsection

@section('floating-action')
<a href="#" class="floating-btn" title="Tambah Proyek"><i class="bi bi-plus-lg"></i></a>
<style>
.project-card {
    background: linear-gradient(120deg, #e3f2fd 0%, #bbdefb 100%);
    border-radius: 1.5rem;
    transition: box-shadow 0.2s, transform 0.2s;
}
.project-card:hover {
    box-shadow: 0 8px 32px 0 rgba(33,150,243,0.18);
    transform: translateY(-4px) scale(1.02);
}
.badge-gradient {
    background: linear-gradient(90deg, #1976d2 0%, #42a5f5 100%);
    color: #fff;
    font-weight: 500;
    border-radius: 1rem;
    box-shadow: 0 2px 8px 0 rgba(33,150,243,0.08);
}
.bg-gradient-blue {
    background: linear-gradient(90deg, #1976d2 0%, #42a5f5 100%) !important;
}
</style>
@endsection 