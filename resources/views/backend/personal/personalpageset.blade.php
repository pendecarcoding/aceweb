@extends('backend.layouts.app')

@section('content')


<br>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <form class="" id="sort_slider" action="" method="GET">
                <div class="card-header row gutters-5">
                    <div class="col text-center text-md-left">
                        <h5 class="mb-md-0 h6">{{ translate('Personal Page Set ') }}</h5>
                    </div>
                </div>
                </form>
                <form action="{{ route('personaltestimonial.updatebanner') }}" method="post">
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
                            <input type="hidden" name="types[]" value="PERSONAL_IMAGE">
                            <input type="hidden" name="PERSONAL_IMAGE" class="selected-files" value="{{ env('PERSONAL_IMAGE') }}">
                        </div>
                        <div class="file-preview box sm">
                        </div>
                        </div>
                        <div class="col-md-6">
                            <label>Title Caption</label>
                            <input type="hidden" name="types[]" value="PERSONAL_TITLE_CAPTION">
                            <textarea style="height:10vh" name="PERSONAL_TITLE_CAPTION" class="form-control">{{ env('PERSONAL_TITLE_CAPTION') }}</textarea>

                            <label>Sub Caption</label>
                            <input type="hidden" name="types[]" value="PERSONAL_SUB_TITLE_CAPTION">
                            <input type="text" name="PERSONAL_SUB_TITLE_CAPTION" value="{{ env('PERSONAL_SUB_TITLE_CAPTION') }}" class="form-control" id="">
                            <br>

                            <button style="float:right" class="btn btn-success">Update</button>
                        </div>
                    </div>

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



