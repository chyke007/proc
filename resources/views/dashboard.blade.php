@include('includes.header')
		
		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			
				@include('includes.sidebar')

				<!-- #section:basics/sidebar.layout.minimize -->
				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>

				<!-- /section:basics/sidebar.layout.minimize -->
				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
				</script>
			</div>

			<!-- /section:basics/sidebar -->
			<div class="main-content">
				<div class="main-content-inner">
					<!-- #section:basics/content.breadcrumbs -->
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li class="active">Dashboard</li>
						</ul><!-- /.breadcrumb -->

						<!-- #section:basics/content.searchbox -->
						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- /.nav-search -->

						<!-- /section:basics/content.searchbox -->
					</div>

					<!-- /section:basics/content.breadcrumbs -->
					<div class="page-content">
						@include('includes.settings')
						<div class="page-header">
							<h1>
								Dashboard
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									
									@role('admin')
                                      Admin
                                    @endrole

									@role('customer')
                                     Customer
                                    @endrole

                                    @role('sales')
                                      Sales represenative
                                    @endrole
                                    
                                    @role('marketer')
                                      Marketer represenative
                                    @endrole
                                    
                                    @role('accountant')
                                      Account representative
                                    @endrole
                                    
                                    @role('customer-care')
                                     Customer Care represenative
                                    @endrole

									
									
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="alert alert-block alert-success">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>

									<i class="ace-icon fa fa-check green"></i>
									@if( Auth::user()->checkStatus()->sex=='MALE' )


									Welcome Mr.

									 {{ strtoupper(Auth::user()->checkStatus()->last_name) .' '.strtoupper(Auth::user()->checkStatus()->first_name) }}  to 
								
									@else
									Welcome Mrs.
{{ strtoupper(Auth::user()->checkStatus()->last_name) .' '.strtoupper(Auth::user()->checkStatus()->first_name) }}  to 
								

									@endif
									<strong class="green">
										ProC
										<small>(Nigeria)</small>
									</strong>,
	Your best cable network.

	
								</div>

@yield('content')

						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

@include('includes.footer')
		</body>
</html>
