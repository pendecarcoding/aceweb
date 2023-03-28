@extends('acewebfront.layouts')

@section('content')
<!--CONTENT-->
 <main>

      <section class="ace-sliders">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            @php
            $noslide = 0;
            @endphp
            @foreach($slider as $is => $v)
            <button
              id="btn-slider"
              type="button"
              data-bs-target="#carouselExampleIndicators"
              data-bs-slide-to="{{ $is }}"
              class="btn-slide @if($is== 0) active @endif"
              @if($is== 0) aria-current="true" @endif
              aria-label="Slide {{ $is }}"
            ></button>

            @endforeach
          </div>
          <div class="carousel-inner">
            @foreach($slider as $is => $v)
            <div class="carousel-item @if($is== 0) active @endif">
              <img class="slider-banner" src="{{ asset('public/'.$v->file_name) }}" />
              <div class="col-md-6">
              <div class="container">

                <div data-aos="fade-up" class="carousel-caption text-start">
                  <h1>
                    {{ $v->caption }}
                  </h1>
                  <p class="ace-banner-p" >{{ $v->sub_caption }}</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
          </div>
            </div>
            @endforeach

        </div>
        </div>
      </section>
      <section class="about-ace">
        <div class="content-ace">
          <div class="wrap-content">
            <div class="ace-isi about">
              <div class="row">
                <div class="col-md-12">
                  <div data-aos="fade-up" data-aos-delay="100" class="title-ace">
                    GET TO KNOW US
                    <span class="h-dash" style="font-weight: bold">—</span>
                  </div>
                </div>
                <div data-aos="fade-up" data-aos-delay="200" class="col-md-6 col-sm-12">
                  <h1>Pioneer leader in the precious metals industry</h1>
                </div>
                <div class="col-md-6 col-sm-12">
                  <div class="content-about">
                    <img class="img-ace-about"
                    data-aos="fade-up" data-aos-delay="300"

                      src="{{ getimage(env('ABOUT_IMG')) }}"
                    />
                    <p style="padding-top: 5%" data-aos="fade-up" data-aos-delay="400">
                      {{ env('ABOUT_DESCRIPTION') }}
                    </p>
                  </div>
                </div>
                <div id="desktop-counter"class="col-md-12">
                  <div data-aos="fade-up" data-aos-delay="500" class="row">
                    <div class="col-md-3 col-sm-3">
                      <div class="number-ace-center">
                        <h1>
                          <span class="number">{{ env('ABOUT_COUNT_EMPLOYE') }}</span>
                          <span class="plus">+</span>
                        </h1>

                        <p>EMPLOYEES</p>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                      <div class="number-ace-center">
                        <h1>
                          <span class="number">{{ env('ABOUT_COUNT_CLIENTS') }}</span
                          ><span class="plus">+</span>
                        </h1>
                        <p>CORPORATE CLIENTS</p>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                      <div class="number-ace-center">
                        <h1><span class="decimal">{{ env('ABOUT_COUNT_ANNUAL_TRUNOVER') }}</span></h1>
                        <p>BILLION (myR) 2018 - ANNUAL TURNOVER</p>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                      <div class="number-ace-center">
                        <h1><span class="decimal">{{ env('ABOUT_COUNT_ANNUAL_REVENEUE') }}</span></h1>
                        <p>BILLION (myR) 2021 - ANNUAL REVENUE</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="mobile-counter">
                  <div class="row-mobile-counter">

                    <div data-aos="fade-up" data-aos-delay="100" class="card" style="background-color: #fa0e0e;color:white">
                      <h1 class="number-mobile">40 +</h1>
                      <span>EMPLOYEES</span>
                    </div>
                    <div data-aos="fade-up" data-aos-delay="200" class="card" style="background-color: #f2db0e;color:white">
                      <h1 class="number-mobile">300+</h1>
                      <span>CORPORATE CLIENTS</span>
                    </div>

                  </div>
                  <div class="row-mobile-counter">

                    <div data-aos="fade-up" data-aos-delay="300" class="card" style="background-color: #5b9300;color:white">
                      <h1 class="decimal-mobile">1.9</h1>
                      <span>BILLION (myR) 2018 - ANNUAL TURNOVER</span>
                    </div>
                    <div data-aos="fade-up" data-aos-delay="400" class="card" style="background-color: #4e96a7;color:white" >
                      <h1 class="decimal-mobile">1.6</h1>
                      <span>BILLION (myR) 2021 - ANNUAL REVENUE</span>
                    </div>

                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="company-ace">
        <div class="content-ace">
          <div class="wrap-content">
            <div class="ace-isi about">
              <div data-aos="fade-up" data-aos-delay="100" class="col-md-12">
                <div class="title-ace">
                  OUR WELL-ESTABLISHED EMPIRE
                  <span class="h-dash" style="font-weight: bold">—</span>
                </div>
              </div>

              <div
                data-aos="fade-up"
                data-aos-delay="200"
                class="col-md-12 col-sm-12"
              >
                <h1>Company structure</h1>
              </div>
              <div class="row">
                <div class="col-md-5 col-sm-5">
                  <div
                    data-aos="zoom-in-down"
                    data-aos-delay="300"
                    class="img-structure"
                  >
                   <center> <img
                      class="img-responsive circle-img-ace pulse"
                      src="{{ static_asset('aceweb') }}/assets/img/circle.png"
                      alt=""
                    />
                    </center>
                  </div>

                </div>

                <div class="col-md-7 col-sm-7">
                  <div class="line-structure">
                    <img
                      data-aos="zoom-in-down"
                      data-aos-delay="400"
                      style="width: 98%"
                      src="{{ static_asset('aceweb') }}/assets/img/line.png"
                      alt=""
                    />
                  </div>
                  <div class="child-company">
                    <div class="row">
                      <div class="col-md-3 col-sm-2">
                        <div data-aos="zoom-in-down"
                    data-aos-delay="1500" class="card ace-card-company">
                          <img class="pulse" src="{{ static_asset('aceweb') }}/assets/img/acecapital1.png" alt="" />
                          <p>ACE Capital Growth Sdn Bhd(ACE Capital)</p>
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-2">
                        <div data-aos="zoom-in-down"
                    data-aos-delay="2000" class="card ace-card-company">
                          <img class="img-responsive pulse" src="{{ static_asset('aceweb') }}/assets/img/aceikhlas1.png" alt="" />
                          <p>ACE Ikhlas Gold Sdn Bhd
