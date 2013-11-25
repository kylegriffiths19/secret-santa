$(document).ready(function() {


$(".btn-plus").on("click", function(e){

	e.preventDefault();

	var count = $(".plus-input").val();

	for(var i = 0; i < count; i++) {

		$('<section class="row"><input type="text" name="name" placeholder="Name"><input type="text" name="email" placeholder="Email"></section>').appendTo(".form form");

	}

   });

});

