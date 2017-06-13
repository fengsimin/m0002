<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="renderer" content="webkit">
   	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title><?php echo $site['title'];?></title>
	<meta name="keywords" content="<?php echo $site['keywords'];?>">
	<meta name="description" content="<?php echo $site['description'];?>">
    <!--[if lt IE 9]><script>window.location.href='http://www.ifeiwu.com/ie-browser-upgrade.html';</script><![endif]-->
	<link rel="apple-touch-icon" href="<?php echo $this->url('data/apple-touch-icon.png');?>">
    <link rel="icon" type="image/png" href="<?php echo $this->url('data/favicon.png');?>">

    <link rel="stylesheet" href="<?php echo $this->url('asset/css/reset.css');?>">
    <link rel="stylesheet" href="<?php echo $this->url('asset/css/swiper.css');?>">
    <link rel="stylesheet" href="<?php echo $this->url('asset/css/main.css');?>">
    <?php if($site['skin']):?>
    <link rel="stylesheet" href="<?php echo $this->url('asset/css/skin/'.$site['skin'].'.css');?>">
    <?php endif;?>
    <?php if($site['style']):?>
    <link rel="stylesheet" href="<?php echo $this->url('asset/css/'.$site['style'].'.css');?>">
	<?php endif;?>
</head>
<body>
	
	<div id="container" class="container">
	
	    <div class="loading">
	        <div class="spinner"></div>Loading...
	    </div>
	    
	    <div class="swiper-container">
	        <div class="swiper-wrapper">
	            <?php foreach ($items as $i=>$item):?>
	            <div class="swiper-slide" data-hash="slide<?php echo $i;?>">
	                <div class="iscroll-wrapper" title="<?php echo $domain;?>">
	                	<div class="iscroll-content">
	                		<div class="content">
	                		<?php echo $this->decode($item['content']);?>
	                		</div>
	                	</div>
	                </div>
	            </div>
	            <?php endforeach;?>
	        </div>
	        <div class="swiper-pagination"></div>
	    </div>
	    
	    <header id="header" class="header close">
	        <!--<a class="icon-exit"></a>-->
	        <a class="icon-menu"></a>
	        <a class="icon-next"></a>
	        <a class="icon-prev"></a>
	    </header>
	    
	    <nav class="menu-panel menu-effect" id="menu_panel">
	        <div class="iscroll-wrapper" id="iscroll_menu">
	            <div class="iscroll-content">
	        		<h2>目录</h2>
	        		<ul class="ul">
	        		    <?php foreach ($items as $i=>$item):?>
	        		    <li><a href="javascript:;" data-index="<?php echo $i;?>"><?php echo $item['title'];?></a></li>
	        		    <?php endforeach;?>
	        		</ul>
	    		</div>
			</div>
		</nav>
		
	</div>
	
	<script src="<?php echo $this->url('asset/js/jquery.js');?>"></script>
	<script src="<?php echo $this->url('asset/js/swiper.js');?>"></script>
	<script src="<?php echo $this->url('asset/js/iscroll.js');?>"></script>
	<script src="<?php echo $this->url('asset/js/main.js');?>"></script>
	
	<?php
	if ($site['stats_open'] == 1)
	{
		$squery = http_build_query(array(
				'r'=>$this->request->root(),
				'm'=>$site['stats_much'],
				'u'=>$site['stats_unit'],
				'd'=>$site['stats_date']
			)
		);
		
		echo '<script src="' . $this->url('asset/js/stats.js?' . $squery) . '"></script>';
	}
	
	if ($site['stats3_open'] == 1) { echo $this->decode($site['stats3_code']); }
	?>
	
</body>
</html>
