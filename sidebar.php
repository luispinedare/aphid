    <div class="side-bar">
        <nav class="navbar-expand-md">
            <a class="navbar-toggler btn btn-menu" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <i class='fas fa-caret-down fa-md'></i>
            </a>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul><?php

// Get the contents of the JSON file for CONTENT
$strJsonFileContents = file_get_contents('../CONFIGURATIONS/welcome.json');
$content = json_decode($strJsonFileContents, true);
extract($content);
extract($BODY);

	foreach ($ROOT as $key => $value){

		unset($TITLE, $LINK);
		extract($value);

        echo'
                <li><a class="side-bar-list" href="https://www.'.$DOMAIN,$FOLDER.'/'.$LINK.'"><h6 class="side-bar-list">'.$LINK.'</h6></a></li>';
        
    };

    $SIDEBAR_JS = '
$(document).ready(function () {
    $(".on-click").click(function(event) {
        $(".navbar-collapse").collapse("hide");
    });
});';

?>

                </ul>
            </div>
        </nav>
    </div>