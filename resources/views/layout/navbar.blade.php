<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%; /* Atur tinggi minimal halaman 100% dari viewport */
        }

        .content {
            min-height: 100%; /* Buat konten setinggi viewport */
            position: relative; /* Atur posisi relatif untuk konten */
            padding-bottom: 60px; /* Beri ruang untuk footer */
        }

        footer {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
        }
    </style>
    <title>Project</title>
</head>
<body>

<div class="content">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold text-white" href="/">Project</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto me-3">
                    <li class="nav-item">
                        <a class="nav-link text-white active" aria-current="page" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/artikel">Project</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


<!-- Footer -->
<footer class="bg-dark text-white text-center py-3">
    <div class="container">
        <p>&copy; 2024 Project. All rights reserved.</p>
        <p>
            <a href="/privacy" class="text-white">Privacy Policy</a> | 
            <a href="/terms" class="text-white">Terms of Service</a>
        </p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
