@extends('acewebfront.layouts')

@section('content')
<main>
      <section id="ace-investor-banner-desktop"  class="ace-investor-banner">
        <div class="row-personal">
            <div id="desktop-banner" class="col-md-9 col-sm-12 col-lg-9">
              <img class="img-responsive-investor" src="{{ getimage(env('INVESTOR_BANNER')) }}" alt="">
              <div class="container">
                <div class="carousel-caption text-start">
                  <h1 class="h1-investor-banner">Half Yearly Results as at @php $created = explode(' ',$announcementnew->created_at); print $created[0] @endphp </h1>
                  <a href="{{url('announcements/'.$announcementnew->slug)}}" class="btn btn-lg btn-read-now-banner-investor">Read Now</a>
                </div>
              </div>
            </div>

            <div class="col-md-3 col-sm-12 col-lg-3">
              <div class="investor-number">

                <table data-aos="fade-up" data-aos-delay="300" class="stock-price-investor">
                  <thead>
                    <tr>
                      <th class="text-center"><div class="title-price-investor">Stock Price (Real Time)</div></center></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td valign="top" class="text-center">26 May 2022 17:47:43
                        <br>
                        <div class="content-last-investor"></div>
                        <div class="last-title-price">Last</div>
                        <div class="value-last-investor">{{ env('INVESTOR_LAST') }}</div>
                      </td>
                    </tr>
                  </tbody>
                </table>

                <table data-aos="fade-up" data-aos-delay="400" class="stock-change-investor">
                  <tbody>
                     <tr>
                        <td class="text-center" valign="top" style="padding-top: 20px;padding-left: 20px;padding-right: 20px;">
                          <div class="last-title-price">Change</div>
                          <div class="value-last-investor">{{ env('INVESTOR_CHANGE') }}</div>
                          <div class="stock-code-market">Market: LEAP Market
                            Sector: Industrial Products & Services
                            Stock Code: 03028</div>
                        </td>
                     </tr>
                     <tr>

                </tbody>
                </table>
              </div>

            </div>
          </div>
      </section>

      <section id="ace-investor-banner-mobile">
        <div class="row-personal">
          <div  class="col-md-12 col-sm-12 col-lg-9">
            <img class="img-responsive-investor" src="https://aceweb.kanalapps.web.id/public/aceweb/assets/img/buisnismen.png" alt="">
            <div class="container">
              <div class="carousel-caption text-start">
                <h1 class="h1-investor-banner">Half Yearly Results as at @php $created = explode(' ',$announcementnew->created_at); print $created[0] @endphp</h1>
                <a href="{{url('announcements/'.$announcementnew->slug)}}" class="btn btn-lg btn-read-now-banner-investor">Read Now</a>
              </div>
            </div>
          </div>

          <div class="col-md-12 col-sm-12 col-lg-3">
            <div class="investor-number">

              <table data-aos="fade-up" data-aos-delay="300" class="stock-price-investor">
                <thead>
                  <tr>
                    <th class="text-center"><div class="title-price-investor">Stock Price (Real Time)</div></center></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td valign="top" class="text-center">26 May 2022 17:47:43
                      <br>
                      <div class="content-last-investor"></div>
                      <div class="last-title-price">Last</div>
                      <div class="value-last-investor">0.350</div>
                    </td>
                  </tr>
                </tbody>
              </table>

              <table data-aos="fade-up" data-aos-delay="400" class="stock-change-investor">
                <tbody>
                   <tr>
                      <td class="text-center" valign="top" style="padding-top: 20px;padding-left: 20px;padding-right: 20px;">
                        <div class="last-title-price">Change</div>
                        <div class="value-last-investor">+0.020</div>
                        <div class="stock-code-market">Market: LEAP Market
                          Sector: Industrial Products & Services
                          Stock Code: 03028</div>
                      </td>
                   </tr>
                   <tr>

              </tbody>
              </table>
            </div>

          </div>
        </div>
      </section>

      <section data-aos="fade-up" data-aos-delay="500" class="anouncements-gpt">
        <div class="content-ace">
          <div class="wrap-content">
            <div style="padding-top: 0px" class="ace-isi about">
              <div class="row">
                <div class="col-md-12" style="margin-top: 5%">
                  <div class="title-ace">
                    LATEST
                    <span class="h-dash" style="font-weight: bold">—</span>
                  </div>
                </div>
                <div class="col-md-12 col-sm-12">
                  <h1>Company announcements</h1>
                </div>
                <div class="list-anouncements">
                  <div class="col-md-12">
                    @foreach($announcement as $i => $v)
                    <a href="{{ url('announcements/'.$v->slug) }}">
                    <div
                      style="margin: 20px"
                      class="item_direction row-personals"
                    >
                      <div style="margin-right: 50px">{{ $v->created_at }}</div>
                      <div>
                        {{ $v->title }}
                      </div>
                    </div>
                    </a>
                    @endforeach

                  </div>
                </div>

                <center>
                  <a data-aos="fade-up" class="btn-ace-black">View All</a>
                </center>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="gtp-download">
        <div class="content-ace">
          <div class="wrap-content">
            <div class="ace-isi about">
              <div class="row">

                <div data-aos="fade-up" class="col-md-12 col-sm-12">

                  <div class="row">
                    <div class="col-md-8 col-lg-8 col-sm-12">
                      <div class="title-ace">
                        DOWNLOAD
                        <span class="h-dash" style="font-weight: bold">—</span>
                      </div>
                      <h1>Investor relations information</h1>
                    </div>
                  </div>

                </div>
                <div class="row">
                  <div class="col-md-12 col-sm-12">
                    <div
                      style="position: sticky"
                      id="myCarousel"
                      class="carousel slide"
                      data-bs-ride="carousel"
                    >
                    <div class="investor-download">
                      <div class="carousel-inner">
                        <div data-aos="fade-up" class="carousel-item active">
                        @foreach($download as $i => $v)
                            <a href="{{ asset('public/download').'/'.$v->file }}" class="ace-button-blue"
                              ><i class="fa fa-download"></i> {{ $v->namefile }}</a
                            >
                        @endforeach


                        </div>

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

                        <div class="indicator-providers">

                            <button id="btn-slider" type="button" data-bs-target="#myCarouselprovider" data-bs-slide-to="0" aria-current="true" aria-label="Slide 1" style="background-color: #264e77;width:50px" class="btn-slider-active"></button>
                            <button id="btn-slider" type="button" data-bs-target="#myCarouselprovider" data-bs-slide-to="1" aria-label="Slide 2" style="background-color: #264e77;width:5px" class="btn-slider"></button>

                        </div>

                    </div>

                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </section>
      <section data-aos="fade-up" class="ace-insight">
        <div class="content-ace">
          <div class="wrap-content">
            <div class="ace-isi about">
              <div class="row">
                <div class="col-md-12">
                  <div class="title-ace">
                    ADDITIONAL
                    <span class="h-dash" style="font-weight: bold">—</span>
                  </div>
                </div>
                <div class="col-md-12 col-sm-12">
                  <h1>Investor relations newsroom</h1>
                </div>
              </div>
                <div
                  data-aos="fade-up"
                  style="margin-top: 40px; text-decoration: none"
                  class="row"
                >
              <div class="col-md-4">
                    <a href="{{ url('investor_relations/message_from_ceo') }}">
                      <div>
                        <img
                          class="img-responsive-news rounded"
                          src="{{ static_asset('aceweb') }}/assets/img/r1.png"
                          alt=""
                        />
                        <p>Message from the CEO</p>
                      </div>
                    </a>
                  </div>
                  <div class="col-md-4">
                    <a href="{{ url('investor_relations/'.$irkey['slug']) }}">
                      <div>
                        <img
                          class="img-responsive-news rounded"
                          src="{{ static_asset('aceweb') }}/assets/img/r2.png"
                          alt=""
                        />
                        <p>{{ $irkey->title }}</p>
                      </div>
                    </a>
                  </div>
                  <div class="col-md-4">
                    <a href="{{ url('investor_relations/'.$shareholder['slug']) }}">
                      <div>
                        <img
                          class="img-responsive-news rounded"
                          src="{{ static_asset('aceweb') }}/assets/img/r3.png"
                          alt=""
                        />
                        <p>{{ $shareholder->title }}</p>
                      </div>
                    </a>
                  </div>
                  <div class="col-md-4">
                    <a href="detailinvestor.html">
                      <div>
                        <img
                          class="img-responsive-news rounded"
                          src="{{ static_asset('aceweb') }}/assets/img/r4.png"
                          alt=""
                        />
                        <p>IR Events: Presentations</p>
                      </div>
                    </a>
                  </div>
                  <div class="col-md-4">
                    <a href="{{ url('investor_relations/All-Persentations') }}">
                      <div>
                        <img
                          class="img-responsive-news rounded"
                          src="{{ static_asset('aceweb') }}/assets/img/r5.png"
                          alt=""
                        />
                        <p>IR Presentations</p>
                      </div>
                    </a>
                  </div>

                </div>

            </div>
          </div>
        </div>
      </section>
    </main>

@endsection
