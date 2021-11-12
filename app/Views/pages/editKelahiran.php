<?php if (session()->get('jabatan') == "1") {
    $this->extend('layout/template_kependudukan');
} else {
    $this->extend('layout/template_surat');
} ?>

<?= $this->section('css'); ?>
<link href="../../assets/plugins/tables/css/datatable/dataTables.bootstrap4.min.css" rel="stylesheet">
<!-- Date picker plugins css -->
<link href="../../assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-12 m-b-30">
            <h3 class="d-inline">Edit Data Kelahiran</h3>
            <p class="text-muted"></p>
            <div class="card">
                <form action="../kelahiran/update/<?= $kelahiran['id_kelahiran']; ?>" method="POST" autocomplete="off">
                    <div class="card-body">
                        <?= csrf_field(); ?>
                        <div class="form-group">
                            <label>Nomor Kartu Keluarga</label>
                            <select class="form-control selectpicker" name="no_kk" data-live-search="true" required>
                                <option value="">- - Nomor Kartu Keluarga - -</option>
                                <?php foreach ($kk as $k) :  ?>
                                    <option value='<?= $k['no_kk']; ?>' <?php if ($kelahiran['no_kk'] == $k['no_kk']) {
                                                                            echo "selected";
                                                                        } ?>><?= $k['no_kk']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Nama Bayi</label>
                            <input type="text" class="form-control <?= ($validation->hasError('nama_bayi')) ? 'is-invalid' : ''; ?>" placeholder="Nama Bayi" name="nama_bayi" value="<?= old('nama_bayi') ? old('nama_bayi') : $kelahiran['nama_bayi']; ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('nama_bayi'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <?php
                            $data1 = null;
                            $data2 = null;
                            switch ($kelahiran['jenkel']) {
                                case "L":
                                    $data1 = "checked";
                                    break;
                                default:
                                    $data2 = "checked";
                            } ?>
                            <div class="radio">
                                <label class="radio-inline mr-3">
                                    <input type="radio" name="jenkel" value="L" <?= $data1; ?> required> Laki Laki</label>
                                <label class="radio-inline mr-3">
                                    <input type="radio" name="jenkel" value="P" <?= $data2; ?> required> Perempuan</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tempat Dilahirkan</label>
                            <select class="custom-select" name="tempat_dilahirkan" required>
                                <?php
                                $data1 = null;
                                $data2 = null;
                                $data3 = null;
                                $data4 = null;
                                $data5 = null;
                                switch ($kelahiran['tempat_dilahirkan']) {
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
                                    default:
                                        $data5 = "selected";
                                } ?>
                                <option value="">- - Tempat Dilahirkan - -</option>
                                <option value="1" <?= $data1; ?>>Rumah Sakit / Rumah Bersalin</option>
                                <option value="2" <?= $data2; ?>>Puskesmas</option>
                                <option value="3" <?= $data3; ?>>Polindes</option>
                                <option value="4" <?= $data4; ?>>Rumah</option>
                                <option value="5" <?= $data5; ?>>Lainnya</option>
                            </select>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label>Tempat Lahir</label>
                                <input type="text" class="form-control <?= ($validation->hasError('tempat_lahir')) ? 'is-invalid' : ''; ?>" placeholder="Tempat Lahir" name="tempat_lahir" value="<?= old('tempat_lahir') ? old('tempat_lahir') : $kelahiran['tempat_lahir']; ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('tempat_lahir'); ?>
                                </div>
                            </div>
                            <div class="form-group col-auto">
                                <label>Tanggal Lahir</label>
                                <input type="text" class="form-control <?= ($validation->hasError('tgl_lahir')) ? 'is-invalid' : ''; ?>" id="datepicker-autoclose" placeholder="Bulan/Tanggal/Tahun" name="tgl_lahir" value="<?= old('tgl_lahir') ? old('tgl_lahir') : $kelahiran['tgl_lahir']; ?> " required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label>Jenis Kelahiran</label>
                                <select class="form-control" name="jenis_kelahiran" required>
                                    <?php
                                    $data1 = null;
                                    $data2 = null;
                                    $data3 = null;
                                    switch ($kelahiran['tempat_dilahirkan']) {
                                        case 1:
                                            $data1 = "selected";
                                            break;
                                        case 2:
                                            $data2 = "selected";
                                            break;
                                        default:
                                            $data3 = "selected";
                                    } ?>
                                    <option value="">- - Jenis Kelahiran - -</option>
                                    <option value="1" <?= $data1; ?>>Tunggal</option>
                                    <option value="2" <?= $data2; ?>>Kembar</option>
                                    <option value="3" <?= $data3; ?>>Lainnya</option>
                                </select>
                            </div>
                            <div class="form-group col">
                                <label>Kelahiran Ke</label>
                                <input type="number" min="0" step="1" class="form-control<?= ($validation->hasError('kelahiran_ke')) ? 'is-invalid' : ''; ?>" placeholder="0" name="kelahiran_ke" value="<?= old('kelahiran_ke') ? old('kelahiran_ke') : $kelahiran['kelahiran_ke']; ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('kelahiran_ke'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label>Penolong</label>
                                <select class="form-control" name="penolong" required>
                                    <?php
                                    $data1 = null;
                                    $data2 = null;
                                    $data3 = null;
                                    $data4 = null;
                                    switch ($kelahiran['penolong']) {
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
                                    <option value="">>- - Penolong - -</option>
                                    <option value="1" <?= $data1; ?>>Dokter</option>
                                    <option value="2" <?= $data2; ?>>Bidan / Perawat</option>
                                    <option value="3" <?= $data3; ?>>Dukun</option>
                                    <option value="4" <?= $data4; ?>>Lainnya</option>
                                </select>
                            </div>
                            <div class="form-group col">
                                <label>Berat Bayi (Kilogram)</label>
                                <input type="number" min="0" step=".01" class="form-control<?= ($validation->hasError('berat_bayi')) ? 'is-invalid' : ''; ?>" placeholder="0" name="berat_bayi" value="<?= old('berat_bayi') ? old('berat_bayi') : $kelahiran['berat_bayi']; ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('berat_bayi'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>NIK Ayah</label>
                            <select class="form-control selectpicker" name="nik_ayah" data-live-search="true" required>
                                <option value="">- - NIK - -</option>
                                <?php foreach ($kependudukan as $k) :  ?>
                                    <option value='<?= $k['nik']; ?>' <?php if ($kelahiran['nik_ayah'] == $k['nik']) {
                                                                            echo "selected";
                                                                        } ?>><?= $k['nik']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>NIK Ibu</label>
                            <select class="form-control selectpicker" name="nik_ibu" data-live-search="true" required>
                                <option value="">- - NIK - -</option>
                                <?php foreach ($kependudukan as $k) :  ?>
                                    <option value='<?= $k['nik']; ?>' <?php if ($kelahiran['nik_ibu'] == $k['nik']) {
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
                                    <option value='<?= $k['nik']; ?>' <?php if ($kelahiran['nik_saksi1'] == $k['nik']) {
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
                                    <option value='<?= $k['nik']; ?>' <?php if ($kelahiran['nik_saksi2'] == $k['nik']) {
                                                                            echo "selected";
                                                                        } ?>><?= $k['nik']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Ubah</button>
                        <a href="/kelahiran" class="btn btn-secondary">Batal</a>
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

<script src="../assets/plugins/tables/js/jquery.dataTables.min.js"></script>
<script src="../assets/plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
<script src="../assets/plugins/tables/js/datatable-init/datatable-basic.min.js"></script>

<script src="../assets/js/plugins-init/form-pickers-init.js"></script>
<?= $this->endSection(); ?>