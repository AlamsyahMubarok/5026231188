<html>
    <head>
        <title>
            Form Pendaftaran ISE 2025
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            function formvalidation()
            {
                var nrp = document.getElementById("nrp").value.;
                var nama = document.getElementById("nama").value;
                var gender = document.getElementById("gender").value;
                
                    // NRP harus diisi dan harus 10 digit angka
                    if (nrp.length !== 10 || isNaN(nrp)) {
                        Swal.fire({
                            title: "Pesan Kesalahan",
                            text: "NRP minimal 10 angka yaa",
                            icon: "error"
                        });
                        document.getElementById("nrp").focus();
                        return false;
                    }

                    // Nama harus diisi, minimal 1 huruf, dan tidak boleh ada angka
                    if (nama.length < 1 || /\d/.test(nama)) {
                        Swal.fire({
                            title: "Pesan Kesalahan",
                            text: "Isi nama minimal 1 huruf dan gabole ada angka",
                            icon: "error"
                        });
                        document.getElementById("nama").focus();
                        return false;
                    }

                // Gender harus dipilih
                if (gender === "") {
                    Swal.fire({
                        title: "Pesan Kesalahan",
                        text: "Silakan pilih jenis kelamin",
                        icon: "error"
                    });
                    document.getElementById("gender").focus();
                    return false;
                }
                
                return true; // Form is valid
        }
        </script><!-- cukup yang perlu diisi saja-->
    </head>
    <body>
        <div class="container">
            <h3>Form Pendaftaran ISE 2025! w/eric</h3>
            <form id="formpendaftaran" action="https://google.co.id" method="get" onsubmit="return formvalidation();">  <!-- onsubmit return false agar tidak langsung tersubmit -->
            NRP :
            <input type="text" id="nrp" class="form-control" placeholder="Silahkan isi NRP 10 Digit, gabole kosong ya sayang" name="nrp" >
            <br>
            Nama :
            <input type="text" id="nama" class="form-control" placeholder="Silahkan isi nama ya" name="nama" > 
            <!-- jika tidak ada nama="" maka nanti datanya tidak ter input --> 
             <!-- menggunakan required jika terpepet -->
            <br>
            <label for="gender">Jenis Kelamin:</label>
            <select id="gender" class="form-control" name="gender">
                <option value="">Pilih Jenis Kelamin</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
            <br>
            <input type="submit" class="btn btn-primary" value="Daftar">
            

            </form>
        </div>
    </body>
</html>
