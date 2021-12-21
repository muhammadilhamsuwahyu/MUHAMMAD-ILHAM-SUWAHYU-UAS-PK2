<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form • Portal Desain</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script src="../js/script.js"></script>
</head>
<body>
    <div class="header">
        <img src="../images/logo.png" alt="desainkit">
    </div>
      
      <div class="navbar">
        <a href="../index.html">HOME</a>
        <a href="../index.html">BLOG</a>
        <a href="about.html">ABOUT</a>
        <a href="form.php" class="active">BUKU TAMU</a>
        <a href="https://desainkit.com/template-powerpoint/" target="_blank" class="right">TEMPLATE PPT</a>
      </div>
      
      
    <div class="main">
		<h2>Formulir</h2>
		<form action="" method="post">
			<div class="row">
				<label>Nama</label>
				<input type="text" name="nama" value="<?=isset($_POST['nama']) ? $_POST['nama'] : ''?>"/ required>
			</div>
			<div class="row">
				<label>Alamat</label>
				<input type="text" name="alamat" value="<?=isset($_POST['alamat']) ? $_POST['alamat'] : ''?>"/ required>
			</div>
			<div class="row">
				<label>Tempat Lahir</label>
				<input type="text" name="tempat" value="<?=isset($_POST['tempat']) ? $_POST['tempat'] : ''?>"/ required>
			</div>
			<div class="row">
				<label>Tanggal Lahir</label>
				<input type="date" name="lahir" value="<?=isset($_POST['lahir']) ? $_POST['lahir'] : ''?>"/ required>
			</div>
			<div class="row">
				<label>Email</label>
				<input type="email" name="email" value="<?=isset($_POST['email']) ? $_POST['email'] : ''?>"/ required>
			</div>
			<div class="row">
				<label>Jenis Kelamin</label>
				<div class="options">
					<?php
					$jenis_kelamin = array('L' => 'Laki-laki', 'P' => 'Perempuan');
					foreach ($jenis_kelamin as $kode => $detail) {
						$checked = @$_POST['jenis_kelamin'] == $kode ? ' checked="checked"' : '';
						echo '<label class="radio">
						<input name="jenis_kelamin" type="radio" value="' . $kode . '"' . $checked . '>' . $detail . '</option>
						</label>';
					}
					?>
				</div>
			</div>
			<div class="row">
				<label>Pendidikan Terakhir</label>
				<select name="pendidikan">
					<?php $options = array('SD', 'SMP', 'SMA', 'S1', 'S2', 'S3');
					foreach ($options as $pendidikan) {
						$selected = @$_POST['pendidikan'] == $pendidikan ? ' selected="selected"' : '';
						echo '<option value="' . $pendidikan . '"' . $selected . '>' . $pendidikan . '</option>';
					}?>
				</select>
			</div>
			<div class="row">
				<label>Tau website ini darimana?</label>
				<div class="options">
					<?php 
					$program = array('Google', 'Telegram', 'Whatsapp', 'Facebok', 'Instagram', 'Line');
					foreach ($program as $info) {
						$checked = isset($_POST['info_' . $info]) ? ' checked="checked"' : '';
						echo '<label class="checkbox">
								<input type="checkbox" name="info_' . $info . '"' . $checked . '>' . $info . 
							'</label>';
					}
					?>
				</div>
			</div>
			<div class="row">
				<input type="submit" name="submit" value="Simpan"/>
			</div>
		</form>
		<?php
		if (isset($_POST['submit'])) {
			echo '<h2>Berikut data kamu:</h2>';
			echo '<ul>';
			echo '<li>Nama: ' . $_POST['nama'] . '</li>';
			echo '<li>Alamat: ' . $_POST['alamat'] . '</li>';
			echo '<li>Tempat Lahir: ' . $_POST['tempat'] . '</li>';
			echo '<li>Tanggal Lahir: ' . $_POST['lahir'] . '</li>';
			echo '<li>Email: ' . $_POST['email'] . '</li>';
			echo '<li>Jenis Kelamin: ' . (isset($_POST['jenis_kelamin']) ? $jenis_kelamin[$_POST['jenis_kelamin']] : '-') . '</li>';
			
			$list_info = array();
			foreach ($program as $info) {
				if ( isset($_POST['info_' . $info]) )
				{
					$list_info[] = $info;
				}
			}
			echo '<li>Pendidikan Terakhir: ' . $_POST['pendidikan'] . '</li>';
			echo '<li>Tau website ini dari: ' . ($list_info ?  : 'website') . '</li>';
			echo '</ul>';
		}?>	
    </div>

    <!-- goTop -->
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <button onclick="topFunction()" id="gotoTop" title="Go to top">&#8593;</button>
  
    <div class="footer">
        <b>&#169; 2021 DesainKit • Dibuat dengan &#10084;&#65039; oleh PEMBUAT SENI</a></b>
    </div>      
</body>
</html>