<table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Nama Kelas</th><th>Kelompok</th><th>Angkatan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                include "koneksi.php";
                $qry_siswa=mysqli_query($conn,"select * from siswa join kelas on kelas.id_kelas=siswa.id_kelas");
                $no=0;
                while($data_siswa=mysqli_fetch_array($qry_siswa)){
                    $no++;?>
                    <tr>
                        <td><?=$no?></td>
                        <td><?=$data_siswa['nama_kelas']?></td>
                        <td><?=$data_siswa['kelompok']?></td>
                        <td><?=$data_siswa['angkatan']?></td>
                        <td><a href="ubah_siswa.php?id_siswa<?=$data_siswa['id_kelas']?>" class="btn btn-success">Ubah</a></td>
                        <td><a href="hapus.php?id_siswa=<?=$data_siswa['id_kelas']?>" onclick="return confirm
                        ('Apakah anda yakin ingin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>

                    </tr>

                    <?php
                }
                ?>
            </tbody>
        </table>
    <a href="tambah_kelas.php" class="btn btn-primary">Add Kelas</a>