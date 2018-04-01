              </div>   <!-- End of mother-grid-inner  --> 
            </div> <!-- End of left-content --> 
        </div>   <!-- End of page-container--> 


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