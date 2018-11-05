<h1>CRUD OOP PHP</h1>
<h3>Tambah Data User</h3>

<form action="proses.php?aksi=tambah" method="post">
	
<table>
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama"></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="alamat"></td>
	</tr>
	<tr>
		<td>Usia</td>
		<td><input type="text" name="usia"></td>
	</tr>
	<tr>
		<td>Genre Film</td>
		<td>
			<input type="checkbox" name="aa[]" value="Animasi">Animasi <br>
			<input type="checkbox" name="aa[]" value="Anime">Anime <br>
			<input type="checkbox" name="aa[]" value="Action">Action  <br>
			<input type="checkbox" name="aa[]" value="Thriller">Thriller <br>
			<input type="checkbox" name="aa[]" value="Horror">Horror <br>
		</td>
	</tr>
	<tr>
		<td>Wisata Tujuan</td>
		<td>
		<input type="checkbox" name="ab[]" value="Labuan bajo">Labuan bajo <br>
		<input type="checkbox" name="ab[]" value="Bali">Bali <br>
		<input type="checkbox" name="ab[]" value="Raja Ampat">Raja Ampat <br>
		<input type="checkbox" name="ab[]" value="Pulau Dermawan">Pulau Dermawan <br>
		<input type="checkbox" name="ab[]" value="Bangka belitung">Bangka belitung <br>
		</td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
</table>
</form>
