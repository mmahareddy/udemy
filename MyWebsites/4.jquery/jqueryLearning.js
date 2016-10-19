$("#formValidation").submit(function(event) {
  event.preventDefault();
  errorMsg="";

  if(!$.isNumeric($("#tel").val())) {
        $("#error").html("please enter a valid telephone number");
  }
if($("#pwd").val()!=$("#confirmPwd").val()){
  errorMsg = $("#error").html("please enter a valid password");
}
});
