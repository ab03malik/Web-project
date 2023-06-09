@extends('master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <br />

        <h3 align="center">Add data</h3>
        <br />
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
                @endforeach
            </ul>

        </div>
        @endif
        @if(\Session::has('success'))
        <div class="alert alert-success">
            <p>{{\Session::get('success')}}</p>
        </div>

        @endif
        <form method="post" action="{{url('products2')}}" enctype="multipart/form-data">
            {{csrf_field()}}

            <div class="form-group">
                <label for="">choose product image</label>
                <input type="file" name="product_image">

            </div>


            <div class="form-group">
                <input type="text" name="product_name" class="form-control" placeholder="enter the name of product" />

            </div>
            <div class="form-group">
                <input type="numeric" name="product_price" class="form-control" placeholder="enter the price of product" />

            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" />
            </div>

        </form>
    </div>

</div>

@endsection