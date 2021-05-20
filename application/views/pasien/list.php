<a class="nav-link active" href="http://localhost/app-bmi-mysql/index.php/pasien/list">Pasien<span class="sr-only">(current)</span></a>
<a class="nav-link" href="http://localhost/app-bmi-mysql/index.php/bmi_pasien/list">BMI</a>
</div>
</div>
</div>
</nav>
<div class="container">
    <div class="col-md-12 mt-3">
        <h3>
            Daftar Pasien
        </h3>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Gender</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $nomor = 1;
                foreach ($pasien->result() as $pasien) {
                    echo '
 <tr>
 <td>' . $nomor . '</td>
 <td>' . $pasien->kode . '</td>
 <td>' . $pasien->nama . '</td>
 <td>' . $pasien->gender . '</td>
 <td>' . $pasien->tmp_lahir . '</td>
 <td>' . $pasien->tgl_lahir . '</td>
 <td>' . $pasien->email . '</td>
 <td><a href="http://localhost/app-bmi-mysql/index.php/pasien/view/' . $pasien->id . '">view</a></td>
 </tr>';
                    $nomor++;
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<script>
    document.title = 'BMI App MySQL | Pasien';
</script>