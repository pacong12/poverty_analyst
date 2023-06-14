<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <table class="table">
        <thead>

            <tr>
                <th>No </th>
                <th>KK</th>
                <th>NIK</th>
                <th>Nama Lengkap</th>
                <th>Kecamatan</th>
                <th>Desa</th>
                <th>Action</th>


            </tr>
        </thead>
        <tbody> <?php $i = 1; ?>
            <?php foreach ($tampil as $key => $val) : ?>
                <tr>
                    <td scope="row"><?= $i ?></td>
                    <td><?= $val->nik ?></td>
                    <td><?= $val->kk ?></td>
                    <td><?= $val->nama_krt ?></td>
                    <td><?= $val->nama_kecamatan ?></td>
                    <td><?= $val->nama_desa ?></td>

                </tr>
                <?php $i++ ?>
            <?php endforeach ?>
        </tbody>
    </table>

</div>
<!-- /.container-fluid -->

</div>