@extends('admin.admin-app')
@section('content')

<!-- Content Wrapper. Contains Supplier content -->
  <div class="content-wrapper">
    <!-- Content Header (Supplier header) -->
    <section class="content-header">
      <h1>
        Supplier Panel
        <small>- Add Supplier</small>
      </h1>
    </section>

    <!-- Main content -->
        <section class="content">
     <div class="row">
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Supplier</h3>
              @include('admin.partials.error_section')
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{route('suppliers.store')}}" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Supplier Name</label>
                  <input type="text" class="form-control" name="name" id="" value="" placeholder="Enter Supplier Heading">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Supplier Contact Number</label>
                  <input type="text" class="form-control" name="contact_number" id="" value="" placeholder="Enter Supplier Contact Number">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Supplier Address</label>
                  <input type="text" class="form-control" name="address" id="" value="" placeholder="Enter Supplier Heading">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="hidden" name="_token" value="{{Session::token()}}">
                <button type="submit" class="btn btn-primary">Add Supplier</button>
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