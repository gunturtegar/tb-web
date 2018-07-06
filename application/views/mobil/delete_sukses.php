<?php $this->load->view('header') ?>
<div class="breadcrumbs">
	<div class="col-sm-4">
		<div class="page-header float-left">
			<div class="page-title">
				<h1>Delete Mobil</h1>
			</div>
		</div>
	</div>
</div>

<div class="content mt-3">
	<div class="card">
		<div class="card-body">
			<?php 
			echo 'Sukses Delete Data<br>';
			echo anchor('Mobil', 'List data');
			?>
		</div>
	</div>
</div>
<?php $this->load->view('footer') ?>  