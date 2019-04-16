@extends('admin.admin-app')
@section('content')

<!-- Content Wrapper. Contains Supplier content -->
  <div class="content-wrapper">
    <!-- Content Header (Supplier header) -->
    <section class="content-header">
      <h1>
        Supplier Panel
        <small>- Suppliers </small>
      </h1>
    </section>

    <!-- Main content -->
        <section class="content">    
     <div class="row">


      <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Supplier list</h3>
                @include('admin.partials.error_section')              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="userTable" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                        <th>Serial No</th>
                        <th>Added By</th>
                        <th>Name</th>
                        <th>Contact No.</th>
                        <th>Address</th>
                        <th>Deals In</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($suppliers as $key => $supplier)
                      <tr>
                        <td>{{++$key}}</td>
                        <td>{{$supplier->user->name}}</td>
                        <td>{{$supplier->name}}</td>
                        <td>{{$supplier->contact_number}}</td>
                        <td>{{$supplier->address}}</td>
                        <td>{{$supplier->deals_in}}</td>
                        <td><a href="{{route('suppliers.edit', ['id' => $supplier->id])}}"><button type="button" class="btn btn-info">Edit</button></a>
                          <a href="{{route('suppliers.show', ['id' => $supplier->id])}}"><button type="button" class="btn btn-info">Show</button></a>
                          {{--<form id="deleteUser" action="{{route('suppliers.destroy', ['id' => $supplier->id])}}" method="post">--}}
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
                        <th>Serial No</th>
                        <th>Added By</th>
                        <th>Name</th>
                        <th>Contact No.</th>
                        <th>Address</th>
                        <th>Deals In</th>
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