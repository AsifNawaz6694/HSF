@extends('admin.admin-app')
@section('content')

<!-- Content Wrapper. Contains Brand content -->
  <div class="content-wrapper">
    <!-- Content Header (Brand header) -->
    <section class="content-header">
      <h1>
        Brand Panel
        <small>- Brand </small>
      </h1>
    </section>

    <!-- Main content -->
        <section class="content">    
     <div class="row">


      <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Brand list</h3>
                @include('admin.partials.error_section')              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="userTable" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>Serial Number</th>
                      <th>Added By</th>
                      <th>Brand Name</th>
                      <th>Brand Description</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($brands as $key => $brand)
                      <tr>
                        <td>{{++$key}}</td>
                        <td>{{$brand->user->name}}</td>
                        <td>{{$brand->name}}</td>
                        <td>{!! $brand->description !!}</td>
                        <td><a href="{{route('brands.edit', ['id' => $brand->id])}}"><button type="button" class="btn btn-info">Edit</button></a>


                          <a href="{{route('brands.show', ['id' => $brand->id])}}"><button type="button" class="btn btn-info">Show</button></a>
                                                  
                          {{--<form id="deleteUser" action="{{route('brands.destroy', ['id' => $brand->id])}}" method="post">--}}
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
                        <th>Brand Name</th>
                        <th>Brand Description</th>
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