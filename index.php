<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A dynamic website built using Bootstrap and DataTables.">
    <title>Website AI</title>
    
    <!-- CSS Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- CSS DataTables -->
    <link href="assets/datatables/dataTables.dataTables.css" rel="stylesheet">

    <style>
        /* Header Styles */
        header {
            background: linear-gradient(rgba(0, 0, 100, 0.7), rgba(0, 0, 100, 0.7)), url('assets/images/landing-bg.jpg') center/cover;
            color: #ffffff;
            padding: 120px 0;
            text-align: center;
        }
        header h1 {
            font-size: 2.8rem;
            font-weight: bold;
        }
        header p {
            font-size: 1.1rem;
            max-width: 650px;
            margin: 20px auto;
        }

        /* Button Styles */
        .btn-primary {
            background-color: #007bff;
            border-color: #0056b3;
            color: #ffffff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
        .btn-outline-light {
            color: #ffffff;
            border-color: #ffffff;
        }
        .btn-outline-light:hover {
            background-color: #0056b3;
            border-color: #004085;
        }

        /* Card Section */
        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
            border: 1px solid #b3d1ff;
        }
        .card:hover {
            transform: scale(1.02);
        }
        .card h5 {
            color: #0056b3;
        }
        .card-body {
            color: #333;
        }

        /* Footer Styles */
        footer {
            background-color: #003366;
            color: #ddd;
            padding: 40px 0;
            margin-top: 50px;
        }
        footer h5 {
            font-size: 1.1rem;
            font-weight: bold;
        }
        footer a {
            color: #ddd;
            transition: color 0.3s;
        }
        footer a:hover {
            color: #b3d1ff;
        }

        /* Background Colors */
        body {
            background-color: #e9f2ff;
        }

        /* Navbar Styles */
        nav.navbar {
            background-color: #003366;
        }
        nav.navbar a {
            color: #ffffff;
        }
        nav.navbar a:hover {
            color: #b3d1ff;
        }
    </style>
</head>
<body>
    
<!-- Header -->
<header>
    <h1 class="display-4">Selamat Datang di Website AI</h1>
    <p class="lead">Membangun solusi digital yang inovatif dan intuitif untuk memenuhi kebutuhan Anda.</p>
    <a href="#about" class="btn btn-outline-light btn-lg mt-3">Pelajari Lebih Lanjut</a>
</header>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Website AI</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#about">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#data-table-section">DataTables</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#form-section">Form</a>
                </li>
                <!-- Menambahkan item Kontak -->
                <li class="nav-item">
                    <a class="nav-link" href="#contact">contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<!-- About Section -->
<section id="about" class="container mt-5 text-center">
    <h2 class="mb-4">About Us</h2>
    <p class="text-muted">
    Website kami ini merupakan sebuah platform yang bertujuan untuk memperkenalkan dan menyediakan informasi seputar Artificial Intelligence (AI), teknologi yang memungkinkan mesin untuk melakukan tugas yang sebelumnya hanya bisa dilakukan oleh manusia. Website ini dikembangkan untuk memberikan pemahaman yang lebih baik tentang berbagai jenis AI yang ada saat ini serta cara-cara mereka diterapkan dalam kehidupan sehari-hari.
    </p>
</section>

<!-- Konten -->
<div class="container mt-5">
    <div class="row">
        <!-- Example Card 1 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="assets/image/claude AI.jpg" class="card-img-top" alt="Contoh Gambar 1">
                <div class="card-body">
                    <h5 class="card-title">Claude AI</h5>
                    <p class="card-text">Jelajahi Claude AI, model pintar dari Anthropic yang dirancang untuk memberikan respons aman dan natural!</p>
                    <a href="https://www.udinulis.com/2024/02/claude-ai-assistant-anthropic.html" class="btn btn-primary">Baca Lebih Lanjut</a>
                </div>
            </div>
        </div>
        <!-- Example Card 2 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="assets/image/gpt 2.jpg" class="card-img-top" alt="Contoh Gambar 2">
                <div class="card-body">
                    <h5 class="card-title">Chat GPT</h5>
                    <p class="card-text">Jelajahi ChatGPT, AI pintar yang bisa jawab pertanyaan dan berdialog secara alami!</p>
                    <a href="https://tekno.kompas.com/read/2023/10/01/13000087/apa-itu-chatgpt--pengertian-cara-menggunakan-dan-kegunaannya" class="btn btn-primary">Baca Lebih Lanjut</a>
                </div>
            </div>
        </div>
        <!-- Example Card 3 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="assets/image/logo 3.jpg" class="card-img-top" alt="Contoh Gambar 3">
                <div class="card-body">
                    <h5 class="card-title">Perplexity AI</h5>
                    <p class="card-text">Jelajahi Perplexity, AI yang mengukur seberapa pintar model dalam menebak teks. Semakin rendah, semakin akurat jawabannya!.</p>
                    <a href="https://www.jagoanhosting.com/blog/perplexity-ai/" class="btn btn-primary">Baca Lebih Lanjut</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- DataTables Section -->
<section id="data-table-section" class="container mt-5">
    <h2 class="mb-4 text-center">Informasi DataTables</h2>
    <div class="table-responsive">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama AI</th>
                    <th>Deskripsi</th>
                    <th>Tahun Rilis</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Claude AI</td>
                    <td>Claude adalah AI dari Anthropic yang fokus pada respons aman dan etis.</td>
                    <td>2023</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Chat GPT</td>
                    <td>ChatGPT adalah AI dari OpenAI yang membantu percakapan dan tugas teks lainnya.</td>
                    <td>2020</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Perplexity AI</td>
                    <td>Perplexity adalah model AI yang berfungsi sebagai asisten pencarian dengan jawaban cepat.</td>
                    <td>2022</td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

<!-- Form Section -->
<section id="form-section" class="container mt-5">
    <h2 class="mb-4 text-center">Form</h2>
    <div class="col-md-6 mx-auto"> <!-- Membatasi lebar container form -->
        <form>
            <input type="text" class="form-control mb-2" placeholder="Nama" required>
            <input type="email" class="form-control mb-2" placeholder="Email" required>
            <textarea class="form-control mb-2" rows="2" placeholder="Pesan" required></textarea>
            <button type="submit" class="btn btn-primary w-100">Kirim</button>
        </form>
    </div>
</section>


<!-- Footer -->
<footer class="text-center text-lg-start" id="contact">
    <div class="container p-4">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                <h5>Contact Us</h5>
                <p>Email: mubaroqali19@gmail.com</p>
                <p>Telepon: 083815842693</p>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                <h5>Follow Us</h5>
                <a href="#" class="me-3"><i class="bi bi-facebook"></i> Facebook</a><br>
                <a href="#" class="me-3"><i class="bi bi-twitter"></i> Twitter</a><br>
                <a href="#"><i class="bi bi-instagram"></i> Instagram</a>
            </div>
            <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                <h5>our location</h5>
                <p>Kota Bekasi</p>
                <p>Indonesia</p>
            </div>
        </div>
    </div>
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        <small>&copy; 2024 Website Dinamis. All rights reserved.</small>
    </div>
</footer>



<!-- Scripts -->
<script src="assets/jquery/jquery-3.7.1.js"></script>
<script src="assets/datatables/dataTables.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>

<script>
    new DataTable('#example');
</script>
</body>
</html>
