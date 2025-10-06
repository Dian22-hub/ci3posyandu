<div class="content-wrapper">
	<div class="container-xxl flex-grow-1 container-p-y">
		<div class="row">
			<div class="col-md-12 col-sm-12 ">
				<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tabel /</span> Riwayat Penimbangan Anak
				</h4>
				<div class="flash-datadan" data-flashdata="<?php echo $this->session->flashdata('msg'); ?>"></div>
				<?php if ($this->session->flashdata('msg')) : ?>
				<?php endif; ?>

				<div class="card px-2">
					<h5 class="card-header">Data Riwayat Penimbangan Anak</h5>
					<div class="card-body">
						<a href="<?= base_url('penimbangan_anak/create') ?>" class="btn btn-primary mb-3">
							<i class="bx bx-plus me-1"></i> Tambah Penimbangan
						</a>
					</div>
					<div class="table-responsive text-nowrap">
						<table id="datatable" class="table table-striped table-bordered" style="width:100%">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama Anak</th>
									<th>Jenis Kelamin</th>
									<th>Tgl Lahir</th>
									<th>Nama Ibu</th>
									<th>Tanggal Penimbangan</th>
									<th>Usia (bulan)</th>
									<th>BB (kg)</th>
									<th>TB (cm)</th>
									<th>Lingkar Kepala (cm)</th>
									<th>Deteksi</th>
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
										<td><?= htmlspecialchars($r['bb']) ?></td>
										<td><?= htmlspecialchars($r['tb']) ?></td>
										<td><?= htmlspecialchars($r['lingkarkepala']) ?></td>
										<td><?= htmlspecialchars($r['deteksi']) ?></td>
										<td><?= htmlspecialchars($r['ket']) ?></td>
										<td>
											<button type="button" class="btn btn-icon btn-outline-secondary me-2"
												data-bs-toggle="modal"
												data-bs-target="#editPenimbanganModal<?= $r['id_penimbangan']; ?>"
												title="Edit">
												<i class="bx bx-edit-alt"></i>
											</button>
											<a class="btn btn-icon btn-outline-danger tbl-hapus"
												href="<?= base_url('penimbangan_anak/delete/') . $r['id_penimbangan']; ?>"
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
	foreach ($riwayat as $row_penimbangan) {
	?>
		<div class="modal fade" id="editPenimbanganModal<?= $row_penimbangan['id_penimbangan']; ?>" tabindex="-1"
			aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="myModalLabel">Edit Data Penimbangan Anak</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<form id="formEditPenimbangan<?= $row_penimbangan['id_penimbangan']; ?>"
						action="<?php echo base_url('penimbangan_anak/update/') . $row_penimbangan['id_penimbangan']; ?>"
						class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data">
						<div class="modal-body">
							<div class="mb-3 row">
								<label for="nama-anak-<?= $row_penimbangan['id_penimbangan']; ?>"
									class="col-sm-3 col-form-label">Nama Anak</label>
								<div class="col-sm-9">
									<input type="text" id="nama-anak-<?= $row_penimbangan['id_penimbangan']; ?>"
										name="nama-anak" class="form-control"
										value="<?= htmlspecialchars($row_penimbangan['nama_anak']) ?>" required readonly>
								</div>
							</div>
							<div class="mb-3 row">
								<label for="tgl-penimbangan-<?= $row_penimbangan['id_penimbangan']; ?>"
									class="col-sm-3 col-form-label">Tanggal Penimbangan</label>
								<div class="col-sm-9">
									<input type="date" id="tgl-penimbangan-<?= $row_penimbangan['id_penimbangan']; ?>"
										name="tgl_penimbangan" class="form-control"
										value="<?= date('Y-m-d', strtotime($row_penimbangan['tgl_skrng'])) ?>" required>
								</div>
							</div>
							<div class="mb-3 row">
								<label for="bb-<?= $row_penimbangan['id_penimbangan']; ?>"
									class="col-sm-3 col-form-label">BB (kg)</label>
								<div class="col-sm-9">
									<input type="number" step="0.01" id="bb-<?= $row_penimbangan['id_penimbangan']; ?>"
										name="bb" class="form-control"
										value="<?= htmlspecialchars($row_penimbangan['bb']) ?>">
								</div>
							</div>
							<div class="mb-3 row">
								<label for="tb-<?= $row_penimbangan['id_penimbangan']; ?>"
									class="col-sm-3 col-form-label">TB (cm)</label>
								<div class="col-sm-9">
									<input type="number" step="0.01" id="tb-<?= $row_penimbangan['id_penimbangan']; ?>"
										name="tb" class="form-control"
										value="<?= htmlspecialchars($row_penimbangan['tb']) ?>">
								</div>
							</div>
							<div class="mb-3 row">
								<label for="lingkarkepala-<?= $row_penimbangan['id_penimbangan']; ?>"
									class="col-sm-3 col-form-label">lingkarkepala (cm)</label>
								<div class="col-sm-9">
									<input type="number" step="0.01"
										id="lingkarkepala-<?= $row_penimbangan['id_penimbangan']; ?>" name="lingkarkepala"
										class="form-control"
										value="<?= htmlspecialchars($row_penimbangan['lingkarkepala']) ?>">
								</div>
							</div>
							<div class="mb-3 row">
								<label for="ket-<?= $row_penimbangan['id_penimbangan']; ?>"
									class="col-sm-3 col-form-label">Keterangan</label>
								<div class="col-sm-9">
									<input type="text" id="ket-<?= $row_penimbangan['id_penimbangan']; ?>" name="ket"
										class="form-control" value="<?= htmlspecialchars($row_penimbangan['ket']) ?>"
										required>
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