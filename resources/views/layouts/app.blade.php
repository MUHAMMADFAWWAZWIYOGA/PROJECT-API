<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Proyek Kolaboratif</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body { background: linear-gradient(135deg, #e3f0ff 0%, #f4f6fa 100%); min-height: 100vh; }
        .sidebar {
            min-height: 100vh;
            background: linear-gradient(160deg, #1a237e 60%, #1976d2 100%);
            color: #fff;
            box-shadow: 2px 0 16px 0 rgba(26,35,126,0.08);
        }
        .sidebar .brand {
            font-weight: bold;
            font-size: 1.5rem;
            letter-spacing: 1px;
            background: linear-gradient(90deg, #42a5f5 0%, #1a237e 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .sidebar .nav-link {
            color: #e3f2fd;
            font-size: 1.1rem;
            border-radius: 12px;
            margin: 0.2rem 0.5rem;
            transition: background 0.2s, color 0.2s;
            padding: 0.7rem 1.2rem;
        }
        .sidebar .nav-link.active, .sidebar .nav-link:hover {
            background: linear-gradient(90deg, #42a5f5 0%, #1976d2 100%);
            color: #fff;
            box-shadow: 0 2px 8px 0 rgba(33,150,243,0.08);
        }
        .topbar {
            background: linear-gradient(90deg, #e3f2fd 0%, #bbdefb 100%);
            border-bottom: 1px solid #e0e0e0;
            box-shadow: 0 2px 8px 0 rgba(33,150,243,0.04);
        }
        .content-area {
            padding: 2rem 2rem 2rem 0;
        }
        .avatar {
            border: 2px solid #42a5f5;
            box-shadow: 0 2px 8px 0 rgba(33,150,243,0.08);
        }
        .floating-btn {
            position: fixed;
            bottom: 32px;
            right: 32px;
            z-index: 1000;
            background: linear-gradient(90deg, #1976d2 0%, #42a5f5 100%);
            color: #fff;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            box-shadow: 0 4px 16px 0 rgba(33,150,243,0.18);
            transition: background 0.2s, box-shadow 0.2s;
        }
        .floating-btn:hover {
            background: linear-gradient(90deg, #42a5f5 0%, #1976d2 100%);
            box-shadow: 0 8px 24px 0 rgba(33,150,243,0.28);
            color: #fff;
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block sidebar py-4">
            <div class="brand mb-4 px-3">ProyekApp</div>
            <ul class="nav flex-column">
                <li class="nav-item"><a class="nav-link" href="/projects"><i class="bi bi-kanban me-2"></i> Proyek</a></li>
                <li class="nav-item"><a class="nav-link" href="/tasks"><i class="bi bi-list-task me-2"></i> Tugas</a></li>
                <li class="nav-item"><a class="nav-link" href="/users"><i class="bi bi-people me-2"></i> Pengguna</a></li>
                <li class="nav-item"><a class="nav-link" href="/activities"><i class="bi bi-clock-history me-2"></i> Aktivitas</a></li>
            </ul>
        </nav>
        <main class="col-md-10 ms-sm-auto px-0">
            <div class="topbar py-3 px-4 mb-4 d-flex align-items-center justify-content-between">
                <div></div>
                <div class="d-flex align-items-center gap-3">
                    <span class="fw-bold text-primary">Halo, Admin</span>
                    <img src="https://ui-avatars.com/api/?name=Admin&background=42a5f5&color=fff" class="rounded-circle avatar" width="40" height="40" alt="avatar">
                </div>
            </div>
            <div class="content-area">
                @yield('content')
            </div>
        </main>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@yield('floating-action')
</body>
</html> 