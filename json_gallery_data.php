<?php 
	header("Content-Type: application/json");

	//$folder = "gallery2";
	$folder = $_POST["folder"];

	$jsonData = '{'; // awal definisi data
	$dir = $folder."/";
	$dirHandle = opendir($dir);
	$i = 0;
	while ($file = readdir($dirHandle)) {
		// if (!is_dir($file) && strpos($file, '.jpg')) { // Jika fil tersebut bukan direktori dan (file tersebut berekstensi jpg atau png)
		$pattern = "/.jpg|.JPG|.jpeg|.png|.gif/i"	;	// i untuk menghilang case-sensitif dari ekstensi file
		if (!is_dir($file) && preg_match($pattern, $file)) {
			$i++;
			$src = "$dir$file";  // hasilnya contohnya gallery1/logo.jpg
			$jsonData .= ' "img'.$i.'" : { "num" : "'.$i.'", "src" : "'.$src.'", "name" : "'.$file.'" },';							
		}
	}
	closedir($dirHandle);
	$jsonData = chop($jsonData, ","); // menghilangkan koma di akhir data
	$jsonData .= '}';  // akhir definisi data

	echo $jsonData;

?>