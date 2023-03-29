@extends('backend.layouts.app')

@section('content')

@php
   // CoreComponentRepository::instantiateShopRepository();
    //CoreComponentRepository::initializeCache();
@endphp
<div class="col-md-12">
<div class="card">
    <div class="card-header">
        <h5 class="mb-0 h4">{{translate('Pice Override')}}</h5>
    </div>
    <div class="col-md-4">

            <div class="card-body" style="background-color: #f5f4f4">
                <div class="row" style="display:flex">
                    <label>Current Price feed</label>
                    <input id="pricecurrent" disabled style="font-size:20px;font-weight:bold" class="form-control" value="">
                </div>
                <div class="row">
                <label>Price Override To </label>
                <input id="override" style="font-size:20px;font-weight:bold" class="form-control" oninput="validateoverride(this)">
                </div>

                <div class="row" style="justify-content:space-around;display:flex;margin-top:20px">
                    <a class="btn btn-warning right">Cancel</a>
                    <button id="saveoveride" class="btn btn-success right">Save</button>
                </div>

            </div>

    </div>
    <div class="card-footer">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Date Time</th>
                    <th>Changed By</th>
                    <th>Name</th>
                    <th>System Price</th>
                    <th>Override Price</th>

                </tr>
            </thead>
            <tbody>
                {{-- @foreach($data as $i =>$v)
                <tr>
                    <td>{{ $v->created_at }}</td>
                    <td>{{ $v->updateby }}</td>
                    <td>{{ $v->name}}</td>
                    <td>{{ $v->systemprice }}</td>
                    <td>{{ $v->overrideprice }}</td>

                </tr>

                @endforeach --}}

            </tbody>
            <tfoot>
                <tr>
                    <th>Date Time</th>
                    <th>Changed By</th>
                    <th>Name</th>
                    <th>System Price</th>
                    <th>Override Price</th>

                </tr>
            </tfoot>
        </table>
    </div>
</div>
</div>

<script src="{{ static_asset('aceweb') }}/assets/ace/realprice-back.js"></script>

<script>
    function validateoverride(input){
        var inputValue = input.value;
        inputValue = inputValue.replace(/,/g, '.');
        input.value = inputValue.replace(/[^0-9.]/g, '');
    }
</script>
<script>
    const myButton = document.getElementById("saveoveride");
    myButton.addEventListener("click", () => {
        const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-success',
    cancelButton: 'btn btn-danger'
  },
  buttonsStyling: false
})

swalWithBootstrapButtons.fire({
  title: 'Do you want to proceed to overide the price?',
  icon: 'warning',
  showCancelButton: true,
  confirmButtonText: 'Yes',
  cancelButtonText: 'No',
  reverseButtons: true
}).then((result) => {
  if (result.isConfirmed) {
     var pricecurrent = document.getElementById("pricecurrent").value;
     var override = document.getElementById("override").value;
     if(override === "" || pricecurrent === "") {
        alert("Current price feed or Price Override To it's required value");
     }else{
        $.ajax({
                headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                url: '{{ route('pricefeed.update') }}', // Replace with the URL of your server-side script
                type: 'POST',
                data: {pricecurrent: pricecurrent,override:override},
                success: function(response) {
                    console.log('Data saved successfully!');
                },
                error: function(xhr, status, error) {
                    console.log('Error saving data: ' + error);
                }
                });
     }

     //save();
  } else if (
    /* Read more about handling dismissals below */
    result.dismiss === Swal.DismissReason.cancel
  ) {
    swalWithBootstrapButtons.fire(
      'Cancelled',

    )
  }
})
    });

    function save(){

    var formData = $("#formupdateprice").serialize();

    $.ajax({
        url: '/save-data',
        type: 'POST',
        data: formData,
        success: function(response) {
            console.log(response);
        }
    });
    }
  </script>

  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="{{ asset('assets/Datatables/datatables.js')}}"></script>
<script>
    $(document).ready(function () {
    $('#example').DataTable();
});
    </script>
  <script>
    $(document).ready(function() {

      // Function to fetch and update data
      function fetchData() {
        $.ajax({
          url: "{{ route('pricefeed.json') }}",
          type: "GET",
          dataType: "json",
          success: function(data) {
            // Clear existing table data
            $("#example tbody").empty();
            // Insert new data into table dynamically
            $.each(data, function(i, item) {
                const date = new Date(item.created_at);
                // Get date
                const year = date.getFullYear();
                const month = date.getMonth() + 1;
                const day = date.getDate();

                // Get time
                const hours = date.getHours();
                const minutes = date.getMinutes();
                const seconds = date.getSeconds();

                const alldate = year+"-"+month+"-"+day+" "+hours+":"+minutes+":"+seconds+".";

              $("#example tbody").append("<tr><td>" + alldate + "</td><td>" + item.updateby + "</td><td>" + item.name + "</td><td>" + item.systemprice + "</td><td>" + item.overrideprice+ "</td></tr>");
            });
          },
          complete: function() {
            // Schedule the next request when the current one's complete
            setTimeout(fetchData, 1000);
          }
        });
      }
      // Initial call to fetch data
      fetchData();
    });
  </script>

@endsection
