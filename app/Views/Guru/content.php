<?php
echo $this->extend('template/index');
echo $this->section('content');
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><?php echo $title_card; ?> </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table class="table">
                    <thead>
                        <a class="btn btn-sm btn-primary" href="<?php echo base_url(); ?>/guru/tambah"><i class="fa-solid fa-plus"></i>Tambah Guru</a>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Kd Guru</th>
                            <th>Nama Guru</th>
                            <th>Tanggal Lahir</th>
                            <th>Alamat</th>
                            <th>#</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data_guru as $r) {
                        ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $r['kdguru']; ?></td>
                                <td><?php echo $r['nama_guru']; ?></td>
                                <td><?php echo $r['tanggal_lahir']; ?></td>
                                <td><?php echo $r['alamat']; ?></td>
                                <td>edit | hapus</td>
                            </tr>
                        <?php
                            $no++;
                        }
                        ?>
                        <tr>
                            <thead>

                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <?php
    echo $this->endsection();
