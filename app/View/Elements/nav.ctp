<?php if(!Configure::read('Application.maintenance')){?>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<?php echo $this->Html->link(
			Configure::read('Application.name'),
			AuthComponent::user('id') ? "/home" : "/"
			, array('class' => 'navbar-brand')) ?>
	</div>

	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse navbar-ex1-collapse">

		<?php if(AuthComponent::user('id')){?>
			<ul class="nav navbar-nav side-nav">
				<li class="dropdown <?php echo $this->params->params['controller'] == 'users' ? 'active' : ''?>">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-users"></i> Users <b
							class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo $this->params->webroot . $this->params['language'] ?>/users"><i class="fa fa-list"></i> List</a></li>
						<li><a href="<?php echo $this->params->webroot . $this->params['language'] ?>/users/add"><i class="fa fa-plus"></i> Register new user</a></li>
					</ul>
				</li>
				
				<li class="dropdown <?php echo $this->params->params['controller'] == 'planets' ? 'active' : ''?>">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-table"></i> Planets <b
							class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo $this->params->webroot . $this->params['language'] ?>/planets"><i class="fa fa-list"></i> List</a></li>
						<li><a href="<?php echo $this->params->webroot . $this->params['language'] ?>/planets/add"><i class="fa fa-plus"></i> Add new planet</a></li>
					</ul>
				</li>
				
				<li class="dropdown <?php echo $this->params->params['controller'] == 'shippings' ? 'active' : ''?>">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-table"></i> Shippings <b
							class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo $this->params->webroot . $this->params['language'] ?>/shippings"><i class="fa fa-list"></i> List</a></li>
						<li><a href="<?php echo $this->params->webroot . $this->params['language'] ?>/shippings/add"><i class="fa fa-plus"></i> Add new shippings</a></li>
					</ul>
				</li>
				
				<li class="dropdown <?php echo $this->params->params['controller'] == 'products' ? 'active' : ''?>">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-table"></i> Products <b
							class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo $this->params->webroot . $this->params['language'] ?>/products"><i class="fa fa-list"></i> List</a></li>
						<li><a href="<?php echo $this->params->webroot . $this->params['language'] ?>/products/add"><i class="fa fa-plus"></i> Add new products</a></li>
					</ul>
				</li>
			</ul>
			<li><a href="<?php echo $this->params->webroot . 'fra' ?>/planets">Francais</a>
			<a href="<?php echo $this->params->webroot . 'eng' ?>/planets"> English</a></li>

		<?php } ?>



		<?php if(AuthComponent::user('id')){?>

		<ul class="nav navbar-nav navbar-right navbar-user">
			<li class="dropdown user-dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo AuthComponent::user('username')?> <b
						class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="<?php echo $this->params->webroot?>me"><i class="fa fa-user"></i> Profile</a></li>
					<li><a href="<?php echo $this->params->webroot?>me/edit"><i class="fa fa-gear"></i> Settings</a></li>
					<li class="divider"></li>
					<li><a href="<?php echo $this->params->webroot?>logout"><i class="fa fa-power-off"></i> Log Out</a></li>
				</ul>
			</li>
		</ul>
		<?php }?>
	</div>
	<!-- /.navbar-collapse -->
</nav>
<?php } ?>
<svg version="1.1" width="320" height="320" viewBox="0 0 320 320" fill="none" stroke="#000" stroke-linecap="round"
     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
  <defs>
    <path id="r1">
      <animate id="p1" attributeName="d" values="m160,160l0,0 0,0;m130,110l30,-17 30,17;m130,60l30,-17 30,17;m160,20l0,0 0,0" dur="6s" repeatCount="indefinite"/>
      <animate attributeName="stroke-width" values="0;4;4;4;0" dur="6s" repeatCount="indefinite" begin="p1.begin"/>
    </path>
    <path id="r2">
      <animate attributeName="d" values="m160,160l0,0 0,0;m130,110l30,-17 30,17;m130,60l30,-17 30,17;m160,20l0,0 0,0" dur="6s" repeatCount="indefinite" begin="p1.begin+1s"/>
      <animate attributeName="stroke-width" values="0;4;4;4;0" dur="6s" repeatCount="indefinite" begin="p1.begin+1s"/>
    </path>
    <path id="r3">
      <animate attributeName="d" values="m160,160l0,0 0,0;m130,110l30,-17 30,17;m130,60l30,-17 30,17;m160,20l0,0 0,0" dur="6s" repeatCount="indefinite" begin="p1.begin+2s"/>
      <animate attributeName="stroke-width" values="0;4;4;4;0" dur="6s" repeatCount="indefinite" begin="p1.begin+2s"/>
    </path>
    <path id="r4">
      <animate id="p1" attributeName="d" values="m160,160l0,0 0,0;m130,110l30,-17 30,17;m130,60l30,-17 30,17;m160,20l0,0 0,0" dur="6s" repeatCount="indefinite" begin="p1.begin+3s"/>
      <animate attributeName="stroke-width" values="0;4;4;4;0" dur="6s" repeatCount="indefinite" begin="p1.begin+3s"/>
    </path>
    <path id="r5">
      <animate attributeName="d" values="m160,160l0,0 0,0;m130,110l30,-17 30,17;m130,60l30,-17 30,17;m160,20l0,0 0,0" dur="6s" repeatCount="indefinite" begin="p1.begin+4s"/>
      <animate attributeName="stroke-width" values="0;4;4;4;0" dur="6s" repeatCount="indefinite" begin="p1.begin+4s"/>
    </path>
    <path id="r6">
      <animate attributeName="d" values="m160,160l0,0 0,0;m130,110l30,-17 30,17;m130,60l30,-17 30,17;m160,20l0,0 0,0" dur="6s" repeatCount="indefinite" begin="p1.begin+5s"/>
      <animate attributeName="stroke-width" values="0;4;4;4;0" dur="6s" repeatCount="indefinite" begin="p1.begin+5s"/>
    </path>
  </defs>
  <use xlink:href="#r1"/>
  <use xlink:href="#r1" transform="rotate(60 160 160)"/>
  <use xlink:href="#r1" transform="rotate(120 160 160)"/>
  <use xlink:href="#r1" transform="rotate(180 160 160)"/>
  <use xlink:href="#r1" transform="rotate(240 160 160)"/>
  <use xlink:href="#r1" transform="rotate(300 160 160)"/>
  <use xlink:href="#r2" transform="rotate(30 160 160)"/>
  <use xlink:href="#r2" transform="rotate(90 160 160)"/>
  <use xlink:href="#r2" transform="rotate(150 160 160)"/>
  <use xlink:href="#r2" transform="rotate(210 160 160)"/>
  <use xlink:href="#r2" transform="rotate(270 160 160)"/>
  <use xlink:href="#r2" transform="rotate(330 160 160)"/>
  <use xlink:href="#r3"/>
  <use xlink:href="#r3" transform="rotate(60 160 160)"/>
  <use xlink:href="#r3" transform="rotate(120 160 160)"/>
  <use xlink:href="#r3" transform="rotate(180 160 160)"/>
  <use xlink:href="#r3" transform="rotate(240 160 160)"/>
  <use xlink:href="#r3" transform="rotate(300 160 160)"/>
  <use xlink:href="#r4" transform="rotate(30 160 160)"/>
  <use xlink:href="#r4" transform="rotate(90 160 160)"/>
  <use xlink:href="#r4" transform="rotate(150 160 160)"/>
  <use xlink:href="#r4" transform="rotate(210 160 160)"/>
  <use xlink:href="#r4" transform="rotate(270 160 160)"/>
  <use xlink:href="#r4" transform="rotate(330 160 160)"/>
  <use xlink:href="#r5"/>
  <use xlink:href="#r5" transform="rotate(60 160 160)"/>
  <use xlink:href="#r5" transform="rotate(120 160 160)"/>
  <use xlink:href="#r5" transform="rotate(180 160 160)"/>
  <use xlink:href="#r5" transform="rotate(240 160 160)"/>
  <use xlink:href="#r5" transform="rotate(300 160 160)"/>
  <use xlink:href="#r6" transform="rotate(30 160 160)"/>
  <use xlink:href="#r6" transform="rotate(90 160 160)"/>
  <use xlink:href="#r6" transform="rotate(150 160 160)"/>
  <use xlink:href="#r6" transform="rotate(210 160 160)"/>
  <use xlink:href="#r6" transform="rotate(270 160 160)"/>
  <use xlink:href="#r6" transform="rotate(330 160 160)"/>
</svg>

