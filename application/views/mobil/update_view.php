<?php $this->load->view('header') ?>
<div class="breadcrumbs">
	<div class="col-sm-4">
		<div class="page-header float-left">
			<div class="page-title">
				<h1>Update Mobil</h1>
			</div>
		</div>
	</div>
</div>

<div class="content mt-3">
	<div class="card">
		<div class="card-body">
			<?php if(isset($error)) echo $error; ?>
			<?php echo validation_errors(); ?>
			<?php echo form_open_multipart(''); ?>
			<div class="form-group">
				<label for="">nopol</label>
				<input type="text" name="nopol" class="form-control" value="<?php echo $mobil['nopol'] ?>">
			</div>
			<div class="form-group">
				<label for="">nama</label>
				<input type="text" name="nama" class="form-control" value="<?php echo $mobil['nama'] ?>">
			</div>
			<div class="form-group">
				<label for="">ket</label>
				<textarea name="ket" cols="30" rows="10" class="form-control"><?php echo $mobil['ket'] ?></textarea>
			</div>
			<div class="form-group">
				<label for="">harga</label>
				<input type="number" name="harga" class="form-control" min="0" value="<?php echo $mobil['harga'] ?>">
			</div>
			<div class="form-group">
				<label for="">image</label>
				<input type="file" name="image" class="form-control">
			</div>
			<input type="submit" class="btn btn-success" value="Update">
			<?php echo form_close(); ?>
		</div>
	</div>
</div>
<?php $this->load->view('footer') ?>  