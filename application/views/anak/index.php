<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Data Anak</h4>

                <div class="flash-dataw" data-flashdata="<?php echo $this->session->flashdata('msg'); ?>"></div>
                <?php if ($this->session->flashdata('msg')) : ?>
                <?php endif; ?>

                <div class="card px-2">
                    <h5 class="card-header">Data Anak</h5>
                    <div class="card-body">
                        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal"
                            data-bs-target="#addDataAnakModal">
                            <i class="bx bx-plus me-1"></i> Tambah Data Anak
                        </button>
                    </div>
                    <div class="table-responsive text-nowrap ">
                        <table id="datatable" class="table table-striped table-bordered ml-4" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Lengkap</th>
                                    <th>Tempat/Tanggal Lahir</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Nama Ibu</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                <?php $i = 1; ?>
                                <?php foreach ($anak as $n) : ?>
                                <tr>
                                    <th scope="row">
                                        <?= $i; ?>
                                    </th>
                                    <td><?= $n['nama_anak']; ?></td>
                                    <td><?= $n['tempat_lahir'] . ', ' . $n['tgl_lahir']; ?></td>
                                    <td><?= $n['jenis_kelamin']; ?></td>
                                    <td><?= $n['nama_ibu']; ?></td>
                                    <td>
                                        <a class="btn btn-sm btn-info me-2" data-bs-toggle="modal"
                                            data-bs-target="#editDataAnakModal<?= $n['id_anak']; ?>"
                                            href="<?= base_url(); ?>anak/updateDataAnak/<?= $n['id_anak']; ?>">
                                            <i class="bx bx-edit-alt"></i> Edit
                                        </a>
                                        <a class="btn btn-sm btn-danger tbl-hapus"
                                            href="<?= base_url(''); ?>anak/deleteDataAnak/<?= $n['id_anak']; ?>">
                                            <i class="bx bx-trash"></i> Delete
                                        </a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="addDataAnakModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Form Data Anak</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="formAddAnak" action="<?php echo base_url('anak/createDataAnak') ?>"
                    class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3 row">
                                    <label for="nik-anak" class="col-sm-3 col-form-label">NIK Anak</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="nik-anak" name="nik-anak" class="form-control"
                                            placeholder="Masukkan NIK Anak" data-inputmask="'mask' : '9999999999999999'"
                                            required>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="nama-anak" class="col-sm-3 col-form-label">Nama Anak</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="nama-anak" name="nama-anak" class="form-control"
                                            placeholder="Masukkan Nama Anak" required>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="tmt-lahir" class="col-sm-3 col-form-label">Tempat Lahir</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="tmt-lahir" name="tmt-lahir" class="form-control"
                                            placeholder="Masukkan Tempat Lahir">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="tgl-lahir" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-9">
                                        <input id="tgl-lahir" name="tgl-lahir" class="form-control" type="date"
                                            placeholder="dd-mm-yyyy" required>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="jenis-kelamin" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-9">
                                        <select name="jenis-kelamin" id="jenis-kelamin" class="form-select" required>
                                            <option value="">-- Pilih Jenis Kelamin --</option>
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="ibu_id" class="col-sm-3 col-form-label">Nama Ibu</label>
                                    <div class="col-sm-9">
                                        <select name="ibu_id" id="ibu_id" class="form-select" required>
                                            <option value="">-- Pilih Ibu --</option>
                                            <?php foreach ($ibu as $m) : ?>
                                            <option value="<?= $m['id_ibu']; ?>"><?= $m['nama_ibu']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php
    // Ambil data ibu untuk dropdown di modal edit
    $q = $this->db->get('ibu');
    $dist =  array();
    if ($q->num_rows() > 0) {
        foreach ($q->result() as $row_ibu) {
            $dist[] = $row_ibu;
        }
    }
    ?>
    <?php $a = 1; ?>
    <?php foreach ($anak as $row_anak) : ?>
    <div class="modal fade" id="editDataAnakModal<?= $row_anak['id_anak']; ?>" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Edit Form Data Anak</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="formEditAnak<?= $row_anak['id_anak']; ?>"
                    action="<?php echo base_url('anak/updateDataAnak/') . $row_anak['id_anak']; ?>"
                    class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3 row">
                                    <label for="nik-anak-<?= $row_anak['id_anak']; ?>"
                                        class="col-sm-3 col-form-label">NIK Anak</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="nik-anak-<?= $row_anak['id_anak']; ?>" name="nik-anak"
                                            class="form-control" data-inputmask="'mask' : '9999999999999999'"
                                            value="<?= $row_anak['nik_anak'] ?>" required>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="nama-anak-<?= $row_anak['id_anak']; ?>"
                                        class="col-sm-3 col-form-label">Nama Anak</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="nama-anak-<?= $row_anak['id_anak']; ?>" name="nama-anak"
                                            class="form-control" value="<?= $row_anak['nama_anak'] ?>" required>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="tmt-lahir-<?= $row_anak['id_anak']; ?>"
                                        class="col-sm-3 col-form-label">Tempat Lahir</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="tmt-lahir-<?= $row_anak['id_anak']; ?>" name="tmt-lahir"
                                            class="form-control" value="<?= $row_anak['tempat_lahir'] ?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="tgl-lahir-<?= $row_anak['id_anak']; ?>"
                                        class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-9">
                                        <input id="tgl-lahir-<?= $row_anak['id_anak']; ?>" name="tgl-lahir"
                                            class="form-control" type="date" value="<?= $row_anak['tgl_lahir'] ?>"
                                            required>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="jenis-kelamin-<?= $row_anak['id_anak']; ?>"
                                        class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-9">
                                        <select name="jenis-kelamin" id="jenis-kelamin-<?= $row_anak['id_anak']; ?>"
                                            class="form-select" required>
                                            <option value="">-- Pilih Jenis Kelamin --</option>
                                            <option value="Laki-Laki" <?php if ($row_anak['jenis_kelamin'] == "Laki-Laki") {
                                                                                echo "selected";
                                                                            } ?>>Laki-Laki</option>
                                            <option value="Perempuan" <?php if ($row_anak['jenis_kelamin'] == "Perempuan") {
                                                                                echo "selected";
                                                                            } ?>>Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="ibu_id-<?= $row_anak['id_anak']; ?>"
                                        class="col-sm-3 col-form-label">Nama Ibu</label>
                                    <div class="col-sm-9">
                                        <select name="ibu_id" id="ibu_id-<?= $row_anak['id_anak']; ?>"
                                            class="form-select" required>
                                            <option value="">-- Pilih Ibu --</option>
                                            <?php
                                                if (count($dist)) {
                                                    foreach ($dist as $item_ibu) {
                                                ?>
                                            <option value="<?php echo $item_ibu->id_ibu; ?>"
                                                <?php if ($item_ibu->id_ibu == $row_anak['ibu_id']) echo 'selected'; ?>>
                                                <?php echo $item_ibu->nama_ibu; ?></option>
                                            <?php
                                                    }
                                                }
                                                ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php $a++; ?>
    <?php endforeach; ?>

</div>