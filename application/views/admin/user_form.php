<div class="container-fluid">
	
	<form method="POST" action="<?php echo site_url('admin/user/input_aksi')?>">
		
		<div class="form-group">
			<label>Username</label>
			<input type="text" name="username" placeholder="Masukkan username " class="form-control">
			<?php echo form_error('username', '<div class="text-danger small" ml-3>') ?>

		</div>
			<div class="form-group">
			<label>Password</label>
			<input type="text" name="password" placeholder="Masukkan password " class="form-control">

		</div>

		<div class="form-group">
			<label>Level</label>
			<input type="text" name="level" placeholder="Masukkan Level " class="form-control">
			<?php echo form_error('level', '<div class="text-danger small" ml-3>') ?>

		</div>

		<button type="submit" class="btn btn-primary">Simpan</button>

	</form>
</div>