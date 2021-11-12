<?php if (session()->get('jabatan') == "1") {
    $this->extend('layout/template_kependudukan');
} else {
    $this->extend('layout/template_surat');
} ?>

<?= $this->section('css'); ?>
<link href="../assets/plugins/clockpicker/dist/jquery-clockpicker.min.css" rel="stylesheet">
<link href="../assets/plugins/tables/css/datatable/dataTables.bootstrap4.min.css" rel="stylesheet">
<!-- Date picker plugins css -->
<link href="../assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">

<link href="../assets/plugins/jquery-steps/css/jquery.steps.css" rel="stylesheet">
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-12 m-b-30">
            <h3 class="d-inline">Edit Data Kematian</h3>
            <p class="text-muted"></p>
            <div class="card">
                <form action="../kematian/update/<?= $kematian['id_kematian']; ?>" method="POST" autocomplete="off">
                    <div class="card-body">
                        <?= csrf_field(); ?>
                        <div class="form-group">
                            <input type="hidden" name="nik_hidden" value="<?= $kematian['nik'] ?>">
                            <label>NIK</label>
                            <select class="form-control selectpicker" name="nik" data-live-search="true" required>
                                <option value="">- - NIK - -</option>
                                <?php foreach ($kependudukan as $k) :  ?>
                                    <option value='<?= $k['nik']; ?>' <?php if ($kematian['nik'] == $k['nik']) {
                                                                            echo "selected";
                                                                        } ?>><?= $k['nik']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-auto">
                                <label>Tanggal Kematian</label>
                                <input type="text" class="form-control <?= ($validation->hasError('tgl_lahir')) ? 'is-invalid' : ''; ?>" id="datepicker-autoclose" placeholder="Bulan/Tanggal/Tahun" name="tgl_kematian" value="<?= old('tgl_kematian') ? old('tgl_kematian') : $kematian['tgl_kematian']; ?>" required>
                            </div>
                            <div class="form-group col-auto clockpicker">
                                <label>Waktu Kematian</label>
                                <input type="text" class="form-control <?= ($validation->hasError('tempat_lahir')) ? 'is-invalid' : ''; ?>" placeholder="00:00" name="waktu_kematian" value="<?= old('waktu_kematian') ? old('waktu_kematian') : $kematian['waktu_kematian']; ?>" required>
                            </div>
                            <div class="form-group col">
                                <label>Sebab Kematian</label>
                                <select class="form-control" name="sebab_kematian" required>
                                    <?php
                                    $data1 = null;
                                    $data2 = null;
                                    $data3 = null;
                                    $data4 = null;
                                    $data5 = null;
                                    $data6 = null;
                                    switch ($kematian['sebab_kematian']) {
                                        case 1:
                                            $data1 = "selected";
                                            break;
                                        case 2:
                                            $data2 = "selected";
                                            break;
                                        case 3:
                                            $data3 = "selected";
                                            break;
                                        case 4:
                                            $data4 = "selected";
                                            break;
                                        case 5:
                                            $data5 = "selected";
                                            break;
                                        default:
                                            $data6 = "selected";
                                    } ?>
                                    <option value="">- - Sebab Kematian - -</option>
                                    <option value="1" <?= $data1; ?>>Sakit Biasa / Tua</option>
                                    <option value="2" <?= $data2; ?>>Wabah Penyakit</option>
                                    <option value="3" <?= $data3; ?>>Kecelakaan</option>
                                    <option value="4" <?= $data4; ?>>Kriminalisasi</option>
                                    <option value="5" <?= $data5; ?>>Bunuh Diri</option>
                                    <option value="6" <?= $data6; ?>>Lainnya</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label>Tempat Kematian</label>
                                <input type="text" class="form-control <?= ($validation->hasError('tempat_kematian')) ? 'is-invalid' : ''; ?>" placeholder="Tempat Kematian" name="tempat_kematian" value="<?= old('tempat_kematian') ? old('tempat_kematian') : $kematian['tempat_kematian']; ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('tempat_kematian'); ?>
                                </div>
                            </div>
                            <div class="form-group col-auto">
                                <label>Yang Menerangkan</label>
                                <select class="form-control" name="penerang" required>
                                    <?php
                                    $data1 = null;
                                    $data2 = null;
                                    $data3 = null;
                                    $data4 = null;
                                    switch ($kematian['sebab_kematian']) {
                                        case 1:
                                            $data1 = "selected";
                                            break;
                                        case 2:
                                            $data2 = "selected";
                                            break;
                                        case 3:
                                            $data3 = "selected";
                                            break;
                                        default:
                                            $data4 = "selected";
                                    } ?>
                                    <option value="">- - Yang Menerangkan - -</option>
                                    <option value="1" <?= $data1; ?>>Dokter</option>
                                    <option value="2" <?= $data2; ?>>Tenaga Kesehatan</option>
                                    <option value="3" <?= $data3; ?>>Kepolisian</option>
                                    <option value="4" <?= $data4; ?>>Lainnya</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>NIK Pelapor</label>
                            <select class="form-control selectpicker" name="nik_pelapor" data-live-search="true" required>
                                <option value="">- - NIK - -</option>
                                <?php foreach ($kependudukan as $k) :  ?>
                                    <option value='<?= $k['nik']; ?>' <?php if ($kematian['nik_pelapor'] == $k['nik']) {
                                                                            echo "selected";
                                                                        } ?>><?= $k['nik']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>NIK Saksi 1</label>
                            <select class="form-control selectpicker" name="nik_saksi1" data-live-search="true">
                                <option value="">- - NIK - -</option>
                                <?php foreach ($kependudukan as $k) :  ?>
                                    <option value='<?= $k['nik']; ?>' <?php if ($kematian['nik_saksi1'] == $k['nik']) {
                                                                            echo "selected";
                                                                        } ?>><?= $k['nik']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>NIK Saksi 2</label>
                            <select class="form-control selectpicker" name="nik_saksi2" data-live-search="true">
                                <option value="">- - NIK - -</option>
                                <?php foreach ($kependudukan as $k) :  ?>
                                    <option value='<?= $k['nik']; ?>' <?php if ($kematian['nik_saksi2'] == $k['nik']) {
                                                                            echo "selected";
                                                                        } ?>><?= $k['nik']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="/kematian" class="btn btn-secondary">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- #/ container -->
<!-- End Row -->

<!-- Script -->
<?= $this->endSection(); ?>

<?= $this->section('js'); ?>
<script src="../assets/plugins/moment/moment.js"></script>
<script src="../assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
<!-- Clock Plugin JavaScript -->
<script src="../assets/plugins/clockpicker/dist/jquery-clockpicker.min.js"></script>
<!-- Color Picker Plugin JavaScript -->
<script src="../assets/plugins/jquery-asColorPicker-master/libs/jquery-asColor.js"></script>
<script src="../assets/plugins/jquery-asColorPicker-master/libs/jquery-asGradient.js"></script>
<script src="../assets/plugins/jquery-asColorPicker-master/dist/jquery-asColorPicker.min.js"></script>
<!-- Date Picker Plugin JavaScript -->
<script src="../assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<!-- Date range Plugin JavaScript -->
<script src="../assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<script src="../assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

<script src="assets/plugins/tables/js/jquery.dataTables.min.js"></script>
<script src="assets/plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
<script src="assets/plugins/tables/js/datatable-init/datatable-basic.min.js"></script>

<script src="../assets/js/plugins-init/form-pickers-init.js"></script>
<?= $this->endSection(); ?>