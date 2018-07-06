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
						<th>Nopol</th>
						<th>Nama</th>
						<th>Ket</th>
						<th>Harga</th>
						<th>Image</th>
						<th>aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1; ?>
					<?php foreach ($mobil_list as $value): ?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $value['nopol'] ?></td>
							<td><?php echo $value['nama'] ?></td>
							<td><?php echo $value['ket'] ?></td>
							<td><?php echo $value['harga'] ?></td>
							<td><img src="<?php echo base_url('uploads/').$value['image'] ?>" alt="" width="150px"></td>
							<td>
								<a href="<?php echo base_url('Mobil/update/'.$value['id']) ?>" class="btn btn-sm btn-success">Update</a>
								<a href="<?php echo base_url('Mobil/delete/'.$value['id']) ?>" class="btn btn-sm btn-danger">Delete</a>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php $this->load->view('footer') ?>  