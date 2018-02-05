<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php $folder = $this->config->item('themes'); ?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title><?php echo $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Copyright" content="Eyesoccer Indonesia">
    <meta http-equiv="imagetoolbar" content="no">
    <meta name="robots" content="index, follow">
    <meta name="description" content="<?php echo $meta_desc; ?>">
    <meta name="keywords" content="<?php echo $meta_keyword; ?>">
    <meta name="author" content="Eyesoccer Indonesia">
    <meta name="language" content="Indonesia">
    <meta name="revisit-after" content="7">
    <meta name="webcrawlers" content="all">
    <meta name="rating" content="general">
    <meta name="spiders" content="all">
    <link rel="shortcut icon" href="<?php echo SUBCDN."assets/$folder/img/fav.png" ?>" />
    
    <!-- Default -->
    <!--<link href="<?php //echo SUBCDN."assets/css/bootstrap/css/bootstrap.min.css" ?>" rel="stylesheet" type="text/css">-->
    <link href="<?php echo SUBCDN."assets/css/font-awesome/css/fontawesome.min.css" ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo SUBCDN."assets/$folder/css/bs.css" ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo SUBCDN."assets/$folder/css/dev.css" ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo SUBCDN."assets/$folder/css/style.css" ?>" rel="stylesheet" type="text/css" />
    
    <!-- JQuery UI -->
    <script src='<?php echo SUBCDN.'assets/js/jquery-2.0.2.min.js'; ?>'></script>
    <script src='<?php echo SUBCDN.'assets/css/bootstrap/js/bootstrap.min.js'; ?>'></script>
    
    <script src='<?php echo SUBCDN."assets/$folder/js/main.js"; ?>'></script>
    
    <!-- Zoom -->
    <script src="<?php echo SUBCDN."assets/js/zoom/jquery.elevatezoom.js"; ?>"></script>
    
    <!-- Lazy -->
    <script src="<?php echo SUBCDN."assets/js/lazy/jquery.lazy.min.js"; ?>"></script>
    
    <!-- SWAlert -->
    <link href="<?php echo SUBCDN."assets/js/swalert/sweetalert.css" ?>" rel="stylesheet" />
    <script src="<?php echo SUBCDN."assets/js/swalert/sweetalert.min.js"; ?>"></script>
</head>
<body>
    <?php
        $data['folder'] = $folder;
        $this->load->view($folder.$content, $data);
    ?>
    
    <div class='baseurl' val='<?php echo base_url(); ?>'></div>
    
    <div class='box_popup'>
	<div class='loading'></div>
	<div class='show_popup'></div>
    </div>
    <div class='xh'></div>
    
    <script type="text/javascript">
	<?php //$cap = $google->gcaptcha; ?>
	/*var CaptchaCallback = function(){
	    $('.g-recaptcha').each(function(index, el) {
		grecaptcha.render(el, {'sitekey' : '<?php echo $cap->site; ?>'});
	    });
	};*/
    </script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    <!--<script src="https://www.google.com/recaptcha/api.js?onload=CaptchaCallback&render=explicit"></script>-->
    
    <script src="<?php echo SUBCDN."assets/$folder/js/home.js"; ?>"></script>
    <script>
        var orangeActive = document.getElementsByClassName("orange-active")[0];
        var disableOrangeActive = document.getElementsByClassName("disable-orange-active")[0];
        disableOrangeActive.onclick = function() {
            orangeActive.style.color = "unset !important";
            orangeActive.style.borderBottom = "unset !important";
            disableOrangeActive.style.color = "#FF5722";
            disableOrangeActive.style.border = "#FF5722";
        }
        //orangeActive.onclick = function() {
        //    orangeActive.style.color = "unset";
        //    orangeActive.style.borderBottom = "unset";
        //}
        //window.onload = function(){
        //    orangeActive.style.color = "#FF5722";
        //    orangeActive.style.borderBottom = "4px solid #FF5722";
        //}
    </script>
</body>
</html>
