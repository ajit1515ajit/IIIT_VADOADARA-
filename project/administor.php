

<?php

session_start();

 ?>



<?php
$dbhost ="localhost";
$dbuser ="root";
$dbpass = "iasofficer@1";
$dbname ="project";
$connection =mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if (mysqli_connect_errno()){
die("database connection failed:" .
  mysqli_connect_error() .
  "(".mysqli_connect_errno() .")"
  );

}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="generator" content="CoffeeCup HTML Editor (www.coffeecup.com)">
    <meta name="created" content="Sat, 12 Mar 2016 04:37:52 GMT">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Administration | IIIT-Delhi</title>
	
	<link rel="shortcut icon" type="image/x-icon" href="111.png" />


	<link href="css/style.css" style="type/css" rel="stylesheet">
    <script src="js/jquery-2.1.4.min.js"></script>
      <script src="js/main.js"></script>
      <script src="js/jquery.slides.min.js" type="text/javascript"></script>
      
  </head>
  <body >
      <div id="container">
      <header>
          
            <div class="logo">
                <a href="https://en.wikipedia.org/wiki/Indian_Institute_of_Information_Technology,_Vadodara" title="IIITV-logo"target="_blank"><img src="image/111.png" width="80" height="80"></a>
            </div>    
            
<div class="name">
                <span id="site-name"> <a href="#" title="IIIT-Vadodara"> INDIAN INSTITUTE OF INFORMATION TECHNOLOGY
                    VADODARA </a ></span><br>
                <span class="address"> C/o, Block No.9, Government Engineering College, Sector-28, Gandhinagar, Gujarat - 382028
           </span><br>
        <table>
<tr>
<td width="960px" align="center" style="font-size:13px;">&nbsp;<b>
Mentored By <a href="http://www.daiict.ac.in/daiict/index.html" title="DA-IICT"target="_blank" style="font-size:13px;"><u>DA-IICT</u></a></b>
</tr>
</table>

<div class="topbar">
                <ul class="topline">
                    
                    <li><a href="contactus.html" title="Contact Us" target="_blank">Contact Us </a></li>
                    <li><a href="https://accounts.google.com/ServiceLogin?hl=en&passive=true&continue=https://www.google.co.in/%3Fgws_rd%3Dssl#identifier" target="_blank" title="email Us">Webmail </a></li>
                    <li class="last"><a href="https://www.google.com/maps/d/u/0/viewer?mid=z9_cN3Da9QvA.kqu7Eeg9LOsk
