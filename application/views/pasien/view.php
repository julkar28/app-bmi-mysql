<a class="nav-link active" href="http://localhost/app-bmi-mysql/index.php/pasien/list">Pasien<span class="sr-only">(current)</span></a>
<a class="nav-link" href="http://localhost/app-bmi-mysql/index.php/bmi_pasien/list">BMI</a>
</div>
</div>
</div>
</nav>
<div class="container">
    <div class="col-md-12 mt-3">
        <h3>
            Data Pasien #ID : <?= $pasien->id ?>
        </h3>
        <table class="table table-hover table-striped">
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
                <td>Tempat, Tgl Lahir</td>
                <td>: <?= $pasien->tmp_lahir ?>, <?= $pasien->tgl_lahir ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>: <?= $pasien->email ?></td>
            </tr>
        </table>
    </div>
</div>
<script>
    document.title = 'BMI App MySQL | Pasien';
</script>