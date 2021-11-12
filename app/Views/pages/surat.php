<?php if (session()->get('jabatan') == "1") {
    $this->extend('layout/template_kependudukan');
} else {
    $this->extend('layout/template_surat');
} ?>

<?= $this->section('css'); ?>
<link href="../assets/plugins/jquery-steps/css/jquery.steps.css" rel="stylesheet">
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-12 m-b-30">
            <h3 class="d-inline">Pembuatan Surat</h3>
            <p class="text-muted">Desa Salajambe</p>
        </div>

        <!-- Beggin Data -->
        <div class="card col-6">
            <div class="card-body">
                <form action="/surat/generate" method="POST">
                    <div class="form-group">
                        <label>NIK</label>
                        <select class="form-control selectpicker" name="nik" data-live-search="true" required>
                            <option value="">- - NIK - -</option>
                            <?php foreach ($kependudukan as $k) :  ?>
                                <option value='<?= $k['nik']; ?>'><?= $k['nik']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Jenis Surat</label>
                        <select class="form-control" name="jenis_surat" required>
                            <option value="">- - Jenis Surat - -</option>
                            <option value="1">Surat Keteranga Domisili</option>
                            <!-- <option value="2">Surat Keterangan Pindah</option> -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Nomor Surat</label>
                        <input type="text" class="form-control <?= ($validation->hasError('nomor_surat')) ? 'is-invalid' : ''; ?>" placeholder="Nomor Surat" name="nomor_surat" value="<?= old('nomor_surat'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('nomor_surat'); ?>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Buat Surat</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- #/ container -->

<?= $this->endSection(); ?>

<?= $this->section('js'); ?>
<script src="assets/plugins/jquery-steps/build/jquery.steps.min.js"></script>
<script src="assets/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="assets/js/plugins-init/jquery-steps-init.js"></script>
<?= $this->endSection(); ?>