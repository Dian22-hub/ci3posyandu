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

<h3><center>Laporan Registrasi Data Ibu</center></h3> 

<br/> 

<table class="table-data"> 

<thead>
<table class="table datatable">
                <thead>
                  <tr>
                  <th scope="col">No</th>
                        <th scope="col">Nama Anak</th>
                        <th scope="col">NIK</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Nama Ibu</th>
                        <th scope="col">Nama Ayah</th>
                  </tr>
                </thead>
                <tbody>
                <?php $i = 1  ?>
                   <?php foreach($anak as $a) : ?>
                   
                    <tr>
                        <td scope='row'><?= $i++ ?>   </td>
                       <td><?= $a['nama_anak'] ?></td>
                       <td><?= $a['nik'] ?></td>
                       <td><?= $a['tgl_lahir'] ?></td>
                       <td><?= $a['nama_ibu'] ?></td>
                       <td><?= $a['nama_ayah'] ?></td>

                    </tr>
                  
                    <?php endforeach ?>
                   </tbody>

</table> 

<script type="text/javascript"> 

window.print();

</script> 

</body> 

</html>