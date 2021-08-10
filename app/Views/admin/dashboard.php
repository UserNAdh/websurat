<?= $this->extend('admin/layout'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <?= session()->get('pesan'); ?>

    <div class="row">
        <?php foreach ($surat as $s) : ?>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    <?= $s['nama_surat']; ?></div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
                            </div>
                            <div class="col-auto">
                                <!-- <i class="fas fa-calendar fa-2x text-gray-300"></i> -->
                                <i class="fas fa-envelope-open-text fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</div>
<?= $this->endSection(); ?>