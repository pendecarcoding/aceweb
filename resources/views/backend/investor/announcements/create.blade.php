@extends('backend.layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-8 mx-auto">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0 h6">{{translate('Announcements Information')}}</h5>
                <a style="float:right" href="{{ route('announcements.index') }}" class="btn btn-danger">X</a>
            </div>
            <div class="card-body">
                <form id="add_form" class="form-horizontal" action="{{ route('announcements.store') }}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">
                            {{translate('Title')}}
                            <span class="text-danger">*</span>
                        </label>
                        <div class="col-md-9">
                            <input type="text" placeholder="{{translate('Title Announcements')}}" onkeyup="makeSlug(this.value)" id="caption" name="title" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-from-label">
                            {{translate('Description')}}
                        </label>
                        <div class="col-md-9">
                            <textarea class="aiz-text-editor" name="description"></textarea>
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
