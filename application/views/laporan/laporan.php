<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Laporan /</span> Semua Anak</h4>
                <div class="flash-datadan" data-flashdata="<?php echo $this->session->flashdata('msg'); ?>"></div>
                <?php if ($this->session->flashdata('msg')) : ?>
                <?php endif; ?>

                <div class="card px-2">
                    <h5 class="card-header">Rekap Penimbangan & Imunisasi</h5>
                    <div class="card-body">
                        <a href="<?= base_url('laporan_anak/cetak_semua') ?>" target="_blank"
                            class="btn btn-secondary mb-3">
                            <i class="bx bxs-printer me-1"></i> Cetak PDF
                        </a>
                    </div>
                    <div class="table-responsive text-nowrap">
                        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tgl Imunisasi</th>
                                    <th>Nama Anak</th>
                                    <th>J. Kelamin</th>
                                    <th>Tgl Lahir</th>
                                    <th>BB (kg)</th>
                                    <th>TB (cm)</th>
                                    <th>Lingkar Kepala (cm)</th>
                                    <th>Nama Ibu</th>
                                    <th>Nama Ayah</th>
                                    <th>Tgl Periksa</th>
                                    <th>Usia (bln)</th>
                                    <th>Imunisasi</th>
                                    <th>Vit A</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                <?php $no = 1;
                                foreach ($laporan as $row) : ?>
                                <tr>
                                    <th scope="row"><?= $no++ ?></th>
                                    <td><?= date('d M Y', strtotime($row->tgl_skrng)) ?></td>
                                    <td><?= htmlspecialchars($row->nama_anak) ?></td>
                                    <td><?= htmlspecialchars($row->jenis_kelamin) ?></td>
                                    <td><?= date('d-m-Y', strtotime($row->tgl_lahir)) ?></td>
                                    <td><?= htmlspecialchars($row->bb) ?> Kg</td>
                                    <td><?= htmlspecialchars($row->tb) ?> Cm</td>
                                    <td><?= htmlspecialchars($row->lingkarkepala) ?> Cm</td>
                                    <td><?= htmlspecialchars($row->nama_ibu) ?></td>
                                    <td><?= htmlspecialchars($row->nama_suami) ?></td>
                                    <td><?= date('d-m-Y', strtotime($row->tgl_skrng)) ?></td>
                                    <td><?= htmlspecialchars($row->usia) ?> bulan</td>
                                    <td><?= htmlspecialchars($row->imunisasi) ?></td>
                                    <td><?= htmlspecialchars($row->vit_a) ?></td>
                                    <td><?= htmlspecialchars($row->ket) ?></td>
                                </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>