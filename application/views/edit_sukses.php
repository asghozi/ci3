<?php 

	echo 'Sukses Simpan Data';
	echo '<br>';
	echo anchor('index.php/pegawai/', 'Ke beranda');
	echo '<br>';
	echo anchor('index.php/pegawai/update/'.$this->uri->segment(3), 'Masukkan Data Lagi');
 ?>