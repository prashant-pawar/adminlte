@extends('layouts.adminapp')

@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>General Form</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">General Form</li>
          </ol>
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
              <h3 class="card-title">Quick Example</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->

            <form method="post" action="{{route('student.store')}}">
                @csrf

              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Name:</label>
                  <input type="text" class="form-control" name="name"  placeholder="Enter name">

                @error('name')

                <div class="mt-1 alert alert-danger">{{$message}}</div>
                  @enderror
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Enrollment_no:</label>
                  <input type="text" class="form-control" name="enrollment_no" placeholder="enrollment_no">

                  @error('enrollment_no')

                  <div class="mt-1 alert alert-danger">{{$message}}</div>
                  @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Roll_no:</label>
                    <input type="text" class="form-control" name="roll_no" placeholder="roll_no">

                    @error('roll_no')

                    <div class="mt-1 alert alert-danger">{{$message}}</div>
                  @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Mobile_no:</label>
                    <input type="text" class="form-control" name="mobile" placeholder="mobile">

                    @error('mobile')

                    <div class="mt-1 alert alert-danger">{{$message}}</div>
                  @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email:</label>
                    <input type="text" class="form-control" name="email" placeholder="email">

                    @error('email')

                    <div class="mt-1 alert alert-danger">{{$message}}</div>
                  @enderror
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">City:</label>
                    <input type="text" class="form-control" name="city" placeholder="city">

                    @error('city')

                    <div class="mt-1 alert alert-danger">{{$message}}</div>
                  @enderror
                  </div>


              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>

        </div>

      </div>

    </div>
  </section>
@endsection
