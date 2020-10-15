<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CRYPTICAL CTF</title>
<script type="text/javascript" src="js/L1.js" ></script>
<meta name="keywords" content="Game Website Template, free templates, website templates, CSS, XHTML" />
<meta name="description" content="Game Website Template - download free XHTML/CSS files from templatemo.com" />
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="templatemo_wrapper_outer">
<div id="templatemo_wrapper_inner">
  <!-- [if IE 1]> <script src = 'js/f.js'> <![endif]-->
    <div id="templatemo_banner"></div>
   <?php
include('nav.php');
?> 
    <div id="templatemo_content_wrapper">
    
    	<div class="templatemo_side_bar margin_right_10">
        <img src="images/icons/bullet_go.png"/> Navigation:<span class="current">LEVELS</span>
         <hr><br>
            <div class="header_01">LEVELS</div>
            	<ul>
                    
                    <li>
                        <span><a href="level1.php"> LEVEL 01</a></span>

                  
                    </li>

                    <li>
                        <span><a href = "level2.php" > LEVEL 02 </a></span>
                    </li>

                     
                      <li>
                        <span><a href = "level3.php"> LEVEL 03</a></span>
                    </li>
                    <li>
                        <span><a href="level4.php"> LEVEL 04</a></span>
                    </li>
                    <li>
                        <span><a href="level5.php" > LEVEL 05</a></span>
                    </li>
                    <li>
                        <span><a > LEVEL 06</a></span>
                    </li>
                    <li>
                        <span><a > LEVEL 07</a></span>
                    </li>
                    
                </ul>
       <!-- [if IE 1]>  <![endif]-->
            <div class="margin_bottom_20 horizontal_divider"></div> 
			
            <div class="margin_bottom_20"></div>
        </div> <!-- end of left side bar -->
        
        <div class="templatemo_content margin_right_10">
        
        	<div class="content_section">
           	  <div class="header_02"> LEVEL 02</div>
              
            
                <div class="margin_bottom_20"></div>
              
                 <p><span> HINT 01 : Unforutunately, I lost my mind hence i hide my password in my place. </p></span>
                 <br> </br>
                 <style>
                h1.hidden {
                  display: none;
                </style>
                        <img src="css/images/password.jpg" > <br> </br>
                        <h1 class="hidden"> 2f6313767227a723c81ff1e8126c52b3b2300324 i encrypt it using different hashes.(sha-1,md5,sha 256)- i convert it to binary value</h1>
                        <p>CAN YOU FIND IT? :) :)</p>

                 <br> </br>
                 <div > ALRIGHT: </div>
                 SUBMIT YOUR PASSWORD TO ENTER NEXT LEVEL <br> </br>
                <form name="myForm" action="level3.php";  onsubmit="return Level2()" method="post">
                        PASSWORD <input type="text" name="pass" id= "pass">
                        <input type="submit" value="Submit">
                 </form> 
    
                        
              <div class="margin_bottom_20"></div>
               
                
                <div class="cleaner"></div>
            </div>
            
            
            
        	<div class="margin_bottom_40"></div>
        </div> <!-- end of content -->
        
        
        <div class="cleaner"></div>    
    </div> <!-- end of content wrapper -->
    
</div>
</div>

<?php include('footer.php'); ?>
    
</body>
</html>