<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tabel /</span> Riwayat Imunisasi Anak
                </h4>
                <div class="flash-datadan" data-flashdata="<?php echo $this->session->flashdata('msg'); ?>"></div>
                <?php if ($this->session->flashdata('msg')) : ?>
                <?php endif; ?>

                <div class="card px-2">
                    <h5 class="card-header">Data Riwayat Imunisasi Anak</h5>
                    <div class="card-body">
                        <a href="<?= base_url('imunisasi_anak/create') ?>" class="btn btn-primary mb-3">
                            <i class="bx bx-plus me-1"></i> Tambah Imunisasi
                        </a>
                    </div>
                    <div class="table-responsive text-nowrap">
                        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Anak</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Tgl Lahir Anak</th>
                                    <th>Nama Ibu</th>
                                    <th>Tgl Imunisasi</th>
                                    <th>Usia (bulan)</th>
                                    <th>Jenis Imunisasi</th>
                                    <th>Vitamin A</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                <?php $i = 1; ?>
                                <?php foreach ($riwayat as $r) : ?>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td><?= htmlspecialchars($r['nama_anak']) ?></td>
                                    <td><?= htmlspecialchars($r['jenis_kelamin']) ?></td>
                                    <td><?= date('d-m-Y', strtotime($r['tgl_lahir_anak'])) ?></td>
                                    <td><?= htmlspecialchars($r['nama_ibu']) ?></td>
                                    <td><?= date('d-m-Y', strtotime($r['tgl_skrng'])) ?></td>
                                    <td><?= htmlspecialchars($r['usia']) ?></td>
                                    <td><?= htmlspecialchars($r['imunisasi']) ?></td>
                                    <td><?= htmlspecialchars($r['vit_a']) ?></td>
                                    <td><?= htmlspecialchars($r['ket']) ?></td>
                                    <td>
                                        <button type="button" class="btn btn-icon btn-outline-secondary me-2"
                                            data-bs-toggle="modal"
                                            data-bs-target="#editImunisasiModal<?= $r['id_imunisasi']; ?>" title="Edit">
                                            <i class="bx bx-edit-alt"></i>
                                        </button>
                                        <a class="btn btn-icon btn-outline-danger tbl-hapus"
                                            href="<?= base_url('imunisasi_anak/delete/') . $r['id_imunisasi']; ?>"
                                            title="Delete">
                                            <i class="bx bx-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    foreach ($riwayat as $row_imunisasi) {
    ?>
    <div class="modal fade" id="editImunisasiModal<?= $row_imunisasi['id_imunisasi']; ?>" tabindex="-1"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Edit Data Imunisasi Anak</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="formEditImunisasi<?= $row_imunisasi['id_imunisasi']; ?>"
                    action="<?php echo base_url('imunisasi_anak/update/') . $row_imunisasi['id_imunisasi']; ?>"
                    class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="mb-3 row">
                            <label for="nama-anak-<?= $row_imunisasi['id_imunisasi']; ?>"
                                class="col-sm-3 col-form-label">Nama Anak</label>
                            <div class="col-sm-9">
                                <input type="text" id="nama-anak-<?= $row_imunisasi['id_imunisasi']; ?>"
                                    name="nama_anak" class="form-control"
                                    value="<?= htmlspecialchars($row_imunisasi['nama_anak']) ?>" required readonly>

                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="jenis-kelamin-<?= $row_imunisasi['id_imunisasi']; ?>"
                                class="col-sm-3 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <select id="jenis-kelamin-<?= $row_imunisasi['id_imunisasi']; ?>" name="jenis_kelamin"
                                    class="form-select" required disabled> {{-- Ditambahkan disabled --}}
                                    <option value="Laki-laki"
                                        <?= ($row_imunisasi['jenis_kelamin'] == 'Laki-laki') ? 'selected' : ''; ?>>
                                        Laki-laki</option>
                                    <option value="Perempuan"
                                        <?= ($row_imunisasi['jenis_kelamin'] == 'Perempuan') ? 'selected' : ''; ?>>
                                        Perempuan</option>
                                </select>
                                <input type="hidden" name="jenis_kelamin"
                                    value="<?= htmlspecialchars($row_imunisasi['jenis_kelamin']) ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="tgl-lahir-anak-<?= $row_imunisasi['id_imunisasi']; ?>"
                                class="col-sm-3 col-form-label">Tanggal Lahir Anak</label>
                            <div class="col-sm-9">
                                <input type="date" id="tgl-lahir-anak-<?= $row_imunisasi['id_imunisasi']; ?>"
                                    name="tgl_lahir_anak" class="form-control"
                                    value="<?= date('Y-m-d', strtotime($row_imunisasi['tgl_lahir_anak'])) ?>" required
                                    readonly>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nama-ibu-<?= $row_imunisasi['id_imunisasi']; ?>"
                                class="col-sm-3 col-form-label">Nama Ibu</label>
                            <div class="col-sm-9">
                                <input type="text" id="nama-ibu-<?= $row_imunisasi['id_imunisasi']; ?>" name="nama_ibu"
                                    class="form-control" value="<?= htmlspecialchars($row_imunisasi['nama_ibu']) ?>"
                                    required readonly>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="tgl-imunisasi-<?= $row_imunisasi['id_imunisasi']; ?>"
                                class="col-sm-3 col-form-label">Tanggal Imunisasi</label>
                            <div class="col-sm-9">
                                <input type="date" id="tgl-imunisasi-<?= $row_imunisasi['id_imunisasi']; ?>"
                                    name="tgl_skrng" class="form-control"
                                    value="<?= date('Y-m-d', strtotime($row_imunisasi['tgl_skrng'])) ?>" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="usia-<?= $row_imunisasi['id_imunisasi']; ?>"
                                class="col-sm-3 col-form-label">Usia (bulan)</label>
                            <div class="col-sm-9">
                                <input type="number" id="usia-<?= $row_imunisasi['id_imunisasi']; ?>" name="usia"
                                    class="form-control" value="<?= htmlspecialchars($row_imunisasi['usia']) ?>"
                                    required readonly>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="imunisasi-<?= $row_imunisasi['id_imunisasi']; ?>"
                                class="col-sm-3 col-form-label">Jenis Imunisasi</label>
                            <div class="col-sm-9">
                                <input type="text" id="imunisasi-<?= $row_imunisasi['id_imunisasi']; ?>"
                                    name="imunisasi" class="form-control"
                                    value="<?= htmlspecialchars($row_imunisasi['imunisasi']) ?>" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="vit-a-<?= $row_imunisasi['id_imunisasi']; ?>"
                                class="col-sm-3 col-form-label">Vitamin A</label>
                            <div class="col-sm-9">
                                <input type="text" id="vit-a-<?= $row_imunisasi['id_imunisasi']; ?>" name="vit_a"
                                    class="form-control" value="<?= htmlspecialchars($row_imunisasi['vit_a']) ?>"
                                    required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="ket-<?= $row_imunisasi['id_imunisasi']; ?>"
                                class="col-sm-3 col-form-label">Keterangan</label>
                            <div class="col-sm-9">
                                <textarea id="ket-<?= $row_imunisasi['id_imunisasi']; ?>" name="ket"
                                    class="form-control" rows="3"
                                    required><?= htmlspecialchars($row_imunisasi['ket']) ?></textarea>
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