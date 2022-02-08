$(function() {

    $('#login-form-link').click(function(e) {
		$("#login-form").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
		$('#register-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#register-form-link').click(function(e) {
		$("#register-form").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		$('#login-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
    $( "#register-submit" ).click(function(e) {
        e.preventDefault();
        console.log($('#register-form').serializeArray());
        $.ajax({
            type: "POST",
            url: '/register',
            data: $('#register-form').serializeArray(), // serializes the form's elements.
            success: function(data)
            {
              console.log(data); // show response from the php script.
            }
        });
        alert( "Handler for .click() called." );
      });
   
});
