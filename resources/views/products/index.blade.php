@extends('layouts.app')

@section('content')
<div class="container">
        <h2 class="text-center">Welcome to Shrikot Mart</h2>
<a  class="btn btn-primary mb-3" href="{{route('products.create')}}" role="button">Create</a>




    <h1>All Products</h1>


    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Regular Price</th>
                    <th>Sale Price</th>
                    <th>Description</th>
                    <th>Stock</th>
                    <th>Category</th>
                  <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                      <tr>
                        <td scope="row">{{$product->name}}</td>
                    <td>{{$product->regular_price}} </td>
                    <td>{{$product->sale_price}} </td>
                    <td>{{$product->description}} </td>
                    <td>{{$product->stock}} </td>
                    <td>{{$product->Category}} </td>

                    <td>
                    <img width="300" height="200" src="{{asset('storage/'. $product->cover_img)}}" alt="Product Image">
                    </td>

                    <td>

                        <a class="btn btn-primary btn-sm" href="">show</a>

                        <a class="btn btn-primary btn-sm" href="">edit</a>

                        <form style="display:inline-block" action="" method="post">


                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>

                    </td>
                </tr>

                @endforeach


            </tbody>
        </table>

    </div>


</div>
@endsection
