<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linktree</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style type="text/css">

       body {
    margin: 100px;
    overflow-x: hidden;
    color: white;
    text-shadow: 1px 1px 3px rgba(0,0,0,0.8);
    background-image: url('https://img.freepik.com/free-photo/plain-smooth-green-wall-texture_53876-129746.jpg?uid=R180122720&ga=GA1.1.719112501.1743171868&semt=ais_hybrid&w=740');
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
}
 h2 {
            margin-bottom: 30px;
        }


         .card {
            background-color: rgba(255, 255, 255, 0.8);
            transition: all 0.3s ease;
            margin: 20px;
            margin-bottom: 40px;
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
    <center>
        <h2>Frontend</h2>

      <div class="card col-lg-4 m-2" style="border-radius: 30px;">
            <a href="{{ url('/blog') }}" style="text-decoration: none; color:black;">
        <div class="card-body">
             Blog
             </div>
            </a>
        </div>

       <div class="card col-lg-4 m-2" style="border-radius: 30px;">
            <a href="{{ url('/bootstrap1') }}" style="text-decoration: none; color:black;">
        <div class="card-body">
             Bootstrap
             </div>
            </a>
        </div>

        <div class="card col-lg-4 m-2" style="border-radius: 30px;">
            <a href="{{ url('/ets') }}" style="text-decoration: none; color:black;">
        <div class="card-body">
            ETS
                 </div>
             </a>
        </div>

         <div class="card col-lg-4 m-2" style="border-radius: 30px;">
            <a href="{{ url('/template1') }}" style="text-decoration: none; color:black;">
        <div class="card-body">
            Template 1
             </div>
            </a>
        </div>

         <div class="card col-lg-4 m-2" style="border-radius: 30px;">
            <a href="{{ url('/index') }}" style="text-decoration: none; color:black;">
        <div class="card-body">
            Index
             </div>
            </a>
        </div>

         <div class="card col-lg-4 m-2" style="border-radius: 30px;">
            <a href="{{ url('/js1') }}" style="text-decoration: none; color:black;">
        <div class="card-body">
            Js 1
             </div>
            </a>
        </div>

         <div class="card col-lg-4 m-2" style="border-radius: 30px;">
            <a href="{{ url('/js2') }}" style="text-decoration: none; color:black;">
        <div class="card-body">
            Js 2
             </div>
            </a>
        </div>

         <div class="card col-lg-4 m-2" style="border-radius: 30px;">
            <a href="{{ url('/Kedua') }}" style="text-decoration: none; color:black;">
        <div class="card-body">
            Belajar kedua
             </div>
            </a>
        </div>

         <div class="card col-lg-4 m-2" style="border-radius: 30px;">
            <a href="{{ url('/latihanlayout') }}" style="text-decoration: none; color:black;">
        <div class="card-body">
            Latihan Layout
             </div>
            </a>
        </div>

         <div class="card col-lg-4 m-2" style="border-radius: 30px;">
            <a href="{{ url('/linktree') }}" style="text-decoration: none; color:black;">
        <div class="card-body">
            Linktree NBA
             </div>
            </a>
        </div>

         <div class="card col-lg-4 m-2" style="border-radius: 30px;">
            <a href="{{ url('/PercobaanKetiga') }}" style="text-decoration: none; color:black;">
        <div class="card-body">
            Belajar ketiga
             </div>
            </a>
        </div>

         <div class="card col-lg-4 m-2" style="border-radius: 30px;">
            <a href="{{ url('/pertama') }}" style="text-decoration: none; color:black;">
        <div class="card-body">
            Belajar pertama
             </div>
            </a>
        </div>

         <div class="card col-lg-4 m-2" style="border-radius: 30px;">
            <a href="{{ url('/tes') }}" style="text-decoration: none; color:black;">
        <div class="card-body">
            Tes
             </div>
            </a>
        </div>

         <div class="card col-lg-4 m-2" style="border-radius: 30px;">
            <a href="{{ url('/Tugas1') }}" style="text-decoration: none; color:black;">
        <div class="card-body">
            Tugas 1
             </div>
            </a>
        </div>

         <div class="card col-lg-4 m-2" style="border-radius: 30px;">
            <a href="{{ url('/tugaslinktree') }}" style="text-decoration: none; color:black;">
        <div class="card-body">
            Tugas Linktree
             </div>
            </a>
        </div>

         <div class="card col-lg-4 m-2" style="border-radius: 30px;">
            <a href="{{ url('/welcome') }}" style="text-decoration: none; color:black;">
        <div class="card-body">
            Welcome
             </div>
            </a>
        </div>


        <br>
    </center>




</body>
</html>
