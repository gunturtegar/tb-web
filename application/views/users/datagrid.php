<?php $this->load->view('header') ?>

<!-- datagrid -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('jsgrid/')?>jsgrid/jsgrid.min.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('jsgrid/')?>jsgrid/jsgrid-theme.min.css" />

    
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
			<div id="jsGrid"></div>
		</div>
	</div>
</div>
<?php $this->load->view('footer') ?>  
<!-- datagrid -->
<script type="text/javascript" src="<?php echo base_url('jsgrid/')?>jsgrid/jsgrid.min.js"></script>

<script type="text/javascript" src="<?php echo base_url('jsgrid/')?>custom/grid.js"></script>