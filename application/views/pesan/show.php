<?php $this->load->view('header') ?>
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Mobil</h1>
            </div>
        </div>
    </div>
</div>

<div class="content mt-3">
    <div class="card">
        <div class="card-body">
            <a href="<?php echo base_url('Mobil/create') ?>" class="btn btn-primary mb-3">Tambah</a>
            <table id="bootstrap-data-table" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="bootstrap-data-table_info">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal Pesan</th>
                        <th>Tanggal Sewa</th>
                        <th>Tanggal Kembali</th>
                        <th>Mobil</th>
                        <th>Nama Users</th>
                        <th>Hari</th>
                        <th>Denda</th>
                        <th>Kembali</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($transaksi as $value): ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $value['tgl_pesan'] ?></td>
                            <td><?php echo $value['tgl_sewa'] ?></td>
                            <td><?php echo date("Y-m-d",strtotime($value['tgl_kembali'])) ?></td>
                            <td><?php echo $value['mobil_nama'] ?></td>
                            <td><?php echo $value['users_nama'] ?></td>
                            <td>
                                <?php 
                            $date1 = new DateTime($value['tgl_sewa']);
                            $date2 = new DateTime($value['tgl_kembali']);
                            
                            $diff = $date1->diff($date2);
                            echo $beda = $diff->days;
                             ?>
                            </td>
                            <td>
                                <?php if ($value['status'] == 1): ?>
                                    <?php 
                                $date3 = new DateTime(date('Y-m-d'));
                                $dendadiff = $date2->diff($date3);
                                $bedadenda = $dendadiff->days;
                                echo ($date2 < $date3 ? $bedadenda*50000 : 0) ?>
                            <?php else: ?>  
                                Sudah Kembali
                                <?php endif ?></td>
                            <td>
                                <?php if ($value['status'] == 1): ?>
                                    <a href="<?php echo base_url("Transaksi/kembali/".$value['id']) ?>" class="btn btn-sm btn-primary">Kembali</a>
                                <?php endif ?>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $this->load->view('footer') ?>  