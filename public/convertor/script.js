var newImage, showImg;

// Set the default image URL
const defaultImageUrl = "convertor/image/gallery.png"; // Replace with the actual path to your default image

function loadFile(event) {
  showImg = document.getElementById('showImg');
  showImg.src = URL.createObjectURL(event.target.files[0]);

  newImage = document.createElement('img');
  newImage.src = URL.createObjectURL(event.target.files[0]);

  showImg.onload = function() {
    URL.revokeObjectURL(showImg.src) // free memory
  }
};

function pdfDown() {
  // If newImage is undefined (no file selected), use default image
  if (!newImage) {
    newImage = new Image();
    newImage.src = defaultImageUrl;
  }
  
  console.log(newImage);
  var doc = new jsPDF();
  doc.addImage(newImage, 10, 10);
  doc.save('ImgToPDF.pdf');
}
