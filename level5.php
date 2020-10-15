<!DOCTYPE html >
<html >
<head>

<title>CRYPTICAL CTF</title>

<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/L1.js" ></script>
<body>
<div id="templatemo_wrapper_outer">
<div id="templatemo_wrapper_inner">
  <!-- [if IE 1]> <script src = 'js/g.js'> <![endif]-->
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

                   <!-- [if IE 1]> <html lang = "en" class = "ie8"> <![endif]-->
                    <!-- [if IE 1]> <html lang = "en" class = "obx"> <![endif]-->
                     <!-- [if IE 1]> <script src = 'js/f.js'> <![endif]-->
                         <!-- [if IE 1]>  <![endif]-->
                    </li>

                    <li>
                        <span><a href="level2.php"> LEVEL 02 </a></span>
                    </li>

                      <!-- [if IE 1]> <html lang = "en" class = "level1"> <![endif]-->
                      <li>
                        <span><a href="level3.php"> LEVEL 03</a></span>
                    </li>
                    <li>
                        <span><a href="level4.php"> LEVEL 04</a></span>
                    </li>
                    <li>
                        <span><a href="level5.php"> LEVEL 05</a></span>
                    </li>
                    <li>
                        <span><a href="level6.php" > LEVEL 06</a></span>
                    </li>
                    <li>
                        <span><a > LEVEL 07</a></span>
                    </li>
                    <li>
                        <span><a > LEVEL 08</a></span>
                    </li>
                    <li>
                        <span><a > LEVEL 09</a></span>
                    </li>
                    <li>
                        <span><a > LEVEL 10</a></span>
                    </li>
                    
                </ul>
       <!-- [if IE 1]>  <![endif]-->
            <div class="margin_bottom_20 horizontal_divider"></div> 
			
            <div class="margin_bottom_20"></div>
        </div> <!-- end of left side bar -->
        
        <div class="templatemo_content margin_right_10">
        
        	<div class="content_section">
           	  <div class="header_02"> LEVEL 05</div>
              
            
            
                <div class="margin_bottom_20"></div>
              
                 <p><span> HINT 01 : SENIOR ACCOUNTANT only can manage his own text. Can you find his text file?  </p></span>
                 <br> </br>
                 <div > ALRIGHT: </div>
                 SUBMIT YOUR FLAG

                 <form name="myForm" action="level2.php";  onsubmit="return Level1()" method="post">
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