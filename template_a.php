	<section class="container-fluid">
<?php

extract($BODY);
		foreach ($ROOT as $key => $value){

			unset($TITLE, $LINK, $CONTENT, $STYLE);

			extract($value);

			echo '
		<div class="row vh-100" style="background-color:'.$STYLE.'">
			<div class="col-12 col-sm-3"></div>
			<div class="align-self-center col-12 col-sm-10 col-md-6">
				<h1 class="text-center mx-2"><a href="https://www.'.$DOMAIN,$FOLDER.'/'.$LINK.'">'.$TITLE.'</a></h1>
				<p class="text-center mx-2">'.$CONTENT.'</p>
			</div>
		</div>
			';

		}
?>
	
	</section>