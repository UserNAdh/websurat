<?= $this->extend('template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2 class="mt-4"></h2>
            <div class="card">
                <div class="card-header">
                    Form Pengajuan <?= $surat['nama_surat']; ?>
                </div>
                <div class="card-body">
                    <!-- <h5 class="card-title">Special title treatment</h5> -->
                    <form action="/psurat/save" method="POST" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <div class="row mb-3">
                            <label for="id_surat" class="col-sm-2 col-form-label">ID Surat</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="id_surat" name="id_surat">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="NIK" class="col-sm-2 col-form-label">NIK</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nik" name="nik">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama" name="nama">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="foto" class="col-sm-2 col-form-label">Foto KTP</label>
                            <div class="col-sm-10">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="foto" name="foto">
                                    <label class="custom-file-label" for="foto"></label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="/surat" class="btn btn-primary">Kembali</a>
                    </form>
                </div>
            </div>
            <h2 class="mt-4"></h2>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>