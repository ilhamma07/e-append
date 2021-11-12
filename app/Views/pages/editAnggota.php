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
            <h3 class="d-inline">Edit Data Anggota</h3>
            <p class="text-muted"></p>
            <div class="card">
                <form action="../anggota/update/<?= $a['id_anggota']; ?>" method="POST" autocomplete="off">
                    <div class="card-body">
                        <?= csrf_field(); ?>
                        <div class="form-group">
                            <input type="hidden" name="no_kk_hidden" value="<?= $no_kk ?>">
                            <input type="hidden" name="id_anggota_hidden" value="<?= $a['id_anggota']; ?>">
                            <input type="hidden" name="nik_hidden" value="<?= $a['nik']; ?>">
                            <label>Nomor Induk Kependudukan</label>
                            <input type="text" class="form-control <?= ($validation->hasError('nik')) ? 'is-invalid' : ''; ?>" placeholder="Nomor Induk Kependudukan" name="nik" value="<?= (old('nik')) ? old('nik') : $a['nik']; ?>">
                            <div class=" invalid-feedback">
                                <?= $validation->getError('nik'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control <?= ($validation->hasError('nama_lengkap')) ? 'is-invalid' : ''; ?>" placeholder="Nama Lengkap" name="nama_lengkap" value="<?= (old('nama_lengkap')) ? old('nama_lengkap') :  $a['nama_lengkap']; ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('nama_lengkap'); ?>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label>Tempat Lahir</label>
                                <input type="text" class="form-control <?= ($validation->hasError('tempat_lahir')) ? 'is-invalid' : ''; ?>" placeholder="Tempat Lahir" name="tempat_lahir" value="<?= (old('tempat_lahir')) ? old('tempat_lahir') : $a['tempat_lahir']; ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('tempat_lahir'); ?>
                                </div>
                            </div>
                            <div class="form-group col-auto">
                                <label>Tanggal Lahir</label>
                                <input type="text" class="form-control <?= ($validation->hasError('tgl_lahir')) ? 'is-invalid' : ''; ?>" id="datepicker-autoclose" placeholder="Bulan/Tanggal/Tahun" name="tgl_lahir" value="<?= (old('tgl_lahir')) ? old('tgl_lahir') : $a['tgl_lahir']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <?php
                            $data1 = null;
                            $data2 = null;
                            switch ($a['jenkel']) {
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
                            <label>Alamat</label>
                            <input type="text" class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : ''; ?>" placeholder="Alamat" name="alamat" value="<?= (old('alamat')) ? old('alamat') : $a['alamat']; ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('alamat'); ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label>Agama:</label>
                                <select class="form-control" name="agama" required>
                                    <?php
                                    $data1 = null;
                                    $data2 = null;
                                    $data3 = null;
                                    $data4 = null;
                                    switch ($a['agama']) {
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
                                    <option value="">- - Agama - -</option>
                                    <option value="1" <?= $data1; ?>>Islam</option>
                                    <option value="2" <?= $data2; ?>>Kristen</option>
                                    <option value="3" <?= $data3; ?>>Hindu</option>
                                    <option value="4" <?= $data4; ?>>Budha</option>
                                </select>
                            </div>
                            <div class="form-group col">
                                <label>Pendidikan:</label>
                                <select class="form-control" name="pendidikan" required>
                                    <?php
                                    $data1 = null;
                                    $data2 = null;
                                    $data3 = null;
                                    $data4 = null;
                                    switch ($a['pendidikan']) {
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
                                    <option value="">- - Jenjang Pendidikan - -</option>
                                    <option value="1" <?= $data1; ?>>Tamat SD/Sederajat</option>
                                    <option value="2" <?= $data2; ?>>Tamat SMP/Sederajat</option>
                                    <option value="3" <?= $data3; ?>>Tamat SMA/Sederajat</option>
                                    <option value="4" <?= $data4; ?>>Tidak / Belum Sekolah</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Pekerjaan</label>
                            <input type="text" class="form-control <?= ($validation->hasError('pekerjaan')) ? 'is-invalid' : ''; ?>" placeholder="Pekerjaan" name="pekerjaan" value="<?= (old('pekerjaan')) ? old('pekerjaan') : $a['pekerjaan']; ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('pekerjaan'); ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label>Status Perkawinan:</label>
                                <select class="form-control" name="status_perkawinan" required>
                                    <?php
                                    $data1 = null;
                                    $data2 = null;
                                    $data3 = null;
                                    $data4 = null;
                                    switch ($a['status_perkawinan']) {
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
                                    <option value="">- - Status Perkawinan - -</option>
                                    <option value="1" <?= $data1; ?>>Kawin</option>
                                    <option value="2" <?= $data2; ?>>Belum Kawin</option>
                                    <option value="3" <?= $data3; ?>>Cerai</option>
                                    <option value="4" <?= $data4; ?>>Cerai Mati</option>
                                </select>
                            </div>
                            <div class="form-group col">
                                <label>Status Hubungan Dalam Keluarga:</label>
                                <select class="form-control" name="status_keluarga" required>
                                    <?php
                                    $data1 = null;
                                    $data2 = null;
                                    $data3 = null;
                                    $data4 = null;
                                    switch ($a['status_keluarga']) {
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
                                    <option value="">- - Status Keluarga - -</option>
                                    <option value="1" <?= $data1; ?>>Kepala Keluarga</option>
                                    <option value="2" <?= $data2; ?>>Istri</option>
                                    <option value="3" <?= $data3; ?>>Anak</option>
                                    <option value="4" <?= $data4; ?>>Orang Tua</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Status Kewarganegaraan</label>
                            <div class="radio">
                                <?php
                                $data1 = null;
                                $data2 = null;
                                switch ($a['jenkel']) {
                                    case "1":
                                        $data1 = "checked";
                                        break;
                                    default:
                                        $data2 = "checked";
                                } ?>
                                <label class="radio-inline mr-3">
                                    <input type="radio" name="kewarganegaraan" value="1" <?= $data1; ?> required> WNI</label>
                                <label class="radio-inline mr-3">
                                    <input type="radio" name="kewarganegaraan" value="2" <?= $data2; ?> required> WNA</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Nomor Pasport</label>
                            <input type="text" class="form-control" placeholder="Nomor Pasport" name="nomor_pasport" value="<?= (old('nomor_pasport')) ? old('nomor_pasport') : $a['nomor_pasport']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Nomor KITAS / KITAP</label>
                            <input type="text" class="form-control" placeholder="Nomor Kartu Identitas" name="nomor_kitas" value="<?= (old('nomor_kitas')) ? old('nomor_kitas') : $a['nomor_kitas']; ?>">
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label>Nama Ayah</label>
                                <input type="text" class="form-control <?= ($validation->hasError('nama_ayah')) ? 'is-invalid' : ''; ?>" placeholder="Nama Ayah" name="nama_ayah" value="<?= (old('nama_ayah')) ? old('nama_ayah') : $a['nama_ayah']; ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('nama_ayah'); ?>
                                </div>
                            </div>
                            <div class="form-group col">
                                <label>Nama Ibu</label>
                                <input type="text" class="form-control <?= ($validation->hasError('nama_ibu')) ? 'is-invalid' : ''; ?>" placeholder="Nama Ibu" name="nama_ibu" value="<?= (old('nama_ibu')) ? old('nama_ibu') : $a['nama_ibu']; ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('nama_ibu'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Ubah</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
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