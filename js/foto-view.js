$(function() {
	var contentUpdateTime = 100000;
	/**
	 * If page not refreshed,
	 * Set automatic call from backend in time interval and update the content
	 */
	setInterval(function() {
		/**
		 * If user selection provided then can send userID too..
		 */
      $.ajax({
		  method: "POST",
		  url: "handlers.php",
		  data: { action: "getData" }
		})
		  .done(function( html ) {
		    $('#container').html(html);
		  });
	}, contentUpdateTime);
	
});
