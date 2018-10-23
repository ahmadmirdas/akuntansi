<div class="wrap">
	<div class="section">
		<div class="content-wrap">
			<div class="content-header">
				<h2 class="title">@yield('main-title')</h2>
				<div class="right-content">
					<a class="btn btn-primary pull-right btn-add" href="project-add.html">
						<span>Tambah @yield('main-title')</span>
					</a>
				</div>
			</div>

		</div>
	</div>
	@yield('main-content')
	<div class="mask"></div>
</div>
