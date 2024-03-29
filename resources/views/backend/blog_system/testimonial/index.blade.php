@extends('backend.layouts.app')

@section('content')

<div class="aiz-titlebar text-left mt-2 mb-3">
    <div class="row align-items-center">
        <div class="col-auto">
            <h1 class="h3">{{translate('All Testimonial')}}</h1>
        </div>
        @can('add_testimonial')
            <div class="col text-right">
                <a href="{{ route('testimonial.create') }}" class="btn btn-circle btn-info">
                    <span>{{translate('Add New Testimonial')}}</span>
                </a>
            </div>
        @endcan
    </div>
</div>
<br>

<div class="card">
    <form class="" id="sort_testimonial" action="" method="GET">
        <div class="card-header row gutters-5">
            <div class="col text-center text-md-left">
                <h5 class="mb-md-0 h6">{{ translate('All Testimonial ') }}</h5>
            </div>

            <div class="col-md-2">
                <div class="form-group mb-0">
                    <input type="text" class="form-control form-control-sm" id="search" name="search"@isset($sort_search) value="{{ $sort_search }}" @endisset placeholder="{{ translate('Type & Enter') }}">
                </div>
            </div>
        </div>
        </form>
        <div class="card-body">
            <table class="table mb-0 aiz-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th data-breakpoints="lg">{{translate('Image')}}</th>
                        <th data-breakpoints="lg">{{translate('Person')}}</th>
                        <th data-breakpoints="lg">{{translate('Position')}}</th>
                        <th data-breakpoints="lg">{{translate('content')}}</th>
                        <th class="text-right">{{translate('Options')}}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $i => $v)
                    <tr>
                        <td>{{ $i+1 }}</td>
                        <td><img style="width:30%" src="{{ asset('public/'.$v->file_name) }}"></td>
                        <td>{{ $v->person }}</td>
                        <td>{{ $v->position }}</td>
                        <td>{{ $v->content }}</td>
                        <td>
                             @can('edit_testimonial')
                                <a class="btn btn-soft-primary btn-icon btn-circle btn-sm"  href="{{ route('testimonial.edit',base64_encode($v->id))}}" title="{{ translate('Edit') }}">
                                    <i class="las la-pen"></i>
                                </a>
                            @endcan
                            @can('delete_testimonial')
                                <a href="#" class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete" data-href="{{route('testimonial.destroy', $v->id)}}" title="{{ translate('Delete') }}">
                                    <i class="las la-trash"></i>
                                </a>
                            @endcan
                        </td>
                    </tr>
                    @endforeach


                </tbody>
            </table>
            <div class="aiz-pagination">

            </div>
        </div>
</div>

@endsection

@section('modal')
    @include('modals.delete_modal')
@endsection


@section('script')

    <script type="text/javascript">
        function change_status(el){
            var status = 0;
            if(el.checked){
                var status = 1;
            }
            $.post('{{ route('blog.change-status') }}', {_token:'{{ csrf_token() }}', id:el.value, status:status}, function(data){
                if(data == 1){
                    AIZ.plugins.notify('success', '{{ translate('Change blog status successfully') }}');
                }
                else{
                    AIZ.plugins.notify('danger', '{{ translate('Something went wrong') }}');
                }
            });
        }
    </script>

@endsection
