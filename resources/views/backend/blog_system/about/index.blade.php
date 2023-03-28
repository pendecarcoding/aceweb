@extends('backend.layouts.app')

@section('content')

<br>

<div class="col-md-12">
    <div class="card">

        <div class="card-header row gutters-5">
            <div class="col text-center text-md-left">
                <h5 class="mb-md-0 h6">{{ translate('About ACE ') }}</h5>
            </div>


        </div>
        <form action="{{ route('about.change-status') }}" method="post">
        {{ csrf_field() }}

        <div class="row">
            <div class="col-md-4">
                <div class="card-body">
                    <div class="container">
                    <div class="form-group row">

                        <div class="col-md-12">
                            <div class="input-group" data-toggle="aizuploader" data-type="image">
                                <div class="input-group-prepend">
                                    <div class="input-group-text bg-soft-secondary font-weight-medium">
                                        {{ translate('Browse')}}
                                    </div>
                                </div>
                                <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                <input type="hidden" name="types[]" value="ABOUT_IMG">
                                <input type="hidden" name="ABOUT_IMG" class="selected-files" value="{{ env('ABOUT_IMG') }}">
                            </div>
                            <div class="file-preview box sm">
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <input type="hidden" name="types[]" value="ABOUT_DESCRIPTION">

                    <textarea name="ABOUT_DESCRIPTION" style="height:20vh;"
                        class="form-control">{{ env('ABOUT_DESCRIPTION') }}</textarea>
                </div>
            </div>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <label>Employes</label>
                    <input type="hidden" name="types[]" value="ABOUT_COUNT_EMPLOYE">
                    <input name="ABOUT_COUNT_EMPLOYE" type="text" value="{{ env('ABOUT_COUNT_EMPLOYE') }}" class="form-control">
                </div>
                <div class="col-md-3">
                    <label>Clients</label>
                    <input type="hidden" name="types[]" value="ABOUT_COUNT_CLIENTS">
                    <input name="ABOUT_COUNT_CLIENTS" type="text" value="{{ env('ABOUT_COUNT_CLIENTS') }}" class="form-control">
                </div>

                <div class="col-md-3">
                    <label>Annoual Trun Over</label>
                    <input type="hidden" name="types[]" value="ABOUT_COUNT_ANNUAL_TRUNOVER">
                    <input name="ABOUT_COUNT_ANNUAL_TRUNOVER"  value="{{ env('ABOUT_COUNT_ANNUAL_TRUNOVER') }}" type="text" class="form-control">
                </div>
                <div class="col-md-3">
                    <label>Annual Revenue</label>
                    <input type="hidden" name="types[]" value="ABOUT_COUNT_ANNUAL_REVENEUE">
                    <input name="ABOUT_COUNT_ANNUAL_REVENEUE" value="{{ env('ABOUT_COUNT_ANNUAL_REVENEUE') }}" type="text" class="form-control">
                </div>
            </div>


        </div>

        <div class="card-footer">

            <div style="float:100%">
                <button type="submit" class="btn btn-primary">
                    Save
                </button>
            </div>
        </div>

    </form>





    </div>
</div>
<div class="card">




</div>




@endsection
@section('script')
<script>
    function makeSlug(val) {
        let str = val;
        let output = str.replace(/\s+/g, '-').toLowerCase();
        $('#slug').val(output);
    }
</script>
@endsection
