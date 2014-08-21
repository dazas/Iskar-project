<?php
            function my_footer() {
                ?>
            </div>
            <footer>
            </footer>
            <script type="text/javascript" src="../js/jquery.min.js"></script>
            <script type="text/javascript" src="../js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
            <script src="../js/galleria-1.3.5.js"></script>
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
            <script src="../js/jquery.mCustomScrollbar.js"></script>
            <script type="text/javascript">
                $(document).ready(function() {
                    var winHeight = $(window).height();
                    var winWidth = $(window).width();
                    $('#header-container').css("height", winHeight);
                    $('footer').css("height", winHeight);
                    var mainContentWidth = winWidth - $('#header-container').width() - $('footer').width();
                    $('#main-content').css("width", mainContentWidth);
                    $('.page-content').css("width", mainContentWidth);
                    $('.page-content').css("height", (winHeight - $('header').height() - 140));
                    $('.proj-t').css("height", $('.page-content').height() - $('header').height()-50);
                    $('.project-gal').css("width", $('.page-content').width() - $('.proj-t').width() - 77);
                    $('.nature-gal').css("width", mainContentWidth);
                    $('.galleria').css("height", $('.page-content').height());

                    // var galWidth = $(window).width();   // returns width of browser viewport
                    // var galHeight = ($(window).height()) - headerHeight - 60;
                    // $('#main-content').css("width", $(window).width());
                    
                    $('.next').click(function() {
                        $(this).parent().parent().fadeOut('slow');
                        $(this).parent().parent().next().toggleClass('hidden');
                        $(this).parent().parent().next().fadeIn('slow');
                    });
                    
                    $('.prev').click(function() {
                        $(this).parent().parent().fadeOut('slow');
                        $(this).parent().parent().prev().toggleClass('hidden');
                        $(this).parent().parent().prev().fadeIn('slow');
                    });
                    
                    $('.work-pin').mouseenter(function() {
                        $(this).next('div').css('opacity', 1);
                    });
                    $('.work-pin').mouseleave(function() {
                        $(this).next('div').css('opacity', 0);
                    });
                    
                    $('#main-nav-list').children('li').mouseenter(function(){
                        $(this).find('a').removeClass('active-a');
                        $(this).children('a').addClass('active-a');
                        console.log($(this).children());
                    });
                    
                    (function($) {
                        $(window).load(function() {
                            $(".proj-t").mCustomScrollbar({
                                theme: "light"
                            });
                            $(".galeria-info").mCustomScrollbar({
                                theme: "light"
                            });
                            
                            $(".img-holder").mCustomScrollbar({
                            });
                            
                            $(".history-t").mCustomScrollbar({
                                theme: "light"
                            });
                            
                            $(".people-t").mCustomScrollbar({
                                theme: "light"
                            });
                            
                            $(".reed-t").mCustomScrollbar({
                                theme: "light"
                            });
                            
                            $(".work-t").mCustomScrollbar({
                                theme: "light"
                            });
                            
                            $(".stage-t").mCustomScrollbar({
                                theme: "light"
                            });
                            
                           
                        });
                    })(jQuery);
                });
            </script> 
        </body>
    </html>
    <?php
}