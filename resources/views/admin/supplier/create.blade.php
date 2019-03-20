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
                  <label for="exampleInputEmail1">Product Heading</label>
                  <input type="text" class="form-control" name="heading" id="" value="" placeholder="Enter Product Heading">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Content</label>
                      <textarea name="content" id="editor1" rows="10" cols="60"></textarea>
                </div>

    
<!--            <div class="form-group">
                  <label for="exampleInputEmail1">Role Display name</label>
                  <input type="text" class="form-control" name="display_name" id="exampleInputEmail2" placeholder="Enter Role display name">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Role Description</label>
                  <input type="text" class="form-control" name="description" id="exampleInputPassword3" placeholder="Description">
                </div> -->

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