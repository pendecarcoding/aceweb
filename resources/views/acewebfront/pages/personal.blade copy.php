@extends('acewebfront.layouts')
@section('content')
 <main>
      <section  class="ace-personal">
        <div class="personal-banner">
        <div class="row-personal">
          <div id="desktop-banner" class="col-md-9 col-sm-12 col-lg-9">
            <img
              class="img-responsive"
              src="{{ getimage(env('PERSONAL_IMAGE')) }}"
              alt=""
            />
            <div class="container">
              <div data-aos="fade-up" class="carousel-caption text-start caption-banner">
                <div class="caption-banner">
                  <h1>{{ env('PERSONAL_TITLE_CAPTION') }}</h1>
                  <p class="ace-banner-p">{{ env('PERSONAL_SUB_TITLE_CAPTION') }}</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-sm-12 col-lg-3">
            <div id="desktop-pricefeed" onload="WebSocketTest()" class="allprice">

                <table class="table-price-buy">
                <thead>
                 <tr>
                    <th colspan="3" class="center"><h4>ACE Gold Price 999.9</h4></th>
                 </tr>
                </thead>
                <tbody>
                 <tr>
                    <td colspan="2">
                        <div style="color: #1ac69c">
                            <i class="fa fa-circle" aria-hidden="true"></i> <span id="statuslive">LIVE.</span> <span id="tradeopen"></span>
                       </div>
                    </td>

                    <td style="text-align: right;padding-right: 20px;"><div id="datepricefeed"></div></td>
                 </tr>

                 <tr>
                    <td class="center" colspan="3"><div style="font-weight: bold;">Buy</div>
