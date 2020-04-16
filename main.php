<!--
Aphid v1.0 (https://www.luispineda.com/aphid)
Copyright (c) 2020 Luis Pineda Rebolledo
Licensed under MIT (https://github.com/luispinedare/aphid/blob/master/LICENSE)
-->

<!doctype html>
<html lang="<?php echo $LENGUAGE_REGION; ?>" class="no-js">
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/svg" href="<?php echo "https://www.".$DOMAIN,$FOLDER."/img/".$FAVICON; ?>"/>

	<!-- Primary Meta Tags -->
	<title><?php echo $TITLE; if($SUB_TITLE != null){ echo ' | '.$SUB_TITLE;}; ?></title>
	<meta name="title" content="<?php echo $TITLE;  if($SUB_TITLE != null){ echo ' | '.$SUB_TITLE;};  ?>">
	<meta name="description" content="<?php echo $DESCRIPTION; ?>">

	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="website">
	<meta property="og:url" content="<?php echo "https://www.".$DOMAIN,$FOLDER; ?>">
	<meta property="og:title" content="<?php echo $TITLE;  if($SUB_TITLE != null){ echo ' | '.$SUB_TITLE;};  ?>">
	<meta property="og:description" content="<?php echo $DESCRIPTION; ?>">
	<meta property="og:image" content="<?php echo "https://www.".$DOMAIN,$FOLDER."/img/$META_IMAGE"; ?>">

	<!-- Twitter -->
	<meta property="twitter:card" content="summary_large_image">
	<meta property="twitter:url" content="<?php echo "https://www.".$DOMAIN,$FOLDER; ?>">
	<meta property="twitter:title" content="<?php echo $TITLE;  if($SUB_TITLE != null){ echo ' | '.$SUB_TITLE;};  ?>">
	<meta property="twitter:description" content="<?php echo $DESCRIPTION; ?>">
	<meta property="twitter:image" content="<?php echo "https://www.".$DOMAIN,$FOLDER."/img/$META_IMAGE"; ?>">

	<!-- Google Fonts @ https://fonts.google.com/ -->
	<link href="https://fonts.googleapis.com/css?family=Alegreya+Sans|Anonymous+Pro&display=swap" rel="stylesheet" async> 

	<!-- Font Awesome @ https://fontawesome.com/-->
	<link href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" rel="stylesheet" crossorigin="anonymous" async>

  	<!-- Bootstrap v4.3.1 @ https://getbootstrap.com/ -->
  	<link href="<?php echo "https://www.".$DOMAIN,$FOLDER."/vendor/bootstrap/css/bootstrap.min.css"; ?>" rel="stylesheet" async>

    <!-- Base Style -->
	<link href="<?php echo "https://www.".$DOMAIN,$FOLDER."/css/frontpage.css"; ?>" rel="stylesheet" preload>

  	<!-- Menu Style -->
	<link href="<?php echo "https://www.".$DOMAIN,$FOLDER."/css/menu.css"; ?>" rel="stylesheet" preload>
	
    <!-- Custom styles for this template -->
	<link href="<?php echo "https://www.".$DOMAIN,$FOLDER."/css/$CSS"; ?>" rel="stylesheet" preload>


<!--LOGO-->	
	<div>
		<div class="header">
			<a class="logo" href="<?php echo "https://www.".$DOMAIN,$FOLDER; ?>">
				<img src="<?php echo "https://www.".$DOMAIN,$FOLDER."/img/$LOGO"; ?>" alt="logo">

				<!--"Aphids" icon by ProSymbols from the thenounproject.com-->

			</a>
		</div>
	</div>

<!--LAYOUT-->
<?php include $TEMPLATE; ?>


<!--MAIN MENU-->
<?php include "menu.php"; ?>

<!--SIDE BAR-->
<?php if($SIDEBAR==TRUE){include "sidebar.php";} ?>


<!--FOOTER BAR-->
	<div>
		<div class="footer">
			<?php 

			foreach ($SOCIAL as $key => $value){
				$key = strtolower($key);
				echo '
			<a href="'.$value.'" class="btn m-2" title="'.$key.'" target="_blank" rel="noreferrer"><i class="fab fa-'.$key.' fa-lg btn-social-icon btn-'.$key.'"></i></a>';}
			?>
			
			<a href="../" class="btn m-2" title="back"><i class="fas fa-caret-left fa-lg"></i></a>
			
		</div>
	</div>


	
<!--SCRIPTS-->	
<script src="<?php echo "https://www.".$DOMAIN,$FOLDER."/vendor/jquery/jquery.min.js"; ?>" ></script>
<script src="<?php echo "https://www.".$DOMAIN,$FOLDER."/vendor/bootstrap/js/bootstrap.bundle.min.js"; ?>"></script>
<?php if($JAVASCRIPT_SRC == TRUE){echo '<script src="'.$JAVASCRIPT_SRC.'"></script>';} ?>

<!--SIDE BAR-->
<?php if($SIDEBAR == TRUE){echo '<script>'.$SIDEBAR_JS."\r\n".'</script>';} ?>


<!--MENU-->
<script>
$("#toggle").click(function() {
   	$(this).toggleClass("active");
   	$("#overlay").toggleClass("open");
});
</script>

<!--SEND-->		
<script>
function SubmitFormData() {
	var name = $("#name").val();
	var email = $("#email").val();
	var message = $("#message").val();
	$.post("<?php echo 'https://www.'.$DOMAIN,$FOLDER.'/mail/mail_driver.php'; ?>", { name: name, email: email, message: message },
	function(data) {
	$("#results").html(data);
	$("#send-mail")[0].reset();
	});
}
</script>

</body>
</html>