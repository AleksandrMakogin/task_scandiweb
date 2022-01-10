<?php

class View
{
    /*
	$content_file - types that reflect the content of the page;
	$template_file - common template for all pages;
	$data - an array containing page content elements. Usually filled in the models.
	*/

    function generate($content_view,$template_view,$data = null ){

        /*

		   dynamically connect a common template (view),
           inside which the view will be built in
           to display the content of a specific page
		*/

        include 'application/views/'.$template_view;
    }

}