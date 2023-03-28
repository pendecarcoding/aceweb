@extends('backend.layouts.app')

@section('content')


<br>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <form class="" id="sort_slider" action="" method="GET">
                <div class="card-header row gutters-5">
                    <div class="col text-center text-md-left">
                        <h5 class="mb-md-0 h6">{{ translate('Investor Banner') }}</h5>
                    </div>
                </div>
                </form>
                <form action="{{ route('investor.updatebanner') }}" method="post">
                    {{ csrf_field() }}
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                        <label>Banner Image</label><br>

                        <div class="input-group" data-toggle="aizuploader" data-type="image">
                            <div class="input-group-prepend">
                                <div class="input-group-text bg-soft-secondary font-weight-medium">
                                    {{ translate('Browse')}}
                                </div>
                            </div>
                            <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                            <input type="hidden" name="types[]" value="INVESTOR_BANNER">
                            <input type="hidden" name="INVESTOR_BANNER" class="selected-files" value="{{ env('INVESTOR_BANNER') }}">
                        </div>
                        <div class="file-preview box sm">
                        </div>
                        </div>
                        <div class="col-md-6">
                            <div class="container">
                            <div class="card" style="padding:10px">
                                <div class="col-md-12">
                                    <h5 style="text-align: center;">Stock Price</h5>
                                </div>
                                <label>Last</label>
                                <input type="hidden" name="types[]" value="INVESTOR_LAST">
                                <input name="INVESTOR_LAST" value="{{ env('INVESTOR_LAST') }}" class="form-control" required>

                                <label>Change</label>
                                <input type="hidden" name="types[]" value="INVESTOR_CHANGE">
                                <input type="text" name="INVESTOR_CHANGE" value="{{ env('INVESTOR_CHANGE') }}" class="form-control" id="" required>
                                <br>

                            </div>
                        </div>


                        </div>

                    </div>

                </div>
                <div class="card-footer">
                    <button style="float:right" class="btn btn-success">Update</button>
                </div>
                </form>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card">

        </div>
    </div>
</div>



@endsection



