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
                                <h1>Zest Wi-Fi</h1> 
                                <!--<img id="logo" src="" alt="Logo"/>--> 
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
                                                    <span>Partner</span>
                                                </div>
                                                <i class="fa fa-angle-down lnr"></i>
                                                <i class="fa fa-angle-up lnr"></i>
                                                <div class="clearfix"></div>	
                                            </div>	
                                        </a>
                                        <ul class="dropdown-menu drp-mnu">
                                            <li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
                                            <li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li> 
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