</div><!-- end row -->
</div><!-- end wrapper -->
<footer class="hidden-xs">
    <p class="pull-left">See also <a href="http://pixelator.co.il">pixelator.co.il</a></p>
    <?php
        $raw = file_get_contents('http://localhost:8080/lastupdated');
        $json = json_decode($raw);
        $lastupdated = $json->{'last_updated'}[0];
    ?>

    <p class="pull-right">Last update: <?php echo date("d/m/Y H:i:s", $lastupdated);?></p>
</footer>

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/rebound.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script type="text/javascript">

    $(document).ready(function() {

        $('.dropdown-toggle').dropdown();

        var $container = $('.portfolio-wrapper');

        $container.imagesLoaded( function(){
            $container.isotope({
                itemSelector : '.card',
                layoutMode : 'fitRows'
            });
        });

        // Needed functions
        var getColWidth = function() {
            var width,
                    windowWidth = $(window).width();
            if( windowWidth <= 480 ) {
                width = Math.floor( $container.width() );
            } else if( windowWidth <= 768 ) {
                width = Math.floor( $container.width() );
            } else {
                width = Math.floor( 250 );
            }
            return width;
        }

        function setWidths() {
            var colWidth = getColWidth();
            $container.children().css({ width: colWidth });
        }


        $(window).smartresize(function() {
            setWidths();
            $container.isotope({
                masonry: {
                    columnWidth: getColWidth()
                }
            });
        });

        $('.filter-portfolio li a').click(function(){
            $('.filter-portfolio li.active').removeClass('active');
            $(this).parent('li').addClass('active');
            var selector = $(this).attr('data-filter');
            $container.isotope({
                filter: selector,
                masonry: {  }
            });
            return false;
        });
        // update columnWidth on window resize
        $(window).smartresize(function(){
            $container.isotope({
                // update columnWidth to a percentage of container width
                masonry: {  }
            });
        });

    });

</script>

</body>
</html>