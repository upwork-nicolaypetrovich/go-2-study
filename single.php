<?php

get_header();
the_post();

if(
	(isset(get_the_category( )[0]->parent) && get_the_category( )[0]->parent==4)||
	(isset(get_the_category( )[0]->term_id) && get_the_category( )[0]->term_id==4)
	){
    include("university.php");
}else{
    include("simple-single.php");
}

get_footer();