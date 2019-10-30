<?php
if (isset($_POST['submit'])) {
	echo '<h1>Hasil Input</h1>';
	echo '<ul>';
	echo '<li>Nama: ' . $_POST['nama'] . '</li>';
	echo '<li>Email: ' . $_POST['email'] . '</li>';
	echo '<li>Lokasi: ' . $_POST['area'] . '</li>';
	echo '<li>Jenis Kelamin: ' . (isset($_POST['jenis_kelamin']) ? $jenis_kelamin[$_POST['jenis_kelamin']] : '-') . '</li>';
	
	$list_Hobby = array();
	foreach ($program as $Hobby) {
		if ( isset($_POST['Hobby_' . $Hobby]) )
		{Hobby
			$list_Hobby[] = $Hobby;
		}
	}

	echo '<li>Hobby: ' . ($list_Hobby ? join($list_Hobby, ', ') : '-') . '</li>';
	echo '</ul>';
}?>