<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Shoppy an Admin Panel Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
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

       
    
<!--slider menu-->
<div class="sidebar-menu">
        <div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span> 
            <!--<img id="logo" src="" alt="Logo"/>--> 
        </a> </div>		  
      <div class="menu">
        <ul id="menu" >
          <li id="menu-home" ><a href="index.html"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
          <li><a href="#"><i class="fa fa-cogs"></i><span>Partner Settings</span></span></a>
          </li>
          <li><a href="#"><i class="fa fa-book nav_icon"></i><span>Customers</span></a></li>
          <li><a href="charts.html"><i class="fa fa-bar-chart"></i><span>Analytics</span></a></li>
          <li><a href="#"><i class="fa fa-envelope"></i><span>Mailbox</span></a>
          </li>
           <li><a href="#"><i class="fa fa-shopping-cart"></i><span>Commercial</span><span class="fa fa-angle-right" style="float: right"></span></a>
               <ul id="menu-academico-sub" >
                    <li id="menu-academico-boletim" ><a href="#">Overview</a></li>
                  <li id="menu-academico-avaliacoes" ><a href="#">New Quote</a></li>
                  <li id="menu-academico-boletim" ><a href="#">Manage Quotes</a></li>
               </ul>
           </li>
        </ul>
      </div>  <!-- end of menu--> 
</div>  <!-- end of sidebar-menu --> 
<div class="clearfix"> </div>
</div> 
<!--slide bar menu end here-->
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
<!-- mother grid end here-->
</body>
</html>                     