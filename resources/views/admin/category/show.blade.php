@extends('admin.admin-app')
@section('content')

<!-- Content Wrapper. Contains Category content -->
  <div class="content-wrapper">
    <!-- Content Header (Category header) -->
    <section class="content-header">
      <h1>
        Category Panel
        <small>- Add Category</small>
      </h1>
    </section>

    <!-- Main content -->
        <section class="content">
     <div class="row">
        <div class="col-md-12">
          <!-- general form elements -->

              <h1 class="box-title">Category Details</h1>

            <!-- /.box-header -->
            <!-- form start -->
            <h3>{{$category->name}}</h3>
              <br>
            {!! $category->description !!}


          <!-- /.box -->

        </div>

    </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection