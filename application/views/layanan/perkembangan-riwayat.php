<div class="content-wrapper">
	<div class="container-xxl flex-grow-1 container-p-y">
		<div class="row">
			<div class="col-md-12 col-sm-12 ">
				<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tabel /</span> Riwayat Perkembangan Anak
				</h4>
				<div class="flash-datadan" data-flashdata="<?php echo $this->session->flashdata('msg'); ?>"></div>
				<?php if ($this->session->flashdata('msg')) : ?>
				<?php endif; ?>

				<div class="card px-2">
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
										<td><?= date('d-m-Y', strtotime($r['tgl_lahir'])) ?></td>
										<td><?= htmlspecialchars($r['nama_ibu']) ?></td>
										<td>
											<a class="btn btn-icon btn-outline-primary"
												href="<?= base_url('perkembangan_anak/detail/') . $r['id_anak']; ?>"
												title="Delete">
												<i class="bx bx-show"></i>
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
</div>