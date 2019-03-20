@extends('admin.admin-app')
@section('content')

<!-- Content Wrapper. Contains Brand content -->
  <div class="content-wrapper">
    <!-- Content Header (Brand header) -->
    <section class="content-header">
      <h1>
        Brand Panel
        <small>- Edit Brand</small>
      </h1>
    </section>

    <!-- Main content -->
        <section class="content">
     <div class="row">
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Brand</h3>
                @include('admin.partials.error_section')
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{route('brands.update', ['id' => $brand->id])}}"  method="post">
              {{ method_field('PUT') }}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Brand Name</label>
                  <input type="text" class="form-control" name="name" id="" placeholder="Enter Brand name" value="{{$brand->name}}">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Content</label>
                      <textarea name="description" id="editor1" rows="10" cols="60">{{$brand->description}}</textarea>
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="hidden" name="_token" value="{{Session::token()}}">
                <button type="submit" class="btn btn-primary">Edit Brand</button>
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