<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Data Petugas</h4>

                <div class="flash-datae" data-flashdata="<?php echo $this->session->flashdata('msg'); ?>"></div>
                <?php if ($this->session->flashdata('msg')) : ?>
                <?php endif; ?>

                <div class="card px-2">
                    <h5 class="card-header">Data Petugas</h5>
                    <div class="card-body">
                        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal"
                            data-bs-target="#addDataPetugasModal">
                            <i class="bx bx-plus me-1"></i> Tambah Data Petugas
                        </button>
                    </div>
                    <div class="table-responsive text-nowrap">
                        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Lengkap</th>
                                    <th>Tempat/Tanggal Lahir</th>
                                    <th>Jabatan</th>
                                    <th>Lama Kerja</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                <?php $i = 1; ?>
                                <?php foreach ($petugas as $e) : ?>
                                <tr>
                                    <th scope="row">
                                        <?= $i; ?>
                                    </th>
                                    <td><?= $e['nama_petugas']; ?></td>
                                    <td><?= $e['tempat_lahir'] . ', ' . $e['tgl_lahir']; ?></td>
                                    <td><?= $e['jabatan']; ?></td>
                                    <td><?= $e['lama_kerja'] . ' Tahun'; ?></td>
                                    <td>
                                        <a class="btn btn-sm btn-info me-2" data-bs-toggle="modal"
                                            data-bs-target="#editDataPetugasModal<?= $e['id_petugas']; ?>"
                                            href="<?= base_url(); ?>petugas/updateDataPetugas/<?= $e['id_petugas']; ?>">
                                            <i class="bx bx-edit-alt"></i> Edit
                                        </a>
                                        <a class="btn btn-sm btn-danger tbl-hapus"
                                            href="<?= base_url(''); ?>petugas/deleteDataPetugas/<?= $e['id_petugas']; ?>">
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
    <div class="modal fade" id="addDataPetugasModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Form Data Petugas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="formAddPetugas" action="<?php echo base_url('petugas/createDataPetugas') ?>"
                    class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3 row">
                                    <label for="nama-petugas" class="col-sm-3 col-form-label">Nama Petugas</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="nama-petugas" name="nama-petugas" class="form-control"
                                            placeholder="Masukkan Nama Petugas" required>
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
                                            placeholder="dd-mm-yyyy">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="no-hp" class="col-sm-3 col-form-label">No HP</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="no-hp" name="no-hp" class="form-control"
                                            placeholder="Masukkan Nomor HP" data-inputmask="'mask' : '9999-9999-9999'">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="jabatan" class="col-sm-3 col-form-label">Jabatan</label>
                                    <div class="col-sm-9">
                                        <select name="jabatan" id="jabatan" class="form-select" required>
                                            <option value="">-- Pilih Jabatan --</option>
                                            <option value="Ketua">Ketua</option>
                                            <option value="Bendahara">Bendahara</option>
                                            <option value="Sekretaris">Sekretaris</option>
                                            <option value="Anggota">Anggota</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="pendidikan-terakhir" class="col-sm-3 col-form-label">Pendidikan
                                        Terakhir</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="pendidikan-terakhir" name="pendidikan-terakhir"
                                            class="form-control" placeholder="Masukkan Pendidikan Terakhir">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="lama-kerja" class="col-sm-3 col-form-label">Lama Kerja</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="number" id="lama-kerja" name="lama-kerja" class="form-control"
                                                placeholder="Tahun">
                                            <span class="input-group-text">Tahun</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="tugas-pokok" class="col-sm-3 col-form-label">Tugas Pokok</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="tugas-pokok" name="tugas-pokok" class="form-control"
                                            placeholder="Masukkan Tugas Pokok">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="username" class="col-sm-3 col-form-label">Username</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="username" name="username" class="form-control"
                                            placeholder="Masukkan Username">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="password" class="col-sm-3 col-form-label">Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" id="password" name="password" class="form-control"
                                            placeholder="Masukkan Password">
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
    // Ambil data user/petugas jika diperlukan untuk dropdown atau relasi di masa mendatang.
    // Saat ini, tidak ada dropdown yang bergantung pada data 'user' di modal edit petugas.
    // Jika ada, Anda bisa membiarkan blok kode ini.
    // $q = $this->db->get('user');
    // $dist =  array();
    // if ($q->num_rows() > 0) {
    //     foreach ($q->result() as $row_user) {
    //         $dist[] = $row_user;
    //     }
    // }
    ?>
    <?php foreach ($petugas as $row_petugas) : ?>
    <div class="modal fade" id="editDataPetugasModal<?= $row_petugas['id_petugas']; ?>" tabindex="-1"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Edit Form Data Petugas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="formEditPetugas<?= $row_petugas['id_petugas']; ?>"
                    action="<?php echo base_url('petugas/updateDataPetugas/') . $row_petugas['id_petugas']; ?>"
                    class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3 row">
                                    <label for="nama-petugas-<?= $row_petugas['id_petugas']; ?>"
                                        class="col-sm-3 col-form-label">Nama Petugas</label>
                                    <div class="col-sm-9">
                                        <input type="hidden" id="id_users-<?= $row_petugas['id_petugas']; ?>"
                                            name="id_users" class="form-control"
                                            value="<?= $row_petugas['id_users'] ?>">
                                        <input type="text" id="nama-petugas-<?= $row_petugas['id_petugas']; ?>"
                                            name="nama-petugas" class="form-control"
                                            value="<?= $row_petugas['nama_petugas'] ?>" required>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="tmt-lahir-<?= $row_petugas['id_petugas']; ?>"
                                        class="col-sm-3 col-form-label">Tempat Lahir</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="tmt-lahir-<?= $row_petugas['id_petugas']; ?>"
                                            name="tmt-lahir" class="form-control"
                                            value="<?= $row_petugas['tempat_lahir'] ?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="tgl-lahir-<?= $row_petugas['id_petugas']; ?>"
                                        class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-9">
                                        <input id="tgl-lahir-<?= $row_petugas['id_petugas']; ?>" name="tgl-lahir"
                                            class="form-control" type="date" value="<?= $row_petugas['tgl_lahir'] ?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="no-hp-<?= $row_petugas['id_petugas']; ?>"
                                        class="col-sm-3 col-form-label">No HP</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="no-hp-<?= $row_petugas['id_petugas']; ?>" name="no-hp"
                                            class="form-control" data-inputmask="'mask' : '9999-9999-9999'"
                                            value="<?= $row_petugas['no_hp'] ?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="jabatan-<?= $row_petugas['id_petugas']; ?>"
                                        class="col-sm-3 col-form-label">Jabatan</label>
                                    <div class="col-sm-9">
                                        <select name="jabatan" id="jabatan-<?= $row_petugas['id_petugas']; ?>"
                                            class="form-select" required>
                                            <option value="">-- Pilih Jabatan --</option>
                                            <option value="Ketua" <?php if ($row_petugas['jabatan'] == "Ketua") {
                                                                            echo "selected";
                                                                        } ?>>Ketua</option>
                                            <option value="Bendahara" <?php if ($row_petugas['jabatan'] == "Bendahara") {
                                                                                echo "selected";
                                                                            } ?>>Bendahara</option>
                                            <option value="Sekretaris" <?php if ($row_petugas['jabatan'] == "Sekretaris") {
                                                                                echo "selected";
                                                                            } ?>>Sekretaris</option>
                                            <option value="Anggota" <?php if ($row_petugas['jabatan'] == "Anggota") {
                                                                            echo "selected";
                                                                        } ?>>Anggota</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="pendidikan-terakhir-<?= $row_petugas['id_petugas']; ?>"
                                        class="col-sm-3 col-form-label">Pendidikan Terakhir</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="pendidikan-terakhir-<?= $row_petugas['id_petugas']; ?>"
                                            name="pendidikan-terakhir" class="form-control"
                                            value="<?= $row_petugas['pendidikan_terakhir'] ?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="lama-kerja-<?= $row_petugas['id_petugas']; ?>"
                                        class="col-sm-3 col-form-label">Lama Kerja</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="number" id="lama-kerja-<?= $row_petugas['id_petugas']; ?>"
                                                name="lama-kerja" class="form-control"
                                                value="<?= $row_petugas['lama_kerja'] ?>">
                                            <span class="input-group-text">Tahun</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="tugas-pokok-<?= $row_petugas['id_petugas']; ?>"
                                        class="col-sm-3 col-form-label">Tugas Pokok</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="tugas-pokok-<?= $row_petugas['id_petugas']; ?>"
                                            name="tugas-pokok" class="form-control"
                                            value="<?= $row_petugas['tugas_pokok'] ?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="username-<?= $row_petugas['id_petugas']; ?>"
                                        class="col-sm-3 col-form-label">Username</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="username-<?= $row_petugas['id_petugas']; ?>"
                                            name="username" value="<?= $row_petugas['username'] ?>"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="password-<?= $row_petugas['id_petugas']; ?>"
                                        class="col-sm-3 col-form-label">Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" id="password-<?= $row_petugas['id_petugas']; ?>"
                                            name="password" value="<?= $row_petugas['password'] ?>"
                                            class="form-control">
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
    <?php endforeach; ?>
</div>