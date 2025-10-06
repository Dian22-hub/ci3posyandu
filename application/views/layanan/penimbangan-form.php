<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Penimbangan /</span> Tambah Penimbangan Anak
        </h4>

        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Form Penimbangan Anak</h5>
                    <div class="card-body">
                        <?php if ($this->session->flashdata('msg')) : ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?= $this->session->flashdata('msg'); ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <?php endif; ?>

                        <form id="penimbangan-form" name="penimbangan-form"
                            action="<?php echo base_url('penimbangan_anak/submit'); ?>" method="POST"
                            enctype="multipart/form-data">
                            <div class="mb-3">
                                <label class="form-label" for="nama_anak">Nama Anak</label>
                                <div class="input-group">
                                    <input type="hidden" name="id_anak" id="id_anak" class="form-control" readonly>
                                    <input type="text" name="nama_anak" id="nama_anak" class="form-control"
                                        placeholder="Pilih Anak" readonly>
                                    <button id="pilihData" name="pilihData" type="button"
                                        class="btn btn-outline-primary" data-bs-toggle="modal"
                                        data-bs-target="#DataAnakModal">Pilih</button>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="jenis_kelamin">Jenis Kelamin</label>
                                <input type="text" name="jenis_kelamin" id="jenis_kelamin" class="form-control"
                                    readonly>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="tgl_lahir">Tanggal Lahir</label>
                                <input class="form-control" name="tgl_lahir" id="tgl_lahir" type="date" readonly>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="nama_ibu">Nama Ibu</label>
                                <input type="hidden" name="ibu_id" id="ibu_id" class="form-control" readonly>
                                <input type="text" name="nama_ibu" id="nama_ibu" class="form-control" readonly>
                            </div>

                            <hr class="my-4">
                            <h5 class="mb-3">Pertumbuhan</h5>

                            <div class="mb-3">
                                <label class="form-label" for="tgl_skrng">Tanggal Sekarang</label>
                                <input class="form-control" name="tgl_skrng" id="tgl_skrng" type="date">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="usia">Usia (bulan)</label>
                                <input type="number" step="any" id="usia" name="usia" class="form-control"
                                    placeholder="Masukkan usia dalam bulan">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="bb">Berat Badan [BB] (kg)</label>
                                <input type="number" step="any" id="bb" name="bb" class="form-control"
                                    placeholder="Masukkan berat badan dalam kg">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="tb">Tinggi Badan [TB] (cm)</label>
                                <input type="number" step="any" id="tb" name="tb" class="form-control"
                                    placeholder="Masukkan tinggi badan dalam cm">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="lingkarkepala">Lingkar Kepala (cm)</label>
                                <input type="number" step="any" id="lingkarkepala" name="lingkarkepala"
                                    class="form-control" placeholder="Masukkan lingkar kepala dalam cm">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Deteksi</label>
                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="radio" name="deteksi[]" id="deteksiS"
                                        value="Sesuai" checked>
                                    <label class="form-check-label" for="deteksiS">
                                        Sesuai
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="deteksi[]" id="deteksiT"
                                        value="Tidak Sesuai">
                                    <label class="form-check-label" for="deteksiT">
                                        Tidak Sesuai
                                    </label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="keterangan">Keterangan</label>
                                <textarea id="keterangan" class="form-control" name="keterangan" rows="3"
                                    placeholder="Masukkan keterangan tambahan"></textarea>
                            </div>

                            <div class="mt-4">
                                <button type="submit" id="proses" name="proses" class="btn btn-primary">Proses</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Data Anak -->
    <div class="modal fade" id="DataAnakModal" tabindex="-1" aria-labelledby="DataAnakModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="DataAnakModalLabel">Daftar Data Anak</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Nama Anak</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Nama Ibu</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($d_anak as $d) : ?>
                                <tr>
                                    <td><?= $d['nama_anak']; ?></td>
                                    <td><?= $d['jenis_kelamin']; ?></td>
                                    <td><?= $d['tgl_lahir']; ?></td>
                                    <td><?= $d['nama_ibu']; ?></td>
                                    <td>
                                        <button type="button" data-id="<?= $d['id_anak']; ?>"
                                            data-nama="<?= $d['nama_anak']; ?>" data-tgllahir="<?= $d['tgl_lahir']; ?>"
                                            data-idibu="<?= $d['ibu_id']; ?>" data-ibu="<?= $d['nama_ibu']; ?>"
                                            data-jk="<?= $d['jenis_kelamin']; ?>"
                                            class="btnSelectAnak btn btn-primary btn-sm">Pilih</button>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>