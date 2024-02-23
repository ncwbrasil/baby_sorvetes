<head>
  <link rel="stylesheet" href="core/css/responsiveslides.css">
  <script src="core/mod_includes/js/responsiveslides.min.js"></script>
  <script>
    // You can also use "$(window).load(function() {"
    $(function () {

      // Slideshow 1
      $("#slider").responsiveSlides({
        speed: 800,
        pager: '' ,
        timeout: 3000,
        pause: 0
      });
    });
  </script>
</head>

<ul class="rslides bgParallax" id="slider">
    <li><img src='core/imagens/banner/banner1.png' ></li>
    <li><img src='core/imagens/banner/banner2.png'></li>
    <li><img src='core/imagens/banner/banner3.png'></li>
    <li><img src='core/imagens/banner/banner4.png'></li>
    <li><img src='core/imagens/banner/banner5.png'></li>
</ul>
