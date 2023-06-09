@extends('master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <br />
        <h3 align="center">Student Data</h3>
        <br />
        @if($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>

        </div>
        @endif
        <div class="right">
            <a href="{{route('products2.create')}}" class="btn btn-primary">Add</a>
            <br />
            <br />

        </div>
        <table class="table table-bordered">
            <tr>
                <th>Product id</th>
                <th> produt name </th>
                <th> product price </th>
                <th>delete</th>

            </tr>
            @foreach($product as $row)
            <tr id="sid{{$row['id']}}">
                <td>
                    {{$row['id']}}
                </td>
                <td>{{$row['product_name']}}</td>
                <td>{{$row['product_price']}}</td>
                <td> <a href=" javascript:void(0)" onclick="deleteproduct({{$row['id']}})" class="btn btn-danger">Delete</a> </td>


            </tr>
            @endforeach
        </table>
    </div>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function deleteproduct(id) {
            if (confirm("do you want to delete this record")) {
                $.ajax({
                    url: "{{url('deleteproduct')}}",
                    method: 'POST',
                    data: {
                        id: id
                    },
                    success: function(response) {
                        $("#sid" + id).remove();
                    }
                });
            }
        }
    </script>


</div>

@endsection