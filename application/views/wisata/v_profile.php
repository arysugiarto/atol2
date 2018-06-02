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
							<li class="active">Produk</li>
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


<style>
                   input.hidden {
    position: absolute;
    left: -9999px;
}

#profile-image1 {
    cursor: pointer;
  
     width: 100px;
    height: 100px;
	border:2px solid #03b1ce ;}
	.tital{ font-size:16px; font-weight:500;}
	 .bot-border{ border-bottom:1px #f8f8f8 solid;  margin:5px 0  5px 0}	
</style>

<div class="container">
	<div class="row">
     <br>
       <div class="col-md-12 ">
<div class="panel panel-default">
  <div class="panel-heading">  <h4 >User Profile</h4></div>
   <div class="panel-body">
       
    <div class="box box-info">
        
            <div class="box-body">
                     <div class="col-sm-6">
                     <div  align="center"> <img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" class="img-circle img-responsive"> 
                
                <input id="profile-image-upload" class="hidden" type="file">
                    <div style="color:#999;" >click here to change profile image</div>
                     </div>
              <br>
              <!-- /input-group -->
            </div>
            <div class="col-sm-6">
            <h4 style="color:#00b1b1;">Prasad Shankar Huddedar </h4></span>
              <span><p>Aspirant</p></span>            
            </div>
            <a href="<?php echo site_url('wisata/update_akun')?>">
            <button type="submit" class="btn btn-primary">Edit Profile</button>
            <div class="clearfix"></div>
            <hr style="margin:5px 0 5px 0;">
    
              
          <div class="col-sm-5 col-xs-6 tital " >First Name:</div><div class="col-sm-7 col-xs-6 ">Prasad</div>
               <div class="clearfix"></div>
          <div class="bot-border"></div>

          <div class="col-sm-5 col-xs-6 tital " >Middle Name:</div><div class="col-sm-7"> Shankar</div>
          <div class="clearfix"></div>
          <div class="bot-border"></div>

          <div class="col-sm-5 col-xs-6 tital " >Last Name:</div><div class="col-sm-7"> Huddedar</div>
          <div class="clearfix"></div>
          <div class="bot-border"></div>

          <div class="col-sm-5 col-xs-6 tital " >Date Of Joining:</div><div class="col-sm-7">15 Jun 2016</div>

          <div class="clearfix"></div>
          <div class="bot-border"></div>

          <div class="col-sm-5 col-xs-6 tital " >Date Of Birth:</div><div class="col-sm-7">11 Jun 1998</div>

          <div class="clearfix"></div>
          <div class="bot-border"></div>

          <div class="col-sm-5 col-xs-6 tital " >Place Of Birth:</div><div class="col-sm-7">Shirdi</div>

          <div class="clearfix"></div>
          <div class="bot-border"></div>

          <div class="col-sm-5 col-xs-6 tital " >Nationality:</div><div class="col-sm-7">Indian</div>

          <div class="clearfix"></div>
          <div class="bot-border"></div>

          <div class="col-sm-5 col-xs-6 tital " >Relition:</div><div class="col-sm-7">Hindu</div>
                    <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
               </div> 
          </div> 
          </div>
          </div>  
          
   </div>
</div>
		<?php $this->load->view('wisata/footer')?>
	</body>
</html>



         