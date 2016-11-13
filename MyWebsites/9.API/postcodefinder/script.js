var autocomplete;
function initialize() {
    autocomplete = new google.maps.places.Autocomplete(
        document.getElementById('address'),
        { types: ['geocode'] }
    );
}
google.maps.event.addDomListener(window, 'load', initialize);


$("#enter").click(function(event){
  event.preventDefault();
var result = 0;
$.ajax({
      type:"GET",
      url: "https://maps.googleapis.com/maps/api/geocode/xml?address="+encodeURIComponent($('#address').val())+"&key=AIzaSyDj7Xf5uRAaZnGRKanlIXFk06ZfnD_EP_8",
      dataType: "xml",
      success: processXML,
      error: error
      });

      function error(){
        $("#displayWeather").html('GOOGLE API NOT IN USE');
      }


      function processXML(xml){
        $(xml).find("address_component").each(function(){
          if ($(this).find("type").text() == "postal_code") {
            zip_code = $(this).find("long_name").text();
            $("#displayWeather").html('The zip for the above address is :'+zip_code);
            result =1;
          }
        });
        if(result === 0){
          $("#displayWeather").html('INVALID/INCOMPLETE ADDRESS ENTRY');
        }

      }
});
