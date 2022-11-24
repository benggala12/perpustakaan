<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>

<!--Pembuatan Content-->

  <div class="container-fluid mt-3"> 
        <h3>Tambah Kelas</h3>
        <form action="proses_tambah_kelas.php" method="post">
        nama kelas:
        <input type="text" name="nama_kelas" value="" class="form-control">
        kelompok :
        <input type="text" name="kelompok" value="" class="form-control">
        angkatan :
        <select name="angkatan" class="form-control">
            <option value="30">Angkatan 30</option>
            <option value="31">Angkatan 31</option>
        </select>
        <br>
        <br>
        <input type="submit" name="simpan" value="Tambah Kelas" class="btn btn-primary">
        <br>
        <br>
        <a class="btn btn-primary" href="tampil_siswa.php" role="button">Back</a>
        </form>
  </div>

<!--Link dari Bootstrap-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
        </script>

</body>
</html>

