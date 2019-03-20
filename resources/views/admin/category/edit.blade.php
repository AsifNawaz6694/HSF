@extends('admin.admin-app')
@section('content')

<!-- Content Wrapper. Contains Category content -->
  <div class="content-wrapper">
    <!-- Content Header (Category header) -->
    <section class="content-header">
      <h1>
        Category Panel
        <small>- Edit Category</small>
      </h1>
    </section>

    <!-- Main content -->
        <section class="content">
     <div class="row">
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Category</h3>
                @include('admin.partials.error_section')
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{route('categories.update', ['id' => $category->id])}}"  method="post">
              {{ method_field('PUT') }}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Category Name</label>
                  <input type="text" class="form-control" name="name" id="" placeholder="Enter Category name" value="{{$category->name}}">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Content</label>
                      <textarea name="description" id="editor1" rows="10" cols="60">{{$category->description}}</textarea>
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="hidden" name="_token" value="{{Session::token()}}">
                <button type="submit" class="btn btn-primary">Edit Category</button>
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