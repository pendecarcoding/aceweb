@extends('backend.layouts.app')

@section('content')

<div class="aiz-titlebar text-left mt-2 mb-3">
    <div class="row align-items-center">
        <div class="col-auto">
            <h1 class="h3">{{translate('All Persentation')}}</h1>
        </div>
        @can('add_persentation')
            <div class="col text-right">
                <a href="{{ route('persentation.create') }}" class="btn btn-circle btn-info">
                    <span>{{translate('Add New Persentation')}}</span>
                </a>
            </div>
        @endcan
    </div>
</div>
<br>

<div class="card">
    <form class="" id="sort_downloads" action="" method="GET">
        <div class="card-header row gutters-5">
            <div class="col text-center text-md-left">
                <h5 class="mb-md-0 h6">{{ translate('All Persentation ') }}</h5>
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
                        <th data-breakpoints="lg">{{translate('Persentation')}}</th>
                        <th data-breakpoints="lg">{{translate('Date')}}</th>
                        <th data-breakpoints="lg">{{translate('file')}}</th>
                        <th data-breakpoints="lg">{{translate('total downloads')}}</th>
                        <th >{{translate('Options')}}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $i => $v)
                 <tr>
                    <td>{{ $i+1 }}</td>
                    <td>{{ $v->persentation }}</td>
                    <td>{{ $v->date }}</td>
                    <td>{{ $v->file }}</td>
                    <td>{{ $v->download }} Downloads</td>
                    <td>
                        @can('edit_persentation')
                                <a class="btn btn-soft-primary btn-icon btn-circle btn-sm"  href="{{ route('persentation.edit',base64_encode($v->id))}}" title="{{ translate('Edit') }}">
                                    <i class="las la-pen"></i>
                                </a>
                            @endcan
                            @can('delete_persentation')
                                <a  class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete" data-href="{{route('persentation.destroy', base64_encode($v->id))}}" title="{{ translate('Delete') }}">
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
