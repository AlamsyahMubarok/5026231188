<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linktree</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style type="text/css">
      /* Video background styling */
      #bg-video {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: -1;
            object-fit: cover;
        }
        body {
            margin: 100px;
            overflow-x: hidden;
            color: white;
            text-shadow: 1px 1px 3px rgba(0,0,0,0.8);
        }
        .card {
            background-color: rgba(255, 255, 255, 0.8);
            transition: all 0.3s ease;
        }
        .card:hover{
         background-color: #9aa1a8;
         transform: translateY(-5px);
         }
         .profile-img {
            width: 100px;
            border-radius: 50%;
            border: 3px solid white;
            box-shadow: 0 0 10px rgba(0,0,0,0.5);
         }

    </style> <!-- card hover mengganti warna kotak saat di drag mouse -->
</head>
<body>
   <!-- Video Background -->
    <video autoplay muted loop id="bg-video">
        <source src="https://files.catbox.moe/sihtrn.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video> 
    <center>
      <img class="profile-img" src="https://i.imgur.com/U863O4U.png" alt="NBA Fanbase">
        <h2>🏀 NBA Fanbase</h2>
        <p>
            🔥 Highlights | 🗓️ Jadwal | 📊 Statistik<br>
        </p> <!-- membuat deskripsi -->
        <div class="card col-lg-4 m-2" style="border-radius: 30px;"> <!-- lg 4 itu ukurannya 4 cm terus (m-2) itu margin --> <!--border-radius buat ngubah sudut jadi tumpul-->
           <a href="https://www.youtube.com/playlist?list=PLlVlyGVtvuVnv4qfRHDDBXm2e757jt9I3" target="_blank" style="text-decoration: none; color:black;"> <!-- ganti warna text jadi hitam -->
            <div class="card-body"> <!-- Bikin card bodynya -->
                🎥 Highlight Terbaru

            </div>
           </a>

        </div>
        <div class="card col-lg-4 m-2" style="border-radius: 30px;">
            <a href="https://www.espn.com/nba/schedule" target="_blank" style="text-decoration: none; color:black;"> <!-- ganti warna text jadi hitam -->
             <div class="card-body">
                🗓️ Jadwal & Skor Live
 
             </div>
            </a>
          </div>
          <div class="card col-lg-4 m-2" style="border-radius: 30px;">
            <a href="https://www.espn.com/nba/stats" target="_blank" style="text-decoration: none; color:black;"> <!-- ganti warna text jadi hitam -->
             <div class="card-body">
                📊 Statistik Pemain & Tim
 
             </div>
            </a> 
         </div>
         <div class="card col-lg-4 m-2" style="border-radius: 30px;">
            <a href="https://bleacherreport.com/nba" target="_blank" style="text-decoration: none; color:black;"> <!-- ganti warna text jadi hitam -->
                <div class="card-body">
                    📰 Berita & Rumor NBA
                </div>
            </a>
        </div>
        
        <div class="card col-lg-4 m-2" style="border-radius: 30px;">
            <a href="https://www.instagram.com/nba/" target="_blank" style="text-decoration: none; color:black;"> <!-- ganti warna text jadi hitam -->
                <div class="card-body">
                    📱 Instagram Resmi NBA
                </div>
            </a>
          </div>
         
          <div class="card col-lg-4 m-2" style="border-radius: 30px;">
            <a href="https://store.nba.com/" target="_blank" style="text-decoration: none; color:black;"> <!-- ganti warna text jadi hitam -->
                <div class="card-body">
                    🛒 Belanja Merchandise NBA
                </div>
            </a>
        </div>
        <br>
        <p style="font-size: 10pt;"><b>Copyright El Barok</b></p>
    </center>
      
      
      
    
</body>
</html>