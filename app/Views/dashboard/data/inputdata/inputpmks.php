<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <table class="table">
        <thead>

            <tr>
                <th>No </th>
                <th>KK</th>
                <th>NIK</th>
                <th>Kecamatan</th>
                <th>Kelurahan</th>
                <th>Alamat</th>
                <th>Kepala Keluarga</th>
                <th>Jenis Kelamin </th>
                <th>Jumlah Art</th>
                <th>Tahun Input</th>

            </tr>
        </thead>
        <tbody> <?php $i = 1; ?>
            <?php foreach ($penduduk as $key) : ?>
                <tr>
                    <td scope="row"><?= $i ?></td>
                    <td><?= $key['kk'] ?></td>
                    <td><?= $key['nik'] ?></td>
                    <td><?= $key['kecamatan'] ?></td>
                    <td><?= $key['kelurahan'] ?></td>
                    <td><?= $key['alamat'] ?></td>
                    <td><?= $key['nama_krt'] ?> </td>
                    <td><?= $key['jenis_kelamin'] ?></td>
                    <td><?= $key['jumlah_art'] ?></td>
                    <td><?= $key['tahun_input'] ?></td>
                </tr>
                <?php $i++ ?>
            <?php endforeach ?>
        </tbody>
    </table>

</div>
<!-- /.container-fluid -->

</div>