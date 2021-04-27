<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="{{url('home')}}" class="{{ (request()->is('home*')) ? 'active' : '' }}"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li><a href="{{url('document')}}" class="{{ (request()->is('document*')) ? 'active' : '' }}"><i class="lnr lnr-book"></i> <span>Documents</span></a></li>
						
						<li><a href="{{url('mydocument')}}" class="{{ (request()->is('mydocument*')) ? 'active' : '' }}"><i class="lnr lnr-book"></i> <span>My Documents</span></a></li>
						<li><a href="{{url('categories')}}" class="{{ (request()->is('categories*')) ? 'active' : '' }}"><i class="lnr lnr-tag"></i> <span>Categories</span></a></li>
						<!-- <li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Pages</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="page-profile.html" class="">Profile</a></li>
									<li><a href="page-login.html" class="">Login</a></li>
									<li><a href="page-lockscreen.html" class="">Lockscreen</a></li>
								</ul>
							</div>
						</li> -->
						
					</ul>
				</nav>
			</div>
		</div>