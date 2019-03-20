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

              <h1 class="box-title">Supplier Details</h1>

            <!-- /.box-header -->
            <!-- form start -->
            <h3>{{$supplier->name}}</h3>
              <br>
            {{$supplier->contact_number}}
              <br>
            {{$supplier->address}}


          <!-- /.box -->

        </div>

    </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection