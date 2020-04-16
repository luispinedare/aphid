<?php
function TreeOfContents($TAG, $CLASS, $CONTENT, $LINK, $IMAGE, $SRC, $ID, $ALT, $STYLE){
	if($TAG == "div"){
		echo'
			<div';
		if($CLASS != null){
			echo ' class="'.$CLASS.'"';
		}if($ID != null){
			echo ' id="'.$ID.'"';
		}if($ALT != null){
			echo ' alt="'.$ALT.'"';
		}if($STYLE != null){
			echo ' style="'.$STYLE.'"';
		}
		echo '>';
		foreach ($CONTENT as $key => $value){
			unset($TAG, $CLASS, $CONTENT, $LINK, $IMAGE, $SRC, $ID, $ALT, $STYLE);
			extract($value);
			TreeOfContents($TAG, $CLASS, $CONTENT, $LINK, $IMAGE, $SRC, $ID, $ALT, $STYLE);
	};
	echo '
			</div>';
	}elseif ($TAG == "img"){
		function images($TAG, $CLASS, $SRC, $ID, $ALT, $STYLE){
			echo'
				<img src="'.$SRC.'"';
			if($CLASS != null){
				echo ' class="'.$CLASS.'"';
			}if($ID != null){
				echo ' id="'.$ID.'"';
			}if($ALT != null){
				echo ' alt="'.$ALT.'"';
			}if($STYLE != null){
				echo ' style="'.$STYLE.'"';
		};
		echo '>';
	}
	images($TAG, $CLASS, $SRC, $ID, $ALT, $STYLE);	
	}elseif ($TAG == "a"){
		echo'
				<a href="'.$LINK.'"';
		if($CLASS != null){
			echo ' class="'.$CLASS.'"';
		}if($ID != null){
			echo ' id="'.$ID.'"';
		}if($ALT != null){
			echo ' alt="'.$ALT.'"';
		}if($STYLE != null){
			echo ' style="'.$STYLE.'"';
		}
		echo '>';
			if($CONTENT != null){
				echo $CONTENT;
			}elseif($IMAGE != null){
				unset($TAG, $CLASS, $CONTENT, $LINK, $SRC, $ID, $ALT, $STYLE);
				extract($IMAGE);
				images($TAG, $CLASS, $SRC, $ID, $ALT, $STYLE);
			};
		echo '
				</a>';
	}else{
		echo'
				<'.$TAG;
		if($CLASS != null){
			echo ' class="'.$CLASS.'"';
		}if($ID != null){
			echo ' id="'.$ID.'"';
		}if($ALT != null){
			echo ' alt="'.$ALT.'"';
		}if($STYLE != null){
			echo ' style="'.$STYLE.'"';
		}
		echo '>'.$CONTENT.'</'.$TAG.'>';
	}
};
?>