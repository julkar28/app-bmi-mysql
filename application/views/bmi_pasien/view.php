<a class="nav-link" href="http://localhost/app-bmi-mysql/index.php/pasien/list">Pasien</a>
<a class="nav-link active" href="http://localhost/app-bmi-mysql/index.php/bmi_pasien/list">BMI<span class="sr-only">(current)</span></a>
</div>
</div>
</div>
</nav>
<div class="container">
    <div class="col-md-12 mt-3">
        <h3>
            Data BMI Pasien #ID : <?= $pasien->id ?>
        </h3>
        <table class="table table-hover table-striped">
            <tr>
                <td>Tanggal Periksa</td>
                <td>: <?= $pasien->tanggal ?></td>
            </tr>
            <tr>
                <td>Kode Pasien</td>
                <td>: <?= $pasien->kode ?></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>: <?= $pasien->nama ?></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>: <?= $pasien->gender ?></td>
            </tr>
            <tr>
                <td>Berat</td>
                <td>: <?= $pasien->berat ?></td>
            </tr>
            <tr>
                <td>Tinggi</td>
                <td>: <?= $pasien->tinggi ?></td>
            </tr>
            <tr>
                <td>BMI</td>
                <td>: <?= $pasien->bmi ?></td>
            </tr>
            <tr>
                <td>Status</td>
                <td>: <?= $pasien->status_bmi ?></td>
            </tr>
            <tr>
                <td>Catatan</td>
                <td>: <?= $pasien->catatan ?></td>
            </tr>
        </table>
    </div>
</div>
<script>
    document.title = 'BMI App MySQL | BMI Pasien';
</script>