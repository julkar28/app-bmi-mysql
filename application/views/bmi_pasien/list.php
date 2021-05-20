<a class="nav-link" href="http://localhost/app-bmi-mysql/index.php/pasien/list">Pasien</a>
<a class="nav-link active" href="http://localhost/app-bmi-mysql/index.php/bmi_pasien/list">BMI<span class="sr-only">(current)</span></a>
</div>
</div>
</div>
</nav>
<div class="container">
    <div class="col-md-12 mt-3">
        <h3>
            Daftar BMI Pasien
        </h3>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Tanggal Periksa</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Gender</th>
                    <th>Berat</th>
                    <th>Tinggi</th>
                    <th>BMI</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $nomor = 1;
                foreach ($pasien->result() as $pasien) {
                    if ($pasien->bmi < 18.5) {
                        $stat_color = 'alert-warning';
                    } else if ($pasien->bmi < 25.0) {
                        $stat_color = 'alert-success';
                    } else if ($pasien->bmi < 30.0) {
                        $stat_color = 'alert-warning';
                    } else {
                        $stat_color = 'alert-danger';
                    }

                    echo '
 <tr>
 <td>' . $nomor . '</td>
 <td>' . $pasien->tanggal . '</td>
 <td>' . $pasien->kode . '</td>
 <td>' . $pasien->nama . '</td>
 <td>' . $pasien->gender . '</td>
 <td>' . $pasien->berat . '</td>
 <td>' . $pasien->tinggi . '</td>
 <td>' . $pasien->bmi . '</td>
 <td class="'. $stat_color .'">' . $pasien->status_bmi . '</td>
 <td><a href="http://localhost/app-bmi-mysql/index.php/bmi_pasien/view/' . $pasien->id . '">view</a></td>
 </tr>';
                    $nomor++;
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<script>
    document.title = 'BMI App MySQL | BMI Pasien';
</script>