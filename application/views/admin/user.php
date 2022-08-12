<br>

<div class="container-fluid">

	

	<?php echo anchor('admin/user/input','<button class="btn btn-sm btn-primary mb-3"><i class=" fas fa-plus fa-sm"> Add User</i></button>') ?>
	

	<table class="table table-bordered table-striped table-hover">
		<tr>

			<th>NO</th>
			<th>Username</th>
			<th>Level</th>
			<th colspan ="2">Aksi</th>
		</tr>

		<?php
		$no=1;
		foreach ($admin as $usr) : ?>
			<tr>
				<td width="20px"><?php echo $no++ ?> </td>
				<td><?php echo $usr->username ?></td>
				<td><?php echo $usr->level ?></td>
				<td width="20px"><?php echo anchor('admin/user/update/' .$usr->id,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>')?></td>
				<td width="20px"><?php echo anchor('admin/user/delete/' .$usr->id,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>')?></td>
			</tr>
			<?php endforeach; ?>

			
</table>

	</div>

	