@extends('frontend.layouts.app2')

@section('content')
    <section class="bg-banner">
        <img title="Ace Innovate upbeat on prospects as investors seek safe havens" style="width:100%;height: 30vh;"
            src="https://aceweb.kanalapps.web.id/public/aceweb/assets/img/product-banner.png" alt="">
    </section>
    <section class="pt-5 mb-4">
        <div class="ace-content">
            <div class="row">
                <div class="col-xl-8 mx-auto">
                    <div class="row aiz-steps arrow-divider">
                        <a href="{{ url('our_products/view/cart') }}">
                            <div class="col done">
                                <div class="text-center text-success">
                                    <i class="la-3x mb-2 las la-shopping-cart"></i>
                                    <h3 class="fs-14 fw-600 d-none d-lg-block ">{{ translate('1. My Cart') }}</h3>
                                </div>
                            </div>
                        </a>
                        <div class="col active">
                            <div class="text-center text-primary">
                                <i class="la-3x mb-2 las la-map"></i>
                                <h3 class="fs-14 fw-600 d-none d-lg-block ">{{ translate('2. Shipping info') }}</h3>
                            </div>
                        </div>
                        <div class="col">
                            <div class="text-center">
                                <i class="la-3x mb-2 opacity-50 las la-truck"></i>
                                <h3 class="fs-14 fw-600 d-none d-lg-block opacity-50 ">{{ translate('3. Delivery info') }}
                                </h3>
                            </div>
                        </div>
                        <div class="col">
                            <div class="text-center">
                                <i class="la-3x mb-2 opacity-50 las la-credit-card"></i>
                                <h3 class="fs-14 fw-600 d-none d-lg-block opacity-50 ">{{ translate('4. Payment') }}</h3>
                            </div>
                        </div>
                        <div class="col">
                            <div class="text-center">
                                <i class="la-3x mb-2 opacity-50 las la-check-circle"></i>
                                <h3 class="fs-14 fw-600 d-none d-lg-block opacity-50 ">{{ translate('5. Confirmation') }}
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-4 gry-bg">
        <div class="ace-content">
            <div class="row cols-xs-space cols-sm-space cols-md-space">
                <div class="col-xxl-8 col-xl-10 mx-auto">
                    <!--<form class="form-default" data-toggle="validator" action="{{ route('checkout.store_shipping_infostore') }}" role="form" method="POST">
                        @csrf

                            <div class="shadow-sm bg-white p-4 rounded mb-4">
                                <div class="row gutters-5">

                                        <div class="col-md-6 mb-3">
                                            <label class="aiz-megabox d-block bg-white mb-0">

                                                <span class="d-flex p-3 aiz-megabox-elem">
                                                    <span class="aiz-rounded-check flex-shrink-0 mt-1"></span>
                                                    <span class="flex-grow-1 pl-3 text-left">
                                                        <div>
                                                            <span class="opacity-60">{{ translate('Address') }}:</span>
                                                            <span class="fw-600 ml-2"></span>
                                                        </div>
                                                        <div>
                                                            <span class="opacity-60">{{ translate('Postal Code') }}:</span>
                                                            <span class="fw-600 ml-2"></span>
                                                        </div>
                                                        <div>
                                                            <span class="opacity-60">{{ translate('City') }}:</span>
                                                            <span class="fw-600 ml-2"></span>
                                                        </div>
                                                        <div>
                                                            <span class="opacity-60">{{ translate('State') }}:</span>
                                                            <span class="fw-600 ml-2"></span>
                                                        </div>
                                                        <div>
                                                            <span class="opacity-60">{{ translate('Country') }}:</span>
                                                            <span class="fw-600 ml-2"></span>
                                                        </div>
                                                        <div>
                                                            <span class="opacity-60">{{ translate('Phone') }}:</span>
                                                            <span class="fw-600 ml-2"></span>
                                                        </div>
                                                    </span>
                                                </span>
                                            </label>
                                            <div class="dropdown position-absolute right-0 top-0">
                                                <button class="btn bg-gray px-2" type="button" data-toggle="dropdown">
                                                    <i class="la la-ellipsis-v"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item">
                                                        {{ translate('Edit') }}
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                    <input type="hidden" name="checkout_type" value="logged">
                                    <div class="col-md-6 mx-auto mb-3" >
                                        <div class="border p-3 rounded mb-3 c-pointer text-center bg-white h-100 d-flex flex-column justify-content-center" onclick="add_new_address()">
                                            <i class="las la-plus la-2x mb-3"></i>
                                            <div class="alpha-7">{{ translate('Add New Address') }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <div class="row align-items-center">
                            <div class="col-md-6 text-center text-md-left order-1 order-md-0">
                                <a href="{{ route('home') }}" class="btn btn-link">
                                    <i class="las la-arrow-left"></i>
                                    {{ translate('Return to shop') }}
                                </a>
                            </div>
                            <div class="col-md-6 text-center text-md-right">
                                <button type="submit" class="btn btn-primary fw-600">{{ translate('Continue to Delivery Info') }}</a>
                            </div>
                        </div>
                    </form>-->

                    <form class="form-default" role="form" action="{{ route('checkout.add_address') }}" method="POST">
                        @csrf
                        <div class="shadow-lg bg-white p-4 p-lg-4 rounded text-left">
                            <div class="p-3">
                                <div class="row">
                                    <div class="col-md-2">
                                        <label>{{ translate('Name') }}</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control mb-3" name="name" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <label>{{ translate('Address') }}</label>
                                    </div>
                                    <div class="col-md-10">
                                        <textarea class="form-control mb-3" placeholder="{{ translate('Your Address') }}" rows="2" name="address"
                                            required></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <label>{{ translate('Country') }}</label>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="mb-3">
                                            <select class="form-control aiz-selectpicker" data-live-search="true"
                                                data-placeholder="{{ translate('Select your country') }}"
                                                name="country_id" required>
                                                <option value="">{{ translate('Select your country') }}</option>
                                                @foreach (\App\Models\Country::where('status', 1)->get() as $key => $country)
                                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-2">
                                        <label>{{ translate('State') }}</label>
                                    </div>
                                    <div class="col-md-10">
                                        <select class="form-control mb-3 aiz-selectpicker" data-live-search="true"
                                            name="state_id" required>

                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-2">
                                        <label>{{ translate('City') }}</label>
                                    </div>
                                    <div class="col-md-10">
                                        <select class="form-control mb-3 aiz-selectpicker" data-live-search="true"
                                            name="city_id" required>

                                        </select>
                                    </div>
                                </div>

                                @if (get_setting('google_map') == 1)
                                    <div class="row">
                                        <input id="searchInput" class="controls" type="text"
                                            placeholder="{{ translate('Enter a location') }}">
                                        <div id="map"></div>
                                        <ul id="geoData">
                                            <li style="display: none;">Full Address: <span id="location"></span></li>
                                            <li style="display: none;">Postal Code: <span id="postal_code"></span></li>
                                            <li style="display: none;">Country: <span id="country"></span></li>
                                            <li style="display: none;">Latitude: <span id="lat"></span></li>
                                            <li style="display: none;">Longitude: <span id="lon"></span></li>
                                        </ul>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-2" id="">
                                            <label for="exampleInputuname">Longitude</label>
                                        </div>
                                        <div class="col-md-10" id="">
                                            <input type="text" class="form-control mb-3" id="longitude"
                                                name="longitude" readonly="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2" id="">
                                            <label for="exampleInputuname">Latitude</label>
                                        </div>
                                        <div class="col-md-10" id="">
                                            <input type="text" class="form-control mb-3" id="latitude"
                                                name="latitude" readonly="">
                                        </div>
                                    </div>
                                @endif

                                <div class="row">
                                    <div class="col-md-2">
                                        <label>{{ translate('Postal code') }}</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control mb-3"
                                            placeholder="{{ translate('Your Postal Code') }}" name="postal_code"
                                            value="" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <label>{{ translate('Email') }}</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control mb-3" name="email" value=""
                                            required>
                                            <p style="font-style: italic;line-height: 0px;color:red">* {{ translate('please provide correct email') }} </p>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <label>{{ translate('Phone') }}</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control mb-3"
                                            placeholder="{{ translate('+880') }}" name="phone" value=""
                                            required>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-md-6 text-center text-md-left order-1 order-md-0">
                                        <a href="{{ url('our_products') }}" class="btn btn-link">
                                            <i class="las la-arrow-left"></i>
                                            Return to shop
                                        </a>
                                    </div>
                                    <div class="col-md-6 text-center text-md-right">

                                        <button type="submit" class="btn btn-primary fw-600">
                                            Continue to Delivery
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script type="text/javascript">
        function add_new_address() {
            $('#new-address-modal').modal('show');
        }

        function edit_address(address) {
            var url = '{{ route('addresses.edit', ':id') }}';
            url = url.replace(':id', address);

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: url,
                type: 'GET',
                success: function(response) {
                    $('#edit_modal_body').html(response.html);
                    $('#edit-address-modal').modal('show');
                    AIZ.plugins.bootstrapSelect('refresh');

                    @if (get_setting('google_map') == 1)
                        var lat = -33.8688;
                        var long = 151.2195;

                        if (response.data.address_data.latitude && response.data.address_data.longitude) {
                            lat = parseFloat(response.data.address_data.latitude);
                            long = parseFloat(response.data.address_data.longitude);
                        }

                        initialize(lat, long, 'edit_');
                    @endif
                }
            });
        }

        $(document).on('change', '[name=country_id]', function() {
            var country_id = $(this).val();
            get_states(country_id);
        });

        $(document).on('change', '[name=state_id]', function() {
            var state_id = $(this).val();
            get_city(state_id);
        });

        function get_states(country_id) {
            $('[name="state"]').html("");
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ route('get-state') }}",
                type: 'POST',
                data: {
                    country_id: country_id
                },
                success: function(response) {
                    var obj = JSON.parse(response);
                    if (obj != '') {
                        $('[name="state_id"]').html(obj);
                        AIZ.plugins.bootstrapSelect('refresh');
                    }
                }
            });
        }

        function get_city(state_id) {
            $('[name="city"]').html("");
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ route('get-city') }}",
                type: 'POST',
                data: {
                    state_id: state_id
                },
                success: function(response) {
                    var obj = JSON.parse(response);
                    if (obj != '') {
                        $('[name="city_id"]').html(obj);
                        AIZ.plugins.bootstrapSelect('refresh');
                    }
                }
            });
        }
    </script>


    @if (get_setting('google_map') == 1)
        @include('frontend.partials.google_map')
    @endif
@endsection