"    title="Direction to Campus" target="_blank">Direction </a></li>
                
                </ul>




 
            </div>
      




 
            
      
         
      </header>
      <nav class="cf">                                                                                              
          <ul class="topmenu">
            
			
			
			<li><a href="rk.html" title="Homepage">HOME</a>                                                                         <!-- HOME -->
              <ul class="submenu">
			        <li><a href="AboutIIITV.html" title="ABOUT US">ABOUT IIITV</a></li>
                    <li><a href="Vission&Mission.html" title="VISION AND MISSION">VISION & MISSION</a></li> 
					<li><a href="Directorsmessage.html" title="Director&#39;s Message">DIRECTOR'S MESSAGE</a></li>
                    <li><a href="governingbody.html" title="GOVERNING BODY">GOVERNING BODY</a></li>
                    <li><a href="careers.html" title="Work at IIIT-Vadodara">CAREER</a></li>
					<li><a href="rti.html" title="RTI">RTI</a></li>
				     <li><a href="http://www.iiitvadodara.ac.in/PDF/MOU.pdf" target ="_blank" title="MOU">MOU</a></li>
                    

                  </ul>
              </li>
			  
			  
                <li><a href="admissions.html" title="JOIN US" >ADMISSIONS</a>                                                                           <!-- ADMISSIONS  -->
                <ul class="submenu">
                    <li><a href="btechadmissions.html" title="B.Tech Admissions">B.TECH </a></li>
                    <li><a href="mtechadmissions.html" title="M.Tech Admissions ">M.TECH</a></li>
                    <li><a href="phdadmissions.html" title="PhD Admissions">Ph.D ADMISSIONS</a></li>
					
					<li><a href="feesstructure.html" title="Fees Structure">FEES STRUCTURE</a></li>                            <!-- FEE STUCTURE PBM -->
                                           
                  </ul>
              </li>
			                                                                          
					

					 <li class="dir"><a href="people.html" title="People">PEOPLE</a>                                                                                            <!-- PEOPLE -->
              <ul class="submenu">
			  <li><a href="administration.html" title="Administration">ADMINISTRATION</a></li>
			  <li><a href="faculty.html" title="Faculty">FACULTY</a></li>
                   <li><a href="mentorinstitutefaculty.html" title="Visiting Faculty">VISITING FACULTY</a></li>
				   
				   <li><a href="student.html" title="Students">STUDENTS</a></li>
				   
                  </ul>
              </li>
					
					
					
					
					
					
					


					<!-- EDUCATION-->
                    
                    <li class="expanded active-trail"><a href="education.html" title="EDUCATION" class="active">EDUCATION</a>
					<ul class="submenu">
					
		
		<li class="collapsed"><a href="btechacademics.html" title="B.Tech.(CSE,IT)">B.TECH</a></li>
		
		<li class="expanded"><a href="mtechacademics.html" title="M.Tech.(CS)">M.TECH</a></li>

		<li class="expanded"><a href="phdacademics.html" title="PhD">Ph.D.</a></li>
         
		   </ul>
             </li>		 
			  
			  
                                                                                			
                                                                                                                    <!-- FACILITIES  -->
			  
			 
			    
    <li class="expanded active-trail"><a href="facilities.html" title="Facilities">FACILITIES</a>
	          <ul class="submenu">
	<li class="leaf first active-trail"><a href="hostel.html" title="Hostel Accomodation" class="active">HOSTEL</a></li>
	<li class="leaf"><a href="studentlife.html" title="Student Life">STUDENT LIFE</a></li>
	<li class="leaf"><a href="infrastructure.html" title="Infrastructure">IT INFRASTRUCTURE</a></li>
	<li class="leaf"><a href="sports-recreation.html" title="Sports and Recreation">SPORTS AND RECREATION</a></li>
	<li class="leaf"><a href="labs.html" title="Teaching Labs">LABS</a></li>
	
	
	<li class="leaf last"><a href="fms.html" title="Facility Management Services">FMS</a></li>
                     
                 </ul>
					</li>
			  
			     
					    
			 
					


					

			 <!-- FAQ  -->
              <li><a href="faq.html" title="Frequently asked questions about IIIT-Vadodara">FAQ</a></li>
		 
			

				<li><a href="login.php" title="Login">Login</a>                                                                                                
              <ul class="submenu">
			  <li><a href="login.php" title="Admin login">ADMIN</a></li>
			  <li><a href="faculty_login.php" title="Faculty_login">Faculty_login</a></li>
			  <li><a href="student_login.php" title="student_login_login">student login</a></li>
                  
                  </ul>
              </li>	
                    
                  </ul>
			  
		
      </nav>


    
       

  <?php 
    $query2  = "SELECT * "; 
    $query2 .=  "FROM administration";
    $img_set = mysqli_query($connection, $query2);
    if (!$img_set) 
      die("Database query failed.".mysqli_error($connection));?> 



					
					
					<div class="contact">
          <h3> Administration </h3>
          <div class="box">

<?php
		  
		  
          while($row = mysqli_fetch_assoc($img_set) ){
              
            ?>

<div id="content-content" class="content-content">
                                  
<div id="node-14" class="node odd full-node node-type-page">
  <div class="inner">
  
      
      
    
    <div class="content clearfix">
            <p><style type="text/css">
table#director img { width: 120px; border-width: 3px; border-style: double; margin: 5px; padding: 5px; background-color: white;}
.table-people .cell {
    background-color: #f4F4F4;
    border: 1px dotted #38AFA9;
    float: left;
    margin: 5px;
    min-height: 12em;
    padding: 5px;
    width: 45%;
}
.img1 {
    background-color: white;
    border: 1px solid grey;
    float: left;
    margin: 5px;
    padding: 3px;
    height: 110px;
    max-width: 100px;
}
.table-people p { margin: 0; padding: 0}
div#managers div.cell { width: 30%;     min-height: 12em; }
div#managers div.cell img {height: 90px; max-width:80px;}	</style></p>

<h3>Director</h3>
<hr style="clear:both"><br>
<table align="left" border="0" cellpadding="10" cellspacing="0" id="director">
<tbody>
<tr>
<td bgcolor="#f4f4f4"><img src="<?php echo $row ["address"]?>"  style="width: 200px; height: 200px;"></a></td>
<td bgcolor="#f4f4f4" valign="top" width="655">
<p><font size="+1"><b>R Nagaraj</b></a></font></p>
<p><font color="#8A4B08">Ph.D. (Fault Tolerant Flight Controllers using Artificial Neural Network)</font><br>
                                                                       <font color="#8A4B08">Visvesvaraya Technological University</font><br>
</p>		 

                                        
		  <?php } ?>
		 
		 <p>

<b><font color="#8A4B08">Areas of interest:</font></b><font color="#8A4B08"> Image Processing, Pattern Recognition, Fractal, Bayesian Network and Digital Image Watermarking </font><br>
                                
									</p>
									
</td>
<td style="text-align: left; vertical-align: middle; width: 655px; background-color: rgb(244, 244, 244);">

<p><u><strong>Contact Details</strong></u></p>
					 <p>Postal:	 R Nagaraj (Director)  <br>
              DA-IICT <br>
 Post Bag No.4 <br>
 Near Indroda Circle <br>
 Gandhinagar 382007, Gujarat, India <br>
					Email: <a>director@iiitvadodara.ac.in </a><br>
					Phone:	 Office : (+91) 079-30510572 
 <br>
					Fax:	 (91)(79) 30520010</p>
					
					
</td>

</tr>
</tbody>
</table>
<div style="clear:both">&nbsp;</div>
<!--------------------------------------------------><!--------------------------------------------------><h3>Dean</h3>
<hr style="clear:both"><br>
<table align="left" border="0" cellpadding="10" cellspacing="0" id="director">
<tbody>
<tr>
<td bgcolor="#f4f4f4"><img src="image/smc.jpg" style="width: 200px; height: 200px;" ></a></td>
<td bgcolor="#f4f4f4" valign="top" width="655">
<p><font size="+1"><b>Mitra, Suman Kumar</b></a></font></p>
<p>		 <font color="#8A4B08"> Ph.D. (Computer Science) </font><br>
                                                                  <font color="#8A4B08"> ISI Calcutta</font><br>
</p>
		 
		 <p>

<b><font color="#8A4B08">Areas of interest:</font></b><font color="#8A4B08"> Image Processing, Pattern Recognition, Fractal, Bayesian Network and Digital Image Watermarking </font><br>
                                
									</p>
									
</td>
<td style="text-align: left; vertical-align: middle; width: 655px; background-color: rgb(244, 244, 244);">
                     <p><u><strong>Contact Details</strong></u></p>
					 <p>Postal:	 Prof Suman K Mitra <br>
              DA-IICT <br>
 Post Bag No.4 <br>
 Near Indroda Circle <br>
 Gandhinagar 382007, Gujarat, India <br>
					Email: <a>suman_mitra@iiitvadodara.ac.in </a><br>
					Phone:	 (91)(79) 30510584 (Off.) 
 (91) 9824351727 (Res.)<br>
					Fax:	 (91)(79) 30520010</p>
					
</td>

</tr>
</tbody>
</table>
<div style="clear:both">&nbsp;</div>
<!--------------------------------------------------><!--------------------------------------------------><h3>Administrative Staff</h3>
<hr style="clear:both">
<div border="0" cellpadding="10px" cellspacing="0" class="table-people" width="100%">


<div class="cell"><br><img alt="" class="img1" src="image/CPJ.jpg" style="width: 72px; height: 84px; float: left;"><br><strong>Mr. C.P. Joglekar</strong>
<br>


<p>		 
                                         <font color="#8A4B08">Registrar</font><br></p>
                                  <p>       <font color="#8A4B08"><b>Contact:</b> registrar@iiitvadodara.ac.in</font>
                                  
         </p>
<br>


</div>







<div class="cell"><br><img alt="" class="img1" src="image/NAMRATA.jpg" style="width: 72px; height: 84px; float: left;"><br><strong>Mrs. Namrata Bhouraskar</strong>
<br>


<p>		 <font color="#8A4B08">Secretary to Registrar cum Accountant</font><br> </p>
                                  <p>      <font color="#8A4B08"><b>Contact:</b> namrata@iiitvadodara.ac.in</font></span>
                                               
         </p>
<br>


</div>



<div class="cell"><br><img alt="" class="img1" src="image/nigam.jpg" style="width: 72px; height: 84px; float: left;"><br><strong>Mr. N.D. Raval</strong>
<br>


<p>		 <font color="#8A4B08">Jr. Technical Superintendent</font><br>   </p>
                                  <p>      <font color="#8A4B08"><b>Contact:</b> ndraval@iiitvadodara.ac.in</font></span>
                                               
         </p>
<br>


</div>


<div class="cell"><br><img alt="" class="img1" src="image/jitu.jpg" style="width: 72px; height: 84px; float: left;"><br><strong>Mr. Jitu Sharma</strong>
<br>


<p>		 <font color="#8A4B08">Jr. Technical Superintendent</font><br>
                                        <font color="#8A4B08"><b>Contact:</b> jitusharma@iiitvadodara.ac.in</font></span>
                                            
         </p>
<br>


</div>



<div class="cell"><br><img alt="" class="img1" src="image/JaykumarJoshi.jpg" style="width: 72px; height: 84px; float: left;"><br><strong>Mr. Jaykumar Joshi</strong>
<br>


<p>		  <font color="#8A4B08">Library Trainee</font><br>
                                        <font color="#8A4B08"><b>Contact:</b> jay.joshi@iiitvadodara.ac.in</font></span>
                                              
         </p>
<br>


</div>




<div class="cell"><br><img alt="" class="img1" src="image/darshana.jpg" style="width: 72px; height: 84px; float: left;"><br><strong>Ms. Darshana Rana</strong>
<br>


<p>		  <font color="#8A4B08">Administrative Assistant</font><br>
                                        <font color="#8A4B08"><b>Contact:</b> darshana@iiitvadodara.ac.in</font></span>
                                            
         </p>
<br>


</div>





<div class="cell"><br><img alt="" class="img1" src="image/yogesh.jpg" style="width: 72px; height: 84px; float: left;"><br><strong>Mr. Yogesh Gameti</strong>
<br>


<p>		 <font color="#8A4B08">Messenger cum Peon</font><br>
                                        <font color="#8A4B08"><b>Contact:</b> yogesh@iiitvadodara.ac.in</font></span>
                                            
         </p>
<br>


</div>








		
		

<hr style="clear:both">

<!--<div class="cell"><img alt="" class="img1" src="/sites/default/files/images/staff/vivek.jpg" style="height: 84px; width: 72px; " /><strong>Vivek Tiwari</strong><br />
		Deputy Manager (Academics)<br />
		<br />
		(on lien)<br />
		<br />
		vivek<img alt="" src="/sites/default/files/images/1.png" style="width: 10px; height: 10px; background-color: rgb(255, 255, 255);" />iiitd.ac.in</div>--><!--<div class="cell"><img alt="" class="img1" src="/sites/default/files/images/staff/vivek.jpg" style="height: 84px; width: 72px; " /><strong>Vivek Tiwari</strong><br />
		Deputy Manager (Academics)<br />
		<br />
		(on lien)<br />
		<br />
		vivek<img alt="" src="/sites/default/files/images/1.png" style="width: 10px; height: 10px; background-color: rgb(255, 255, 255);" />iiitd.ac.in</div>--><div style="clear:both">&nbsp;</div>
<!--<div style="margin-bottom:20px; text-align: center; height:250px; overflow:hidden;">
	<h3>Organization Chart</h3>
	<p style="text-align: center;"><a a="" board="" general="" governors="" href="/sites/default/files/images/staff/org-chart-31-12-2013.jpg" of=""><em>(click image to see the complete chart)</em></a></p>
	<a a="" board="" general="" governors="" href="http://iiitd.ac.in/about/bog" of=""> </a> <a href="/sites/default/files/images/staff/org-chart-31-12-2013.jpg"><img src="/sites/default/files/images/staff/org-chart-31-12-2013.jpg" style="width: 770px; height: 362px;" /></a></div>--><!--<div style="margin-bottom:20px; text-align: center; height:250px; overflow:hidden;">
	<h3>Organization Chart</h3>
	<p style="text-align: center;"><a a="" board="" general="" governors="" href="/sites/default/files/images/staff/org-chart-31-12-2013.jpg" of=""><em>(click image to see the complete chart)</em></a></p>
	<a a="" board="" general="" governors="" href="http://iiitd.ac.in/about/bog" of=""> </a> <a href="/sites/default/files/images/staff/org-chart-31-12-2013.jpg"><img src="/sites/default/files/images/staff/org-chart-31-12-2013.jpg" style="width: 770px; height: 362px;" /></a></div>--></div>
    </div>
  
        
      </div><!-- /inner -->

  </div><!-- /node-14 -->
                                                                  </div><!-- /content-content -->
                                                              </div><!-- /content-inner-inner -->
                            </div><!-- /content-inner -->
                          </div><!-- /content-region-inner -->
                        </div><!-- /content-region -->

                                              
											  
											  
											   <script>
    $(function() {
      $('#slides').slidesjs({
        width: 940,
        height: 528,
        play: {
          active: true,
          auto: true,
          interval: 4000,
          swap: true
        }
      });
    });
  </script>
	  
	 

<div class=footcont>

 <footer class="copy">
       <font size=3 > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;	  
										&nbsp;&nbsp;&copy 2016 IIIT VADODARA, Gandhinagar, Gujarat-382028 |</font>
		
		<a href="rk.html" title="Home">Home</a>|
                    <a href="contactus.html" title="Contact Us" >ContactUs</a>|
                    <a href="https://accounts.google.com/ServiceLogin?hl=en&passive=true&continue=https://www.google.co.in/%3Fgws_rd%3Dssl#identifier" title="Webmail" target="_blank">Webmail</a>|
                    <a href="https://www.google.com/maps/d/u/0/viewer?mid=z9_cN3Da9QvA.kqu7Eeg9LOsk"title="Direction" target="_blank">Direction </a>|	
		
		
		
		
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a id="facebook1" target="_blank" href="https://www.facebook.com/search/top/?q=iiit%20vadodara&ref=eyJxcyI6IkpUVkNKVEl5YVdscGRDVXlNSFpoWkc5a1lYSmhKVEl5SlRWRSIsImd2IjoiYmVlMDlmOTNmYTczMmNmYTU5YTFjYjZkOWY0NTBkMzg5MjQyNGU0OSJ9" alt="IIITV @Facebook" title="Like us on Facebook"><img src="facebook.jpg" width=25 height=25></a>&nbsp;&nbsp;
			<a id="twitter1" target="_blank" href="#"  alt="IIITV @Twitter" title="Tweet us on Twitter" ><img src="twiitericon.jpg"width=25 height=25></a>&nbsp;&nbsp;
			<a id="linkedin1" target="_blank" href="#" alt="IIITV @LinkedIn" title="Follow us on LinkedIn"><img src="link.jpg"width=25 height=25></a>

		</footer>
      </div>
  
      

     

      
      
      
     	  
  </body>
</html>