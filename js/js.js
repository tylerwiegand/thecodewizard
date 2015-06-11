// document ready event
$(document).ready(
	// inner function for the ready() event
	function() {
		// tell the validator to validate this form
		$("#contact").validate({
			// setup the formatting for the errors
			errorClass: "alert alert-danger",
			errorLabelContainer: "#contacterroroutput",
			wrapper: "p",
			// rules define what is good/bad input
			rules: {
				// each rule starts with the inputs name (NOT id)
				name: {
					maxlength: 128,
					required: false
				},
				reply: {
					maxlength: 128,
					required: false
				},
				message: {
					maxlength: 500,
					required: true
				}
			},
			// error messages to display to the end user
			messages: {
				name: {
					maxlength: "Your name is too long!"
				},
				reply: {
					maxlength: "Your email is too long!"
				},
				message: {
					maxlength: "There is a five-hundred character limit =\\, sorry boss...",
					required: "Please enter something. I don't want to bog down my email server =("
				}
			},
			//setup an AJAX call to submit the form without reloading
			submitHandler: function(form) {
				$(form).ajaxSubmit({
					// GET or POST
					type: "POST",
					// where to submit data
					url: "php/mailme.php",
					// TL; DR: reformat POST data
					data: $(form).serialize(),
					// success is an event that happens when the server replies
					success: function(ajaxOutput) {
						// clear the output area's formatting
						$("#contactoutput").css("display", "");
						// write the server's reply to the output area
						$("#contactoutput").html(ajaxOutput);
						// reset the form if it was successful
						// this makes it easier to reuse the form again
						if($(".alert-success").length >= 1) {
							$(form)[0].reset();
						}
					}
				});
			}
		});
	})