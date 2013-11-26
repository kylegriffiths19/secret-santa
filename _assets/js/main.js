$(document).ready(function() {

$("form").on("click", ".row .btn-remove", function(e){

	e.preventDefault();

	$(this).parent().remove();

});


$(".btn-plus").on("click", function(e){

	e.preventDefault();

	var count = $(".plus-input").val();

	for(var i = 0; i < count; i++) {

		$('<section class="row"><input type="text" name="name" placeholder="Name"><input type="text" name="email" placeholder="Email"><a href="#" class="btn btn-red btn-remove ss-icon">&#x002D;</a></section>').appendTo(".form form");

	}

});



$(".btn-submit").on('click', function(e){

	e.preventDefault();

	$('.form form').submit();

});

});

