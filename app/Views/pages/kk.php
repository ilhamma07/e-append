<?php if (session()->get('jabatan') == "1") {
    $this->extend('layout/template_kependudukan');
} else {
    $this->extend('layout/template_surat');
} ?>

<?= $this->section('css'); ?>
<link href="assets/plugins/tables/css/datatable/dataTables.bootstrap4.min.css" rel="stylesheet">
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-12 m-b-30">
            <h3 class="d-inline">Data Seluruh Kartu Keluarga</h3>
            <p class="text-muted">Desa Salajambe</p>

            <!-- Info Status -->
            <?php if ($validation->getErrors()) : ?>
                <div class="alert alert-danger col-12 mt-3">
                    Terdapat kesalahan dalam input
                </div>
            <?php endif; ?>

            <?php if (session()->getFlashdata('simpanKK')) : ?>
                <div class="alert alert-success col-12 mt-3">
                    <?= session()->getFlashdata('simpanKK'); ?>
                </div>
            <?php endif; ?>

            <?php if (session()->getFlashdata('hapusKK')) : ?>
                <div class="alert alert-info col-12 mt-3">
                    <?= session()->getFlashdata('hapusKK'); ?>
                </div>
            <?php endif; ?>

            <?php if (empty($kk)) : ?>
                <div class="alert alert-info col-12 mt-3">
                    <h4 class="alert-heading">Data kK belum ditambahkan</h4>
                    <p>Silahkan tambahkan data dengan menklik tombol tambah data kelahiran dibawah.</p>
                </div>
            <?php endif; ?>

            <!-- Beggin Data -->
            <div class="card">
                <div class="card-body">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inputKK">Tambah Data</button>

                    <!-- Modal -->
                    <div class="modal fade" id="inputKK">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Tambah Data KK</h5>
                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                    </button>
                                </div>
                                <form action="kk/save" method="POST" autocomplete="off">
                                    <div class="modal-body">
                                        <?= csrf_field(); ?>
                                        <div class="form-group">
                                            <label>Nomor KK</label>
                                            <input type="text" class="form-control <?= ($validation->hasError('no_kk')) ? 'is-invalid' : ''; ?>" placeholder="Nomor KK" name="no_kk" value="<?= old('no_kk'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('no_kk'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Kepala Keluarga</label>
                                            <input type="text" class="form-control <?= ($validation->hasError('kepala_keluarga')) ? 'is-invalid' : ''; ?>" placeholder="Nama Kepala Keluarga" name="kepala_keluarga" value="<?= old('kepala_keluarga'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('kepala_keluarga'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input type="text" class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : ''; ?>" placeholder="Alamat" name="alamat" value="<?= old('alamat'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('alamat'); ?>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>RT</label>
                                                <input type="text" class="form-control <?= ($validation->hasError('rt')) ? 'is-invalid' : ''; ?>" placeholder="RT" name="rt" value="<?= old('rt'); ?>">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('rt'); ?>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>RW</label>
                                                <input type="text" class="form-control <?= ($validation->hasError('rw')) ? 'is-invalid' : ''; ?>" placeholder="RW" name="rw" value="<?= old('rw'); ?>">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('rw'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Beggin Data -->
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nomor KK</th>
                                    <th>Kepala Keluarga</th>
                                    <th>Alamat</th>
                                    <th>RT</th>
                                    <th>RW</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($kk as $k) : ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $k['no_kk']; ?></td>
                                        <td><?= $k['kepala_keluarga']; ?></td>
                                        <td><?= $k['alamat']; ?></td>
                                        <td><?= $k['rt']; ?></td>
                                        <td><?= $k['rw']; ?></td>
                                        <td><a href="/kk/<?= $k['no_kk']; ?>" class="btn btn-primary">Detail</a></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No.</th>
                                    <th>Nomor KK</th>
                                    <th>Kepala Keluarga</th>
                                    <th>Alamat</th>
                                    <th>RT</th>
                                    <th>RW</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- End Data -->
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- #/ container -->
<!-- End Row -->

<!-- Script -->
<?= $this->endSection(); ?>

<?= $this->section('js'); ?>
<script src="assets/plugins/tables/js/jquery.dataTables.min.js"></script>
<script src="assets/plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
<script src="assets/plugins/tables/js/datatable-init/datatable-basic.min.js"></script>
<?= $this->endSection(); ?>