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
    //var name_counter = $(".row.input").length;

    //$("input[type='hidden'][name='count']").val(name_counter);

	for(var i = 0; i < count; i++) {
        //name_counter++;
		$('<section class="row input"><input type="text" name="name[]" placeholder="Name"><input type="text" name="email[]" placeholder="Email"><a href="#" class="btn btn-red btn-remove ss-icon">&#x002D;</a></section>').appendTo(".form form");
	}
});


//set budget

$("#budget").on("change", function(){
    var current_amount = $("#budget").val();
    $("#budget_amount").val(current_amount);
});


//client-side validation
var $submit = $(".btn-submit");
var $required = $(".required");

/*

$('.form form').submit(function(e){
    e.preventDefault(); 
    
    $('.form form').submit();
});*/


//submit form
$(".btn-submit").on('click', function(e){

    e.preventDefault();

    $(".row input[type='text']").each(function(){

        if($(this).val() === ""){
            $(".error-message").text("One or more fields are empty!").show();
        } 
        else{
            $('.form form').submit();
        }
    });
});



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
        if(containsBlanks() || !validEmail($(".row input[type='text']:odd").val())) {
			return false;
        } else {
            $(".btn-submit").unbind("click", false);
        }
    }

    //dont allow names to be exactly the same
    function checkDuplicates(){
        $('input[name^="text"]').change(function() {

        var $current = $(this);

        $('input[name^="text"]').each(function() {
            if ($(this).val() == $current.val() && $(this).attr('id') != $current.attr('id'))
            {
                alert('duplicate found!');
            }

        });
      });
    }




    $("form").on("keyup", ".row input[type='text']:odd", function(){
        //check email
        if(validEmail($(this).val())) {
            $(this).css({"border-bottom":"2.5px solid #57D99A"}).prev().css({"border-bottom":"2.5px solid #57D99A"});
        } else {
            $(this).css({"border-bottom":"2.5px solid #E48681"}).prev().css({"border-bottom":"2.5px solid #E48681"});
        }
    });




    //$(".row input[type='text']:odd").blur().css({"border-bottom":"2.5px solid #FFF"});

});

