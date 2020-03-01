<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
 "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Music Viewer</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<link href="viewer.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<div id="header">

			<h1>190M Music Playlist Viewer</h1>
			<h2>Search Through Your Playlists and Music</h2>
		</div>


		<div id="listarea">
			<ul id="musiclist">
				<?php
				$directory = "songs/*.mp3";
				foreach (glob($directory) as $filename) {
					echo '<li class="mp3item"> <a href="' . $filename . '">'. basename($filename) . '('. filesize($filename) . ' bytes)' . '</a></li>';
				}
				?>

				<?php
				$directory = "songs/*.txt";
				foreach (glob($directory) as $filename) {
					echo '<li class="playlistitem"> <a href="' . $filename . '">'. basename($filename) . '('. filesize($filename) . ' bytes)' . '</a></li>';
				}
				?>
			</ul>
		</div>
	</body>
</html>

<!-- <?php
		$directory = "songs/";
		foreach (array_diff(scandir($directory), array('.','..')) as $filename) {
		?>
			<li class="mp3item"> <?= $filename ?> </li>
		<?php
		}
?> -->