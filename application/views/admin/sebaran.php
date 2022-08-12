<br>

<div class="container-fluid">



<a href="<?= base_url("admin/dashboard/addsebaran") ?>" class="btn btn-primary mb-3"><i class="fa fa-plus"></i> Tambah Sebaran</a>

    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>NO</th>
            <th>Nama Agen</th>
            <th>No.HP</th>
            <th>Alamat</th>
            <th>Lat</th>
            <th>Long</th>
            <th colspan="">Aksi</th>
        </tr>

        <?php
        $no = 1;
        $q = $this->db->query("select * from sebaran order by id desc");
        foreach ($q->result() as $usr) : ?>
            <tr>
                <td width="20px"><?php echo $no++ ?> </td>
                <td><?php echo $usr->nama ?></td>
                <td><?php echo $usr->telp ?></td>
                <td><?php echo $usr->alamat ?></td>
                <td><?php echo $usr->lat ?></td>
                <td><?php echo $usr->lng ?></td>
                <td width="20px">
                <a href="<?= base_url("admin/dashboard/editsebaran/$usr->id") ?>" class="btn btn-success"><i class="fa fa-edit"></i></a>    
                <a href="<?= base_url("admin/dashboard/hapussebaran/$usr->id") ?>" class="btn btn-danger" onclick="return confirm('Hapus data?')"><i class="fa fa-trash"></i></a>    
                </td>
            </tr>
        <?php endforeach; ?>


    </table>

</div>