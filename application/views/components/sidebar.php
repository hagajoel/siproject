<nav class="sidebar">
    <a href="<?php echo site_url('/home'); ?>" class="logo">
        <img src="<?php echo base_url('assets/img/logo.png');?>" alt="logo">
    </a>
    <ul class="navlink">
        <a href="<?php echo site_url('/pcg');?>">
            <li class="nav_item">
                <img src="<?php echo base_url('assets/img/1.svg');?>" alt="icon">
                <a href="<?php echo site_url('/pcg');?>">PCG</a>
            </li>
        </a>
        <a href="<?php echo site_url('/journal');?>">
            <li class="nav_item">
                <img src="<?php echo base_url('assets/img/2.svg');?>" alt="icon">
                <a href="<?php echo site_url('/journal');?>">Journal</a>
            </li>
        </a>
        <a href="#">
            <li class="nav_item">
                <img src="<?php echo base_url('assets/img/devise.svg');?>" alt="icon">
                <a href="#">Devise</a>
            </li>
        </a>
        <!-- <a href="#">
            <li class="nav_item">
                <img src="<?php echo base_url('assets/img/6.svg');?>" alt="icon">
                <a href="#">A propos</a>
            </li>
        </a> -->
    </ul>
	<div class="profil_user">
		<div  style="background-image:url(<?php echo site_url('assets/img/default_company.png');?>)" class="img img-sm"></div>
		<p class="name">DIMPEX</p>
	</div>
	<a href="<?php echo site_url('Login')?>" class="btn btn-secondary-danger logout">Se déconnecter</a>
</nav>
