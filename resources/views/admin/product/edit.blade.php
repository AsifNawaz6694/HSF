@extends('admin.admin-app')
@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Product header) -->
    <section class="content-header">
      <h1>
        Product Panel
        <small>- Edit Product</small>
      </h1>
    </section>

    <!-- Main content -->
        <section class="content">
     <div class="row">
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Product</h3>
                @include('admin.partials.error_section')
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{route('products.update', ['id' => $product->id])}}"  method="post">
              {{ method_field('PUT') }}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Product Name</label>
                  <input type="text" class="form-control" name="name" id="" placeholder="Enter Product name" value="{{$product->name}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Product Brand</label>
                  <select name="brand_id" class="form-control">
                    @foreach($brands as $brand)
                      <option value="{{$brand->id}}" @if($brand->id==$product->brand_id) selected @endif>{{$brand->name}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Product Category</label>
                  <select name="category_id" class="form-control">
                    @foreach($categories as $category)
                      <option value="{{$category->id}}" @if($category->id==$product->category_id) selected @endif>{{$category->name}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Added By</label>
                  <input type="text" class="form-control" name="name" id="" placeholder="Enter Product name" value="{{$product->user->name}}" readonly="">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Supplier</label>
                  <select name="category_id" class="form-control">
                    @foreach($suppliers as $supllier)
                      <option value="{{$supllier->id}}" @if($supllier->id==$product->supllier_id) selected @endif>{{$supllier->name}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <input type="hidden" name="_token" value="{{Session::token()}}">
                <button type="submit" class="btn btn-primary">Edit Product</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

        </div>

    </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection