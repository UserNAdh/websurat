<?= $this->extend('template'); ?>

<?= $this->section('content'); ?>
<!-- Page Content-->
<section class="pt-4">
    <div class="container px-lg-5">
        <!-- Page Features-->
        <div class="row gx-lg-5">
            <?php foreach ($surat as $s) : ?>
                <div class="col-lg-6 col-xxl-4 mb-5">
                    <div class="card bg-light border-0 h-100">
                        <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-collection"></i></div>
                            <h2 class="fs-4 fw-bold"><?= $s['nama_surat']; ?></h2>
                            <p class="mb-0"><?= $s['ket']; ?></p>
                            <a class="text-decoration-none" href="/surat/<?= $s['slug']; ?>">
                                Ajukan Surat
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>