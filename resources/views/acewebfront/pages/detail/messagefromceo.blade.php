@extends('acewebfront.layouts')
@section('content')
@section('title', $data->title)
    <main>
        <section class="ace-investor">
            <div data-aos="fade-up" class="aos-init aos-animate">
                <div class="col-md-12">
                    <div class="banner-static">
                        <img class="img-responsive"
                            src="https://aceweb.kanalapps.web.id/public/aceweb/assets/img/banner-newsrom.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section style="margin-top: 2vh;" class="gtp-anouncements">
            <div class="content-ace">
                <div class="wrap-content">
                    <div style="padding-top: 0px" class="ace-isi">
                        <div class="row">
                            <div class="col-md-8 col-sm-8 col-lg-8">
                                <div data-aos="fade-up" class="title-ace">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="{{ url('/') }}">Home</a>
                                        </li>
                                        <li class="breadcrumb-item active">
                                            <a href="{{ url('investor_relations') }}">Investor Relations</a>
                                        </li>
                                        <li class="breadcrumb-item active">
                                            Message from the CEO
                                        </li>
                                    </ol>
                                </div>
                                <h1>{{ $data->title }}</h1>
                                <hr class="gold" />
                                <div class="dlab-post-media">
                                    <a href="{{ getimage($data->image) }}"><img title="{{ $data->title }}"
                                            style="width:100%" class="img-responsive" src="{{ getimage($data->image) }}"
                                            alt="" /></a>
                                    <div class="caption p-a10">
                                        <small>{{ $data->title }}</small>
                                    </div>
                                </div>
                                <div class="dlab-post-text isiku">
                                    <div style="text-align: justify">
                                        <div class="sharethis-inline-share-buttons m-b10 st-justified st-has-labels st-inline-share-buttons st-animated"
                                            id="st-1">
                                            <div class="st-total st-hidden">
                                                <span class="st-label"></span>
                                                <span class="st-shares"> Shares </span>
                                            </div>
                                            <div class="st-btn st-first" data-network="facebook"
                                                style="display: inline-block">
                                                <img alt="facebook sharing button"
                                                    src="https://platform-cdn.sharethis.com/img/facebook.svg" />
                                                <span class="st-label">Share</span>
                                            </div>
                                            <div class="st-btn" data-network="twitter" style="display: inline-block">
                                                <img alt="twitter sharing button"
                                                    src="https://platform-cdn.sharethis.com/img/twitter.svg" />
                                                <span class="st-label">Tweet</span>
                                            </div>
                                            <div class="st-btn" data-network="whatsapp" style="display: inline-block">
                                                <img alt="whatsapp sharing button"
                                                    src="https://platform-cdn.sharethis.com/img/whatsapp.svg" />
                                                <span class="st-label">Share</span>
                                            </div>
                                            <div class="st-btn" data-network="telegram" style="display: inline-block">
                                                <img alt="telegram sharing button"
                                                    src="https://platform-cdn.sharethis.com/img/telegram.svg" />
                                                <span class="st-label">Share</span>
                                            </div>
                                            <div class="st-btn st-last st-remove-label" data-network="googlebookmarks"
                                                style="display: inline-block">
                                                <img alt="googlebookmarks sharing button"
                                                    src="https://platform-cdn.sharethis.com/img/googlebookmarks.svg" />
                                                <span class="st-label">Mark</span>
                                            </div>
                                        </div>
                                        {!! $data->content !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12 col-lg-4">
                                @include('acewebfront.widget.right')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
