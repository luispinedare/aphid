	<section class="container-fluid">
		<?php
	extract($BODY);

	  echo '<div class="row min-vh-100 '.$CLASS.'">
			<div class="col-12 col-sm-1 col-md-3"></div>
			<div class="align-self-center col-12 col-sm-10 col-md-6 pt-5 pb-3">';
				
		foreach ($ROOT as $key => $value){
				
			unset($TAG, $CLASS, $CONTENT, $LINK, $IMAGE, $SRC, $ID, $ALT, $STYLE);
					
			extract($value);
	
			TreeOfContents($TAG, $CLASS, $CONTENT, $LINK, $IMAGE, $SRC, $ID, $ALT, $STYLE);
				
		};

		echo '
			</div>
		</div>';

?>

	</section>