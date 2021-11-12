<?php if (session()->get('jabatan') == "1") {
    $this->extend('layout/template_kependudukan');
} else {
    $this->extend('layout/template_surat');
} ?>

<?= $this->section('css'); ?>
<link href="../assets/plugins/tables/css/datatable/dataTables.bootstrap4.min.css" rel="stylesheet">
<!-- Date picker plugins css -->
<link href="../assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">

<link href="../assets/plugins/jquery-steps/css/jquery.steps.css" rel="stylesheet">
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-12 m-b-30">
            <h3 class="d-inline">Data Seluruh Kelahiran</h3>
            <p class="text-muted">Desa Salajambe</p>
        </div>

        <?php if ($validation->getErrors()) : ?>
            <div class="alert alert-danger mt-3">
                Terdapat kesalahan dalam input
            </div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('updateKelahiran')) : ?>
            <div class="alert alert-info col-12 mt-3">
                <?= session()->getFlashdata('updateKelahiran'); ?>
            </div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('simpanKelahiran')) : ?>
            <div class="alert alert-success col-12 mt-3">
                <?= session()->getFlashdata('simpanKelahiran'); ?>
            </div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('hapusKelahiran')) : ?>
            <div class="alert alert-success col-12 mt-3">
                <?= session()->getFlashdata('hapusKelahiran'); ?>
            </div>
        <?php endif; ?>

        <?php if (empty($kelahiran)) : ?>
            <div class="alert alert-info col-12 mt-3">
                <h4 class="alert-heading">Data kelahiran belum ditambahkan</h4>
                <p>Silahkan tambahkan data dengan menklik tombol tambah data kelahiran dibawah.</p>
            </div>
        <?php endif; ?>

        <!-- Beggin Data -->
        <div class="card col-12">
            <div class="card-body">
                <button type="button" class="btn btn-primary mt-1" data-toggle="modal" data-target="#inputKelahiran">Tambah Data</button>

                <div class="table-responsive">
                    <table class="table table-striped table-bordered zero-configuration">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nomor KK</th>
                                <th>Nama Bayi</th>
                                <th>Jenis Kelamin</th>
                                <th>Tempat, Tanggal Lahir</th>
                                <th>Berat Bayi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Data Disini -->
                            <?php $i = 1; ?>
                            <?php foreach ($kelahiran as $k) :  ?>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td><?= $k['no_kk']; ?></td>
                                    <td><?= $k['nama_bayi']; ?></td>
                                    <td>
                                        <?php switch ($k['jenkel']) {
                                            case "L":
                                                echo "Laki laki";
                                                break;
                                            default:
                                                echo "Perempuan";
                                        } ?>
                                    </td>
                                    <td><?= $k['tempat_lahir']; ?>, <?= date('d-m-Y', strtotime($k['tgl_lahir'])); ?></td>
                                    <td><?= $k['berat_bayi']; ?> KG</td>
                                    <td>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#detail_<?= $k['id_kelahiran']; ?>">Detail</button>
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapus_<?= $k['id_kelahiran']; ?>">Hapus</button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No.</th>
                                <th>Nomor KK</th>
                                <th>Nama Bayi</th>
                                <th>Jenis Kelamin</th>
                                <th>Tempat, Tanggal Lahir</th>
                                <th>Berat Bayi</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

        <!-- Detail Modal -->
        <?php foreach ($kelahiran as $k) : ?>
            <!-- Modal Detail Kelahiran -->
            <div class="modal fade" id="detail_<?= $k['id_kelahiran']; ?>">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Detail Data Kelahiran <?= $k['nama_bayi']; ?></h5>
                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="table-responsive">
                                <table class="table header-border">
                                    <tbody>
                                        <tr>
                                            <th>Nomor Kartu Keluarga</th>
                                            <td><?= $k['no_kk']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Nama Bayi</th>
                                            <td><?= $k['nama_bayi']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Jenis Kelamin</th>
                                            <td>
                                                <?php switch ($k['jenkel']) {
                                                    case "L":
                                                        echo "Laki laki";
                                                        break;
                                                    default:
                                                        echo "Perempuan";
                                                } ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Tempat, Tanggal lahir</th>
                                            <td>
                                                <?php switch ($k['tempat_dilahirkan']) {
                                                    case "1":
                                                        echo "Rumah Sakit / Rumah Bersalin";
                                                        break;
                                                    case "2":
                                                        echo "Puskesmas";
                                                        break;
                                                    case "3":
                                                        echo "Polindes";
                                                        break;
                                                    case "4":
                                                        echo "Rumah";
                                                        break;
                                                    default:
                                                        echo "Lainnya";
                                                } ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Tempat, Tanggal lahir</th>
                                            <td><?= $k['tempat_lahir']; ?>, <?= date('d-m-Y', strtotime($k['tgl_lahir'])); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Jenis Kelahiran</th>
                                            <td>
                                                <?php switch ($k['jenis_kelahiran']) {
                                                    case "1":
                                                        echo "Tunggal";
                                                        break;
                                                    case "2":
                                                        echo "Kembar";
                                                        break;
                                                    default:
                                                        echo "Lainnya";
                                                } ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Penolong</th>
                                            <td>
                                                <?php switch ($k['penolong']) {
                                                    case "1":
                                                        echo "Dokter";
                                                        break;
                                                    case "2":
                                                        echo "Bidan / Perawat";
                                                        break;
                                                    case "3":
                                                        echo "Dukun";
                                                        break;
                                                    default:
                                                        echo "Lainnya";
                                                } ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Nama Ayah</th>
                                            <td>
                                                <?php foreach ($kependudukan as $kp) {
                                                    if ($kp['nik'] == $k['nik_ayah']) {
                                                        echo $kp['nama_lengkap'];
                                                        break;
                                                    }
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Nama Ibu</th>
                                            <td>
                                                <?php foreach ($kependudukan as $kp) {
                                                    if ($kp['nik'] == $k['nik_ibu']) {
                                                        echo $kp['nama_lengkap'];
                                                        break;
                                                    }
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Nama Saksi 1</th>
                                            <td>
                                                <?php foreach ($kependudukan as $kp) {
                                                    if ($kp['nik'] == $k['nik_saksi1']) {
                                                        echo $kp['nama_lengkap'];
                                                        break;
                                                    }
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Nama Saksi 2</th>
                                            <td>
                                                <?php foreach ($kependudukan as $kp) {
                                                    if ($kp['nik'] == $k['nik_saksi2']) {
                                                        echo $kp['nama_lengkap'];
                                                        break;
                                                    }
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="/kelahiran/edit?id_kelahiran=<?= $k['id_kelahiran']; ?>" class="btn btn-secondary float-right ml-1">Ubah Data</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Hapus Kelahiran -->
            <div class="modal fade" id="hapus_<?= $k['id_kelahiran']; ?>">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Hapus Data</h5>
                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Apakah anda yakin ingin menghapus data Kelahiran <?= $k['nama_bayi']; ?> di nomor Kartu Keluarga : <?= $k['no_kk']; ?>?
                        </div>
                        <div class="modal-footer">
                            <form class="d-inline" action="/kelahiran/<?= $k['id_kelahiran']; ?>" method="post">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE" />
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>


        <!-- Modal Input -->
        <div class="modal fade" id="inputKelahiran">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Data Kelahiran</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button>
                    </div>
                    <form action="../kelahiran/save" method="POST" autocomplete="off">
                        <div class="modal-body">
                            <?= csrf_field(); ?>
                            <div class="form-group">
                                <label>Nomor Kartu Keluarga</label>
                                <select class="form-control selectpicker" name="no_kk" data-live-search="true" required>
                                    <option value="">- - Nomor Kartu Keluarga - -</option>
                                    <?php foreach ($kk as $k) :  ?>
                                        <option value='<?= $k['no_kk']; ?>'><?= $k['no_kk']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Nama Bayi</label>
                                <input type="text" class="form-control <?= ($validation->hasError('nama_bayi')) ? 'is-invalid' : ''; ?>" placeholder="Nama Bayi" name="nama_bayi" value="<?= old('nama_bayi'); ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('nama_bayi'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <div class="radio">
                                    <label class="radio-inline mr-3">
                                        <input type="radio" name="jenkel" value="L" required> Laki Laki</label>
                                    <label class="radio-inline mr-3">
                                        <input type="radio" name="jenkel" value="P" required> Perempuan</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Tempat Dilahirkan</label>
                                <select class="custom-select" name="tempat_dilahirkan" required>
                                    <option value="">- - Tempat Dilahirkan - -</option>
                                    <option value="1">Rumah Sakit / Rumah Bersalin</option>
                                    <option value="2">Puskesmas</option>
                                    <option value="3">Polindes</option>
                                    <option value="4">Rumah</option>
                                    <option value="5">Lainnya</option>
                                </select>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label>Tempat Lahir</label>
                                    <input type="text" class="form-control <?= ($validation->hasError('tempat_lahir')) ? 'is-invalid' : ''; ?>" placeholder="Tempat Lahir" name="tempat_lahir" value="<?= old('tempat_lahir'); ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('tempat_lahir'); ?>
                                    </div>
                                </div>
                                <div class="form-group col-auto">
                                    <label>Tanggal Lahir</label>
                                    <input type="text" class="form-control <?= ($validation->hasError('tgl_lahir')) ? 'is-invalid' : ''; ?>" id="datepicker-autoclose" placeholder="Bulan/Tanggal/Tahun" name="tgl_lahir" value="<?= old('tgl_lahir'); ?>" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col">
                                    <label>Jenis Kelahiran</label>
                                    <select class="form-control" name="jenis_kelahiran" required>
                                        <option value="">- - Jenis Kelahiran - -</option>
                                        <option value="1">Tunggal</option>
                                        <option value="2">Kembar</option>
                                        <option value="3">Lainnya</option>
                                    </select>
                                </div>
                                <div class="form-group col">
                                    <label>Kelahiran Ke</label>
                                    <input type="number" min="0" step="1" class="form-control<?= ($validation->hasError('kelahiran_ke')) ? 'is-invalid' : ''; ?>" placeholder="0" name="kelahiran_ke" value="<?= old('kelahiran_ke'); ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('kelahiran_ke'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col">
                                    <label>Penolong</label>
                                    <select class="form-control" name="penolong" required>
                                        <option value="">- - Penolong - -</option>
                                        <option value="1">Dokter</option>
                                        <option value="2">Bidan / Perawat</option>
                                        <option value="3">Dukun</option>
                                        <option value="4">Lainnya</option>
                                    </select>
                                </div>
                                <div class="form-group col">
                                    <label>Berat Bayi (Kilogram)</label>
                                    <input type="number" min="0" step=".01" class="form-control<?= ($validation->hasError('berat_bayi')) ? 'is-invalid' : ''; ?>" placeholder="0" name="berat_bayi" value="<?= old('berat_bayi'); ?>">
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
                                        <option value='<?= $k['nik']; ?>'><?= $k['nik']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>NIK Ibu</label>
                                <select class="form-control selectpicker" name="nik_ibu" data-live-search="true" required>
                                    <option value="">- - NIK - -</option>
                                    <?php foreach ($kependudukan as $k) :  ?>
                                        <option value='<?= $k['nik']; ?>'><?= $k['nik']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>NIK Saksi 1</label>
                                <select class="form-control selectpicker" name="nik_saksi1" data-live-search="true">
                                    <option value="">- - NIK - -</option>
                                    <?php foreach ($kependudukan as $k) :  ?>
                                        <option value='<?= $k['nik']; ?>'><?= $k['nik']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>NIK Saksi 2</label>
                                <select class="form-control selectpicker" name="nik_saksi2" data-live-search="true">
                                    <option value="">- - NIK - -</option>
                                    <?php foreach ($kependudukan as $k) :  ?>
                                        <option value='<?= $k['nik']; ?>'><?= $k['nik']; ?></option>
                                    <?php endforeach; ?>
                                </select>
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
    </div>
</div>
<!-- #/ container -->

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