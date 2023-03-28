<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="
https://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="description" content="" />
    <meta name="theme-color" content="#264e77" />

    <meta name="generator" content="Hugo 0.104.2" />
    <link rel="icon" href="https://aceweb.kanalapps.web.id/public/uploads/all/sfGZMHPHsxYDerGPCBKsZYgTze8TMq55iPlnP01y.png">
    <title>ACE INOVATE ASIA BERHARD</title>

    <link
      rel="canonical"
      href="https://getbootstrap.com/docs/5.2/examples/carousel/"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link href="{{ static_asset('aceweb') }}/assets/vendor/aos/aos.css" rel="stylesheet" />
    <script src="{{ static_asset('aceweb') }}/assets/mansory/mansory.js"></script>

    <link href="{{ static_asset('aceweb') }}/assets/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="{{ static_asset('aceweb') }}/assets/carousel/carousel.css" rel="stylesheet" />
    <link href="{{ static_asset('aceweb') }}/assets/ace/ace.css" rel="stylesheet" />
    <!--<link href="assets/ace/scroll.css" rel="stylesheet" />-->
    <link href="{{ static_asset('aceweb') }}/assets/slick/slick.css" rel="stylesheet" />
    <link href="{{ static_asset('aceweb') }}/assets/slick/slick-theme.css" rel="stylesheet" />


    <!--TEST-->

    <!--TEST-->

    <script
      src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"
      type="text/javascript"
    ></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
  </head>
  <body onload="LoadFunction()">
  <div class="centerloader">
    <div id="loader" class="loader"></div>
</div>
<div id="divbody" class="divbody">

    @yield('content')
</div>




    <script type="text/javascript">
      $(window).on("scroll", function () {
        if (
          $(window).scrollTop() >=
          $(".number").offset().top +
            $(".number").outerHeight() -
            window.innerHeight
        ) {
          if (!localStorage.getItem("visited")) {
            $(".number").each(function () {
              $(this)
                .prop("Counter", 0)
                .animate(
                  {
                    Counter: $(this).text(),
                  },
                  {
                    duration: 2000,
                    easing: "swing",
                    step: function (now) {
                      $(this).text(Math.ceil(now));
                    },
                  }
                );
            });
            $(".decimal").each(function () {
              $(this)
                .prop("Counter", 0)
                .animate(
                  {
                    Counter: $(this).text(),
                  },
                  {
                    duration: 2000,
                    easing: "swing",
                    step: function (now) {
                      $(this).text(parseFloat(now).toFixed(1));
                    },
                  }
                );
            });
            localStorage.setItem("visited", true);
          }
        } else {
          localStorage.removeItem("visited");
        }
      });


      $(document).ready(function () {
        $(window).on("scroll", function () {
          if (
            $(window).scrollTop() >=
            $("#gpt0").offset().top +
              $("#gpt0").outerHeight() -
              window.innerHeight
          ) {
            var to = document.getElementById("to-progress");
            var titleprogress = document.getElementById("title-progress");
            var contentprogress = document.getElementById("content-progress");
            to.innerHTML = "1/5";
            titleprogress.innerHTML = "Supports both B2B & B2C integration";
            contentprogress.innerHTML =
              "Our potential partners can create their own product branding and launch their own digital gold program with the help of our ready-made templates and API.";
            document.getElementById("progressBar").style.height = "2vh";
          }
          if (
            $(window).scrollTop() >=
            $("#gpt1").offset().top +
              $("#gpt1").outerHeight() -
              window.innerHeight
          ) {
            var to = document.getElementById("to-progress");
            var titleprogress = document.getElementById("title-progress");
            var contentprogress = document.getElementById("content-progress");
            to.innerHTML = "2/5";
            titleprogress.innerHTML = "Streamlined customer onboarding process";
            contentprogress.innerHTML =
              "Existing or new customers will go through an onboarding process for every partner is platform while meeting the regulatory requirements such as e-KYC, AML & Pep checking.";
            document.getElementById("progressBar").style.height = "10vh";
          }
          if (
            $(window).scrollTop() >=
            $("#gpt2").offset().top +
              $("#gpt2").outerHeight() -
              window.innerHeight
          ) {
            var to = document.getElementById("to-progress");
            var titleprogress = document.getElementById("title-progress");
            var contentprogress = document.getElementById("content-progress");
            to.innerHTML = "3/5";
            titleprogress.innerHTML =
              "Buy & sell transactions including future orders";
            contentprogress.innerHTML =
              "Customers have the ability to buy, sell, convert, transfer, and perform future orders at their own convenience on the gold trading platform.";
            document.getElementById("progressBar").style.height = "15vh";
          }
          if (
            $(window).scrollTop() >=
            $("#gpt3").offset().top +
              $("#gpt3").outerHeight() -
              window.innerHeight
          ) {
            var to = document.getElementById("to-progress");
            var titleprogress = document.getElementById("title-progress");
            var contentprogress = document.getElementById("content-progress");
            to.innerHTML = "4/5";
            titleprogress.innerHTML =
              "Seamless integration with payment gateways & e-wallets";
            contentprogress.innerHTML =
              "Partners are able to enjoy smooth payment transactions with the ability of connecting to the preferred payment gateways and e-wallets.";
            document.getElementById("progressBar").style.height = "20vh";
          }
          if (
            $(window).scrollTop() >=
            $("#gpt4").offset().top +
              $("#gpt4").outerHeight() -
              window.innerHeight
          ) {
            var to = document.getElementById("to-progress");
            var titleprogress = document.getElementById("title-progress");
            var contentprogress = document.getElementById("content-progress");
            to.innerHTML = "5/5";
            titleprogress.innerHTML =
              "Fulfill conversion requests anytime, anywhere";
            contentprogress.innerHTML =
              "Account holders are able to make conversion requests anytime of the day while we provide the necessary delivery and insurance coverage.";
            document.getElementById("progressBar").style.height = "25vh";
          }
        });
      });
    </script>

    <script>
      function myFunction() {
        var y = document.getElementById("acetopbar");
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
          x.style.left = "0%";
          x.className += " responsive";
          y.style.display = "none";
        } else {
          x.className = "topnav";
          y.style.display = "block";
        }
      }
    </script>
    <script src="{{ static_asset('aceweb') }}/assets/vendor/aos/aos.js"></script>
    <script src="{{ static_asset('aceweb') }}/assets/dist/js/bootstrap.bundle.min.js"></script>
    <script
      src="https://code.jquery.com/jquery-2.2.0.min.js"
      type="text/javascript"
    ></script>
    <script>
      if (!window.Cypress) AOS.init();
    </script>
    <script type="text/javascript">
      $(".slider-service").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
      });
    </script>
    <script>
      let magicGrid = new MagicGrid({
        container: ".mansory",
        animate: true,
        gutter: 30,
        static: true,
        useMin: true,
      });

      magicGrid.listen();
    </script>
    <script type="text/javascript">
      $(document).on("ready", function () {
        $(".vertical-center-4").slick({
          dots: true,
          vertical: true,
          centerMode: true,
          slidesToShow: 4,
          slidesToScroll: 2,
        });
      });
    </script>
    <script type="text/javascript">
    var myVar;

function LoadFunction() {
  myVar = setTimeout(showPage, 1500);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("divbody").style.display = "block";
}
    </script>
  </body>
</html>
