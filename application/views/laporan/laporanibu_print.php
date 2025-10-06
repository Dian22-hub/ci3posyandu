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
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Ibu</th>
                        <th scope="col">NIK</th>
                        <th scope="col">No Telepon</th>

    
                    </tr>
                </thead>
                <tbody>

                    <?php
                        $b = 1;
                        foreach ($ibu as $i) { ?>
                    <tr>
                        <th scope="row"><?= $b++; ?></th>
                        <td><?= $i['nama_ibu']; ?></td>
                        <td><?= $i['NIK']; ?></td>
                        <td><?= $i['no_tlp']; ?></td>

                    </tr>
                    <?php } ?>
                </tbody>

</table> 

<script type="text/javascript"> 

window.print();

</script> 

</body> 

</html>