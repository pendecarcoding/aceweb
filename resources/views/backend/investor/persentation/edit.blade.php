@extends('backend.layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-8 mx-auto">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0 h6">{{translate('Persentation Information')}}</h5>
                <a style="float:right" href="{{ route('persentation.index') }}" class="btn btn-danger">X</a>
            </div>
            <div class="card-body">
                <form id="add_form" class="form-horizontal" action="{{ route('persentation.update',base64_encode($data->id)) }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">
                            {{translate('Name Persentation')}}
                            <span class="text-danger">*</span>
                        </label>
                        <div class="col-md-9">
                            <input type="text" value="{{ $data->persentation }}" placeholder="{{translate('Name Persentation')}}" onkeyup="makeSlug(this.value)" id="name" name="name" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-from-label">
                            {{translate('Date')}}
                        </label>
                        <div class="col-md-9">

                            <input type="date" name="date" value="{{ $data->date }}" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-from-label">
                            {{translate('File')}}
                        </label>
                        <div class="col-md-9">
                             <a href="{{ asset('public/download/persentation').'/'.$data->file }}">{{ $data->file }}</a>
                            <input type="file" name="file" class="form-control">
                            <input type="hidden" name="fileold" value="{{ $data->file }}">
                        </div>
                    </div>




                    <div class="form-group mb-0 text-right">
                        <button type="submit" class="btn btn-primary">
                            {{translate('Save')}}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
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
