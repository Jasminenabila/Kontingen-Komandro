<html>
<head>
<style>
	body
	{
		background-color: light-blue;
	}
</style>
</head>

<body>
<center>
<p>Halo, <?php echo $this->session->userdata('email'); ?>
	
</p>
<a href="<?php echo base_url().'login/logout'; ?>" class = "btn btn-logout">logout</a><br>
<h2>

  <a href="<?php echo base_url().'admin/index'; ?>"> 
  <button type = "Admin" class = "btn btn-data-admin">Admin</button>

  <a href="<?php echo base_url().'siswa/index'; ?>" >
  <button type = "Siswa" class = "btn btn-siswa">Siswa</button>

  <a href="<?php echo base_url().'ekstrakulikuler/index'; ?>"Ekstrakulikuler"</a> 
  <button type = "Ekstrakurikuler" class = "btn btn-data-ekstrakurikuler">Ekstrakurikuler</button>

  <a href="<?php echo base_url().'data_ekstrakulikuler/index'; ?>"Data Eskul</a>
  <button type = "data-eskul" class = "btn btn-data-eskul">Data Eskul</button>

</a>
</body>
</h2>
<hr>
</center>
</html>
