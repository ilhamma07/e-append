<?php if (session()->get('jabatan') == "1") {
    $this->extend('layout/template_kependudukan');
} else {
    $this->extend('layout/template_surat');
} ?>

<?= $this->section('css'); ?>
<!-- Page plugins css -->
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
            <h3 class="d-inline">Data Seluruh Kematian</h3>
            <p class="text-muted">Desa Salajambe</p>
        </div>

        <?php if ($validation->getErrors()) : ?>
            <div class="alert alert-danger mt-3">
                Terdapat kesalahan dalam input
            </div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('updateKematian')) : ?>
            <div class="alert alert-info col-12 mt-3">
                <?= session()->getFlashdata('updateKematian'); ?>
            </div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('simpanKematian')) : ?>
            <div class="alert alert-success col-12 mt-3">
                <?= session()->getFlashdata('simpanKematian'); ?>
            </div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('hapusKematian')) : ?>
            <div class="alert alert-success col-12 mt-3">
                <?= session()->getFlashdata('hapusKematian'); ?>
            </div>
        <?php endif; ?>

        <?php if (empty($kematian)) : ?>
            <div class="alert alert-info col-12 mt-3">
                <h4 class="alert-heading">Data kematian belum ditambahkan</h4>
                <p>Silahkan tambahkan data dengan menklik tombol tambah data dibawah.</p>
            </div>
        <?php endif; ?>

        <!-- Beggin Data -->
        <div class="card col-12">
            <div class="card-body">
                <button type="button" class="btn btn-primary mt-1" data-toggle="modal" data-target="#inputKematian">Tambah Data</button>

                <div class="table-responsive">
                    <table class="table table-striped table-bordered zero-configuration">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>NIK</th>
                                <th>Nama Lengkap</th>
                                <th>Jenis Kelamin</th>
                                <th>Tanggal Kematian</th>
                                <th>Sebab</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($kematian as $k) : ?>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td><?= $k['nik']; ?></td>
                                    <?php foreach ($kependudukan as $kp) {
                                        if ($kp['nik'] == $k['nik']) : ?>
                                            <td>
                                                <?= $kp['nama_lengkap']; ?>
                                            </td>
                                            <td>
                                                <?php if ($kp['jenkel'] == 'L') {
                                                    echo "Laki laki";
                                                } else {
                                                    echo "Perempuan";
                                                } ?>
                                            </td>
                                            <?php break; ?>
                                    <?php endif;
                                    } ?>
                                    <td><?= $k['tgl_kematian']; ?></td>
                                    <td>
                                        <?php switch ($k['sebab_kematian']) {
                                            case 1:
                                                echo "Sakit Biasa / Tua";
                                                break;
                                            case 2:
                                                echo "Wabah Penyakit";
                                                break;
                                            case 3:
                                                echo "Kecelakaan";
                                                break;
                                            case 4:
                                                echo "Kriminalisasi";
                                                break;
                                            case 5:
                                                echo "Bunuh Diri";
                                                break;
                                            default:
                                                echo "Lainnya";
                                        } ?>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#detail_<?= $k['nik']; ?>">Detail</button>
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapus_<?= $k['nik']; ?>">Hapus</button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No.</th>
                                <th>NIK</th>
                                <th>Nama Lengkap</th>
                                <th>Jenis Kelamin</th>
                                <th>Tanggal Kematian</th>
                                <th>Sebab</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

        <!-- Detail Modal -->
        <?php foreach ($kematian as $k) : ?>
            <!-- Modal Detail Kelahiran -->
            <div class="modal fade" id="detail_<?= $k['nik']; ?>">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Detail Data Kematian <?= $k['nik']; ?></h5>
                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="table-responsive">
                                <table class="table header-border">
                                    <tbody>
                                        <tr>
                                            <th>Nomor Induk Kependudukan</th>
                                            <td><?= $k['nik']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Nama Lengkap</th>
                                            <?php foreach ($kependudukan as $kp) {
                                                if ($kp['nik'] == $k['nik']) : ?>
                                                    <td>
                                                        <?= $kp['nama_lengkap']; ?>
                                                    </td>
                                        </tr>
                                        <tr>
                                            <th>Jenis Kelamin</th>
                                            <td>
                                                <?php if ($kp['jenkel'] == 'L') {
                                                        echo "Laki laki";
                                                    } else {
                                                        echo "Perempuan";
                                                    } ?>
                                            </td>
                                    <?php endif;
                                            } ?>
                                        <tr>
                                        <tr>
                                            <th>Tanggal, Waktu Kematian</th>
                                            <td><?= $k['tgl_kematian']; ?>, <?= $k['waktu_kematian']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Sebab Kematian</th>
                                            <td>
                                                <?php switch ($k['sebab_kematian']) {
                                                    case 1:
                                                        echo "Sakit Biasa / Tua";
                                                        break;
                                                    case 2:
                                                        echo "Wabah Penyakit";
                                                        break;
                                                    case 3:
                                                        echo "Kecelakaan";
                                                        break;
                                                    case 4:
                                                        echo "Kriminalisasi";
                                                        break;
                                                    case 5:
                                                        echo "Bunuh Diri";
                                                        break;
                                                    default:
                                                        echo "Lainnya";
                                                } ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Tempat Kematian</th>
                                            <td>
                                                <?= $k['tempat_kematian']; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Yang Menerangkan</th>
                                            <td>
                                                <?php switch ($k['penerang']) {
                                                    case 1:
                                                        echo "Dokter";
                                                        break;
                                                    case 2:
                                                        echo "Tenaga Kesehatan";
                                                        break;
                                                    case 3:
                                                        echo "Kepolisian";
                                                        break;
                                                    default:
                                                        echo "Lainnya";
                                                } ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Nama Pelapor</th>
                                            <td>
                                                <?php foreach ($kependudukan as $kp) {
                                                    if ($kp['nik'] == $k['nik_pelapor']) {
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
                            <a href="/kematian/edit?nik=<?= $k['nik']; ?>" class="btn btn-secondary float-right ml-1">Ubah Data</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Hapus Kelahiran -->
            <div class="modal fade" id="hapus_<?= $k['nik']; ?>">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Hapus Data</h5>
                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Apakah anda yakin ingin menghapus data Kelahiran dengan NIK : <?= $k['nik']; ?> ?
                        </div>
                        <div class="modal-footer">
                            <form class="d-inline" action="/kematian/<?= $k['id_kematian']; ?>" method="post">
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
        <div class="modal fade" id="inputKematian">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Data Kematian</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button>
                    </div>
                    <form action="../kematian/save" method="POST" autocomplete="off">
                        <div class="modal-body">
                            <?= csrf_field(); ?>
                            <div class="form-group">
                                <label>NIK</label>
                                <select class="form-control selectpicker" name="nik" data-live-search="true" required>
                                    <option value="">- - NIK - -</option>
                                    <?php foreach ($kependudukan as $k) :  ?>
                                        <option value='<?= $k['nik']; ?>'><?= $k['nik']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-auto">
                                    <label>Tanggal Kematian</label>
                                    <input type="text" class="form-control <?= ($validation->hasError('tgl_lahir')) ? 'is-invalid' : ''; ?>" id="datepicker-autoclose" placeholder="Bulan/Tanggal/Tahun" name="tgl_kematian" value="<?= old('tgl_kematian'); ?>" required>
                                </div>
                                <div class="form-group col-auto clockpicker">
                                    <label>Waktu Kematian</label>
                                    <input type="text" class="form-control <?= ($validation->hasError('tempat_lahir')) ? 'is-invalid' : ''; ?>" placeholder="00:00" name="waktu_kematian" value="<?= old('waktu_kematian'); ?>" required>
                                </div>
                                <div class="form-group col">
                                    <label>Sebab Kematian</label>
                                    <select class="form-control" name="sebab_kematian" required>
                                        <option value="">- - Sebab Kematian - -</option>
                                        <option value="1">Sakit Biasa / Tua</option>
                                        <option value="2">Wabah Penyakit</option>
                                        <option value="3">Kecelakaan</option>
                                        <option value="4">Kriminalisasi</option>
                                        <option value="5">Bunuh Diri</option>
                                        <option value="6">Lainnya</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label>Tempat Kematian</label>
                                    <input type="text" class="form-control <?= ($validation->hasError('tempat_kematian')) ? 'is-invalid' : ''; ?>" placeholder="Tempat Kematian" name="tempat_kematian" value="<?= old('tempat_kematian'); ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('tempat_kematian'); ?>
                                    </div>
                                </div>
                                <div class="form-group col-auto">
                                    <label>Yang Menerangkan</label>
                                    <select class="form-control" name="penerang" required>
                                        <option value="">- - Yang Menerangkan - -</option>
                                        <option value="1">Dokter</option>
                                        <option value="2">Tenaga Kesehatan</option>
                                        <option value="3">Kepolisian</option>
                                        <option value="4">Lainnya</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>NIK Pelapor</label>
                                <select class="form-control selectpicker" name="nik_pelapor" data-live-search="true" required>
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