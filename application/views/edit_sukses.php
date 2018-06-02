<?php 

	echo 'Sukses Simpan Data';
	echo '<br>';
	echo anchor('pegawai/', 'Ke beranda');
	echo '<br>';
	echo anchor('pegawai/update/'.$this->uri->segment(3), 'Masukkan Data Lagi');
 ?>