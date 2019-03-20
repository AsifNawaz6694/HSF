@extends('admin.admin-app')
@section('content')

<!-- Content Wrapper. Contains Brand content -->
  <div class="content-wrapper">
    <!-- Content Header (Brand header) -->
    <section class="content-header">
      <h1>
        Brand Panel
        <small>- Add Brand</small>
      </h1>
    </section>

    <!-- Main content -->
        <section class="content">
     <div class="row">
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Brand</h3>
              @include('admin.partials.error_section')
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{route('brands.store')}}" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Brand Name</label>
                  <input type="text" class="form-control" name="name" id="" value="" placeholder="Enter Brand Name">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Brand Description</label>
                      <textarea name="description" id="editor1" rows="10" cols="60"></textarea>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="hidden" name="_token" value="{{Session::token()}}">
                <button type="submit" class="btn btn-primary">Add Brand</button>
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