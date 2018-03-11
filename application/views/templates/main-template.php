<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
    <head>
    <title>Zest Wi-Fi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <link href="<?php echo base_url();?>public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <!-- Custom Theme files -->
    <link href="<?php echo base_url();?>public/css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <!--js-->
    <script src="<?php echo base_url();?>public/js/jquery-2.1.1.min.js"></script> 
    <!--icons-css-->
    <link href="<?php echo base_url();?>public/css/font-awesome.css" rel="stylesheet"> 
    <!--Google Fonts-->
    <link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
    <!--static chart-->
    <script src="<?php echo base_url();?>public/js/Chart.min.js"></script>
    <!--//charts-->
    <!-- geo chart -->
        <script src="//cdn.jsdelivr.net/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
        <script>window.modernizr || document.write('<script src="lib/modernizr/modernizr-custom.js"><\/script>')</script>
        <!--<script src="lib/html5shiv/html5shiv.js"></script>-->
        <!-- Chartinator  -->
        <script src="<?php echo base_url();?>public/js/chartinator.js" ></script>
        <script type="text/javascript">
            jQuery(function ($) {

                var chart3 = $('#geoChart').chartinator({
                    tableSel: '.geoChart',

                    columns: [{role: 'tooltip', type: 'string'}],
            
                    colIndexes: [2],
                
                    rows: [
                        ['China - 2015'],
                        ['Colombia - 2015'],
                        ['France - 2015'],
                        ['Italy - 2015'],
                        ['Japan - 2015'],
                        ['Kazakhstan - 2015'],
                        ['Mexico - 2015'],
                        ['Poland - 2015'],
                        ['Russia - 2015'],
                        ['Spain - 2015'],
                        ['Tanzania - 2015'],
                        ['Turkey - 2015']],
                
                    ignoreCol: [2],
                
                    chartType: 'GeoChart',
                
                    chartAspectRatio: 1.5,
                
                    chartZoom: 1.75,
                
                    chartOffset: [-12,0],
                
                    chartOptions: {
                    
                        width: null,
                    
                        backgroundColor: '#fff',
                    
                        datalessRegionColor: '#F5F5F5',
                
                        region: 'world',
                    
                        resolution: 'countries',
                    
                        legend: 'none',

                        colorAxis: {
                        
                            colors: ['#679CCA', '#337AB7']
                        },
                        tooltip: {
                        
                            trigger: 'focus',

                            isHtml: true
                        }
                    }

                
                });                       
            });
        </script>
    <!--geo chart-->

    <!--skycons-icons-->
    <script src="<?php echo base_url();?>public/js/skycons.js"></script>
    <!--//skycons-icons-->
    </head>
    <body>	
        <div class="page-container">	
            <div class="left-content">
                <div class="mother-grid-inner">
                    <div class="header-main">
                        <div class="header-left">
                            <div class="logo-name">
                                <!--<h1>Zest Wi-Fi</h1> -->
                                <img id="logo" src="<?php echo base_url();?>public/images/zest-logo-1.png" alt="Logo"/>
                            </div>   <!-- End of logo-name --> 
                            <div class="clearfix"> </div>
                        </div>   <!-- End of header-left --> 
                        <div class="header-right">
                            <div class="profile_details_left">
                                <ul class="nofitications-dropdown">                                
                                    <li class="dropdown head-dpdn">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge">3</span></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="notification_header">
                                                    <h3>Partner Notifications</h3>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="#">
                                                <div class="user_img">
                                                    <img src="<?php echo base_url();?>public/images/alert-icon.png" alt="">
                                                </div>
                                                <div class="notification_desc">
                                                    <p>Planned outage notification</p>
                                                    <p><span>18 March 2018</span></p>
                                                </div>
                                                <div class="clearfix"></div>	
                                                </a>
                                            </li>
                                            <li class="odd">
                                                <a href="#">
                                                <div class="user_img">
                                                    <img src="<?php echo base_url();?>public/images/info-icon.png" alt="">
                                                </div>
                                                <div class="notification_desc">
                                                    <p>Feature update</p>
                                                    <p><span>14 March 2018</span></p>
                                                </div>
                                                <div class="clearfix"></div>	
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                <div class="user_img">
                                                    <img src="<?php echo base_url();?>public/images/info-icon.png" alt="">
                                                </div>
                                                <div class="notification_desc">
                                                    <p>Pricing update</p>
                                                    <p><span>11 February 2018</span></p>
                                                </div>
                                                <div class="clearfix"></div>	
                                                </a>
                                            </li>
                                            <li>
                                                <div class="notification_bottom">
                                                    <a href="#">See all messages</a>
                                                </div> 
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown head-dpdn">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge red">3</span></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="notification_header">
                                                    <h3>Access Point Alerts</h3>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="#">
                                                <div class="user_img">
                                                    <img src="<?php echo base_url();?>public/images/uap-disconnected.png" alt="">
                                                </div>
                                                <div class="notification_desc">
                                                    <p>QUE001-Floor 1-Far Right-Reception-AP1</p>
                                                    <p><span>Quest Cloud Solutions</span></p>
                                                </div>
                                                <div class="clearfix"></div>	
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                <div class="user_img">
                                                    <img src="<?php echo base_url();?>public/images/uap-disconnected.png" alt="">
                                                </div>
                                                <div class="notification_desc">
                                                    <p>QUE001-Floor 1-Far Right-Reception-AP1</p>
                                                    <p><span>Quest Cloud Solutions</span></p>
                                                </div>
                                                <div class="clearfix"></div>	
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                <div class="user_img">
                                                    <img src="<?php echo base_url();?>public/images/uap-disconnected.png" alt="">
                                                </div>
                                                <div class="notification_desc">
                                                    <p>QUE001-Floor 1-Far Right-Reception-AP1</p>
                                                    <p><span>Quest Cloud Solutions</span></p>
                                                </div>
                                                <div class="clearfix"></div>	
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                <div class="user_img">
                                                    <img src="<?php echo base_url();?>public/images/uap-disconnected.png" alt="">
                                                </div>
                                                <div class="notification_desc">
                                                    <p>QUE001-Floor 1-Far Right-Reception-AP1</p>
                                                    <p><span>Quest Cloud Solutions</span></p>
                                                </div>
                                                <div class="clearfix"></div>	
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                <div class="user_img">
                                                    <img src="<?php echo base_url();?>public/images/uap-disconnected.png" alt="">
                                                </div>
                                                <div class="notification_desc">
                                                    <p>QUE001-Floor 1-Far Right-Reception-AP1</p>
                                                    <p><span>Quest Cloud Solutions</span></p>
                                                </div>
                                                <div class="clearfix"></div>	
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                <div class="user_img"> 
                                                    <img src="<?php echo base_url();?>public/images/uap-disconnected.png" alt="">
                                                </div>
                                                <div class="notification_desc">
                                                    <p>QUE001-Floor 1-Far Right-Reception-AP1</p>
                                                    <p><span>Quest Cloud Solutions</span></p>
                                                </div>
                                                <div class="clearfix"></div>	
                                                </a>
                                            </li>
                                            <li>
                                                <div class="notification_bottom">
                                                    <a href="#">Create support request</a>
                                                </div> 
                                            </li>
                                        </ul>
                                    </li>	
                                    <li class="dropdown head-dpdn">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue">9</span></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="notification_header">
                                                    <h3>Service Updates</h3>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="#">
                                                <div class="task-info">
                                                    <span class="task-desc">New customers pending setup</span><span class="percentage">1</span>
                                                    <div class="clearfix"></div>	
                                                </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                <div class="task-info">
                                                    <span class="task-desc">Open quotes</span><span class="percentage">28</span>
                                                    <div class="clearfix"></div>	
                                                </div>
                                                </a>
                                            </li>
                                            <li><a href="#">
                                                <div class="task-info">
                                                    <span class="task-desc">Contracts expiring within 60 days</span><span class="percentage">3</span>
                                                    <div class="clearfix"></div>	
                                                </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>	
                                </ul>
                                <div class="clearfix"> </div>
                            </div> <!--End of profile-details-left  -->
                            <div class="profile_details">		
                                <ul>
                                    <li class="dropdown profile_details_drop">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            <div class="profile_img">	
                                                <span class="prfil-img"><img src="<?php echo base_url();?>public/images/silver-partner.png" alt=""> </span> 
                                                <div class="user-name">
                                                    <p>Green City Solutions</p>
                                                    <span>Solutions Partner</span>
                                                </div>
                                                <i class="fa fa-angle-down lnr"></i>
                                                <i class="fa fa-angle-up lnr"></i>
                                                <div class="clearfix"></div>	
                                            </div>	
                                        </a>
                                        <ul class="dropdown-menu drp-mnu">
                                            <li> <a href="#"><i class="fa fa-sign-out"></i> Logout</a> </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>   <!-- End of profile_details --> 
                            <div class="clearfix"> </div>				
                        </div>   <!-- End of header_right --> 
                        <div class="clearfix"> </div>	
                    </div>  <!-- End of header_main --> 
                    <div class="inner-block">
                        <div class="market-updates">
                            <div class="col-md-4 market-update-gd">
                                <div class="market-update-block clr-block-1">
                                    <div class="col-md-8 market-update-left">
                                        <h3>12</h3>
                                        <h4>Customer Accounts</h4>
                                        <p>1 customer pending setup</p>
                                    </div>
                                    <div class="col-md-4 market-update-right">
                                        <i class="fa fa-file-text-o"> </i>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                            <div class="col-md-4 market-update-gd">
                                <div class="market-update-block clr-block-2">
                                    <div class="col-md-8 market-update-left">
                                        <h3>1/82</h3>
                                        <h4>Access Points Offline</h4>
                                        <p>Show all problems</p>
                                    </div>
                                    <div class="col-md-4 market-update-right">
                                        <i class="fa fa-eye"> </i>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                            <div class="col-md-4 market-update-gd">
                                <div class="market-update-block clr-block-3">
                                    <div class="col-md-8 market-update-left">
                                        <h3>627</h3>
                                        <h4>Users Online</h4>
                                        <p>1029 unique users today</p>
                                    </div>
                                <div class="col-md-4 market-update-right">
                                    <i class="fa fa-envelope-o"> </i>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>   <!-- End of market-updates --> 
                        <div class="clearfix"> </div>
                        <div class="chit-chat-layer1">
							<div class="col-md-6 chit-chat-layer1-left">
               					<div class="work-progres">
                            		<div class="chit-chat-heading">
                                  		Commercials Updates
                            		</div>
                            		<div class="table-responsive">
                                		<table class="table table-hover">
											<thead>
												<tr>
													<th>#</th>
													<th>Customer</th>
													<th>Type</th>                                   
																						
													<th>Status</th>
													<th>Value</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td>Quest Cloud Solutions</td>
													<td>New Business</td>                                 
																				
													<td><span class="label label-danger">Lost</span></td>
													<td><span class="badge badge-info">£2520</span></td>
												</tr>
												<tr>
													<td>2</td>
													<td>Beanstalk Telecom</td>
													<td>New Business</td>                               
																					
													<td><span class="label label-success">Ordered</span></td>
													<td><span class="badge badge-success">£5580</span></td>
												</tr>
												<tr>
													<td>3</td>
													<td>Northcote</td>
													<td>Addition</td>                                
													
													<td><span class="label label-info">Quoted</span></td>
													<td><span class="badge badge-info">£1025</span></td>
												</tr>
												<tr>
													<td>4</td>
													<td>Coppenhall Methodist Church</td>
													<td>Addition</td>                                 
																				
													<td><span class="label label-info">Quoted</span></td>
													<td><span class="badge badge-info">£150</span></td>
												</tr>
												<tr>
													<td>5</td>
													<td>Chess Builders</td>
													<td>New Business</td>                                
																					
													<td><span class="label label-success">Ordered</span></td>
													<td><span class="badge badge-success">£2050</span></td>
												</tr>
												<tr>
													<td>6</td>
													<td>Green City Solutions</td>
													<td>Addition</td>                                  
																				
													<td><span class="label label-info">Quoted</span></td>
													<td><span class="badge badge-info">£6025</span></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>							 
							</div>
      						<div class="col-md-6 chit-chat-layer1-rit">  
               					<div class="work-progres">
                            		<div class="chit-chat-heading">
                                  		Order Updates
                            		</div>
                            		<div class="table-responsive">
                                		<table class="table table-hover">
											<thead>
												<tr>
													<th>#</th>
													<th>Customer</th>
													<th>Type</th>  					
													<th>Contract Ref</th>
													<th>Status</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td>Beanstalk Telecom</td>
													<td>New Business</td>    		
													<td>GRE001-20480</td>
													<td><span class="label label-warning">Network Build</span></td>
												</tr>
												<tr>
													<td>2</td>
													<td>Chess Builders</td>
													<td>New Business</td>    		
													<td>GRE001-20492</td>
													<td><span class="label label-info">Hardware Shipped</span></td>
												</tr>
												<tr>
													<td>3</td>
													<td>Miller Homes</td>
													<td>Addition</td>    		
													<td>GRE001-20355</td>
													<td><span class="label label-success">Completed</span></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>							 
							</div>
     						<div class="clearfix"> </div>
						</div>   <!-- End of chit-chat-layer1 --> 



                        <div class="climate">    
                            <div class="col-md-4 climate-grids">
                                <div class="climate-grid2">
                                </div>
                                <div class="shoppy">
                                    <h3>Can Wi-Fi Help Retail Sales?</h3>
                                </div>
                            </div>

                            <div class="col-md-4 climate-grids">
                                <div class="climate-grid3">
                                    <div class="popular-follow">
                                        <div class="col-md-6 popular-follo-right">
                                            <h4>40%</h4>
                                            <h5>Gold partner discount</h5>
                                        </div>
                                        <div class="col-md-6 popular-follo-left">
                                            <p>Learn more about our different partner levels...</p>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="popular-follow">
                                        <div class="col-md-6 popular-follo-left-alt">
                                            <p>Our captive portals have been working overtime...</p>
                                        </div>
                                        <div class="col-md-6 popular-follo-right">
                                            <h4>Unique User Records</h4>
                                            <h5>32809</h5>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 climate-grids">
                                <div class="climate-grid4">                                
                                </div>
                                <div class="shoppy">
                                    <h3>Social Media Integration for the Service Industry</h3>
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>   <!-- End of climate --> 


                    </div>   <!-- End of inner-block--> 
                </div>   <!-- End of mother-grid-inner  --> 
            </div> <!-- End of left-content --> 
        </div>   <!-- End of page-container--> 
        <div class="sidebar-menu">
            <div class="logo"> 
                <a href="#"> 
                    <span id="logo" ></span> 
                    <!--<img id="logo" src="" alt="Logo"/>--> 
                </a> 
            </div>   <!-- End of logo - Correct --> 		  
            <div class="menu">
                <ul id="menu" >
                    <li id="menu-home" >
                        <a href="index.html">
                            <i class="fa fa-tachometer"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-cogs"></i>
                            <span>Partner Settings</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Commercial</span>
                            <span class="fa fa-angle-right" style="float: right"></span>
                        </a>
                        <ul id="menu-academico-sub" >
                            <li id="menu-academico-boletim" >
                                <a href="#">
                                    Overview
                                </a>
                            </li>
                            <li id="menu-academico-avaliacoes" >
                                <a href="#">
                                    New Quote
                                </a>
                            </li>
                            <li id="menu-academico-boletim" >
                                <a href="#">
                                    Manage Quotes
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-book nav_icon"></i>
                            <span>Customers</span>
                        </a>
                    </li>
                    <li>
                        <a href="charts.html">
                            <i class="fa fa-bar-chart"></i>
                            <span>Analytics</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-envelope"></i>
                            <span>Mailbox</span>
                        </a>
                    </li>
                </ul>
            </div>  <!-- end of menu - correct--> 
        </div>  <!-- end of sidebar-menu - Correct --> 
        <div class="clearfix"> </div>
    </div>

    <!-- script-for sticky-nav -->
            <script>
            $(document).ready(function() {
                var navoffeset=$(".header-main").offset().top;
                $(window).scroll(function(){
                    var scrollpos=$(window).scrollTop(); 
                    if(scrollpos >=navoffeset){
                        $(".header-main").addClass("fixed");
                    }else{
                        $(".header-main").removeClass("fixed");
                    }
                });
                
            });
            </script>
            <!-- /script-for sticky-nav -->
            <script>
                var toggle = true;
                            
                $(".sidebar-icon").click(function() {                
                if (toggle)
                {
                    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
                    $("#menu span").css({"position":"absolute"});
                }
                else
                {
                    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
                    setTimeout(function() {
                    $("#menu span").css({"position":"relative"});
                    }, 400);
                }               
                                toggle = !toggle;
                            });
            </script>
                <!--scrolling js-->
                        <script src="<?php echo base_url();?>public/js/jquery.nicescroll.js"></script>
                        <script src="<?php echo base_url();?>public/js/scripts.js"></script>
                        <!--//scrolling js-->
                <script src="<?php echo base_url();?>public/js/bootstrap.js"> </script>

    </body>
</html>