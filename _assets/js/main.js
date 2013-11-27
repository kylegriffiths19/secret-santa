$(document).ready(function() {



//remove rows
$("form").on("click", ".row .btn-remove", function(e){

	e.preventDefault();

	$(this).parent().remove();

});


//add rows
$(".btn-plus").on("click", function(e){

	e.preventDefault();

	var count = $(".plus-input").val();
   
	for(var i = 0; i < count; i++) {
        
		$('<section class="row"><input type="text" name="name[]" placeholder="Name"><input type="text" name="email[]" placeholder="Email"><a href="#" class="btn btn-red btn-remove ss-icon">&#x002D;</a></section>').appendTo(".form form");

	}
});


//submit form
$(".btn-submit").on('click', function(e){

	e.preventDefault();

	$('.form form').submit();

});

//client-side validation
var $submit = $(".btn-submit");
var $required = $(".required");

        function containsBlanks(){
            var blanks = $required.map(function(){
                 return $(this).val() == "";
            });
            return $.inArray(true, blanks) != -1;
        }


        function validEmail(email) {
            return email.indexOf("@") != -1;
        }

        function requiredFilledIn(){
            if(containsBlanks() || !validEmail($(".row input[type='text']:odd").val()) && $(".btn-submit").hasClass("disabled")) 
				return false;
            else $(".btn-submit").unbind("click", false);
        };


        $("form").on("keyup", "input[type='text']", function(){
            //check required fields
            requiredFilledIn();
        });

        $("form").on("keyup", ".row input[type='text']:odd", function(){
            //check email
            if(validEmail($(this).val()))
                $(this).css({"border-bottom":"2.5px solid #57D99A"}).prev().css({"border-bottom":"2.5px solid #57D99A"});
            else
                $(this).css({"border-bottom":"2.5px solid #E48681"}).prev().css({"border-bottom":"2.5px solid #E48681"});
        });



 


        //$(".row input[type='text']:odd").blur().css({"border-bottom":"2.5px solid #FFF"});
        

});

