
$("input[name='telephone']").keyup(function() {
    $(this).val($(this).val().replace(/^(\d{3})(\d{3})(\d)+$/, "($1)$2-$3"));
});

$("#formValidation").submit(function(event) {
  event.preventDefault();
  errorMsg="";

  if($("#email").val() === ''){
    errorMsg="please enter a valid email address";
    $("#error").html(errorMsg);
}

function telValid(tele){
  var regEx = /^\(?(\d{3})\)?[-\. ]?(\d{3})[-\. ]?(\d{4})$/;
  return regEx.test(tele);
}


  if(!telValid($("#tel").val())) {

    errorMsg=errorMsg+ "<br /> please enter a valid telephone number";
      $("#error").html(errorMsg);
  }

if(($("#pwd").val()!=$("#confirmPwd").val()) || ($("#pwd").val()==='' ||  $("#confirmPwd").val() === '')){
  console.log("in pwd");
  errorMsg = errorMsg+" <br />please enter a valid password";
  errorMsg =  $("#error").html(errorMsg);
}
});
