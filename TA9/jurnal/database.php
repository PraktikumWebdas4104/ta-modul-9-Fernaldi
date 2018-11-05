<?php 

class database{

	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "mahasiswa"; //isi sesuai nama database anda

	function __construct(){
		$this->conn = mysqli_connect($this->host,$this->uname,$this->pass,$this->db);
	}

	function tampil_data(){
		//lengkapilah method tampil data
		//query select user

		$data = mysqli_query($this->conn,"SELECT * FROM user");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;

	}

	function input($nama,$alamat,$usia,$genre,$wisata){
		//buatlah method input
		//query inset into user
		$aa = implode(", ",$genre);
		$ab = implode(", ",$wisata);
		$que = mysqli_query($this->conn,"INSERT INTO user VALUES ('','$nama','$alamat','$usia','$aa','$ab')");
	}

	function hapus($id){
		//buatlah method hapus
		//query delete from id where id ='$id'
		$que = mysqli_query($this->conn,"DELETE FROM user WHERE id='$id'");
	}

	function edit($id){
		//lengkapilah method edit
		//query select from user where id ='$id'
		$que = mysqli_query($this->conn,"SELECT * FROM user WHERE id = '$id'");
		while($d = mysqli_fetch_array($que)){
			$hasil[] = $d;
		}
		return $hasil;
	}

	function update($id,$nama,$alamat,$usia,$aa,$ab){
		//buatlah method update
		//query update user set blablabla where id='$id'
		$aa = implode(", ",$genre);
		$ab = implode(", ",$wisata);
		$que = mysqli_query($this->conn, "UPDATE `user` SET nama='$nama',alamat='$alamat',usia='$usia',genre='$aa',wisata='$ab' WHERE id='$id'");

	}

} 

?>