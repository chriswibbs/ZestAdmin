<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
    </head>
    <body>	
        <div class="page-container">	
            <div class="left-content">
                <div class="mother-grid-inner">
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
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>  
        </div>

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