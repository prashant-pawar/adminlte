@extends('layouts.adminapp')

@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Show Recods</h1>
        </div>
        <div class="col-sm-6">
          <ul class="breadcrumb float-sm-right">
            <a href="{{route('city.create')}}"><button type="button" class="btn btn-info">Create</button></a>
          </ul>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">city Table</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>city</th>
                      <th>id</th>
                      <th>action</th>


                    </tr>
                  </thead>
                  <tbody>
                      @foreach ($cities as $value)


                      <tr>
                        <td>{{$value->id}}</td>
                        <td>{{$value->city}}</td>
                        <td>
                           <a href="{{route('city.edit',$value->id)}}"> <button type="button" value="button" class="btn btn-warning">Edit</button></a>

                           <form action="{{route('city.destroy',$value->id)}}" method="POST">
                            @csrf
                            @method("DELETE")

                             <button type="submit"  class="mt-1 btn btn-danger">Delete</button>
                           </form>
                        </td>
                      </tr>
                      @endforeach
                  </tbody>
                </table>
              </div>
          </div>

        </div>

      </div>

    </div>
  </section>
@endsection
