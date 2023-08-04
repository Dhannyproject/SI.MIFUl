<?php
echo $this->extend('template/index');
echo $this->section('content');
?>
<div class="row">
    <div class="col md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><?php echo $title_card; ?></h3>
            </div>
            <!-- card header -->
            <?php echo validation_list_errors() ?>
            <form action="<?php echo $action; ?>" method="post">
                <div class="card-body">

                    <div class="form-group">
                        <label for="kdguru">Kode Guru</label>
                        <input type="text" name="kdguru" id="kdguru" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nama_guru">Nama Guru</label>
                        <input type="text" name="nama_guru" id="nama_guru" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="text" name="tanggal_lahir" id="tanggal_lahir" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="form-control">
                    </div>

                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary"><i class="fa-solid fa-save"></i> Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
echo $this->endsection();