(ACE Ikhlas)
</p>
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-2">
                        <div data-aos="zoom-in-down"
                    data-aos-delay="2500" class="card ace-card-company">
                          <img class="img-responsive pulse" src="{{ static_asset('aceweb') }}/assets/img/aceeasy1.png" alt="" />
                          <p>ACE Assay (M) Sdn Bhd
(ACE Assay)
</p>
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-2">
                        <div data-aos="zoom-in-down"
                    data-aos-delay="3000" class="card ace-card-company">
                          <img class="img-responsive pulse" src="{{ static_asset('aceweb') }}/assets/img/aceihsan1.png" alt="" />
                          <p>ACE Ihsan Gold Sdn Bhd
(ACE Ihsan)
</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div style="margin-top:20px" class="row img-structure-mobile">
                <div class="col-sm-12">
                  <center>
                    <div class="col-sm-12">
                    <center>
                      <div data-aos="flip-up" class="card ace-card-company aos-init aos-animate">
                        <img src="{{ static_asset('aceweb') }}/assets/img/acecapital1.png" alt="">

                      </div>
                      <p>ACE Capital Growth Sdn Bhd(ACE Capital)</p>
                    </center>
                    </div>
                  </center>
                  <center>
                    <div class="col-sm-12">
                    <center>
                      <div data-aos="flip-up" class="card ace-card-company aos-init aos-animate">
                        <img src="{{ static_asset('aceweb') }}/assets/img/aceikhlas1.png" alt="">

                      </div>
                      <p>ACE Ikhlas Gold Sdn Bhd
                        (ACE Ikhlas)</p>
                    </center>
                    </div>
                  </center>

                  <center>
                    <div class="col-sm-12">
                    <center>
                      <div data-aos="flip-up" class="card ace-card-company aos-init aos-animate">
                        <img src="{{ static_asset('aceweb') }}/assets/img/aceeasy1.png" alt="">

                      </div>
                      <p>ACE Assay (M) Sdn Bhd
                        (ACE Assay)</p>
                    </center>
                    </div>
                  </center>

                  <center>
                    <div class="col-sm-12">
                    <center>
                      <div data-aos="flip-up" class="card ace-card-company aos-init aos-animate">
                        <img src="{{ static_asset('aceweb') }}/assets/img/aceihsan1.png" alt="">

                      </div>
                      <p>ACE Ihsan Gold Sdn Bhd
                        (ACE Ihsan)</p>
                    </center>
                    </div>
                  </center>

                </div>
              </div>


              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="nonmansory2" class="gtp-solution">
        <div class="content-ace">
          <div class="wrap-content">
            <div class="ace-isi about">
              <div class="col-md-12">
                <div data-aos="fade-up" data-aos-delay="100" class="title-ace">
                  GOLD TRADING MADE EASY
                  <span class="h-dash" style="font-weight: bold">—</span>
                </div>
              </div>
              <div class="row">
                <div data-aos="fade-up" data-aos-delay="200" class="col-md-6 col-sm-6">
                  <h1>GTP Solutions The All in One Platform</h1>
                </div>
                <div class="col-md-6 col-sm-6"></div>
              </div>
              <div class="sticky-content">
                <div id="gpt0"></div>
                <div class="row">
                  <div class="col-md-6 col-sm-6"></div>
                  <div data-aos="fade-down" class="col-md-6 col-sm-6 text-content-gtp">
                    <div class="vl" style="color: #6db0da">
                      <table>
                        <th valign="top">
                          <div class="progress-container-personal">
                            <div class="progress-bar" id="progressBar"></div>
                          </div>
                        </th>
                        <th  valign="top" style="padding-left: 10px;">
                          <div id="to-progress">1/5</div>

                          <div id="title-progress">
                            Supports both B2B &amp; B2C integration
                          </div>

                          <div id="content-progress" style="color: white">
                            Our potential partners can create their own product
                            branding and launch their own digital gold program
                            with the help of our ready-made templates and API.
                          </div>
                        </th>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <center>
                     <div data-aos="fade-up"
                     data-aos-anchor-placement="bottom-center" id="myDIV" class="img-wrap-gpt">
                     <!----<div class="alert">-->
                        <!--<figure class="swing">-->
                          <img id="imggpt1" />

                        <!--</figure>-->
                       <div></div>
                      <!--</div>-->

                   </div>
                 </center>
                 <div class="gtp-po-button">
                  <center>
                      <a href="https://aceweb.kanalapps.web.id/newsroom" class="ace-button">Find Out More</a>
                    </center>
                  </div>
                 </div>
              </div>
               <div id="gtp" style="height:12500px">
                <div style="height:2500px" id="gpt1"></div>
                <div style="height:2500px" id="gpt2"></div>
                <div style="height:2500px" id="gpt3"></div>
                <div style="height:2500px" id="gpt4"></div>
                <div style="height:2500px" id="gpt5"></div>

              </div>






            </div>
          </div>
        </div>
      </section>
      <section class="gtp-patner">
        <div class="content-ace">
          <div class="wrap-content">
            <div style="padding-top: 0px" class="about">
              <div class="row">
                <div class="col-md-12" style="margin-top: 5%">
                  <div data-aos="fade-up" data-aos-delay="100" class="title-ace">
                    HONORABLE PARTNERS
                    <span class="h-dash" style="font-weight: bold">—</span>
                  </div>
                </div>
                <div data-aos="fade-up" data-aos-delay="200" class="col-md-6 col-sm-6">
                  <h1>Established trust with over 300 businesses</h1>
                </div>
                <div id="mansory" class="col-md-6 col-sm-6 sticky-mansory">
                    <!--mansory-->
                    <div class="second sec">
                        <div class="sliders-cont">
                        <div id="slider" class="col1">
                            <ul>
                              <li class="selfie-img"></li>
                              <li class="selfie-img"></li>
                              <li class="selfie-img"></li>
                              <li class="selfie-img"></li>
                            </ul>
                            </div>
                        <div id="slider" class="col2">
                            <ul>
                              <li class="selfie-img"></li>
                              <li class="selfie-img"></li>
                              <li class="selfie-img"></li>
                              <li class="selfie-img"></li>
                            </ul>
                            </div>

                        </div>
                      </div>

                    <!--END MANSORY-->
                  </div>

          </div>
        </div>
      </section>
      <section id="nonmansory" class="about-provider">
        <div data-aos="fade-up" data-aos-delay="100" class="content-ace">
          <div class="wrap-content">
            <div class="ace-isi about">
              <div class="row">
                <div class="col-md-12">
                  <div
                    data-aos="fade-up"
                    data-aos-delay="100"
                    class="title-ace"
                  >
                    SERVICE PROVIDERS
                    <span class="h-dash" style="font-weight: bold">—</span>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12">
                  <h1>In collaboration with reputable affiliates</h1>
                </div>
                <div class="col-md-6 col-sm-12">
                  <div
                    data-aos="fade-up"
                    data-aos-delay="100"
                    class="content-about"
                  >
                    <p>
                      We built relationships with trusted affiliates and
                      integrated them into our platforms. Every customer’s
                      experience on our platform will be smooth and effortless.
                    </p>
                  </div>
                </div>
              </div>
            <div class="row">
              <div id="carouselservice" class="carousel slide pointer-event" data-bs-ride="carousel">
                <div class="carousel-indicators">
                                          <button id="btn-slider" type="button" data-bs-target="#carouselservice" data-bs-slide-to="0" class="btn-slide active" aria-label="Slide 0" fdprocessedid="io38s9" aria-current="true"></button>

                              <button id="btn-slider" type="button" data-bs-target="#carouselservice" data-bs-slide-to="1" class="btn-slide" aria-label="Slide 1" fdprocessedid="ddvw"></button>
                            </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="mansory-horizontal">
                      <div data-aos="fade-up" class="item1">
                        <img src="{{ static_asset('aceweb') }}/assets/img/igr.png" alt="" />
                      </div>
                      <div data-aos="fade-up" class="item1">
                        <img src="{{ static_asset('aceweb') }}/assets/img/metalor.png" alt="" />
                      </div>
                      <div data-aos="fade-up" class="item1">
                        <img src="{{ static_asset('aceweb') }}/assets/img/mobility.png" alt="" />
                      </div>
                      <div data-aos="fade-up" class="item1">
                        <img src="{{ static_asset('aceweb') }}/assets/img/gas.png" alt="" />
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="mansory-horizontal">
                      <div data-aos="fade-up" class="item1">
                        <img src="{{ static_asset('aceweb') }}/assets/img/gas.png" alt="" />
                      </div>
                      <div data-aos="fade-up" class="item1">
                        <img src="{{ static_asset('aceweb') }}/assets/img/salihin.png" alt="" />
                      </div>
                      <div data-aos="fade-up" class="item1">
                        <img src="{{ static_asset('aceweb') }}/assets/img/metalor.png" alt="" />
                      </div>
                      <div data-aos="fade-up" class="item1">
                        <img src="{{ static_asset('aceweb') }}/assets/img/mobility.png" alt="" />
                      </div>
                    </div>
                  </div>


              </div>
              </div>
            </div>
            </div>
          </div>
        </div>
      </section>
      <section class="ace-achievements">
        <div class="content-ace">

            <div style="padding-top: 0px" class="ace-isi about">
            <div class="wrap-content">
                <div class="ace-isi-achievements">
              <div class="row">
                <div class="col-md-12">
                  <div
                    data-aos="fade-up"
                    class="title-ace aos-init aos-animate"
                  >
                    ACHIEVEMENTS
                    <span class="h-dash" style="font-weight: bold">—</span>
                  </div>
                </div>
                <div
                  data-aos="fade-up"
                  class="col-md-6 col-sm-6 aos-init aos-animate"
                >
                  <h1>Our best accomplishments</h1>
                </div>
                <div data-aos="fade-up" class="col-md-6 col-sm-6">
                  <p>
                    We proudly present the various recognitions for our digital
                    gold platform. Our outstanding achievements are based on
                    every team member's hard work and passion in providing
                    effective solutions to make one's life easier to trade gold.
                  </p>

                  <!--END MANSORY-->
                </div>
              </div>
                </div>
            </div>
            <div class="wrap-content-img-achievement">
             <div class="ace-isi-achievements-img">

                <div class="row">
                    <div id="carouselachivements" class="carousel slide pointer-event" data-bs-ride="carousel">

                        <div class="carousel-indicators">
                            @php
                                $countac = count($achievement);
                                $banyak  = $countac/4;
                                $achievements = $achievement->toArray();
                                $no = -1;
                                for ($n=0; $n < $banyak; $n++) {
                                    $no++;
                                    @endphp
                                    <button id="btn-slider" type="button" data-bs-target="#carouselachivements" data-bs-slide-to="{{ $no }}" class="btn-slide @if($no == 1)active @endif" aria-label="Slide {{ $no }}" fdprocessedid="io38s9" aria-current="true"></button>
                                    @php
                                }
                                    @endphp



                             </div>
                      <div class="carousel-inner">

                            @php
                                $countac = count($achievement);
                                $banyak  = $countac/4;
                                $achievements = $achievement->toArray();
                                $no = 0;
                                for ($n=0; $n < $banyak; $n++) {
                                    $no++;
                                    @endphp

                        <div class="carousel-item @if($no=1) active @endif">
                          <div class="row">
                                    @php
                                    foreach (array_slice($achievements, $n) as $i => $v){
                                        $last = $i-1;

                                        $description = strip_tags($v['description']);

                                        if($i < 4){

                                            @endphp

                                            <div data-aos="fade-up" data-aos-delay="{{ $i+1 }}00" class="col-md-3">
                                                <a href="{{ url('newsroom/'.$v['slug']) }}">
                                                    <div class="hover hover-1 text-white rounded"><img src="{{ asset('public/'.$v['file_name']) }}" alt="">
                                                        <div class="hover-overlay"></div>
                                                        <div class="hover-1-content px-3 py-3">
                                                            <h3 class="hover-1-title font-weight-bold mb-0"> <span class="font-weight-light">{{ $v['title'] }}</span></h3>
                                                            <p style="font-size: 1em;" class="hover-1-description font-weight-light mb-0">{{substr($description, 0, 70) . '...' }}<span><br><button onclick="window.location.href='{{url('news'.$v['slug'])}}';" class="btn-readnow-white">Read More</button></span></p>

                                                        </div>
                                                    </div>
                                                </a>
                                                </div>

                                            @php
                                        }else{
                                            $no=0;
                                        }

                                    }
                                    @endphp
                            </div>
                            <div class="achievements-arrow">
                            <button class="acecarousel-control-prev-ach" type="button" data-bs-target="#carouselachivements" data-bs-slide="prev">
                                        <span class="left-arrow-achievements" aria-hidden="true"><i class="fa fa-angle-left"></i></span>
                                        <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="acecarousel-control-next-ach" type="button" data-bs-target="#carouselachivements" data-bs-slide="next">
                                        <span class="right-arrow-achievements"><i class="fa fa-angle-right"></i></span>
                                        <span class="visually-hidden">Next</span>
                                        </button>
                            </div>
                        </div>
                                    @php
                                }
                                @endphp
                                @foreach (array_slice($achievements, 0) as $i => $v)

                                @php

                                @endphp

                                 @endforeach

                    </div>

            </div>
          </div>
            <div class="row">
              <div class="read-now-ach">
              <center>
                  <a href="{{ url('newsroom') }}" class="ace-button">Read More</a>
                </center>
              </div>
            </div>



          </div>

            </div>
          </div>
        </div>
        </div>
      </section>
      <section id="ace-testimonials-mobile" class="ace-testimonials-mobile">
        <div class="content-ace">
          <div class="wrap-content">
            <div class="ace-isi about">
               <div class="row">
            <div>
                <div data-aos="fade-up" class="col-md-12">
                  <div class="title-ace">
                    TESTIMONIALS
                    <span class="h-dash" style="font-weight: bold">—</span>
                  </div>
                </div>
                <div data-aos="fade-up" class="col-md-12 col-sm-12">
                  <h1>Why our partners love us</h1>
                </div>
            </div>

                <div data-aos="fade-up" class="col-md-12">
                  <div

                    style="position:relative;"
                    id="#myCarouseltesti"
                    class="carousel slide"
                    data-bs-ride="carousel"
                  >
                <div class="carousel-inner">
                    <div style="margin-left:10%;margin-right:15%">
                    @foreach($testimonial as $i => $v)
                      <div class="carousel-item @if($i==0) active @endif">
                        <div class="row slider-testimonials">
                          <div class="col-md-7 col-sm-7">
                            <p>
                              {!! $v->content !!}
                            </p>
                            <hr
                              style="
                                width: 84px;
                                height: 3px;
                                background: #006eb2;
                              "
                            />
                            <h5>{{ $v->person }}</h5>
                            <p>{{ $v->position }}</p>
                          </div>
                          <div class="col-md-5 col-sm-5">
                            <div class="card">
                              <img
                                style="float:right;width:100%"
                                class="img-responsive"
                                src="{{ asset('public/'.$v->file_name) }}"
                                alt=""
                              />
                            </div>
                          </div>
                        </div>
                      </div>
                    @endforeach
                    </div>



                </div>

                    <!-- <button class="acecarousel-control-prev" type="button" data-bs-target="#myCarouseltesti" data-bs-slide="prev">
                        <span style="color:#1D5189;font-size: 250%;margin-left:20px;font-weight:bold;" aria-hidden="true"><i class="fa fa-angle-left"></i></span>
                        <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="acecarousel-control-next" type="button" data-bs-target="#myCarouseltesti" data-bs-slide="next">
                        <span style="color:#1D5189;font-size: 250%;margin-right:20px;font-weight:bold;" aria-hidden="true"><i class="fa fa-angle-right"></i></span>
                        <span class="visually-hidden">Next</span>
                        </button>-->

                  </div>
                </div>

            </div>
            </div>
          </div>
        </div>
      </section>
      <section  id="ace-testimonials-desktop" class="ace-testimonials">
        <div class="content-ace">
            <div class="wrap-content">
            <div class="ace-isi about">
              <div class="row">
            <div>
                <div data-aos="fade-up" class="col-md-12">
                  <div class="title-ace">
                    TESTIMONIALS
                    <span class="h-dash" style="font-weight: bold">—</span>
                  </div>
                </div>
                <div data-aos="fade-up" class="col-md-12 col-sm-12">
                  <h1>Why our partners love us</h1>
                </div>
            </div>

                <div data-aos="fade-up" class="col-md-12">
                  <div

                    style="position:relative;margin-top:50px"
                    id="myCarouseltesti"
                    class="carousel slide"
                    data-bs-ride="carousel"
                  >
                <div class="carousel-inner">
                    <div style="margin-left:10%;margin-right:15%">
                    @foreach($testimonial as $i => $v)
                      <div class="carousel-item @if($i==0) active @endif">
                        <div class="row slider-testimonials">
                          <div class="col-md-7 col-sm-7">
                            <p>
                              {!! $v->content !!}
                            </p>
                            <hr
                              style="
                                width: 334px;
                                height: 3px;
                                background: #006eb2;
                              "
                            />
                            <h5>{{ $v->person }}</h5>
                            <p>{{ $v->position }}</p>
                          </div>
                          <div class="col-md-5 col-sm-5">
                            <div class="card">
                              <img
                                style="float:right;width:100%"
                                class="img-responsive"
                                src="{{ asset('public/'.$v->file_name) }}"
                                alt=""
                              />
                            </div>
                          </div>
                        </div>
                      </div>
                    @endforeach
                    </div>



                </div>

                     <button class="acecarousel-control-prev" type="button" data-bs-target="#myCarouseltesti" data-bs-slide="prev">
                        <span style="color:#1D5189;font-size: 250%;margin-left:20px;font-weight:bold;" aria-hidden="true"><i class="fa fa-angle-left"></i></span>
                        <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="acecarousel-control-next" type="button" data-bs-target="#myCarouseltesti" data-bs-slide="next">
                        <span style="color:#1D5189;font-size: 250%;margin-right:20px;font-weight:bold;" aria-hidden="true"><i class="fa fa-angle-right"></i></span>
                        <span class="visually-hidden">Next</span>
                        </button>

                  </div>
                </div>

            </div>
          </div>
        </div>
        </div>
      </section>
      <section class="ace-conected">

        <div class="content-ace">
            <div id="loading">
                <img src="{{ static_asset('aceweb') }}/assets/img/loading-gif.gif" alt="Loading">
            </div>
          <div class="wrap-content">
            <div class="ace-isi about">
              <div class="row">
                <div data-aos="fade-up" class="col-md-12">
                  <div class="title-ace">
                    STAY CONNECTED
                    <span class="h-dash" style="font-weight: bold">—</span>
                  </div>
                </div>
                <div data-aos="fade-up" class="col-md-6 col-sm-12">
                  <h1>Let’s get started. Be our partner today</h1>
                  <p>
                    We take pride in helping our partners to achieve their goals
                    by offering support and guidance. Be our partner today to
                    gain a life-changing experience.
                  </p>
                  <div id="alertpatner" class="alert alert-warning alert-dismissible fade show" role="alert">

                      <strong>Thanks for your Request</strong> next  you can see the reply via email


                  </div>
                </div>
                <div data-aos="fade-up" class="col-md-6 col-sm-12">
                  <div class="content-about">
                    <form id="requestpatnerform">
                        {{csrf_field()}}
                      <div class="form-group">
                        <input
                          type="text"
                          name="name"
                          class="form-control"
                          required
                          placeholder="Name *"
                        />
                      </div>
                      <div class="form-group">
                        <input
                          type="text"
                          name="numbercontact"
                          class="form-control"
                          placeholder="Contact Number *"
                          required
                        />
                      </div>
                      <div class="form-group">
                        <input
                          type="text"
                          name="email"
                          class="form-control"
                          placeholder="Email Address *"
                          required
                        />
                      </div>
                      <div class="form-group">
                        <input
                          type="text"
                          name="subject"
                          class="form-control"
                          placeholder="Subject *"
                          required
                        />
                      </div>
                      <div class="form-group">
                        <textarea
                          style="height: 20vh"
                          type="text"
                          name="message"
                          class="form-control"
                          required
                        >
Message *</textarea
                        >
                      </div>
                      <div class="form-group">
                        <button type="submit" class="ace-button-black">Get Started</a>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <!--END CONTENT-->



@endsection
