@extends('layouts.app')

@section('content')
<div class="row mb-4">
    <div class="col-lg-8">
        <div class="card shadow border-0 mb-3">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <h3 class="fw-bold mb-0">Proyek Contoh</h3>
                    <span class="badge bg-primary">Active</span>
                </div>
                <p class="mb-2">Deskripsi lengkap proyek ini dengan penjelasan yang informatif dan menarik.</p>
                <div class="mb-2">
                    <span class="text-secondary small">Progress</span>
                    <div class="progress" style="height: 8px;">
                        <div class="progress-bar bg-success" style="width: 60%"></div>
                    </div>
                </div>
                <div class="d-flex gap-3 mt-2">
                    <span class="badge bg-info">Mulai: 2025-06-01</span>
                    <span class="badge bg-warning text-dark">Selesai: 2025-07-01</span>
                </div>
            </div>
        </div>
        <div class="card shadow border-0 mb-3">
            <div class="card-header bg-white fw-bold">Tugas Proyek</div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div>
                        <strong>Analisis Kebutuhan</strong>
                        <div class="progress mt-1" style="height: 6px; width: 120px;">
                            <div class="progress-bar bg-info" style="width: 50%"></div>
                        </div>
                        <small class="text-muted">Deadline: 2025-06-10</small>
                    </div>
                    <span class="badge bg-info">In Progress</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div>
                        <strong>Desain UI</strong>
                        <div class="progress mt-1" style="height: 6px; width: 120px;">
                            <div class="progress-bar bg-warning" style="width: 0%"></div>
                        </div>
                        <small class="text-muted">Deadline: 2025-06-15</small>
                    </div>
                    <span class="badge bg-warning text-dark">Todo</span>
                </li>
            </ul>
        </div>
        <div class="card shadow border-0 mb-3">
            <div class="card-header bg-white fw-bold">Komentar</div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex align-items-start gap-3">
                    <img src="https://ui-avatars.com/api/?name=Budi" class="rounded-circle" width="36" height="36" alt="avatar">
                    <div>
                        <strong>Budi</strong> <br>
                        Proyek sudah dimulai!
                        <div class="text-muted small">2025-06-01 09:00</div>
                    </div>
                </li>
                <li class="list-group-item d-flex align-items-start gap-3">
                    <img src="https://ui-avatars.com/api/?name=Siti" class="rounded-circle" width="36" height="36" alt="avatar">
                    <div>
                        <strong>Siti</strong> <br>
                        Siap, saya kerjakan tugasnya.
                        <div class="text-muted small">2025-06-01 10:00</div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card shadow border-0 mb-3">
            <div class="card-header bg-white fw-bold">Anggota Proyek</div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex align-items-center gap-2">
                    <img src="https://ui-avatars.com/api/?name=Budi" class="rounded-circle" width="32" height="32" alt="avatar">
                    <span>Budi</span>
                    <span class="badge bg-success ms-auto">Manager</span>
                </li>
                <li class="list-group-item d-flex align-items-center gap-2">
                    <img src="https://ui-avatars.com/api/?name=Siti" class="rounded-circle" width="32" height="32" alt="avatar">
                    <span>Siti</span>
                    <span class="badge bg-primary ms-auto">Member</span>
                </li>
            </ul>
        </div>
        <div class="card shadow border-0 mb-3">
            <div class="card-header bg-white fw-bold">Lampiran</div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <i class="bi bi-file-earmark-pdf text-danger"></i> <a href="#">Dokumen Proyek.pdf</a>
                </li>
                <li class="list-group-item">
                    <i class="bi bi-image text-info"></i> <a href="#">Desain_UI.png</a>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection 