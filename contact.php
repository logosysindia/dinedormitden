<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8" />
	<title>Dine Dormit Den</title>
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
	<meta name="author" content="" />

	 
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
 
  	<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
  	<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,400italic,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="styles/style.css" />
    <link rel="stylesheet" href="styles/inner.css" />
    <link rel="stylesheet" href="styles/layout.css" />
    <link rel="stylesheet" href="styles/flexslider.css" />
    <link rel="stylesheet" href="styles/color.css" />
    <link rel="stylesheet" href="styles/prettyPhoto.css"  media="screen" />
    

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico" />

    
    
</head>


<body>

<div id="bodychild">
	<div id="outercontainer">
    
        <!-- HEADER -->
        <div id="outerheader">
        	<div class="container">
            
            <header id="top">
            	<div class="row">
                    <div class="three columns">
                        <div class="top-text"><span class="bg-left"></span><span class="bg-right">Open Daily: Monday - Sunday</span></div>
                    </div>
                    <div class="six columns">
                    	<div class="logo-icon-l"></div>
                    	<div id="logo">
                        <a href="index.html">
                        	<img src="images/logo.png" alt=""/>
                            <h1>Dine Dormit Den</h1> 
                        </a>
                        </div>
                        <div class="logo-icon-r"></div>
                    </div>
                    <div class="three columns">
                       <!-- <form action="#" id="searchform" method="get">
                            <span class="bg-left"></span>
                            <div class="bg-right">
                            <input type="text" name="s" id="s" value="Search Form" onFocus="if (this.value == 'Search Form')this.value = '';" onBlur="if (this.value == '')this.value = 'Search Form';" /> 
                            <input type="submit" class="searchbutton" value="" />
                            </div>
                        </form>-->
                    </div>

                    <div class="twelve columns">
                    <section id="navigation">     
                        <div class="nav-left"></div>    
                        <nav id="nav-wrap">
                            <ul id="topnav" class="sf-menu">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">About Us</a>
                                   
                                </li>
                                <li><a href="menu.html">Our Menus</a></li>
                                <li><a href="special-events-catering.html">Special Events & Catering</a></li>  
                                <li class="current"><a href="contact.php">Contact Us</a></li>  
                            </ul><!-- topnav -->
                            <div class="clear"></div>
                        </nav><!-- nav -->	
                        
                    </section>
                    </div>
                <div class="clear"></div>
                </div>
            </header>
            </div>
        </div>
       
		<div id="outerbeforecontent">
            <div class="container">
            	<div class="row">
                <div class="twelve columns" >
                	<div id="beforecontent">
                    	<h1 class="pagetitle">Contact Us</h1>
						<p>Enjoyed your meal? Comments on service or food? Use the form below to send us a message.</p>
                     </div>
                </div>
                </div>
            </div>
            <div class="separator full"></div>
        </div>
   
        <div id="outermain">
        	<div class="container">
                <div class="row">
                    <section id="maincontent" class="eight columns positionleft">

                            <section class="content"> 
									<h1>Making a comment</h1>
                                	 
                                    
									<div id="contactform">
                                    <form id="contact" action="process.php" method="post">
                                      <fieldset> 
                                          <div class="six columns"> 
                                          <label for="name" id="name_label">Your name <span class="required">(required)</span></label>
                                          <input type="text" name="name" id="name" size="50" value="" class="text-input" />
                                          </div> 
                                          <div class="six columns">  
                                          <label for="email" id="email_label">Your email <span class="required">(required)</span></label>
                                          <input type="text" name="email" id="email" size="50" value="" class="text-input" />
                                          </div> 
                                          <div class="six columns">
                                          <label for="name" id="name_label">Mobile Number <span class="required">(required)</span></label>
                                          <input type="text" name="mobile" id="mobile" size="50" value="" class="text-input" />
                                          </div> 
                                          <div class="six columns">
                                          <label for="subject" id="subject_label">Subject</label>
                                          <input type="text" name="subject" id="subject" size="50"  value="" class="text-input" />
                                          </div> 
                                          <div class="twelve columns"> 
                                          <label for="msg" id="msg_label">Your message <span class="required">(required)</span></label>
                                          <textarea rows="7" name="msg" id="msg" class="text-input"></textarea>
                                          <br class="clear" />
                                          </div> 
                                          <div class="twelve columns"> 
                                          <input type="checkbox" name="msg" id="msg" class="text-input-check"> 
                                              <label for="msg" id="msg_label_check">Please tick the checkbox if you'd like us to email you news and information about the restaurant. If you tick this, you need </label>
                                          <br class="clear" />
                                          </div> 
                                          <input type="submit" name="submit" class="button" id="submit_btn" value="Send Message"/>
                                      </fieldset>
                                    </form>
                                    </div> 
                                    
                            </section>

                    </section>
                    
                    <aside class="four columns">
                    	<div class="sidebar">
                            <ul>
                                <li class="widget-container">
      								<div class="box-notice">
                                    	<div class="title">
                                        	<div class="line"></div>
                                            <span class="icon-l"></span>
                                    		<h2>Address</h2>
                                            <span class="icon-r"></span>
                                            <div class="line"></div>
                                        </div>  
                                        <p style="margin-bottom:10px;"><strong>Address:</strong><br> F-89/1 Okhla Phase - I,New Delhi - 110020. 
                                            <br><strong>Email Id:</strong> <a href="mailto: dtiwarihk@outlook.com">dtiwarihk@outlook.com</a>
                                        </p>
                                        <p><strong>Telephone No:</strong> 01140324188.  <br> <strong>Mobile : </strong>+91 95995 54188 </p>
                                    </div>
                                </li>	
                            </ul>
                        </div>
                        
                    </aside>
                </div>
            </div> 
        </div>
        
        <footer id="footer">
            
            <!-- COPYRIGHT -->
            <div id="outercopyright">
                <div class="container">
                	<div class="row"> 
                        <div id="copyright" class="six columns">
                            Copyright &copy; 2017 <strong>Dine Dormit Den</strong>.
                        </div>
                        
                        <div class="six columns">
							<ul class="sn"> 
                                <li><a title="Facebook" href="#"><img src="images/social-media-img-1.png"/></a></li>
                                <li><a title="Google+" href="#"><img src="images/social-media-img-6.png"/></a></li> 
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
        </footer>
    
        <div class="clear"></div> 
	</div> 
</div> 

 
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>

<!-- jQuery Superfish -->
<script type="text/javascript" src="js/hoverIntent.js"></script> 
 
 
<script type="text/javascript" src="js/contact.js"></script>
 
<script type="text/javascript" src="js/tinynav.min.js"></script>
 
<script type="text/javascript" src="js/custom.js"></script>

</body>
</html>
