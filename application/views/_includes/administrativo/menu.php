<nav class="navbar navbar-default navbar-fixed-top navbar-cls-top margin-bottom-0" role="navigation">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand login" href="<?php echo base_url('estacionamento/index') ?>">Find Park</a>
	</div>

	<a class="logout not-border-radius btn pull-right" href="<?php echo base_url('home/logout') ?>">
		<span><i class="fa fa-times"></i>&nbsp;<strong>Sair</strong></span>
	</a>
	<div class="login pull-right">
		<i class="fa fa-user"></i>&nbsp;&nbsp;<strong><?php echo $this->session->userdata('username'); ?></strong>
	</div>
</nav>
<nav class="navbar-default navbar-side" role="navigation">
	<div class="sidebar-collapse">
		<ul class="nav" id="main-menu">
			<li class="text-center" >
				<img src="/findpark/content/img/find_user.png" class="user-image img-responsive" />
			</li>
			<li>
				<a class="active-menu" href="index.html"><i class="fa fa-dashboard fa-3x"></i> Painel de Controle</a>
			</li>
			<li>
				<a href="ui.html"><i class="fa fa-desktop fa-3x"></i> UI Elements</a>
			</li>
			<li>
				<a href="tab-panel.html"><i class="fa fa-qrcode fa-3x"></i> Tabs & Panels</a>
			</li>
			<li>
				<a href="chart.html"><i class="fa fa-bar-chart-o fa-3x"></i> Morris Charts</a>
			</li>
			<li>
				<a href="table.html"><i class="fa fa-table fa-3x"></i> Table Examples</a>
			</li>
			<li>
				<a href="form.html"><i class="fa fa-edit fa-3x"></i> Forms </a>
			</li>
			<li>
				<a href="blank.html"><i class="fa fa-square-o fa-3x"></i> Blank Page</a>
			</li>
		</ul>
	</div>
</nav>