</td>
                 </tr>

                 <tr>
                    <td class="center" colspan="3">
                        <div class="flex-number-row">
                             <div class="number-feed"><h2 id="gp_livebuyprice_gm">00.00</h2></div>
                             <div class="icon-arrow-pricefeed"><i id="iconlivebuy"   aria-hidden="true"></i></div>
                        </div>
                    </td>


                 </tr>
                 <tr>
                    <td class="center" colspan="3"><div>RM/GM</div></td>
                 </tr>


                 <tr>
                    <td class="center" colspan="3">
                       <div class="flex-number-row">
                           <div class="number-feed"><h2 id="gp_livebuyprice_tael">00.00</h2></div>
                            <div class="icon-arrow-pricefeed">
                                <i id="iconlivebuytael"  aria-hidden="true"></i>
                            </div>
                       </div>
                    </td>
                 </tr>
                 <tr>
                    <td class="center" colspan="3"><div>RM/TAEL</div><br></td>
                 </tr>


                </tbody>
                </table>
               <table class="table-price-sell">
                <thead>
                 <tr>
                    <th style="padding-top: 20px;" colspan="3" class="center"><div style="font-weight: bold">Sell</div></th>
                 </tr>
                </thead>
                <tbody>



                 <tr>
                    <td class="center" colspan="3">
                        <div class="flex-number-row">
                             <div class="number-feed"><h2 id="gp_livesellprice_gm">00.00</h2></div>
                             <div class="icon-arrow-pricefeed"><i id="iconlivesell"   aria-hidden="true"></i></div>
                        </div>
                    </td>


                 </tr>
                 <tr>
                    <td class="center" colspan="3"><div>RM/GM</div></td>
                 </tr>


                 <tr>
                    <td class="center" colspan="3">
                       <div class="flex-number-row">
                           <div class="number-feed"><h2 id="gp_livesellprice_tael">00.00</h2></div>

                                <div class="icon-arrow-pricefeed"><i id="iconliveselltael"  aria-hidden="true"></i></div>

                       </div>
                    </td>
                 </tr>
                 <tr>
                    <td class="center" colspan="3"><div>RM/TAEL</div></td>
                 </tr>
                 <tr>
                    <td colspan="3">
                        <p class="ace-personal-powered">
                        Powered by ACE Capital Growth Please call +603-8081-7198 for
                        our Gold Trading Platform access.
                        </p>
                 </td>
                 </tr>


                </tbody>
               </table>


            </div>
            <div class="title-card-mobile"> LIVE. <span id="tradeopen-mobile"></span>
              <span id="datepricefeed-mobile"></span></div>
            <div id="mobile-pricefeed">
              <div class="card">
                <center><h4>BUY</h4></center>
                <center><h6 id="gp_livebuyprice_gm_mobile" class="mobile-buy-rm-gm">00.00</h6></center>
                <center><p>RM/GM</p></center>
                <center><h6 id="gp_livebuyprice_tael_mobile" class="mobile-buy-rm-gm">00.00</h6></center>
                <center><p>RM/TAEL</p></center>
              </div>
              <div class="card">
                <center><h4>SELL</h4></center>
                <center><h6 id="gp_livesellprice_gm_mobile" class="mobile-buy-rm-gm">00.00</h6></center>
                <center><p>RM/GM</p></center>
                <center><h6 id="gp_livesellprice_tael_mobile" class="mobile-buy-rm-gm">00.00</h6></center>
                <center><p>RM/TAEL</p></center>
              </div>

            </div>
            <div class="poweredby-ace"><center>Powered by ACE Capital Growth Please call +603-8081-7198 for our Gold Trading Platform access.</div><center></div>

        </div>
        </div>
      </section>

      <section  class="easigold">
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
                    class="img-phone1 pulse"
                    src="{{ static_asset('aceweb') }}/assets/img/phone.png"
                    alt=""
                  />
                  <img
                    class="img-phone2 pulse"
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

      <section style="display:none" class="easigold">
        <div class="content-ace">
          <div class="wrap-content">
            <div class="ace-isi about">
              <div class="col-md-12">
                <div data-aos="fade-up" data-aos-delay="200" class="title-ace">
                DIGITAL GOLD INVESTMENT
                  <span class="h-dash" style="font-weight: bold">—</span>
                </div>
              </div>
              <div class="row">
                <div
                  data-aos="fade-up"
                  data-aos-delay="200"
                  class="col-md-6 col-sm-6"
                >
                  <h1>Trading gold has never been easier and safer</h1>
                  <h3>Why invest in Digital Gold?</h3>
              </div>
                  <div data-aos="fade-up" data-aos-delay="300" class="col-md-6 col-sm-6">
                    <p style="color:#FFFFFF">Sleep well at night knowing your digital gold is secured in a tight vault location. From as low as RM10, build up your personal savings while having the ability to buy and sell at any time of the day online, based on your convenience.</p>
                  </div>
                  <div
                  data-aos="fade-up"
                  data-aos-delay="200"
                  class="col-md-6 col-sm-6"
                >
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
                    class="img-phone3"
                    src="{{ static_asset('aceweb') }}/assets/img/phone.png"
                    alt=""
                  />

                </div>
              </div>


            </div>
          </div>
        </div>

        <div class="start-tranding">
            <div class="title"><b>Start trading now</b></div>
            <div style="margin-top: 20px;" class="row">
                <div id="myCarouselprovider" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item carousel-item-next carousel-item-start">
                      <div class="mansory-horizontal">
                        <div data-aos="fade-up" class="item1-tranding aos-init aos-animate">
                          <img src="https://aceweb.kanalapps.web.id/public/aceweb/assets/img/igr.png" alt="">
                        </div>
                        <div data-aos="fade-up" class="item1-tranding aos-init aos-animate">
                          <img src="https://aceweb.kanalapps.web.id/public/aceweb/assets/img/metalor.png" alt="">
                        </div>
                        <div data-aos="fade-up" class="item1-tranding aos-init aos-animate">
                          <img src="https://aceweb.kanalapps.web.id/public/aceweb/assets/img/mobility.png" alt="">
                        </div>
                        <div data-aos="fade-up" class="item1-tranding aos-init aos-animate">
                          <img src="https://aceweb.kanalapps.web.id/public/aceweb/assets/img/gas.png" alt="">
                        </div>
                      </div>
                    </div>
                    <div class="carousel-item active carousel-item-start">
                      <div class="mansory-horizontal">
                        <div data-aos="fade-up" class="item1-tranding aos-init aos-animate">
                          <img src="https://aceweb.kanalapps.web.id/public/aceweb/assets/img/gas.png" alt="">
                        </div>
                        <div data-aos="fade-up" class="item1-tranding aos-init aos-animate">
                          <img src="https://aceweb.kanalapps.web.id/public/aceweb/assets/img/salihin.png" alt="">
                        </div>
                        <div data-aos="fade-up" class="item1-tranding aos-init aos-animate">
                          <img src="https://aceweb.kanalapps.web.id/public/aceweb/assets/img/metalor.png" alt="">
                        </div>
                        <div data-aos="fade-up" class="item1-tranding aos-init aos-animate">
                          <img src="https://aceweb.kanalapps.web.id/public/aceweb/assets/img/mobility.png" alt="">
                        </div>
                      </div>
                    </div>


                  </div>


                </div>

                <div class="indicator-providers">

                    <button id="btn-slider" type="button" data-bs-target="#myCarouselprovider" data-bs-slide-to="0" aria-current="true" aria-label="Slide 1" style="background-color: #264e77;width:50px" class="btn active"></button>
                    <button id="btn-slider" type="button" data-bs-target="#myCarouselprovider" data-bs-slide-to="1" aria-label="Slide 2" style="background-color: #264e77;width:5px" class="btn"></button>

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
                <!--if have video-->
                <!-- Button trigger modal -->

  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div style="background-color: #264e77;color:white" class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Testimonials</h5>
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">X</button>
        </div>
        <div class="modal-body">
            <iframe width="100%" height="505" src="https://www.youtube.com/embed/UwsrzCVZAb8" title="How Far is Too Far? | The Age of A.I." frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>

      </div>
    </div>
  </div>

                <div class="row">
                    <div data-aos="fade-up" class="col-md-12 aos-init aos-animate">
                        <div style="position:relative;margin-top:50px" id="myCarouseltesti" class="carousel slide pointer-event" data-bs-ride="carousel">
                      <div class="carousel-inner">
                          <div style="margin-left:10%;margin-right:15%">
                            <div class="carousel-item active">
                              <div class="row">
                                <div data-aos="fade-up" class="col-md-6 col-sm-12">
                                    <button style="border:none;background-color:#f5f5f7" data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                      ><img
                                        class="img-responsive"
                                        src="{{ static_asset('aceweb') }}/assets/img/sarah.png"
                                        alt=""
                                    /></button>
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
                            <div class="carousel-item">
                                <div class="row">
                                  <div data-aos="fade-up" class="col-md-6 col-sm-12">
                                      <a  data-toggle="modal" data-target="#GSCCModal"
                                        ><img
                                          class="img-responsive"
                                          src="{{ static_asset('aceweb') }}/assets/img/sarah.png"
                                          alt=""
                                      /></a>
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

                           <button class="acecarousel-control-prev-personal" type="button" data-bs-target="#myCarouseltesti" data-bs-slide="prev">
                              <span style="color:#1D5189;font-size: 250%;margin-left:20px;font-weight:bold;" aria-hidden="true"><i class="fa fa-angle-left"></i></span>
                              <span class="visually-hidden">Previous</span>
                              </button>
                              <button class="acecarousel-control-next-personal" type="button" data-bs-target="#myCarouseltesti" data-bs-slide="next">
                              <span style="color:#1D5189;font-size: 250%;margin-right:20px;font-weight:bold;" aria-hidden="true"><i class="fa fa-angle-right"></i></span>
                              <span class="visually-hidden">Next</span>
                              </button>

                        </div>
                      </div>


                </div>
                <!---END -->
                <!--IF IMAGE-->

                <!--END IMAGE-->
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
              </div>
          <div class="row" style="margin-top: 50px">
                @foreach($blog as $i =>$v)
                @php $number = $i+1 @endphp
                @if($number <= 3)
                  @if($number == 1)
                  
                  

            <div data-aos="fade-up" class="col-md-8 col-sm-12">
                    <a href={{ url('news/'.$v->slug) }}>
                    <img

                      class=" rounded img-main-first"
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
          <div class="col-md-4">
            @foreach ($blog as $i =>$v)
            @php $number = $i+1 @endphp
                 @if($number > 1 AND $number <= 3)
                 <a href={{ url('news/'.$v->slug) }}>
                  <img

                    class="img-responsive rounded"
                    src="{{ asset('public/'.$v->file_name) }}"
                    alt=""
                  />
                   <p>
                        {{$v->title}}
                      </p>
                  </a>

                 @endif

            @endforeach
          </div>


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

             
                <center>
                  <button
                    onclick="location.href='{{url('newsroom')}}'"
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
      </section>
    </main>

    <script src="{{ static_asset('aceweb') }}/assets/ace/pricefeed.js"></script>
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


