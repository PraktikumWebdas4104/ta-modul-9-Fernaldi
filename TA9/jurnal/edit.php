<?php 
include 'database.php';
$db = new database(); //isi dengan deklarasi method
?>

<h1>CRUD OOP PHP</h1>
<h3>Edit Data User</h3>

<form action="proses.php?aksi=update" method="post">
<?php
foreach($db->edit($_GET['id']) as $d){ //panggil method edit dari class database
	$array = explode(", ",$d['genre']);
	$array = explode(", ",$d['wisata']);
?>
<table>
	<tr>
		<td>Nama</td>
		<td>
			<input type="hidden" name="id" value="<?php echo $d['id'] ?>">
			<input type="text" name="nama" value="<?php echo $d['nama'] ?>">
		</td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="alamat" value="<?php echo $d['alamat'] ?>"></td>
	</tr>
	<tr>
		<td>Usia</td>
		<td><input type="text" name="usia" value="<?php echo $d['usia'] ?>"></td>
	</tr>
	<tr>
		<td>Genre Film</td>
		<td>
			<input type="checkbox" name="aa[]" value="Animasi" <?php if(in_array('Animasi',$array)){echo "checked=cAnimehecked";} ?> >Animasi <br>
			<input type="checkbox" name="aa[]" value="Anime" <?php if(in_array('Anime',$array)){echo "checked=checked";} ?> >Anime <br>
			<input type="checkbox" name="aa[]" value="Action" <?php if(in_array('Action',$array)){echo "checked=checked";} ?> >Action  <br>
			<input type="checkbox" name="aa[]" value="Thriller" <?php if(in_array('Thriller',$array)){echo "checked=checked";} ?> >Thriller <br>
			<input type="checkbox" name="aa[]" value="Horror" <?php if(in_array('Horror',$array)){echo "checked=checked";} ?> >Horror <br>
		</td>
	</tr>
	<tr>
		<td>Wisata Tujuan</td>
		<td>
		<input type="checkbox" name="ab[]" value="Labuan bajo" <?php if(in_array('Labuan bajo',$array)){echo "checked=checked";} ?> >Labuan bajo <br>
		<input type="checkbox" name="ab[]" value="Bali" <?php if(in_array('Bali',$array)){echo "checked=checked";} ?> >Bali <br>
		<input type="checkbox" name="ab[]" value="Raja Ampat" <?php if(in_array('Raja Ampat',$array)){echo "checked=checked";} ?> >Raja Ampat <br>
		<input type="checkbox" name="ab[]" value="Pulau Dermawan" <?php if(in_array('Pulau Dermawan',$array)){echo "checked=checked";} ?> >Pulau Dermawan <br>
		<input type="checkbox" name="ab[]" value="Bangka belitung" <?php if(in_array('Bangka belitung',$array)){echo "checked=checked";} ?> >Bangka belitung <br>
		</td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
</table>
<?php } ?>
</form>
