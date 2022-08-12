<div class="container-fluid">
	
	<?php foreach ($admin as $usr) : ?>

		<form method="POST" action="<?php echo site_url('admin/user/update_aksi')?>">

			<div class="form-group">
				<label>Id</label>
				<input type="text" name="id" placeholder="Masukkan username " class="form-control" value="<?php echo $usr->id?>">
			</div>



			<div class="form-group">
				<label>Username</label>
				<input type="text" name="username" placeholder="Masukkan username " class="form-control" value="<?php echo $usr->username?>">
			</div>


			<div class="form-group">
				<label>Level</label>
				<input type="text" name="level" placeholder="Masukkan Level " class="form-control" value="<?php echo $usr->level?>">


			</div>

			<button type="submit" class="btn btn-primary">Simpan</button>

		</form>

	<?php endforeach; ?>
	
</div>