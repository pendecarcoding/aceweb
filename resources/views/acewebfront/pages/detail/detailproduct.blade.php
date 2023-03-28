@extends('acewebfront.layouts')
@section('content')
<main>
    <style>
        .geeks {
            width: 300px;
            height: 300px;
            overflow: hidden;
            margin: 0 auto;
        }

        .geeks img {
            width: 100%;
            transition: 0.5s all ease-in-out;
        }

        .geeks:hover img {
            transform: scale(2.5);
        }
    </style>

      <section class="gtp-anouncements">
        <div class="content-ace">
          <div class="wrap-content">
            <div style="padding-top: 0px" class="ace-isi about">
              <div class="col-md-12" style="margin-top: 20%">
                <div data-aos="fade-up" class="title-ace">
                  Detail PRODUCTS
                  <span class="h-dash" style="font-weight: bold">—</span>
                </div>
              </div>
              <div data-aos="fade-up" class="col-md-12 col-sm-12">
                <a
                  href="{{ url('our_products') }}"
                  style="float: right"
                  class="btn btn-danger"
                  ><i class="fa fa-times"></i
                ></a>
                <h1 style="font-size: 2vw">
                  {{ $data->name }}
                </h1>
              </div>

              <div class="row">
                <div class="col-md-4 col-sm-12 col-lg-4">
                  <div class="w3-container">
                    <h2></h2>
                  </div>

                  <br />
                   @php $img = explode(',',$data->photos);
                    $noa = 0;
                    @endphp
                    @foreach($img as $vimgs)
                    @php $noas = $noa++; @endphp
                  <div
                    id="{{ $vimgs }}"
                    class="picture w3-display-container geeks"
                    @if($noas == '0') style="display:block" @else style="display:none" @endif
                  >
                    <img
                      src="{{ getimage($vimgs) }}"
                      alt="{{ $vimgs }}"
                      style="width: 100%"
                    />


                    <div
                      class="w3-display-bottomleft w3-container w3-padding w3-text-white"
                    >

                    </div>
                  </div>
                  @endforeach


                  <br />
                  <div class="w3-row-padding">
                    @php $img = explode(',',$data->photos);
                    $no = 1;
                    @endphp
                    @foreach($img as $vimg)
                    <div class="w3-col s3 w3-container">
                      <a
                        href="javascript:void(0)"
                        class="w3-hover-opacity"
                        onclick="openImg('{{ $vimg }}');"
                      >
                        <img
                          src="{{ getimage($vimg) }}"
                          alt="{{ $vimg }}"
                          style="width: 100%"
                        />
                      </a>
                    </div>
                    @endforeach

                  </div>
                  <center>
                    <h2 style="font-weight: bold">RM{{ $data->unit_price }}</h2>

                    <p>this price realtime from ace</p>
                  </center>
                </div>
                <div class="col-md-8 col-sm-12 col-lg-8">
                  <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                      <button
                        class="nav-link active"
                        id="nav-home-tab"
                        data-bs-toggle="tab"
                        data-bs-target="#nav-home"
                        type="button"
                        role="tab"
                        aria-controls="nav-home"
                        aria-selected="true"
                      >
                        Description
                      </button>
                    </div>
                  </nav>
                  <div
                    style="text-align: justify"
                    class="tab-content"
                    id="nav-tabContent"
                  >
                    <div
                      class="tab-pane fade show active"
                      id="nav-home"
                      role="tabpanel"
                      aria-labelledby="nav-home-tab"
                      tabindex="0"
                    >
                       {!! $data->description !!}
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
                    <div
                      class="tab-pane fade"
                      id="nav-profile"
                      role="tabpanel"
                      aria-labelledby="nav-profile-tab"
                      tabindex="0"
                    >
                      ...
                    </div>
                    <div
                      class="tab-pane fade"
                      id="nav-contact"
                      role="tabpanel"
                      aria-labelledby="nav-contact-tab"
                      tabindex="0"
                    >
                      ...
                    </div>
                    <div
                      class="tab-pane fade"
                      id="nav-disabled"
                      role="tabpanel"
                      aria-labelledby="nav-disabled-tab"
                      tabindex="0"
                    >
                      ...
                    </div>
                  </div>
                  <a data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="float:right" class="btn btn-success">ORDER NOW</a>
                </div>
              </div>
            </div>
          </div>
        </div>


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel"><b>Order Information</b></h5>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">X</button>
      </div>
      <div class="modal-body">
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="address-tab" data-bs-toggle="tab" data-bs-target="#address" type="button" role="tab" aria-controls="address" aria-selected="true">Shiping Info</button>
  </li>

  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="address-tab" data-bs-toggle="tab" data-bs-target="#address" type="button" role="tab" aria-controls="address" aria-selected="true">Personal Info</button>
  </li>

  <li class="nav-item" role="presentation">
    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Payment</button>
  </li>
</ul>
 <form action="">
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="address" role="tabpanel" aria-labelledby="address-tab">
   <div class="container">

            <div class="form-group">
                <label>Address</label>
                <textarea class="form-control" name="address"></textarea>
            </div>
            <div class="form-group">
                <label>State</label>
                <select class="form-control" name="select">
                    <option value="">--Select State--</option>
                </select>
            </div>
            <div class="form-group">
                <label>City</label>
                <select class="form-control" name="city">
                    <option value="">--Select City--</option>
                </select>
            </div>
            <div class="form-group">
                <label>Postal Code</label>
                <input style="height: 50px;" type="text" class="form-control">
            </div>

    </div>
  </div>

  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
</div>
      </div>
      <div class="modal-footer">

        <button style="background-color: #264e77" type="button" class="btn btn-primary">Process Order</button>
      </div>
    </div>
    </form>
  </div>
</div>
      </section>
    </main>
<script>
      function openImg(imgName) {
        var i, x;
        x = document.getElementsByClassName("picture");
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";
        }
        document.getElementById(imgName).style.display = "block";
      }
    </script>

@endsection
