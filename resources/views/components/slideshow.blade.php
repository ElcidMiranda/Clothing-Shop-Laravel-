<link rel="stylesheet" type="text/css" href="{{ asset('css/design.css') }}" />
<div class="SlidesContainer">
    <div class="Slides fade">
      <img src="{{ asset('storage/Images/Model1.jpg') }}" style="width: 50%;"alt="">
    </div>

    <div class="Slides fade">
      <img src="{{ asset('storage/Images/Model2.jpg') }}" style="width: 50%;"alt="">
    </div>

    
    
    <script type="text/javascript">
      var slideIndex = 0;
  showSlides();
  
  function showSlides() {
    var i;
    var slides = document.getElementsByClassName("Slides");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    slides[slideIndex-1].style.display = "block";
    setTimeout(showSlides, 2000);
  }
  </script>
  