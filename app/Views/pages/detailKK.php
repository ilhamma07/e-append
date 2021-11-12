<?php if (session()->get('jabatan') == "1") {
    $this->extend('layout/template_kependudukan');
} else {
    $this->extend('layout/template_surat');
} ?>

<?= $this->section('css'); ?>
<link href="../assets/plugins/tables/css/datatable/dataTables.bootstrap4.min.css" rel="stylesheet">
<!-- Date picker plugins css -->
<link href="../assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-12 m-b-30">
            <h3 class="d-inline">Data Kartu Keluarga</h3>
            <p class="text-muted"><?= $kk['no_kk']; ?></p>

            <!-- Button trigger modal -->
            <div class="row">
                <div class="col-md col-sm-12">
                    <button type="button" class="btn btn-primary mt-1" data-toggle="modal" data-target="#inputAnggota">Tambah Data Anggota</button>
                </div>
                <div class="col-md-auto col-sm-12">
                    <button type="button" class="btn btn-secondary mt-1" data-toggle="modal" data-target="#editKK">Ubah Data KK</button>
                </div>
                <div class="col-md-auto col-sm-12">
                    <button type="button" class="btn btn-danger mt-1" data-toggle="modal" data-target="#hapusKK">Hapus Data KK</button>
                </div>
            </div>

            <!-- Info Status -->
            <?php if ($validation->getErrors()) : ?>
                <div class="alert alert-danger mt-3">
                    Terdapat kesalahan dalam input
                </div>
            <?php endif; ?>

            <?php if (session()->getFlashdata('updateKK')) : ?>
                <div class="alert alert-info mt-3">
                    <?= session()->getFlashdata('updateKK'); ?>
                </div>
            <?php endif; ?>

            <?php if (session()->getFlashdata('simpanAnggota')) : ?>
                <div class="alert alert-success mt-3">
                    <?= session()->getFlashdata('simpanAnggota'); ?>
                </div>
            <?php endif; ?>

            <?php if (session()->getFlashdata('hapusAnggota')) : ?>
                <div class="alert alert-success mt-3">
                    <?= session()->getFlashdata('hapusAnggota'); ?>
                </div>
            <?php endif; ?>

            <?php if (session()->getFlashdata('updateAnggota')) : ?>
                <div class="alert alert-success mt-3">
                    <?= session()->getFlashdata('updateAnggota'); ?>
                </div>
            <?php endif; ?>

            <!-- Modal Input -->
            <div class="modal fade" id="inputAnggota">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Tambah Data Anggota</h5>
                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                            </button>
                        </div>
                        <form action="../anggota/save" method="POST" autocomplete="off">
                            <div class="modal-body">
                                <?= csrf_field(); ?>
                                <div class="form-group">
                                    <input type="hidden" name="id_kk_hidden" value="<?= $kk['id_kk']; ?>">
                                    <input type="hidden" name="no_kk_hidden" value="<?= $kk['no_kk']; ?>">
                                    <label>Nomor Induk Kependudukan</label>
                                    <input type="text" class="form-control <?= ($validation->hasError('nik')) ? 'is-invalid' : ''; ?>" placeholder="Nomor Induk Kependudukan" name="nik" value="<?= old('nik'); ?>">
                                    <div class=" invalid-feedback">
                                        <?= $validation->getError('nik'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" class="form-control <?= ($validation->hasError('nama_lengkap')) ? 'is-invalid' : ''; ?>" placeholder="Nama Lengkap" name="nama_lengkap" value="<?= old('nama_lengkap'); ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('nama_lengkap'); ?>
                                    </div>
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
                                    <label>Alamat</label>
                                    <input type="text" class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : ''; ?>" placeholder="Alamat" name="alamat" value="<?= old('alamat'); ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('alamat'); ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label>Agama:</label>
                                        <select class="custom-select" name="agama" data-live-search="true" required>
                                            <option value="">- - Agama - -</option>
                                            <option value="1">Islam</option>
                                            <option value="2">Kristen</option>
                                            <option value="3">Hindu</option>
                                            <option value="4">Budha</option>
                                        </select>
                                    </div>
                                    <div class="form-group col">
                                        <label>Pendidikan:</label>
                                        <select class="custom-select" name="pendidikan" required>
                                            <option value="">- - Jenjang Pendidikan - -</option>
                                            <option value="1">Tamat SD/Sederajat</option>
                                            <option value="2">Tamat SMP/Sederajat</option>
                                            <option value="3">Tamat SMA/Sederajat</option>
                                            <option value="4">Tidak / Belum Sekolah</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Pekerjaan</label>
                                    <input type="text" class="form-control <?= ($validation->hasError('pekerjaan')) ? 'is-invalid' : ''; ?>" placeholder="Pekerjaan" name="pekerjaan" value="<?= old('pekerjaan'); ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('pekerjaan'); ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label>Status Perkawinan:</label>
                                        <select class="custom-select" name="status_perkawinan" required>
                                            <option value="">- - Status Perkawinan - -</option>
                                            <option value="1">Kawin</option>
                                            <option value="2">Belum Kawin</option>
                                            <option value="3">Cerai</option>
                                            <option value="4">Cerai Mati</option>
                                        </select>
                                    </div>
                                    <div class="form-group col">
                                        <label>Status Hubungan Dalam Keluarga:</label>
                                        <select class="custom-select" name="status_keluarga" required>
                                            <option value="">- - Status Keluarga - -</option>
                                            <option value="1">Kepala Keluarga</option>
                                            <option value="2">Istri</option>
                                            <option value="3">Anak</option>
                                            <option value="4">Orang Tua</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Status Kewarganegaraan</label>
                                    <div class="radio">
                                        <label class="radio-inline mr-3">
                                            <input type="radio" name="kewarganegaraan" value="1" required> WNI</label>
                                        <label class="radio-inline mr-3">
                                            <input type="radio" name="kewarganegaraan" value="2" required> WNA</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Nomor Pasport</label>
                                    <input type="text" class="form-control" placeholder="Nomor Pasport" name="nomor_pasport" value="<?= old('nomor_passport'); ?>">
                                </div>
                                <div class="form-group">
                                    <label>Nomor KITAS / KITAP</label>
                                    <input type="text" class="form-control" placeholder="Nomor KITAS / KITAP" name="nomor_kitas" value="<?= old('nomor_kitas'); ?>">
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label>Nama Ayah</label>
                                        <input type="text" class="form-control <?= ($validation->hasError('nama_ayah')) ? 'is-invalid' : ''; ?>" placeholder="Nama Ayah" name="nama_ayah" value="<?= old('nama_ayah'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('nama_ayah'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group col">
                                        <label>Nama Ibu</label>
                                        <input type="text" class="form-control <?= ($validation->hasError('nama_ibu')) ? 'is-invalid' : ''; ?>" placeholder="Nama Ibu" name="nama_ibu" value="<?= old('nama_ibu'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('nama_ibu'); ?>
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


            <!-- Modal Edit -->
            <div class="modal fade" id="editKK">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Data KK</h5>
                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                            </button>
                        </div>
                        <form action="../kk/update/<?= $kk['id_kk']; ?>" method="POST" autocomplete="off">
                            <div class="modal-body">
                                <?= csrf_field(); ?>
                                <div class="form-group">
                                    <input type="hidden" name="no_kk_hidden" value="<?= $kk['no_kk']; ?>">
                                    <label>Nomor KK</label>
                                    <input type="text" class="form-control <?= ($validation->hasError('no_kk')) ? 'is-invalid' : ''; ?>" placeholder="Nomor KK" name="no_kk" value="<?= (old('no_kk')) ? old('no_kk') : $kk['no_kk']; ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('no_kk'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Nama Kepala Keluarga</label>
                                    <input type="text" class="form-control <?= ($validation->hasError('kepala_keluarga')) ? 'is-invalid' : ''; ?>" placeholder="Nama Kepala Keluarga" name="kepala_keluarga" value="<?= (old('no_kk')) ? old('kepala_keluarga') : $kk['kepala_keluarga']; ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('kepala_keluarga'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input type="text" class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : ''; ?>" placeholder="Alamat" name="alamat" value="<?= (old('no_kk')) ? old('alamat') : $kk['alamat']; ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('alamat'); ?>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>RT</label>
                                        <input type="text" class="form-control <?= ($validation->hasError('rt')) ? 'is-invalid' : ''; ?>" placeholder="RT" name="rt" value="<?= (old('no_kk')) ? old('rt') : $kk['rt']; ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('rt'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>RW</label>
                                        <input type="text" class="form-control <?= ($validation->hasError('rw')) ? 'is-invalid' : ''; ?>" placeholder="RW" name="rw" value="<?= (old('no_kk')) ? old('rw') : $kk['rw']; ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('rw'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary">Ubah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Modal Hapus -->
            <div class="modal fade" id="hapusKK">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Hapus Data</h5>
                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Apakah anda yakin ingin menghapus data KK dengan Nomor KK : <?= $kk['no_kk']; ?>?
                        </div>
                        <div class="modal-footer">
                            <form class="d-inline" action="/kk/<?= $kk['id_kk']; ?>" method="post">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE" />
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Beggin Data -->
            <div class="row mt-3">

                <?php if (empty($anggota)) : ?>
                    <div class="alert alert-info col-12 mt-3">
                        <h4 class="alert-heading">Data Anggota untuk nomor KK <?= $kk['no_kk']; ?> belum ditambahkan</h4>
                        <p>Silahkan tambahkan data dengan menklik tombol tambah data anggota diatas.</p>
                    </div>
                <?php else : ?>
                    <?php foreach ($anggota as $a) : ?>
                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">NIK : <?= $a['nik']; ?></h5>
                                    <div class="table-responsive">
                                        <table class="table header-border">
                                            <tbody>
                                                <tr>
                                                    <th>Nama Lengkap</th>
                                                    <td><?= $a['nama_lengkap']; ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Tempat, Tanggal lahir</th>
                                                    <td><?= $a['tempat_lahir']; ?>, <?= date('d-m-Y', strtotime($a['tgl_lahir'])); ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Jenis Kelamin</th>
                                                    <td>
                                                        <?php switch ($a['jenkel']) {
                                                            case "L":
                                                                echo "Laki laki";
                                                                break;
                                                            default:
                                                                echo "Perempuan";
                                                        } ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Alamat</th>
                                                    <td><?= $a['alamat']; ?></td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <div class="collapse" id="collapse_<?= $a['nik']; ?>">
                                            <table class="table header-border">
                                                <tbody>
                                                    <tr>
                                                        <th>Agama</th>
                                                        <td>
                                                            <?php switch ($a['agama']) {
                                                                case "1":
                                                                    echo "Islam";
                                                                    break;
                                                                case "2":
                                                                    echo "Kristen";
                                                                    break;
                                                                case "3":
                                                                    echo "Hindu";
                                                                    break;
                                                                default:
                                                                    echo "Budha";
                                                            } ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Pendidikan</th>
                                                        <td>
                                                            <?php switch ($a['pendidikan']) {
                                                                case "1":
                                                                    echo "Tamat SD/Sederajat";
                                                                    break;
                                                                case "2":
                                                                    echo "Tamat SMP/Sederajat";
                                                                    break;
                                                                case "3":
                                                                    echo "Tamat SMA/Sederajat";
                                                                    break;
                                                                default:
                                                                    echo "Tidak / Belum Sekolah";
                                                            } ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Pekerjaan</th>
                                                        <td><?= $a['pekerjaan']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Status Perkawinan</th>
                                                        <td>
                                                            <?php switch ($a['status_perkawinan']) {
                                                                case "1":
                                                                    echo "Kawin";
                                                                    break;
                                                                case "2":
                                                                    echo "Belum Kawin";
                                                                    break;
                                                                case "3":
                                                                    echo "Cerai";
                                                                    break;
                                                                default:
                                                                    echo "Cerai Mati";
                                                            } ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Status Dalam Keluarga</th>
                                                        <td>
                                                            <?php switch ($a['status_keluarga']) {
                                                                case "1":
                                                                    echo "Kepala Keluarga";
                                                                    break;
                                                                case "2":
                                                                    echo "Istri";
                                                                    break;
                                                                case "3":
                                                                    echo "Anak";
                                                                    break;
                                                                default:
                                                                    echo "Orang Tua";
                                                            } ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Kewarganegaraan</th>
                                                        <td>
                                                            <?php switch ($a['status_keluarga']) {
                                                                case "1":
                                                                    echo "Warga Negara Indonesia";
                                                                    break;
                                                                default:
                                                                    echo "Warga Negara Asing";
                                                            } ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Nomor Pasport</th>
                                                        <td><?= $a['nomor_pasport']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Nomor KITAS / KITAP</th>
                                                        <td><?= $a['nomor_kitas']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Nama Ayah</th>
                                                        <td><?= $a['nama_ayah']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Nama Ibu</th>
                                                        <td><?= $a['nama_ibu']; ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="button" class="btn btn-primary float-right ml-1" data-toggle="collapse" href="#collapse_<?= $a['nik']; ?>">Detail</button>
                                    <a href="/anggota/edit?no_kk=<?= $kk['no_kk']; ?>&nik=<?= $a['nik']; ?>" class="btn btn-secondary float-right ml-1">Ubah Data</a>
                                    <button type="button" class="btn btn-danger float-right" data-toggle="modal" data-target="#hapus_<?= $a['nik']; ?>">Hapus Data</button>
                                </div>
                            </div>
                        </div>

                        <!-- Modal Hapus Anggota -->
                        <div class="modal fade" id="hapus_<?= $a['nik']; ?>">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Hapus Data</h5>
                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Apakah anda yakin ingin menghapus data Anggota dengan NIK : <?= $a['nik']; ?>?
                                    </div>
                                    <div class="modal-footer">
                                        <form class="d-inline" action="/anggota/<?= $a['id_anggota']; ?>" method="post">
                                            <?= csrf_field(); ?>
                                            <input type="hidden" name="_method" value="DELETE" />
                                            <input type="hidden" name="no_kk" value="<?= $kk['no_kk']; ?>" />
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endforeach; ?>
                <?php endif; ?>
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