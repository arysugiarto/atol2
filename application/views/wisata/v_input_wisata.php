<!DOCTYPE html>
<html lang="en">
	<?php $this->load->view('wisata/head')?>

	<body class="no-skin">
		<?php $this->load->view('wisata/navbar')?>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

		<?php $this->load->view('wisata/sidebar')?>
		<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li class="active">Input Wisata</li>
						</ul><!-- /.breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- /.nav-search -->
					</div>
				<div>	
				</div>
				<form>
				<div class="container">
				<h3>Input Wisata</h3>
					<div class="form-row">
					<div class="form-group col-md-12">
					<label for="inputAddress2">Nama Wisata</label>
					<input type="text" class="form-control"  placeholder="Nama">
					</div>
					<div class="form-group col-md-6">
						<label for="inputEmail4">Koordinat</label>
						<input type="text" class="form-control" id="inputEmail4" placeholder="Latitude">
					</div>
					<div class="form-group col-md-6">
						<label for="inputPassword4">.</label>
						<input type="text" class="form-control" id="inputPassword4" placeholder="Langitude">
					</div>
					</div>
					<div class="form-group col-md-12">
						<label for="inputAddress">Alamat</label>
						<input type="text" class="form-control"  placeholder="1234 Main St">
					</div>
					<div class="form-group col-md-5">
						<label for="inputAddress2">No Telepon</label>
						<input type="text" class="form-control"  placeholder="No Telepon">
					</div><br>
					<div class="form-group col-md-12">
					<label for="inputAddress2">Kota/Kabupaten</label>
						<select class="form-control" id="form-field-select-1">
						<option value=""></option>
						<option value="AL">Alabama</option>
							<option value="AK">Alaska</option>
							<option value="AZ">Arizona</option>
							<option value="AR">Arkansas</option>
							<option value="CA">California</option>
							<option value="CO">Colorado</option>														
						</select>
					</div>
					<div class="form-group col-md-6">
					<label for="inputAddress2">Kecamatan</label>
						<select class="form-control" id="form-field-select-1">
						<option value=""></option>
						<option value="AL">Alabama</option>
							<option value="AK">Alaska</option>
							<option value="AZ">Arizona</option>
							<option value="AR">Arkansas</option>
							<option value="CA">California</option>
							<option value="CO">Colorado</option>														
						</select>
					</div>
					<div class="form-group col-md-6">
					<label for="inputAddress2">Kelurahan</label>
						<select class="form-control" id="form-field-select-1">
						<option value=""></option>
						<option value="AL">Alabama</option>
							<option value="AK">Alaska</option>
							<option value="AZ">Arizona</option>
							<option value="AR">Arkansas</option>
							<option value="CA">California</option>
							<option value="CO">Colorado</option>														
						</select>
					</div>
					<div class="form-group col-lg-12">
						<label class="custom-file-label" for="inputGroupFile04">Pilih file</label>
						<input type="file" class="custom-file-input" id="inputGroupFile04">
                    	</div>
					<div class="form-group col-md-12">
						<label for="comment">Deskripsi tempat wisata:</label>
						<textarea class="form-control" rows="5" id="comment"></textarea>
					</div>
					<div class="form-group col-md-6">
						<label for="inputState">Harga Tiket Masuk Dewasa</label>
						<select  class="form-control">
						<option selected>Pilih...</option>
						<option>...</option>
						</select>
					</div>
					<div class="form-group col-md-6">
						<label for="inputState">Harga Tiket Masuk Anak</label>
						<select  class="form-control">
						<option selected>Pilih...</option>
						<option>...</option>
						</select>
					</div>
					<div class="form-group col-lg-12">
					<button type="submit" class="btn btn-primary">Sign in</button>
					</div>
					</div>
					</form>
		<?php $this->load->view('wisata/footer')?>
		
	</body>
</html>
