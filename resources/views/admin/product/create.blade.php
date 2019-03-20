@extends('admin.admin-app')
@section('content')

<!-- Content Wrapper. Contains Product content -->
  <div class="content-wrapper">
    <!-- Content Header (Product header) -->
    <section class="content-header">
      <h1>
        Product Panel
        <small>- Add Product</small>
      </h1>
    </section>

    <!-- Main content -->
        <section class="content">
     <div class="row">
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Product</h3>
              @include('admin.partials.error_section')
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{route('products.store')}}" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Product Name</label>
                  <input type="text" class="form-control" name="name" id="" value="" placeholder="Enter Product Name">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Product Category</label>
                  <select name="category_id" class="form-control" id="">
                    <option value="0">Select Category</option>
                      @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                      @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Product Brand</label>
                  <select name="category_id" class="form-control" id="">
                    <option value="0">Select Brand</option>
                      @foreach($brands as $brand)
                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                      @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Product Supplier</label>
                  <select name="category_id" class="form-control" id="">
                    <option value="0">Select Supplier</option>
                      @foreach($suppliers as $supplier)
                        <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                      @endforeach
                  </select>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="hidden" name="_token" value="{{Session::token()}}">
                <button type="submit" class="btn btn-primary">Add Product</button>
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