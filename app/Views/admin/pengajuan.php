<?= $this->extend('admin/layout'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NIK</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Surat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?> <?php foreach ($psurat as $p) : ?> <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $p['nik']; ?></td>
                                <td><?= $p['nama']; ?></td>
                                <td><img src="/img/<?= $p['foto']; ?>" alt="" class="foto"></td>
                                <td><?= $p['id_surat']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>