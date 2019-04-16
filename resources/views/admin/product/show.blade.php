@extends('admin.admin-app')
@section('content')

<!-- Content Wrapper. Contains page content -->
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

              <h1 class="box-title">Product Details</h1>

            <!-- /.box-header -->
            <!-- form start -->
            <h3>
            <h5 style="font: bold;">Product Name</h5> {{$product->name}}</h3>
            <h5 style="font: bold;">Brand Name</h5> {{$product->brand->name}}
            <h5 style="font: bold;">Category Name</h5> {{$product->category->name}}
            <h5 style="font: bold;">Added By</h5> {{$product->user->name}}
            <h5 style="font: bold;">Supplier Name</h5> {{$product->supplier->name}}
                        
          <!-- /.box -->

        </div>

    </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection