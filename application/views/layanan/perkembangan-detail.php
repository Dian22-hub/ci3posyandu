<div class="content-wrapper">
	<div class="container-xxl flex-grow-1 container-p-y">
		<div class="row">
			<div class="col-md-12 col-sm-12 ">
				<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tabel /</span> Grafik Perkembangan Anak
				</h4>
				<div class="card px-2">
					<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
					<canvas id="kmsChart"></canvas>
					<script>
						const KMS_Boys = {
							median: [3.3, 4.5, 5.6, 6.4, 7.0, 7.5, 7.9, 8.3, 8.6, 8.9, 9.2, 9.4, 9.6, 9.9, 10.1, 10.3, 10.5, 10.7, 10.9, 11.1, 11.3, 11.5, 11.8, 12.0, 12.2],
							min2SD: [2.5, 3.4, 4.3, 5.0, 5.6, 6.0, 6.4, 6.7, 6.9, 7.1, 7.4, 7.6, 7.7, 7.9, 8.1, 8.3, 8.4, 8.6, 8.8, 8.9, 9.1, 9.2, 9.4, 9.5, 9.7],
							plus2SD: [4.4, 5.8, 7.1, 8.0, 8.7, 9.3, 9.8, 10.2, 10.6, 11.0, 11.4, 11.7, 12.0, 12.3, 12.6, 12.8, 13.1, 13.3, 13.5, 13.7, 13.9, 14.1, 14.3, 14.5, 14.7]
						};

						const KMS_Girls = {
							median: [3.2, 4.2, 5.1, 5.8, 6.4, 6.9, 7.3, 7.6, 7.9, 8.2, 8.5, 8.7, 8.9, 9.2, 9.4, 9.6, 9.8, 10.0, 10.2, 10.4, 10.6, 10.9, 11.1, 11.3, 11.5],
							min2SD: [2.4, 3.2, 3.9, 4.5, 5.0, 5.4, 5.7, 6.0, 6.3, 6.5, 6.7, 6.9, 7.1, 7.3, 7.5, 7.7, 7.8, 8.0, 8.2, 8.4, 8.6, 8.7, 8.9, 9.1, 9.2],
							plus2SD: [4.2, 5.5, 6.6, 7.5, 8.2, 8.8, 9.3, 9.8, 10.2, 10.5, 10.9, 11.2, 11.5, 11.7, 12.0, 12.3, 12.5, 12.8, 13.0, 13.3, 13.5, 13.7, 14.0, 14.2, 14.4]
						};

						const usia = [...Array(25).keys()]; // 0–24 bulan

						const dataAnak = [
							<?php foreach ($penimbangan as $p): ?> {
									x: <?= $p->usia ?>,
									y: <?= $p->bb ?>
								},
							<?php endforeach; ?>
						];

						const jenisKelamin = "<?= $anak->jenis_kelamin ?>";
						console.log(jenisKelamin);
						let datasets = [];

						if (jenisKelamin === 'Laki-Laki') {
							datasets = [{
									label: 'Median Laki-laki',
									data: usia.map((u, i) => ({
										x: u,
										y: KMS_Boys.median[i]
									})),
									borderColor: 'green',
									fill: false
								},
								{
									label: '-2SD Laki-laki',
									data: usia.map((u, i) => ({
										x: u,
										y: KMS_Boys.min2SD[i]
									})),
									borderColor: 'red',
									borderDash: [5, 5],
									fill: false
								},
								{
									label: '+2SD Laki-laki',
									data: usia.map((u, i) => ({
										x: u,
										y: KMS_Boys.plus2SD[i]
									})),
									borderColor: 'orange',
									borderDash: [5, 5],
									fill: false
								},
							];
						} else {
							datasets = [{
									label: 'Median Perempuan',
									data: usia.map((u, i) => ({
										x: u,
										y: KMS_Girls.median[i]
									})),
									borderColor: 'green',
									fill: false
								},
								{
									label: '-2SD Perempuan',
									data: usia.map((u, i) => ({
										x: u,
										y: KMS_Girls.min2SD[i]
									})),
									borderColor: 'red',
									borderDash: [5, 5],
									fill: false
								},
								{
									label: '+2SD Perempuan',
									data: usia.map((u, i) => ({
										x: u,
										y: KMS_Girls.plus2SD[i]
									})),
									borderColor: 'orange',
									borderDash: [5, 5],
									fill: false
								},
							];
						}

						datasets.push({
							label: '<?= $anak->nama_anak ?>',
							data: dataAnak,
							borderColor: 'blue',
							backgroundColor: 'blue',
							type: 'scatter',
							showLine: true
						});

						new Chart(document.getElementById('kmsChart'), {
							type: 'line',
							data: {
								datasets
							},
							options: {
								responsive: true,
								scales: {
									x: {
										type: 'linear',
										title: {
											display: true,
											text: 'Usia (bulan)'
										}
									},
									y: {
										title: {
											display: true,
											text: 'Berat Badan (kg)'
										}
									}
								}
							}
						});
					</script>
				</div>
			</div>
		</div>
	</div>
</div>