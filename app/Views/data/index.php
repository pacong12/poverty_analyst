<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="card">
        <img class="card-img-top" src="holder.js/100x180/" alt="">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>no</th>
                        <th>Desa</th>
                        <th>Jumlah Penduduk</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($data as $row) : ?>

                        <tr>

                            <td scope="row"><?= $i; ?></td>

                            <td><?= $row['nama_desa'] ?></td>
                            <td><?= $row['total_penduduk'] ?></td>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                        </tr>


                </tbody>
            </table>
        </div>

    </div>
    <!-- Page Heading -->

</div>
<!-- /.container-fluid -->

</div>