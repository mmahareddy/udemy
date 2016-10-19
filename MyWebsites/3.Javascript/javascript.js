var createdTime; var clickedTime; var reactionTime;
//used to get the current position of the circle
var curXposition=document.getElementById('box').getBoundingClientRect().height;
var curYposition=document.getElementById('box').getBoundingClientRect().width;
//the below function randomly generates the x and y co-ordinates.
// generates a random number used for time out in setTimeout
// used Date.now to get the time when the box is created
var boxappear = function(){
  var newXposition= curXposition + Math.floor( Math.random() * 1000 );
  var newYposition= curYposition + Math.floor( Math.random() * 500 );

  var x=Math.random();
  x=5000*x;
  setTimeout(function (){
    createdTime = Date.now();
    document.getElementById('box').style.marginLeft=newXposition+"px";
    document.getElementById('box').style.marginTop =newYposition+"px";
  document.getElementById('box').style.display="block";

  },x);

};
// this function clears the box
// as there is a set timer in the boxappear function it is called again to re-appear
document.getElementById('box').onclick = function boxdisappaer() {

  clickedTime=Date.now();
reactionTime= (clickedTime-createdTime)/1000;
document.getElementById('time').innerHTML=reactionTime;
  document.getElementById('box').style.display= "none";

  boxappear();
};
// this is used for the initial load only.
boxappear();
