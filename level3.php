<!DOCTYPE html >
<html>
<head>
<title>CRYPTICAL CTF</title>

<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/L1.js" ></script>
</head>
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
                        <span><a href="level2.php" > LEVEL 02 </a></span>
                    </li>

                      <!-- [if IE 1]> <html lang = "en" class = "level1"> <![endif]-->
                      <li>
                        <span><a href="level3.php"> LEVEL 03</a></span>
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
           	  <div class="header_02"> LEVEL 03</div>
              
            
            
                <div class="margin_bottom_20"></div>
              
                 <p><span> HINT 01 : FRANK KNOWS THE STEGNOGRAPHY </p></span>
                 <br> </br>
                 <div > ALRIGHT: </div>
                 SUBMIT YOUR FLAG
                 <form name="myForm" action="level4.php";  onsubmit="return Level3()" method="post">
                        PASSWORD <input type="text" name="pass" id= "pass">
                        <input type="submit" value="Submit">
                 </form> 
                 <br> </br>
                 DO YOU KNOW DEEP SOUND? 
                 <br>   WOW THAT IS THE "CRYPTICAL CTF" SOUND TRACK YOU WANT TO DOWNLOAD IT?THEN USE IDM EXTENSION</br>
                                   <br> 
                                     <audio controls>
                                       
                                             <source src="css/1.wav" type="audio/wav">
                                                Your browser does not support the audio element.
                                            </audio>
                                                      <br><br><a href="download2.php" target="_blank">Download MP3</a>  <a href="download.php?file=css/1.wav">download</a>
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