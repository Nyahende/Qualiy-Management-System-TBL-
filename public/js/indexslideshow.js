var i = 0;
var images = [];
var time = 5000;

images[0] = "images/paints1.jpg";
images[1] = "images/paints2.jpg";
images[2] =  "images/paints3.jpg";
images[3] =  "images/paints4.jpg";
images[4] =  "images/paints5.jpg";
images[5] =  "images/paints6.jpg";
images[6] =  "images/paints7.jpg";
images[7] =  "images/paints8.jpg";
images[8] =  "images/paints9.jpg";
images[9] =  "images/paints10.jpg";
images[10] =  "images/paints11.jpg";
images[11] =  "images/paints12.jpg";
images[12] =  "images/paints13.jpg";
images[13] =  "images/paints14.jpg";
images[14] =  "images/paints15.jpg";
images[15] =  "images/paints15.jpg";
images[16] =  "images/paints17.jpg";
function changeImg() {
  document.indexslideshow.src = images[i];
  if (i < images.length - 1) {
    i++;
  } else {
    i = 0;
  }

  setTimeout("changeImg()", time);
}
window.onload = changeImg;