<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet"></link>
	<script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
	<meta charset="utf-8">
	<title>ILKOMERZ</title>
	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #0d8fc6;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #0d8fc6;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #0d8fc6;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #0d8fc6;
		box-shadow: 0 0 8px #0d8fc6;
	}
	#mhs {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
	}
	#mhs td, #mhs th {
    border: 1px solid #ddd;
    padding: 8px;
	}
	#mhs tr:nth-child(even){background-color: #e3eded;}
	#mhs tr:hover {background-color: #ddd;}
	#mhs th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: center;
    background-color: #D5647C;
    color: white;
	}
	</style>
</head>
<body>

<div id="container">
	<nav class="navbar navbar-dark" style="background-color: #2c04e0;">
		<span class="navbar-brand mb-0 h1">Data</span>
	</nav>
	<br>
	<div id="body">
		<table id="mhs">
			<tr>
				<th style="text-align: center;  background-color:#0d8fc6">No</th>
				<th style="text-align: center;  background-color:#0d8fc6">Nama Lengkap</th>
				<th style="text-align: center;  background-color:#0d8fc6">No HP</th>
				<th style="text-align: center;  background-color:#0d8fc6">Asal</th>
				<th style="text-align: center;  background-color:#0d8fc6">Tanggal Lahir</th>
				<th style="text-align: center;  background-color:#0d8fc6">Pilih</th>
			</tr>
			<?php 
			$no = 1;
			foreach ($hasil as $r) { ?>
			<tr>
				<td style="text-align: center;"><?php echo $no++ ?></td>
				<td><?php echo $r['Nama'] ?></td>
				<td><?php echo $r['No_HP'] ?></td>
				<td><?php echo $r['Asal'] ?></td>
				<td><?php echo $r['Tanggal_Lahir'] ?></td>
				<td>
					<a class="btn btn-primary btn-sm" href="<?php echo site_url('welcome/form_edit/' .$r['No']) ?>" role="button">Edit</a>
					<a class="btn btn-danger btn-sm" href="<?php echo site_url('welcome/delete/' .$r['No']) ?>" role="button">Delete</a>
				</td>
			</tr>
			<?php } ?>
		</table>
		<br>
		<a class="btn btn-primary btn-sm" href="<?php echo site_url('welcome/form_input') ?>" role="button">Tambah Data</a>
	</div>
	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?>.</p>
</div>

</body>
</html>