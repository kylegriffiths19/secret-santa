$(document).ready(function(){function n(){var e=t.map(function(){return $(this).val()==""});return $.inArray(true,e)!=-1}function r(e){return e.indexOf("@")!=-1}function i(){if(n()||!r($(".row input[type='text']:odd").val())&&$(".btn-submit").hasClass("disabled"))return!1;$(".btn-submit").unbind("click",!1)}function s(){$('input[name^="text"]').change(function(){var e=$(this);$('input[name^="text"]').each(function(){$(this).val()==e.val()&&$(this).attr("id")!=e.attr("id")&&alert("duplicate found!")})})}$("form").on("click",".row .btn-remove",function(e){e.preventDefault();$(this).parent().remove()});$(".btn-plus").on("click",function(e){e.preventDefault();var t=$(".plus-input").val();for(var n=0;n<t;n++)$('<section class="row input"><input type="text" name="name[]" placeholder="Name"><a href="#" class="btn btn-red btn-remove ss-icon">&#x002D;</a><input type="text" name="email[]" placeholder="Email"></section>').appendTo(".form form")});$("#budget_amount").on("change",function(){alert("test");var e=$("#budget").val();$(this).val(e)});$(".btn-submit").on("click",function(e){e.preventDefault();$(".form form").submit()});var e=$(".btn-submit"),t=$(".required");$("form").on("keyup","input[type='text']",function(){i()});$("form").on("keyup",".row input[type='text']:odd",function(){r($(this).val())?$(this).css({"border-bottom":"2.5px solid #57D99A"}).prev().prev().css({"border-bottom":"2.5px solid #57D99A"}):$(this).css({"border-bottom":"2.5px solid #E48681"}).prev().prev().css({"border-bottom":"2.5px solid #E48681"})})});