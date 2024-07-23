<div id="slider">
    <img class="mySlides" src="admin/imgs/slider/img1.jpg" />
    <img class="mySlides" src="admin/imgs/slider/img2.jpg" />
    <img class="mySlides" src="admin/imgs/slider/img3.jpeg" />
    <img class="mySlides" src="admin/imgs/slider/img4.png" />
    <img class="mySlides" src="admin/imgs/slider/img5.jpg" />
    <img class="mySlides" src="admin/imgs/slider/img6.jpg" />
    <img class="mySlides" src="admin/imgs/slider/img7.jpg" />
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

</body>
<!-- 
<div id='slider'>
    <img class="mySlides" src="admin/imgs/slider/img1.jpg" />
    <img class="mySlides" src="admin/imgs/slider/img2.jpg" />
    <img class="mySlides" src="admin/imgs/slider/img5.jpg" />
    <img class="mySlides" src="admin/imgs/slider/img4.png" />
</div> -->