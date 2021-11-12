<?php if (session()->get('jabatan') == "1") {
    $this->extend('layout/template_kependudukan');
} else {
    $this->extend('layout/template_surat');
} ?>

<?= $this->section('content'); ?>
<div class="container-fluid mt-3">
    <div class="row">
        <div class="col">
            <div class="card gradient-1">
                <div class="card-body">
                    <h3 class="card-title text-white">Total Jumlah Penduduk</h3>
                    <div class="d-inline-block">
                        <h2 class="text-white"><?= $jumlah; ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- #/ container -->

<?= $this->endSection(); ?>