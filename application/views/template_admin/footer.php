
</body>

</html>

<?php if($this->session->flashdata("msg") == "success"){ ?>
    <script>
        Swal.fire(
            "Informasi",
            "Data berhasil disimpan!",
            "success"
        );
    </script>
    <?php }  ?>
<?php if($this->session->flashdata("msg") == "hapus"){ ?>
    <script>
        Swal.fire(
            "Informasi",
            "Data berhasil dihapus!",
            "success"
        );
    </script>
    <?php }  ?>