    <a class="btn button_menu" id="toggle">
    	<span class="top"></span>
    	<span class="middle"></span>
    	<span class="bottom"></span>
    </a>
    <div class="overlay" id="overlay">
    	<nav class="overlay-menu">
            <ul>;
<?php

    foreach ($menu as $key => $value){
        extract($value);
    
        if(($MENU_TYPE == "text") OR ($MENU_TYPE == "mail")){
            echo'
            <li><a data-toggle="modal" href="#'.$key.'"><h1>'.$MENU_TITLE.'</h1></a></li>';
        
        }elseif($MENU_TYPE == "link"){
            echo'
            <li><a href="'.$MENU_LINK.'" target="_blank"><h1>'.$MENU_TITLE.'</h1></a></li>';
                };
        };

?>


            </ul>
    	</nav>
    </div>
<?php            
    foreach ($menu as $key => $value){
        extract($value);

        if($MENU_TYPE == "text"){
            echo'
<!--'.$key.'-->
    <div class="modal bg-white" id="'.$key.'" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="row vh-100 overflow-auto">
                    <div class="col-1 col-sm-3"></div>
                    <div class="align-self-center col-10 col-sm-6">
                        <p class="text-justify text-dark">'.$MENU_CONTENT.'</p>
                    </div>
                </div>
                <a class="btn button_menu close_modal" data-dismiss="modal" aria-label="Close">
                    <span class="top"></span>
                    <span class="middle"></span>
                    <span class="bottom"></span>
                </a>
            </div>
        </div>
    </div>
    ';

        }elseif($MENU_TYPE == "mail"){
            echo'
<!--'.$key.'-->
    <div class="modal bg-white" id="'.$key.'" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">



                <div class="row vh-100  ">
                    <div class="align-self-center col-12">

                        <div class="col-12 text-center pb-5">
                            <p class="text-dark">'.$FORM_CONTENT.'</p>
                        </div>

                        <form id="send-mail" method="post">
                            <div class="col-12 text-center">
                                <input class="form"  type="text" name="name" id="name" value="'.$name.'" placeholder="'.$FORM_NAME.'">
                            </div>
                            <div class="col-12 text-center">
                                <input class="form" type="email" name="email" id="email" value="'.$email.'" placeholder="'.$FORM_MAIL.'">
                            </div>
                            <div class="col-12 text-center">
                                <textarea class="form" type="text" name="message" id="message" value="'.$message.'" placeholder="'.$FORM_MESSAGE.'"></textarea>
                            </div>
                            <div class="col-12 text-center">
                                <input class="btn border" type="button" id="submitFormData" onclick="SubmitFormData();" value="'.$FORM_SEND.'" />
                            </div>
                        </form>
                        <div class="pt-3 text-center" id="results">

                            <!-- All data will display here  -->
                        
                        </div>	
                    </div>

                </div>
                <a class="btn button_menu close_modal" data-dismiss="modal" aria-label="Close">
                    <span class="top"></span>
                    <span class="middle"></span>
                    <span class="bottom"></span>
                </a>               
            </div>
        </div>
    </div>
    ';
    };    
};
    
?>
