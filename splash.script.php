<script src="js/jquery-1.12.1.min.js" type="text/javascript"></script>
<script src="js/jquery.parallax.min.js" type="text/javascript"></script>

<script>
	(function($) {
		$(document).ready(function() {
		
			$('#scene').parallax();
			
			$('body').bind('touchstart', function() {});
			
			// This prevents links from opening in new tab on webapp
			$(document).on('click', 'a', function(e) {
				if (!$(this).attr("target") =="_blank" ){
					e.preventDefault();
					document.location.href = $(this).attr('href');
				}
			});
		});
	}) (jQuery);
</script>