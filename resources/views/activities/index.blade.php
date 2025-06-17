@extends('layouts.app')

@section('content')
<h2 class="mb-3">Log Aktivitas</h2>
<div class="card shadow-sm">
    <div class="card-body">
        <ul class="list-group">
            <li class="list-group-item">
                <strong>Budi</strong> membuat proyek <strong>Proyek Contoh</strong> <br>
                <small class="text-muted">2025-06-01 09:00</small>
            </li>
            <li class="list-group-item">
                <strong>Siti</strong> menambahkan tugas <strong>Analisis Kebutuhan</strong> <br>
                <small class="text-muted">2025-06-01 10:00</small>
            </li>
            <!-- Data aktivitas lain bisa di-loop di sini -->
        </ul>
    </div>
</div>
@endsection 