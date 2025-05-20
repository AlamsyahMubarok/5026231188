<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Linktree</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <!-- Import Montserrat and Inter fonts from Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet"/>
    <style type="text/css">
        body {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            color: white;
            text-shadow: 1px 1px 3px rgba(0,0,0,0.8);
            background-color: black;
            font-family: 'Montserrat', sans-serif; /* Set default font */
        }

        /*COVER PHOTO*/
        .cover-photo {
            background-image: url('https://i.imgur.com/9pWB4Lz.png'); /* Gambar cover dari imgur */
            background-size: cover; /* Biar gambar penuh menutupi div */
            background-position: center; /* Posisinya di tengah */
            background-repeat: no-repeat;
            height: 400px; /* Tinggi sesuai gambar aslinya */
            position: relative;
            width: 100%;
            max-width: 600px; /* Biar ukurannya nggak terlalu lebar */
            margin: 50px auto 30px auto; /* menambahkan ruang margin */
            border-radius: 15px; /* Sudut membulat */
        }

        .cover-text {
            position: absolute;
            top: 80%; /* mindahin text */
            left: 50%;
            transform: translate(-50%, -50%); /* Tengah vertikal dan horizontal */
            text-align: center;
            width: 100%;
        }

        .cover-text h3 {
            font-size: 18px; /* kecilin font @NBA2K */
            font-weight: 600; /* Montserrat SemiBold */
        }

        .cover-text p {
            font-size: 14px;
            font-weight: 600; /* Montserrat SemiBold */
            font-family: 'Montserrat', sans-serif; /* ngecek monsterrat */
        }

        /*ISI CARD*/
        .content-container {
            padding: 0 100px;
        }

        .card {
            background-color: rgb(255, 255, 255); /* bisa diatur biar transparan dikit */
            transition: all 0.3s ease;
            margin: 0 auto; /* taruh card di tengah */
            width: 600px; /* Fixed width untuk nyamain sama cover */
            border-radius: 15px; /* border-radius buat ngubah sudut jadi tumpul */
            font-family: 'Inter', sans-serif; /* ganti font ke inter */
            font-size: 16px; /* atur font teks */
            height: 70px;
            display: flex;
            justify-content: flex-start; /* Align items*/
            padding-left: 10px; /* tambahkan padding di kiri */
        }

        .card-body {
            display: flex;
            justify-content: flex-start; /* align teks ke kiri */
            align-items: center;
            width: 100%;
        }

        .card-body img {
            width: 40px;
            height: 40px;
            margin-right: 100px;
            align-self: flex-start; /* Align image to top left */
        }

        .card:hover {
            background-color: #9aa1a8;
            transform: translateY(-5px); /* Bikin naik dikit saat dihover */
            color: white;
        }

        .card:hover .card-body {
            color: white;
        }

        a {
            text-decoration: none; /* Hilangin garis bawah link */
            color: black; /* ganti warna text jadi hitam */
        }

        p.copyright {
            font-size: 10pt;
        }

        /*SOCIAL ICON */
        .social-icons {
            position: absolute;
            top: 55%; /* posisi bawah teks*/
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .social-icons a img {
            width: 35px;
            height: 35px;
            transition: transform 0.3s ease;
        }

        .social-icons a img:hover {
            transform: scale(1.2);
        }

    </style> <!-- card hover mengganti warna kotak saat di drag mouse -->
</head>
<body>
    <center>
        <!--COVER SECTION -->
        <div class="cover-photo">
            <div class="cover-text">
                <h3>@NBA2K</h3>
                <p>Ball Over Everything. Buy #NBA2K25 now</p>
            </div>
        </div>

       <!-- SOCIAL ICONS SECTION -->
       <div class="social-icons">
           <a href="https://www.instagram.com/nba2k" target="_blank"><img src="https://i.imgur.com/LrK0Quy.png" alt="Instagram"/></a>
           <a href="https://www.tiktok.com/@nba2k" target="_blank"><img src="https://i.imgur.com/rwZXQZy.png" alt="TikTok"/></a>
           <a href="https://x.com/nba2k" target="_blank"><img src="https://i.imgur.com/rwZXQZy.png" alt="X/Twitter"/></a>
           <a href="https://www.youtube.com/user/2KSports/2k" target="_blank"><img src="https://i.imgur.com/rgT8bt7.png" alt="YouTube"/></a>
           <a href="https://www.twitch.tv/nba2k" target="_blank"><img src="https://i.imgur.com/fPuyPi3.png" alt="Twitch"/></a>
           <a href="https://www.facebook.com/NBA2K" target="_blank"><img src="https://i.imgur.com/TRY5PQ7.png" alt="Facebook"/></a>
           <a href="https://www.threads.net/@nba2k" target="_blank"><img src="https://i.imgur.com/ArPGvAm.png" alt="Threads"/></a>
       </div>

        <!-- CARD SECTION -->
        <div class="content-container">
            <div class="card col-lg-5 m-3"> <!-- lg 4 itu ukurannya 4 kolom grid (m-2) itu margin -->
                <a href="https://nba.2k.com/2k25/courtside-report/season-6/?utm_medium=social&utm_source=linktree&utm_campaign=nba+2k25+%7C+season+6+courtside+report" target="_blank">
                    <div class="card-body"> <!-- Bikin card bodynya -->
                        <img src="https://i.imgur.com/BEHh0Ut.png" alt="Logo 1">
                        NBA 2K25 | Season 6 Courtside Report
                    </div>
                </a>
            </div>

            <div class="card col-lg-5 m-3">
                <a href="https://nba.2k.com/2k25/buy/?utm_medium=social&utm_source=linktree&utm_campaign=buy+nba+2k25+today" target="_blank">
                    <div class="card-body">
                        <img src="https://i.imgur.com/4NDaTev.png" alt="Logo 2">
                        Buy NBA 2K25 Today
                    </div>
                </a>
            </div>

            <div class="card col-lg-5 m-3">
                <a href="https://store.empi.re/pages/empire-2k25-present-music-to-ball-to" target="_blank">
                    <div class="card-body">
                        <img src="https://i.imgur.com/AsMxO5I.png" alt="Logo 3">
                        Empire "Music to Ball To" Vinyl Box Set
                    </div>
                </a>
            </div>

            <div class="card col-lg-5 m-3">
                <a href="https://nba.2k.com/2k25/ratings/?utm_medium=social&utm_source=linktree&utm_campaign=nba+2k25+%7C+official+player+ratings" target="_blank">
                    <div class="card-body">
                        <img src="https://i.imgur.com/AfAuwxu.png" alt="Logo 4">
                        NBA 2K25 | Official Player Ratings
                    </div>
                </a>
            </div>

            <div class="card col-lg-5 m-3">
                <a href="https://nba.2k.com/2k25/courtside-report/season-5/?utm_medium=social&utm_source=linktree&utm_campaign=nba+2k25+%7C+season+5+courtside+report" target="_blank">
                    <div class="card-body">
                        <img src="https://i.imgur.com/T4EVypw.png" alt="Logo 5">
                        NBA 2k25 | Season 5 Courtside Report
                    </div>
                </a>
            </div>

            <div class="card col-lg-5 m-3">
                <a href="https://nba.2k.com/2k25/courtside-report/season-4/?utm_medium=social&utm_source=linktree&utm_campaign=nba+2k25+%7C+season+4+courtside+report" target="_blank">
                    <div class="card-body">
                        <img src="https://i.imgur.com/P8u70C0.png" alt="Logo 6">
                        NBA 2k25 | Season 4 Courtside Report
                    </div>
                </a>
            </div>

            <div class="card col-lg-5 m-3">
                <a href="https://nba.2k.com/2k25/courtside-report/season-3/?utm_medium=social&utm_source=linktree&utm_campaign=nba+2k25+%7C+season+3+courtside+report" target="_blank">
                    <div class="card-body">
                        <img src="https://i.imgur.com/eQ6vSFc.png" alt="Logo 7">
                        NBA 2k25 | Season 3 Courtside Report
                    </div>
                </a>
            </div>

            <div class="card col-lg-5 m-3">
                <a href="https://discord.com/servers/nba-2k-887383292142297089" target="_blank">
                    <div class="card-body">
                        <img src="https://i.imgur.com/Lkqzimd.png" alt="Logo 8">
                        Join the NBA 2K Discord Server
                    </div>
                </a>
            </div>



        </div>
    </center>
</body>
</html>
