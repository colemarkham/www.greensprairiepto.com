<?php
/**
 * The template for displaying the footer.
 */
?>

<?php wp_footer(); ?>

	<footer class="footer">
      <div class="container">
        <p class="text-muted text-center">&copy; Greens Prairie Elementary PTO, 2015-2016</p>
		<p class="text-muted text-center">
			  <a href="http://www.csisd.org/">College Station ISD</a> |
			  <a href="http://gp.csisd.org/">Greens Prairie Elementary</a>
		</p>
      </div>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="<?php bloginfo('template_directory') ?>/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        var url = window.location;
        $('ul.nav a[href="'+ url +'"]').parent().addClass('active');
        $('ul.nav a').filter(function() {
             return this.href == url;
        }).parent().addClass('active');
    });


</script>

</body>
</html>