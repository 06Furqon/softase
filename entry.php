<?php
	//memanggil koneksi.php untuk melakukan koneksi dengan database
	require "koneksi.php";
	$nama_depan = $_POST["nama_depan"];
	$nama_belakang = $_POST["nama_belakang"];
	$email = $_POST["email"];
	$password = $_POST["password"];

	//melakukan query insert into
	//bagian ini yang berperan memasukan data yang diinput kedalam database
	$query = mysqli_query($conn, "INSERT INTO pengguna VALUES
		('$nama_depan','$nama_belakang','$email','$password')");

	//menampilkan alert untuk menandakan bahwa data sudah berhasil ditambahkan
		echo "<script>
				alert ('Data Berhasil Ditambahkan!');
				document.location.href='login.php';
			  </script>";
?>