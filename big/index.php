<?php include "includes/header.php"?>
    <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "ebertshannah@gmail.com";  //place your/your client's email address here
        $toName = "Hannah Eberts"; //place your client's name here
        $website = "hannaheberts.com";  //place NAME of your client's website

        //echo loadContact('simple.php');#demonstrates a simple contact form
        echo loadContact('multiple.php');#demonstrates multiple form elements
?>
</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside class="box">
 <h3>Fun Resources for Web Development</h3>
    <p><a href="https://rgb.to/ral/page/1" target="_blank">RGB to Pantone</a></p>
    <p><a href="https://www.w3schools.com/cssref/css_colors.asp" target="_blank">CSS Colors on W3Schools</a></p>
    <p><a href="https://fonts.google.com/" target="_blank">Google Fonts</a></p>
</aside>
<!-- END RIGHT COL -->
 <?php include "includes/footer.php"?>