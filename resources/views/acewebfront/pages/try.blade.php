<html>
    <head>

        <link href="{{ static_asset('aceweb') }}/assets/ace/ace.css" rel="stylesheet" />
    </head>
<body>
<h1 style="text-align: center;">Masonry Grid Animation & Fancybox</h1>
<div class="col-md-6">
  <div class="wrapper">
    <div class="grid">
      <div class="grid-item">
        <a class="fancybox" href="http://poiemaweb.com/assets/images/dribbble-1.png"></a>
      </div>
      <div class="grid-item">
        <a class="fancybox" href="http://poiemaweb.com/assets/images/dribbble-2.png"></a>
      </div>
      <div class="grid-item">
        <a class="fancybox" href="http://poiemaweb.com/assets/images/dribbble-3.png"></a>
      </div>
      <div class="grid-item">
        <a class="fancybox" href="http://poiemaweb.com/assets/images/dribbble-4.png"></a>
      </div>
      <div class="grid-item">
        <a class="fancybox" href="http://poiemaweb.com/assets/images/dribbble-5.png"></a>
      </div>
      <div class="grid-item">
        <a class="fancybox" href="http://poiemaweb.com/assets/images/dribbble-6.png"></a>
      </div>
      <div class="grid-item">
        <a class="fancybox" href="http://poiemaweb.com/assets/images/dribbble-7.png"></a>
      </div>
      <div class="grid-item">
        <a class="fancybox" href="http://poiemaweb.com/assets/images/dribbble-8.png"></a>
      </div>
      <div class="grid-item">
        <a class="fancybox" href="http://poiemaweb.com/assets/images/dribbble-9.png"></a>
      </div>
      <div class="grid-item">
        <a class="fancybox" href="http://poiemaweb.com/assets/images/dribbble-10.png"></a>
      </div>
      <div class="grid-item">
        <a class="fancybox" href="http://poiemaweb.com/assets/images/dribbble-11.png"></a>
      </div>
      <div class="grid-item">
        <a class="fancybox" href="http://poiemaweb.com/assets/images/dribbble-12.png"></a>
      </div>
      <div class="grid-item">
        <a class="fancybox" href="http://poiemaweb.com/assets/images/dribbble-13.png"></a>
      </div>
      <div class="grid-item">
        <a class="fancybox" href="http://poiemaweb.com/assets/images/dribbble-14.png"></a>
      </div>
      <div class="grid-item">
        <a class="fancybox" href="http://poiemaweb.com/assets/images/dribbble-15.png"></a>
      </div>
      <div class="grid-item">
        <a class="fancybox" href="http://poiemaweb.com/assets/images/dribbble-16.png"></a>
      </div>
      <div class="grid-item">
        <a class="fancybox" href="http://poiemaweb.com/assets/images/dribbble-17.png"></a>
      </div>
      <div class="grid-item">
        <a class="fancybox" href="http://poiemaweb.com/assets/images/dribbble-18.png"></a>
      </div>
      <div class="grid-item">
        <a class="fancybox" href="http://poiemaweb.com/assets/images/dribbble-19.png"></a>
      </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<script type="text/javascript">
   $(function () {
  // Masonry Grid
  $(".grid").masonry({
    itemSelector: ".grid-item",
    columnWidth: 180,
    fitWidth: true, // When enabled, you can center the container with CSS.
    gutter: 10
  });

  // Loading Animation
  $(".grid-item").each(function (i) {
    setTimeout(function () {
      $(".grid-item").eq(i).addClass("is-visible");
    }, 200 * i);
  });

  // Fancybox
  $(".fancybox").fancybox({
    helpers: {
      overlay: { locked: false }
    }
  });
});

     </script>
</body>
