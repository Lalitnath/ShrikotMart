@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Create Products</h1>


    <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">Product Name</label>
            <input type="text" name="name" id="" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Description</label>
            <textarea class="form-control" name="description" id="" rows="3"></textarea>

        </div>

        <div class="form-group">
            <label for="">Category</label>
            <input type="text" name="category" id="" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Stock</label>
            <input type="text" name="stock" id="" class="form-control">

        <div class="form-group">
          <label for="">Regular Price</label>
          <input type="text" name="regular_price" id="" class="form-control">

        </div>
        <div class="form-group">
            <label for="">Sale Price</label>
            <input type="text" name="sale_price" id="" class="form-control">
          </div>

        <div class="form-group">
          <label for="">Cover image</label>
          <input type="file" class="form-control-file" name="cover_img" id="" placeholder="" aria-describedby="fileHelpId">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>




@endsection
