@extends('backend.layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-8 mx-auto">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0 h6">{{translate('Slider Information')}}</h5>
                <a href="{{ route('slider.index') }}" style="float:right" class="btn btn-danger">x</a>

            </div>
            <div class="card-body">
                <form id="add_form" class="form-horizontal" action="{{ route('slider.update',$slider->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">
                            {{translate('Caption Slider')}}
                            <span class="text-danger">*</span>
                        </label>
                        <div class="col-md-9">
                            <input  value="{{ $slider->caption }}" type="text" placeholder="{{translate('Caption Slider')}}" onkeyup="makeSlug(this.value)" id="caption" name="caption" class="form-control" required>
                        </div>
                    </div>



                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">{{translate('Sub Caption')}}
                            <span class="text-danger">*</span></label>
                        <div class="col-md-9">
                            <input value="{{ $slider->sub_caption }}" type="text" placeholder="{{translate('Sub caption')}}" name="sub_caption" id="sub_caption" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="signinSrEmail">
                            {{translate('Banner')}}
                            <small>(1300x650)</small>
                        </label>
                        <div class="col-md-9">
                            <div class="input-group" data-toggle="aizuploader" data-type="image">
                                <div class="input-group-prepend">
                                    <div class="input-group-text bg-soft-secondary font-weight-medium">
                                        {{ translate('Browse')}}
                                    </div>
                                </div>
                                <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                <input type="hidden" name="banner" class="selected-files" value="{{ $slider->image }}">
                            </div>
                            <div class="file-preview box sm">
                            </div>
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
