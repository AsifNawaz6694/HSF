@extends('admin.admin-app')
@section('content')

<!-- Content Wrapper. Contains Supplier content -->
  <div class="content-wrapper">
    <!-- Content Header (Supplier header) -->
    <section class="content-header">
      <h1>
        Supplier Panel
        <small>- Edit Supplier</small>
      </h1>
    </section>

    <!-- Main content -->
        <section class="content">
     <div class="row">
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Supplier</h3>
                @include('admin.partials.error_section')
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{route('suppliers.update', ['id' => $supplier->id])}}"  method="post">
              {{ method_field('PUT') }}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Supplier Name</label>
                  <input type="text" class="form-control" name="name" id="" placeholder="Enter Supplier name" value="{{$supplier->name}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Supplier Contact Number</label>
                  <input type="text" class="form-control" name="contact_number" id="" placeholder="Enter Supplier name" value="{{$supplier->contact_number}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Supplier Address</label>
                  <input type="text" class="form-control" name="address" id="" placeholder="Enter Supplier name" value="{{$supplier->address}}">
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="hidden" name="_token" value="{{Session::token()}}">
                <button type="submit" class="btn btn-primary">Edit Page</button>
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