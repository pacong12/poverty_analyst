<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <table class="table">
        <thead>

            <tr>
                <th>No </th>
                <th>Nama</th>
                <th>Kecamatan</th>
                <th>Kelurahan</th>
                <th>jumlah Tanggungan</th>
                <th>Keterangan Rumah</th>
                <th>Jumlah Aset</th>
                <th>Program Sosial</th>
                <th>Bobot tanggungan</th>
                <th>Bobot Keterangan Rumah</th>
                <th>Bobot Jumlah Aset</th>

                <th>Bobot Program Sosial</th>
                <th>Total Bobot</th>
                <th>Klasifikasi</th>

            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($detail as  $key => $var) : ?>
                <tr>
                    <td scope="row"><?= $i ?></td>
                    <td><?= $var->nama_krt ?></td>
                    <td><?= $var->nama_kecamatan ?></td>
                    <td><?= $var->nama_desa ?></td>
                    <td><?= $var->jumlah_tanggungan ?></td>
                    <td><?= $var->keterangan_rumah ?></td>
                    <td><?= $var->jumlah_kepemilikan_aset ?></td>
                    <td><?= $var->program_sosial ?></td>
                    <td><?= $var->bobot_tanggungan ?></td>
                    <td><?= $var->bobot_keterangan_rumah ?></td>
                    <td><?= $var->bobot_jumlah_aset ?></td>
                    <td><?= $var->bobot_program_sosial ?></td>
                    <td><?= $var->total_bobot ?></td>
                    <td><?= $var->klasifikasi ?></td>

                </tr>
                <?php $i++ ?>
            <?php endforeach; ?>

        </tbody>
    </table>

</div>
<!-- /.container-fluid -->

</div>