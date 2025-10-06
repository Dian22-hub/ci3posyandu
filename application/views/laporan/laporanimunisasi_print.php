<!DOCTYPE html> 



<html> 

<head> 

	<title></title> 

</head> 

<body> 

	<style type="text/css"> 

	.table-data{ 

width: 100%; 

border-collapse: collapse; 

} 

.table-data tr th, 

.table-data tr td

{ 

border:1px solid black; 

font-size: 11pt; 

font-family:Verdana; 

padding: 10px 10px 10px 10px; 

} 

h3

{ 

font-family:Verdana;

 } 

</style> 

<h3><center>Laporan Imunisasi</center></h3> 

<?php if (isset($start_date) && isset($end_date) && $start_date != '' && $end_date != ''): ?>
    <p><center>Periode: <?= $start_date ?> s/d <?= $end_date ?></center></p>
<?php endif; ?>

<br/> 

<table class="table-data"> 

<thead>
                    <tr>
                        <th scope="col">Tanggal Imunisasi</th>
                        <th scope="col">Nama Anak</th>
                        <th scope="col">Berat Badan</th>
                        <th scope="col">Tinggi Badan</th>
                        <th scope="col">Lingkar Kepala</th>
                        <th scope="col">Nama Layanan</th>
                        <th scope="col">Petugas</th>


                        <!-- <th scope="col">Umur saat ini</th> -->
                    </tr>
                </thead>

	<tbody> 


    <?php $i = 1  ?>
                   <?php foreach($imunisasi as $m) : ?>
                   
                    <tr>
                        <!-- <td scope='row'><?= $i++ ?>   </td> -->
                        <td><?= $m['tgl_imun'] ?></td>
                        
                       <td><?= $m['nama_anak'] ?></td>
                       <td><?= $m['bb'] ?></td>
                       <td><?= $m['tb'] ?></td>
                       <td><?= $m['lk'] ?></td>
                       <td><?=$m['nama_vaksin']?></td>
                       <td><?= $m['nama_petugas'] ?></td>


                
                       </td>
                    </tr>
                  
                    <?php endforeach ?>
                </tbody>

</table> 

<script type="text/javascript"> 

window.print();

</script> 

</body> 

</html>
