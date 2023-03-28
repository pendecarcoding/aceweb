@extends('backend.layouts.app')

@section('content')


<div class="card">
    <form class="" id="sort_slider" action="" method="GET">
        <div class="card-header row gutters-5">
            <div class="col text-center text-md-left">
                <h5 class="mb-md-0 h6">{{ translate('Replay Message Form Visitor ') }}</h5>
                <a href="{{ route('requestpatner.index') }}" class="btn btn-danger btn-sm" style="float:right;color:white"><i class="las la-times"></i></a>
            </div>


        </div>
        </form>
        <div class="card-body">
            <form action="">
                <div class="form-group">
                    <label>Name</label>
                    <input disabled class="form-control" type="text" value="{{ $data->name }}">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input disabled class="form-control" type="text" value="{{ $data->email }}">
                </div>
                <div class="form-group">
                    <label>Number of Contact</label>
                    <input disabled class="form-control" type="text" value="{{ $data->contact }}">
                </div>
                <div class="form-group">
                    <label>Message</label>
                    <textarea disabled class="form-control">{{ $data->message }}</textarea>
                </div>
                <hr>
                <div class="form-group">
                    <label>{{ translate('Message for the sender') }}</label>
                    <textarea class="aiz-text-editor"></textarea>
                    <p>*this first time for replay message to sender next you can check message form your email</p>
                </div>

                <div class="form-group">
                    <a style="color:white;float:right;" class="btn btn-primary btn-sm">Send</a>
                </div>

            </form>

        </div>
</div>

@endsection

