var wH=window.innerHeight;
var bH=$("#title").height();
var cH = wH-bH;
// var cW = (window.innerWidth-"80")/2;
$(".HTMLcontainer").height(cH+"px");
// $(".HTMLcontainer").width(cW+"px");
$(".Resultcontainer").height(cH+"px");

$(".toggleele").click(function(){
  $(this).toggleClass("selected");
var objSel= $(this).html();
var contObj = "."+objSel+"container";
$(contObj).toggle();

var number = $('.appear').filter(function() {
 return $(this).css('display') !== 'none';
}).length;

var newWidth=98/number;
$(".appear").css("width",newWidth+"%");
$(".appear").css("height", cH+"px");


});

$("#run").click(function() {


 	 	 $('#resultFrame').contents().find('html').html("<style>"+$
('#css').val()+"</style>"+$("#html").val());

 document.getElementById('resultFrame').contentWindow.eval( $
('#js').val() );
 });
