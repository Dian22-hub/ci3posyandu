<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Imunisasi /</span> Tambah Imunisasi Anak</h4>

        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Form Imunisasi Anak</h5>
                    <div class="card-body">
                        <?php if ($this->session->flashdata('msg')) : ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?= $this->session->flashdata('msg'); ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <?php endif; ?>
                        <form id="imunisasi-form" name="imunisasi-form"
                            action="<?php echo base_url('imunisasi_anak/submit'); ?>" method="POST"
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
                            <h5 class="mb-3">Imunisasi</h5>

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
                                <label class="form-label" for="imun">Imunisasi</label>
                                <input type="text" id="imun" name="imun" class="form-control"
                                    placeholder="Masukkan jenis imunisasi">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Vitamin A</label>
                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="radio" name="vit[]" id="vita-merah"
                                        value="Merah" checked>
                                    <label class="form-check-label" for="vita-merah">
                                        Merah
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="vit[]" id="vita-biru"
                                        value="Biru">
                                    <label class="form-check-label" for="vita-biru">
                                        Biru
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

<script>
// Script to handle selecting a child from the modal and populating the form fields
document.addEventListener('DOMContentLoaded', function() {
    const dataAnakModal = document.getElementById('DataAnakModal');
    dataAnakModal.addEventListener('click', function(event) {
        if (event.target.classList.contains('btnSelectAnak')) {
            const button = event.target;
            document.getElementById('id_anak').value = button.dataset.id;
            document.getElementById('nama_anak').value = button.dataset.nama;
            document.getElementById('jenis_kelamin').value = button.dataset.jk;
            document.getElementById('tgl_lahir').value = button.dataset.tgllahir;
            document.getElementById('ibu_id').value = button.dataset.idibu;
            document.getElementById('nama_ibu').value = button.dataset.ibu;

            const modal = bootstrap.Modal.getInstance(dataAnakModal);
            modal.hide();
        }
    });
});
</script>