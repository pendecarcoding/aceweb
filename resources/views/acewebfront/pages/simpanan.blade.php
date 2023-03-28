@extends('acewebfront.layouts')
@section('content')
 <main>
      <section data-aos="fade-up" class="ace-personal">
        <div class="row-personal">
          <div id="tablet-banner" class="col-md-12 col-sm-12 col-lg-9">
            <img
              class="img-responsive"
              src="{{ static_asset('aceweb') }}/assets/img/goldpersonal.png"
              alt=""
            />
            <div class="container">
              <div class="carousel-caption text-start">
                <h1>Trade Gold Effortlessly, Within Seconds</h1>
                <p>A Public Listed Company On Bursa Malaysia (1316677-U)</p>
              </div>
            </div>
          </div>

          <div class="col-md-12 col-sm-12 col-lg-3">
            <div onload="WebSocketTest()" class="allprice">
                <table>

                </table>
              <div class="price-feed-buy">
                <h4>ACE Gold Price 999.9</h4>
                <div class="flex-date">
                  <div style="color: #1ac69c">
                    <i class="fa fa-circle" aria-hidden="true"></i> LIVE. OPEN
                  </div>
                  <div id="datepricefeed"></div>
                </div>

                <div class="buy-gold">
                  <div style="font-weight: bold; margin-top: 20px">Buy</div>

                  <div class="flex-number-row">
                    <div class="number-feed"><h2 id="gp_livebuyprice_gm"></h2></div>
                    <div>
                      <i id="iconlivebuy"   aria-hidden="true"></i>
                    </div>
                  </div>

                  <div>RM/GM</div>

                  <div class="flex-number-row">
                    <div class="number-feed"><h2 id="gp_livebuyprice_tael"></h2></div>
                    <div>
                      <i id="iconlivebuytael"  aria-hidden="true"></i>
                    </div>
                  </div>

                  <div>RM/TAEL</div>
                </div>
              </div>
              <div class="price-feed-sel">
                <div style="font-weight: bold">Sell</div>
                <div class="buy-gold">
                <div class="flex-number-row">
                  <div class="number-feed"><h2 id="gp_livesellprice_gm"></h2></div>
                  <div style=" margin-right: 10%">
                    <i id="iconlivesell" class="" aria-hidden="true"></i>
                  </div>
                </div>

                <div>RM/GM</div>

                <div class="flex-number-row">
                  <div class="number-feed"><h2 id="gp_livesellprice_tael" style=""></h2></div>
                  <div style=" margin-right: 10%">
                    <i id="iconliveselltael" class="" aria-hidden="true"></i>
                  </div>
                </div>

                <div>RM/TAEL</div>
                </div>


              </div>
               <p class="ace-personal-powered">
                  Powered by ACE Capital Growth Please call +603-8081-7198 for
                  our Gold Trading Platform access.
                </p>
            </div>
          </div>
        </div>
      </section>

      <section class="easigold">
        <div class="content-ace">
          <div class="wrap-content">
            <div class="ace-isi about">
              <div class="col-md-12">
                <div data-aos="fade-up" data-aos-delay="200" class="title-ace">
                  TRADE IN SECONDS
                  <span class="h-dash" style="font-weight: bold">—</span>
                </div>
              </div>
              <div class="row">
                <div
                  data-aos="fade-up"
                  data-aos-delay="200"
                  class="col-md-6 col-sm-6"
                >
                  <h1>EasiGold, your trusted companion</h1>
                  <h3>EasiGold Features</h3>
                <div class="list-features">
                  <div class="item_direction_feature">

                    <a href="#" onmouseover="show(1)" onmouseout="hideshow(1)" class="step1">
                      Buy and sell gold with eased
                    </a>

                    <div id="hideone" class="hideone">

                    </div>

                    <br>
                    <a href="#" onmouseover="show(2)" onmouseout="hideshow(2)" class="step1">
                      Convert to physical gold
                    </a>

                    <div id="hidetwo" class="hidetwo">

                    </div>

                    <br>
                    <a href="#" onmouseover="show(3)" onmouseout="hideshow(3)" class="step1">
                      Price alerts and notifications
                    </a>

                    <div id="hide3" class="hide3">

                    </div>

                    <br>
                    <a href="#" onmouseover="show(4)" onmouseout="hideshow(4)" class="step1">
                      View statement history
                    </a>

                    <div id="hide4" class="hide4">

                    </div>

                    <br>
                    <a href="#" onmouseover="show(5)" onmouseout="hideshow(5)" class="step1">
                      Tracking Logistic Status (Gold Conversion)
                    </a>

                    <div id="hide5" class="hide5">

                    </div>


                  </div>
                </div>

                </div>
                <div
                  data-aos="fade-up"
                  data-aos-delay="300"
                  class="col-md-6 col-sm-6"
                >
                <img
                    class="img-phone1"
                    src="{{ static_asset('aceweb') }}/assets/img/phone.png"
                    alt=""
                  />
                  <img
                    class="img-phone2"
                    src="{{ static_asset('aceweb') }}/assets/img/phone2.png"
                    alt=""
                  />
                </div>
              </div>

              <div class="row">
                <div data-aos="fade-up" class="col-md-12">
                  <center>
                    <button class="ace-button">Explore EasiGold</button>
                  </center>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="gtp-patner">
        <div class="content-ace">
          <div class="wrap-content">
            <div style="padding-top: 0px" class="ace-isi about">
              <div class="row">
                <div class="col-md-12" style="margin-top: 5%">
                  <div data-aos="fade-up" class="title-ace">
                    HOW WE HELP
                    <span class="h-dash" style="font-weight: bold">—</span>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12">
                  <h1 data-aos="fade-up">Discover what we offer</h1>
                </div>
                <div style="padding-top:20px" data-aos="fade-up" class="col-md-6">
                  <p>
                    Buy, sell, and get your precious gold delivered to you at
                    your doorsteps, hassle-free. We are committed to ensuring
                    you receive only the finest quality gold through our
                    products and services.
                  </p>
                </div>
              </div>
              <div style="justify-content: center; margin-top: 50px">
                <div class="row">
                  <div data-aos="fade-up" class="col-md-4">
                    <div class="discover">
                      <img
                        style="width: 50px; height: 50px"
                        src="{{ static_asset('aceweb') }}/assets/img/mendal.png"
                        alt=""
                      />
                      <h6>STRONG BACKGROUND</h6>
                      <p>In the market since 2011</p>
                    </div>
                  </div>
                  <div data-aos="fade-up" class="col-md-4">
                    <div class="discover">
                      <img
                        style="width: 45px; height: 50px"
                        src="{{ static_asset('aceweb') }}/assets/img/cs.png"
                        alt=""
                      />
                      <h6>OUR SUPPORT</h6>
                      <p>Friendly support of all time</p>
                    </div>
                  </div>
                  <div data-aos="fade-up" class="col-md-4">
                    <div class="discover">
                      <img
                        style="width: 70px; height: 50px"
                        src="{{ static_asset('aceweb') }}/assets/img/csu.png"
                        alt=""
                      />
                      <h6>USER FRIENDLY</h6>
                      <p>Simple design and clutter-free layout</p>
                    </div>
                  </div>
                </div>
              </div>
              <div style="justify-content: center; margin-top: 50px">
                <div class="row">
                  <div data-aos="fade-up" class="col-md-4">
                    <div class="discover">
                      <img
                        style="width: 55px; height: 50px"
                        src="{{ static_asset('aceweb') }}/assets/img/chart.png"
                        alt=""
                      />
                      <h6>LIVE GOLD PRICES</h6>
                      <p>Provides gold prices per gram in real-time</p>
                    </div>
                  </div>
                  <div data-aos="fade-up" class="col-md-4">
                    <div class="discover">
                      <img
                        style="width: 40px; height: 50px"
                        src="{{ static_asset('aceweb') }}/assets/img/device.png"
                        alt=""
                      />
                      <h6>MOBILE DEVICE READY</h6>
                      <p>Compatible across multiple
 devices and platforms</p>
                    </div>
                  </div>
                  <div data-aos="fade-up" class="col-md-4">
                    <div class="discover">
                      <img
                        style="width: 55px; height: 50px"
                        src="{{ static_asset('aceweb') }}/assets/img/car.png"
                        alt=""
                      />
                      <h6>LOGISTIC SERVICES</h6>
                      <p>Provides collection and delivery services</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="ace-testimonial-fpl">
        <div class="content-ace">
          <div class="wrap-content">
            <div class="ace-isi about">
              <div class="row">
                <div data-aos="fade-up" class="col-md-12">
                  <div class="title-ace">
                    TESTIMONIALS
                    <span class="h-dash" style="font-weight: bold">—</span>
                  </div>
                </div>
                <div data-aos="fade-up" class="col-md-12 col-sm-12">
                  <h1>Honorable praises by our customers</h1>
                </div>
                <div class="row">
                  <div data-aos="fade-up" class="col-md-6 col-sm-12">
                    <a href="#" ata-toggle="modal" data-target="#exampleModal"
                      ><img
                        class="img-responsive"
                        src="{{ static_asset('aceweb') }}/assets/img/sarah.png"
                        alt=""
                    /></a>
                  </div>
                  <div
                    class="modal fade"
                    id="exampleModal"
                    tabindex="-1"
                    role="dialog"
                    aria-labelledby="exampleModalLabel"
                    aria-hidden="true"
                  >
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">
                            Modal title
                          </h5>
                          <button
                            type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-label="Close"
                          >
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">...</div>
                        <div class="modal-footer">
                          <button
                            type="button"
                            class="btn btn-secondary"
                            data-dismiss="modal"
                          >
                            Close
                          </button>
                          <button type="button" class="btn btn-primary">
                            Save changes
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div data-aos="fade-up" class="col-md-6 col-sm-12">
                    <div style="padding: 20px" class="content-about">
                      <p>
                        "Using EasiGold is truly a hassle-free process. I save
                        so much of time as I get to do anything - from buying
                        and selling gold to checking the live gold prices - all
                        in just one platform. The best part? I can perform the
                        tasks at any time of the day!"
                      </p>
                      <hr
                        style="width: 300px; height: 3px; background: #006eb2"
                      />
                      <h5>Sarah Lim, 28</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="ace-insight">
        <div class="content-ace">
          <div class="wrap-content">
            <div class="ace-isi about">
              <div class="row">
                <div data-aos="fade-up" class="col-md-12">
                  <div class="title-ace">
                    STAY UPDATED
                    <span class="h-dash" style="font-weight: bold">—</span>
                  </div>
                </div>
                <div data-aos="fade-up" class="col-md-12 col-sm-12">
                  <h1>Get the latest insights</h1>
                </div>
                <div class="row" style="margin-top: 50px">
                @foreach($blog as $i =>$v)
                @php $number = $i+1 @endphp
                @if($number <= 3)
                  @if($number == 1)

                  <div data-aos="fade-up" class="col-md-8 col-sm-12">
                    <a href={{ url('news/'.$v->slug) }}>
                    <img

                      class="img-responsive rounded img-main-first"
                      src="{{ asset('public/'.$v->file_name) }}"
                      alt=""
                    />
                     <p>
                          {{$v->title}}
                        </p>
                         </a>
                  </div>

                 @endif
                 @endif

                 @endforeach
                 <div class="col-md-4 col-sm-12">
                 @foreach($blog as $i =>$v)
                 @php $number = $i+1 @endphp



                     @if($number > 1 AND $number <= 3)
                    <div class="img-insight-col">
                        <a href={{ url('news/'.$v->slug) }}>
                      <div data-aos="fade-up">
                        <img
                          class="img-responsive rounded"
                          src="{{ asset('public/'.$v->file_name) }}"
                          alt=""
                        />
                        <p>
                          {{$v->title}}
                        </p>
                      </div>
                        </a>

                    </div>
                    @endif



                @endforeach

                </div>

                <div class="row">

            @foreach($blog as $i =>$v)
                @php $number = $i+1 @endphp
                 @if($number > 3 AND $number <= 6)

                  <div class="col-md-4">
                    <a href={{ url('news/'.$v->slug) }}>
                    <div data-aos="fade-up">
                      <img
                          class="img-responsive-news rounded"
                          src="{{ asset('public/'.$v->file_name) }}"
                          alt=""
                        />
                      <p>
                        {{$v->title}}
                      </p>
                    </div>
                    </a>
                  </div>

                  @endif
            @endforeach

                </div>
                <center>
                  <button
                    onclick="location.href='newsroom.html'"
                    data-aos="fade-up"
                    style="margin-top: 50px"
                    class="ace-button-black"
                  >
                    Read More
                  </button>

                </center>

              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <script type = "text/javascript">


       $(window).on("load", function() {

     // Executes when complete page is fully loaded, including
     // all frames, objects and images
        WebSocketTest();
        });
         function WebSocketTest() {


            if ("WebSocket" in window) {

               //alert("WebSocket is supported by your Browser!");

               // Let us open a web socket
               var ws = new WebSocket("wss://snappy.ace2u.com/socket.io/?EIO=3socket.io/?EIO=3&transport=websocket");

               ws.onopen = function() {

                  // Web Socket is connected, send data using send()
                  ws.send("Message to send");
                  //alert("Message is sent...");
               };

               ws.onmessage = function (evt) {
                  var text    = evt.data.replace(42,'');
                  var json    = JSON.parse(text);



                  if(json[0]=='gpweb'){
                    document.getElementById("datepricefeed").innerHTML = json[1].gp_createDate;
                     var oldbuy       = document.getElementById('gp_livebuyprice_gm').innerHTML;
                     var oldbuyrmtael = document.getElementById('gp_livebuyprice_tael').innerHTML;
                     var gp_livebuyprice_tael = (Math.round(json[1].gp_livebuyprice_tael * 100) / 100).toFixed(0);
                     var gp_livebuyprice_gm   = (Math.round(json[1].gp_livebuyprice_gm * 100) / 100).toFixed(3);


                     var oldsell               = document.getElementById('gp_livesellprice_gm').innerHTML;
                     var oldsellrmtael         = document.getElementById('gp_livesellprice_tael').innerHTML;
                     var gp_livesellprice_tael = (Math.round(json[1].gp_livesellprice_tael * 100) / 100).toFixed(0);
                     var gp_livesellprice_gm   = (Math.round(json[1].gp_livesellprice_gm * 100) / 100).toFixed(3);

                     /* for condition gp_livebuyprice_tael*/
                     if(gp_livebuyprice_tael > oldbuyrmtael){
                       document.getElementById("iconlivebuytael").style.color = "#1ac69c";
                       document.getElementById("iconlivebuytael").className = "fa fa-long-arrow-up";
                       document.getElementById("gp_livebuyprice_tael").style.color = "#1ac69c";
                       document.getElementById("gp_livebuyprice_tael").innerHTML = (Math.round(json[1].gp_livebuyprice_tael * 100) / 100).toFixed(0);
                     }
                     if(gp_livebuyprice_tael < oldbuyrmtael){
                       document.getElementById("iconlivebuytael").style.color = "red";
                       document.getElementById("iconlivebuytael").className = "fa fa-long-arrow-down";
                       document.getElementById("gp_livebuyprice_tael").style.color = "red";
                       document.getElementById("gp_livebuyprice_tael").innerHTML = (Math.round(json[1].gp_livebuyprice_tael * 100) / 100).toFixed(0);

                     }
                     if(gp_livebuyprice_tael == oldbuyrmtael){
                       document.getElementById("gp_livebuyprice_tael").innerHTML = (Math.round(json[1].gp_livebuyprice_tael * 100) / 100).toFixed(0);

                     }
                     /*ENd Condition*/

                     if(gp_livebuyprice_gm > oldbuy){
                       document.getElementById("gp_livebuyprice_gm").style.color = "#1ac69c";
                       document.getElementById("iconlivebuy").style.color = "#1ac69c";
                       document.getElementById("iconlivebuy").className = "fa fa-long-arrow-up";
                       document.getElementById("gp_livebuyprice_gm").innerHTML = (Math.round(json[1].gp_livebuyprice_gm * 100) / 100).toFixed(3);

                     }if(gp_livebuyprice_gm < oldbuy){
                       document.getElementById("gp_livebuyprice_gm").style.color = "red";
                       document.getElementById("iconlivebuy").style.color = "red";
                       document.getElementById("iconlivebuy").className = "fa fa-long-arrow-down";

                       document.getElementById("gp_livebuyprice_gm").innerHTML = (Math.round(json[1].gp_livebuyprice_gm * 100) / 100).toFixed(3);
                       document.getElementById("gp_livebuyprice_tael").innerHTML = (Math.round(json[1].gp_livebuyprice_tael * 100) / 100).toFixed(0);


                     }

                     if(gp_livebuyprice_gm == oldbuy){
                       document.getElementById("gp_livebuyprice_gm").innerHTML = (Math.round(json[1].gp_livebuyprice_gm * 100) / 100).toFixed(3);
                     }



                     if(gp_livesellprice_gm > oldsell){
                        document.getElementById("iconlivesell").style.color = "#1ac69c";
                        document.getElementById("iconlivesell").className = "fa fa-long-arrow-up";
                        document.getElementById("gp_livesellprice_gm").style.color = "#1ac69c";
                        document.getElementById("gp_livesellprice_gm").innerHTML = (Math.round(json[1].gp_livesellprice_gm * 100) / 100).toFixed(3);
                     }

                     if(gp_livesellprice_gm < oldsell){
                        document.getElementById("iconlivesell").style.color = "red";
                        document.getElementById("iconlivesell").className = "fa fa-long-arrow-down";
                        document.getElementById("gp_livesellprice_gm").style.color = "red";
                        document.getElementById("gp_livesellprice_gm").innerHTML = (Math.round(json[1].gp_livesellprice_gm * 100) / 100).toFixed(3);
                     }
                     if(gp_livesellprice_gm == oldsell){
                        document.getElementById("gp_livesellprice_gm").innerHTML = (Math.round(json[1].gp_livesellprice_gm * 100) / 100).toFixed(3);

                     }

                     if(gp_livesellprice_tael > oldsellrmtael){
                        document.getElementById("iconliveselltael").style.color = "#1ac69c";
                        document.getElementById("iconliveselltael").className = "fa fa-long-arrow-up";
                        document.getElementById("gp_livesellprice_tael").style.color = "#1ac69c";
                        document.getElementById("gp_livesellprice_tael").innerHTML = (Math.round(json[1].gp_livesellprice_tael * 100) / 100).toFixed(0);
                     }
                     if(gp_livesellprice_tael < oldsellrmtael){
                        document.getElementById("iconliveselltael").style.color = "red";
                        document.getElementById("iconliveselltael").className = "fa fa-long-arrow-down";
                        document.getElementById("gp_livesellprice_tael").style.color = "red";
                        document.getElementById("gp_livesellprice_tael").innerHTML = (Math.round(json[1].gp_livesellprice_tael * 100) / 100).toFixed(0);
                     }

                     if(gp_livesellprice_tael == oldsellrmtael){
                      document.getElementById("gp_livesellprice_tael").innerHTML = (Math.round(json[1].gp_livesellprice_tael * 100) / 100).toFixed(0);
                     }


                     console.log(oldbuy);










                    }/*else if(json[0]=='intlX'){
                     document.getElementById("datepricefeed").innerHTML = json[1].gp_createDate;
                     document.getElementById("gp_livesellprice_gm").innerHTML = (Math.round(json[1].gp_livesellprice_gm * 100) / 100).toFixed(2);
                     document.getElementById("gp_livebuyprice_gm").innerHTML = (Math.round(json[1].gp_livebuyprice_gm * 100) / 100).toFixed(2);

                  }*/
                  //console.log(text);
               };


               ws.onclose = function() {

                  // websocket is closed.
                  WebSocketTest();
               };
            } else {

               // The browser doesn't support WebSocket
               alert("WebSocket NOT supported by your Browser!");
            }
         }
      </script>

    <script>
        function show(x) {
            if(x==1){
                document.getElementById("hidetwo").style.display="none";
                document.getElementById("hideone").style.display="block";
                document.getElementById("hideone").innerHTML = "Start buying or selling gold hassle-free with the all-in-one platform. No complicated steps required.";
            }if(x==2){
                 document.getElementById("hidetwo").style.display="block";
                document.getElementById("hidetwo").innerHTML = "Don't fancy digital gold? Just convert to physical gold within just a few simple clicks.";
            }if(x==3){
                 document.getElementById("hide3").style.display="block";
                 document.getElementById("hide3").innerHTML = "Stay updated with the current live gold market prices so you'll never miss any amazing opportunities.";
            }
            if(x==4){
                 document.getElementById("hide4").style.display="block";
                 document.getElementById("hide4").innerHTML = "Take a look at all of your digital gold purchases made in the past or present.";
            }
            if(x==5){
                 document.getElementById("hide5").style.display="block";
                 document.getElementById("hide5").innerHTML = "Keep track of where your physical gold is located while we make its way to you.";
            }
        }

        function hideshow(x) {
            if(x==1){
                document.getElementById("hideone").style.display="none";
            }
            if(x==2){
                 document.getElementById("hidetwo").style.display="none";
            }if(x==3){
                 document.getElementById("hide3").style.display="none";
            }
            if(x==4){
                 document.getElementById("hide4").style.display="none";
            }
            if(x==5){
                 document.getElementById("hide5").style.display="none";
            }
        }
    </script>
@endsection


