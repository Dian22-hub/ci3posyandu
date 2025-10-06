<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Data Bidan</h4>

                <div class="flash-datadan" data-flashdata="<?php echo $this->session->flashdata('msg'); ?>"></div>
                <?php if ($this->session->flashdata('msg')) : ?>
                <?php endif; ?>

                <div class="card px-2">
                    <h5 class="card-header">Data Bidan</h5>
                    <div class="card-body">
                        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal"
                            data-bs-target="#addDataBidanModal">
                            <i class="bx bx-plus me-1"></i> Tambah Data Bidan
                        </button>
                    </div>
                    <div class="table-responsive text-nowrap">
                        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama lengkap</th>
                                    <th>Tempat/Tanggal Lahir</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                <?php $i = 1; ?>
                                <?php foreach ($bidan as $d) : ?>
                                <tr>
                                    <th scope="row">
                                        <?= $i; ?>
                                    </th>
                                    <td><?= $d['nama_bidan']; ?></td>
                                    <td><?= $d['tempat_lahir'] . ', ' . $d['tanggal_lahir']; ?></td>
                                    <td>
                                        <a class="btn btn-sm btn-info me-2" data-bs-toggle="modal"
                                            data-bs-target="#editDataBidanModal<?= $d['id_bidan']; ?>"
                                            href="<?= base_url(); ?>bidan/updateDatabidan/<?= $d['id_bidan']; ?>">
                                            <i class="bx bx-edit-alt"></i> Edit
                                        </a>
                                        <a class="btn btn-sm btn-danger tbl-hapus"
                                            href="<?= base_url(''); ?>bidan/deleteDataBidan/<?= $d['id_bidan']; ?>">
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

    <div class="modal fade" id="addDataBidanModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Form Data Bidan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="formAddBidan" action="<?php echo base_url('bidan/createDataBidan') ?>"
                    class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3 row">
                                    <label for="nama-bidan" class="col-sm-3 col-form-label">Nama Bidan</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="nama-bidan" name="nama-bidan" class="form-control"
                                            placeholder="Masukkan Nama Bidan" required>
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
                                    <label for="pendidikan-terakhir" class="col-sm-3 col-form-label">Pendidikan
                                        Terakhir</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="pendidikan-terakhir" name="pendidikan-terakhir"
                                            class="form-control" placeholder="Masukkan Pendidikan Terakhir">
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
    $q = $this->db->get('user');
    $dist =  array();
    if ($q->num_rows() > 0) {
        foreach ($q->result() as $row_user) {
            $dist[] = $row_user;
        }
    }

    foreach ($bidan as $row) {
    ?>
    <div class="modal fade" id="editDataBidanModal<?= $row['id_bidan']; ?>" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Edit Form Data Bidan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="formEditBidan<?= $row['id_bidan']; ?>"
                    action="<?php echo base_url('bidan/updateDataBidan/') . $row['id_bidan']; ?>"
                    class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3 row">
                                    <label for="nama-bidan-<?= $row['id_bidan']; ?>"
                                        class="col-sm-3 col-form-label">Nama Bidan</label>
                                    <div class="col-sm-9">
                                        <input type="hidden" id="id_users-<?= $row['id_bidan']; ?>" name="id_users"
                                            class="form-control" value="<?= $row['id_users'] ?>">
                                        <input type="text" id="nama-bidan-<?= $row['id_bidan']; ?>" name="nama-bidan"
                                            class="form-control" value="<?= $row['nama_bidan'] ?>" required>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="tmt-lahir-<?= $row['id_bidan']; ?>"
                                        class="col-sm-3 col-form-label">Tempat Lahir</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="tmt-lahir-<?= $row['id_bidan']; ?>" name="tmt-lahir"
                                            class="form-control" value="<?= $row['tempat_lahir'] ?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="tgl-lahir-<?= $row['id_bidan']; ?>"
                                        class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-9">
                                        <input id="tgl-lahir-<?= $row['id_bidan']; ?>" name="tgl-lahir"
                                            class="form-control" type="date" value="<?= $row['tanggal_lahir'] ?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="no-hp-<?= $row['id_bidan']; ?>" class="col-sm-3 col-form-label">No
                                        HP</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="no-hp-<?= $row['id_bidan']; ?>" name="no-hp"
                                            class="form-control" data-inputmask="'mask' : '9999-9999-9999'"
                                            value="<?= $row['no_hp'] ?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="pendidikan-terakhir-<?= $row['id_bidan']; ?>"
                                        class="col-sm-3 col-form-label">Pendidikan Terakhir</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="pendidikan-terakhir-<?= $row['id_bidan']; ?>"
                                            name="pendidikan-terakhir" class="form-control"
                                            value="<?= $row['pendidikan_terakhir'] ?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="user_id-<?= $row['id_bidan']; ?>"
                                        class="col-sm-3 col-form-label">Username</label>
                                    <div class="col-sm-9">
                                        <select name="user_id" id="user_id-<?= $row['id_bidan']; ?>" class="form-select"
                                            required>
                                            <option value="">-- Pilih Username --</option>
                                            <?php
                                            if (count($dist)) {
                                                foreach ($dist as $item) {
                                            ?>
                                            <option value="<?php echo $item->id_users; ?>"
                                                <?php if ($item->id_users == $row['user_id']) echo 'selected'; ?>>
                                                <?php echo $item->username; ?></option>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="username-<?= $row['id_bidan']; ?>"
                                        class="col-sm-3 col-form-label">Username</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="username-<?= $row['id_bidan']; ?>" name="username"
                                            value="<?= $row['username'] ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="password-<?= $row['id_bidan']; ?>"
                                        class="col-sm-3 col-form-label">Password</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="password-<?= $row['id_bidan']; ?>" name="password"
                                            value="<?= $row['password'] ?>" class="form-control">
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
    <?php
    }
    ?>

</div>