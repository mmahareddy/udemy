$("#enter").click(function(event){
event.preventDefault();
if ($("#city").val() !== "" ) {
  $.get("scrapper.php?city="+$("#city").val(),function(data){
if (data !=="") {
  $("#displayWeather").html(data);
}else{
  $("#displayWeather").html("please enter a valid city name");
}
      
  });
}else {
  $("#displayWeather").html("Please enter city");
}
});
