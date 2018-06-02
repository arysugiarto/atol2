<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<button class="btn btn-success">
							<i class="ace-icon fa fa-signal"></i>
						</button>

						<button class="btn btn-info">
							<i class="ace-icon fa fa-pencil"></i>
						</button>

						<button class="btn btn-warning">
							<i class="ace-icon fa fa-users"></i>
						</button>

						<button class="btn btn-danger">
							<i class="ace-icon fa fa-cogs"></i>
						</button>
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!-- /.sidebar-shortcuts -->

				<ul class="nav nav-list">
					<li class="active">
						<a href="<?php echo site_url('wisata/admin')?>">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Dashboard </span>
						</a>

						<b class="arrow"></b>
					</li>
					<li class="">
					<a href="<?php echo site_url('wisata/data_wisata')?>">
							<i class="menu-icon fa fa-table"></i>
							<span class="menu-text"> Data Wisata</span>
						</a>
						<b class="arrow"></b>
					</li>
					<li class="">
					<a href="<?php echo site_url('wisata/daftar')?>">
							<i class="menu-icon fa fa-edit"></i>
							<span class="menu-text"> Daftar Pemilik wisata</span>
						</a>
						<b class="arrow"></b>
					</li>
					<li class="">
					<a href="<?php echo site_url('wisata/input_wisata')?>">
							<i class="menu-icon fa fa-edit"></i>
							<span class="menu-text"> Input Wisata </span>
						</a>
						<b class="arrow"></b>
					</li>
					
					<li class="">
					<a href="<?php echo site_url('wisata/maps')?>">
						<i class="menu-icon fa fa-map"></i>
							<span class="menu-text"> Maps</span>
						</a>

						<b class="arrow"></b>
					</li>

			
				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>