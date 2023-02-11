<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?=$page_title ?></title>
	<link rel="Shortcut icon" href="<?=site_url()?>img/favicon.ico" />  
    <link rel="stylesheet" type="text/css" href="<?=site_url()?>css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?=site_url()?>css/fonts.css" />
    <link rel="stylesheet" type="text/css" href="<?=site_url()?>css/tooltips.css">
    
    <script type="text/javascript" src="<?=site_url()?>js/jquery-1.4.3.min.js"></script>
    <script type="text/javascript" src="<?=site_url()?>js/easyTooltip.js"></script>
    <script type="text/javascript" src="<?=site_url()?>js/jquery.preloader.js"></script>
    
	<script type="text/javascript" src="<?=site_url()?>js/tooltips.js"></script>
    <script type="text/javascript">
	$(function(){
		$('.features img:gt(0)').hide();
		setInterval(function(){$('.features :first-child').fadeOut().next('img').fadeIn().end().appendTo('.features');}, 3000);
		
		$(function() {
			$("#footer-links a[title]").tooltips();
		});
	});
	</script>
</head>
<body>

            <?=$header; ?>     
            <?=$content; ?>
            <?=$footer; ?>
</body>
</html> 
