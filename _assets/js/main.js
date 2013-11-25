$(document).ready(function() {


$(".btn-plus").on("click", function(e){

	e.preventDefault();

	var count = $(".plus-input").val();

	for(var i = 0; i < count; i++) {

		$('<section class="row"><input type="text" name="name" value="Your Name*" onblur="if(this.value == \'\') { this.value=\'Your Name*\'}" onfocus="if (this.value == \'Your Name*\') {this.value=\'\'}"><input type="text" name="email" value="Your Email*"  onblur="if(this.value == \'\') { this.value=\'Your Email*\'}" onfocus="if (this.value == \'Your Email*\') {this.value=\'\'}"></section>').appendTo(".form");

	}

   });

});

