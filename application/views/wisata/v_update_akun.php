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
				<div class="container">
				<h3>Update akun pemilik Wisata</h3>
				<form>
				
				<div class="form-group col-md-12">
				<div class="form-group">
					<label for="exampleInputEmail1">Nama</label>
					<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">No Id</label>
					<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Email</label>
					<input type="email" class="form-control" id="exampleInputPassword1" placeholder="Password">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Ulangi Password</label>
					<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Alamat</label>
					<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Tempat Tanggal Lahir</label>
					<input type="date" class="form-control" id="exampleInputPassword1" placeholder="Password">
				</div>
				<div class="form-group">
                    <div class="custom-file">
                         <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                         <input type="file" class="custom-file-input" id="inputGroupFile04">
                       
                    </div>
                    </div>
                    <div class="form-check">
					<input type="checkbox" class="form-check-input" id="exampleCheck1">
					<label class="form-check-label" for="exampleCheck1">Check me out</label>
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
				</div>
				</div>
				</form>
		<?php $this->load->view('wisata/footer')?>
	</body>
</html>
