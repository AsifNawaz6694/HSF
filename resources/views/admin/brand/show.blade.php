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

              <h1 class="box-title">Brand Details</h1>

            <!-- /.box-header -->
            <!-- form start -->
            <h3>{{$brand->name}}</h3>
              <br>
            {!! $brand->description !!}


          <!-- /.box -->

        </div>

    </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection