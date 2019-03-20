@extends('admin.admin-app')
@section('content')

<!-- Content Wrapper. Contains Category content -->
  <div class="content-wrapper">
    <!-- Content Header (Category header) -->
    <section class="content-header">
      <h1>
        Category Panel
        <small>- Category </small>
      </h1>
    </section>

    <!-- Main content -->
        <section class="content">    
     <div class="row">


      <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Category list</h3>
                @include('admin.partials.error_section')              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="userTable" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>Serial Number</th>
                      <th>Added By</th>
                      <th>Category Name</th>
                      <th>Category Description</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($categories as $key => $category)
                      <tr>
                        <td>{{++$key}}</td>
                        <td>{{$category->user->name}}</td>
                        <td>{{$category->name}}</td>
                        <td>{!! $category->description !!}</td>
                        <td><a href="{{route('categories.edit', ['id' => $category->id])}}"><button type="button" class="btn btn-info">Edit</button></a>


                          <a href="{{route('categories.show', ['id' => $category->id])}}"><button type="button" class="btn btn-info">Show</button></a>
                                                  
                          {{--<form id="deleteUser" action="{{route('categories.destroy', ['id' => $category->id])}}" method="post">--}}
                            {{--{{ method_field('DELETE') }}--}}
                            {{--<input type="hidden" name="_token" value="{{Session::token()}}">--}}
                            {{--<button type="submit" class="btn btn-danger f_role">Delete</button>--}}
                          {{--</form>--}}

                        </td>
                      </tr>                
                    @endforeach              
                  </tbody>

                  <tfoot>
                    <tr>
                        <th>Serial Number</th>
                        <th>Added By</th>
                        <th>Category Name</th>
                        <th>Category Description</th>
                        <th>Action</th>
                    </tr>
                  </tfoot>

              </table>
            </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection