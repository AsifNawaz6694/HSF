@extends('admin.admin-app')
@section('content')

<!-- Content Wrapper. Contains Product content -->
  <div class="content-wrapper">
    <!-- Content Header (Product header) -->
    <section class="content-header">
      <h1>
        Product Panel
        <small>- Products </small>
      </h1>
    </section>

    <!-- Main content -->
        <section class="content">    
     <div class="row">


      <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Product list</h3>
                @include('admin.partials.error_section')              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="userTable" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>Serial Number</th>
                      <th>Name</th>
                      <th>Category</th>
                      <th>Brand</th>
                      <th>Supplier</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($products as $key => $product)
                      <tr>
                        <td>{{$key}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->name}}</td>
                        <td><a href="{{route('products.edit', ['id' => $product->id])}}"><button type="button" class="btn btn-info">Edit</button></a>


                          <a href="{{route('products.show', ['id' => $product->id])}}"><button type="button" class="btn btn-info">Show</button></a>
                                                  
                          <form id="deleteUser" action="{{route('products.destroy', ['id' => $product->id])}}" method="post">
                            {{ method_field('DELETE') }}
                            <input type="hidden" name="_token" value="{{Session::token()}}">
                            <button type="submit" class="btn btn-danger f_role">Delete</button>
                          </form>

                        </td>
                      </tr>                
                    @endforeach              
                  </tbody>

                  <tfoot>
                    <tr>
                        <th>Serial Number</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Brand</th>
                        <th>Supplier</th>
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