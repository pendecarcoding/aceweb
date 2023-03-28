@extends('backend.layouts.app')

@section('content')


<div class="card">
    <form class="" id="sort_slider" action="" method="GET">
        <div class="card-header row gutters-5">
            <div class="col text-center text-md-left">
                <h5 class="mb-md-0 h6">{{ translate('All Request Become Patner ') }}</h5>
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
                        <th data-breakpoints="lg">{{translate('Name')}}</th>
                        <th data-breakpoints="lg">{{translate('Email')}}</th>
                        <th data-breakpoints="lg">{{translate('Contact Number')}}</th>
                        <th data-breakpoints="lg">{{translate('Subject')}}</th>
                        <th class="text-right">{{translate('Options')}}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $i => $v)
                    <tr>
                        <td>{{ $i+1 }}</td>
                        <td>{{ $v->name }}</td>
                        <td>{{ $v->email }}</td>
                        <td>{{ $v->contact }}</td>
                        <td>{{ $v->subject }}</td>
                        <td>
                            <a class="btn btn-soft-primary btn-icon btn-circle btn-sm" href="" title="Edit">
                                <i class="las la-eye"></i>
                            </a>
                            <a href="{{ url('/admin/requestpatner/viewmessage/'.base64_encode($v->id))}}" class="btn btn-soft-danger btn-icon btn-circle btn-sm" href="" title="Edit">
                                <i class="las la-paper-plane"></i>
                            </a>
                            <a href="https://wa.me/{{ $v->contact }}?text='HI'" class="btn btn-success btn-icon btn-circle btn-sm" href="" title="Edit">
                                <i class="lab la-whatsapp"></i>
                            </a>

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
