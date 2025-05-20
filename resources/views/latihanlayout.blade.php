<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Helpfinder Dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400&family=Montserrat:wght@400&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: "Inter", sans-serif;
        }
        .sidebar {
            width: 225px;
            height: 100vh;
            background-color: #003268;
            color: white;
            padding: 20px;
            position: fixed;
            top: 0;
            left: 0;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .content {
            margin-left: 270px;
            padding: 20px;
        }
        .bold-title {
            font-weight: bold;
        }
        .profile {
            display: flex;
            align-items: center;
            margin-bottom: 0.5rem;
        }
        .profile img {
            border-radius: 50%;
            width: 50px;
            height: 50px;
            margin-right: 10px;
        }
        .profile-info {
            line-height: 1.2;
        }
        .profile-info .name {
            font-weight: bold;
        }
        .profile-info .email {
            font-size: 0.9rem;
        }
        .nav-item {
            margin-top: 0.5rem;
        }
        .nav-link {
            font-family: "Montserrat", sans-serif;
            font-size: 0.85rem;
        }
        .content h3 {
            margin-bottom: 1.8rem;
        }
        .btn-primary {
            background-color: #003268;
            border-color: #003268;
        }
        .btn-primary:hover {
            background-color: #00254d;
            border-color: #00254d;
        }
        .inter {
            font-family: "Inter", sans-serif;
            font-optical-sizing: auto;
            font-weight: 400;
            font-style: normal;
        }
        .montserrat {
            font-family: "Montserrat", sans-serif;
            font-optical-sizing: auto;
            font-weight: 400;
            font-style: normal;
        }
        .subtitle {
            font-size: 1rem;
            margin-bottom: 1rem;
        }
        .center-image {
            display: block;
            margin: 100px auto;
            max-width: 35%;
            height: auto;
            margin-bottom: 10px;
        }
        .image-subtitle {
            text-align: center;
            margin-top: 10px;
            font-size: 1.5rem;
            color: #333;
            font-weight: bold;
        }
        .form-control {
            font-family: "Inter", sans-serif;
            font-size: 0.9rem;
        }
        .logout-box {
            background-color: #63a2e6;
            color: white;
            text-align: center;
            padding: 3px;
            border-radius: 3px;
            margin-top: auto;
            font-size: 0.85rem;
            width: 50%; /* Set a specific width */
            margin-left: auto;
            margin-right: auto;
        }
        .logout-box:hover {
            background-color: #001f3a;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <div>
            <div class="profile">
                <img src="https://lh3.googleusercontent.com/d/1cdfk4ev6LZ9V-oq3B1WoqVh6EkOWdfz_" alt="User Profile">
                <div class="profile-info">
                    <div class="name">User</div>
                    <div class="email">user@gmail.com</div> 
                </div>
            </div>
            <ul class="nav flex-column">
                <li class="nav-item"><a href="#" class="nav-link text-white montserrat">Helperlog</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-white montserrat">Helperfind</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-white montserrat">Helper assist</a></li>
            </ul>
        </div>
        <div class="logout-box">
            <a href="#" class="text-white">Logout</a>
        </div>
    </div>

    <!-- Main Content -->
    <div class="content">
        <h3 class="bold-title">Helpfinder Dashboard</h3>
        <h5 class="bold-title subtitle">Filter PRT Berdasarkan</h5>
        <div class="row">
            <div class="col-md-2">
                <select class="form-control">
                    <option selected>Kategori Pekerjaan</option>
                    <option>IT</option>
                    <option>Keuangan</option>
                    <option>Pendidikan</option>
                    <option>Kesehatan</option>
                    <option>Manufaktur</option>
                    <option>Perdagangan</option>
                    <option>Pariwisata</option>
                    <option>Transportasi</option>
                    <option>Hukum</option>
                    <option>Desain</option>
                </select>
            </div>
            <div class="col-md-2">
                <select class="form-control">
                    <option selected>Pilih Lokasi</option>
                    <option>Jakarta</option>
                    <option>Bandung</option>
                    <option>Surabaya</option>
                </select>
            </div>
            <div class="col-md-2">
                <select class="form-control">
                    <option selected>Pilih Rating</option>
                    <option>⭐ 1</option>
                    <option>⭐⭐ 2</option>
                    <option>⭐⭐⭐ 3</option>
                    <option>⭐⭐⭐⭐ 4</option>
                    <option>⭐⭐⭐⭐⭐ 5</option>
                </select>
            </div>
            <div class="col-md-2">
                <select class="form-control">
                    <option selected>Pilih Umur</option>
                    <option>18 - 25</option>
                    <option>26 - 35</option>
                    <option>36 - 45</option>
                    <option>46+</option>
                </select>
            </div>
            <div class="col-md-2">
                <button class="btn btn-primary btn-block">
                    <i class="fas fa-search"></i> Cari
                </button>
            </div>
        </div>
        <!-- Centered Image -->
        <img src="https://lh3.googleusercontent.com/d/1lX6-Nbo8l45fDM3fUucrHo9DuR5ANnxw" alt="User Profile" class="center-image">
        <h5 class="image-subtitle">Maaf, kami tidak bisa menemukan PRT yang cocok</h5>
        <h5 class="image-subtitle">Coba pencarian lain</h5>
    </div>

</body>
</html>
