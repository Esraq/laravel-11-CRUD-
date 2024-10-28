@extends('layouts.master')

@section('content')


<form action="{{ route('student.update',$student->id) }}" method="POST" enctype="multipart/form-data"> 

@csrf

@method('PUT')

<div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Form Basic</h6>
                </div>
                <div class="card-body">
                

                  <div class="form-group">
                      <label for="exampleInputEmail1"><b>Enter Student ID:</b></label>
                      <input type="text" name="student_id" value="{{$student->student_id}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter student id">
                        @if ($errors->first('student_id'))<div class="alert alert-danger">{!! $errors->first('student_id') !!}</div> @endif
                        </div>
                      
                    <div class="form-group">
                      <label for="exampleInputEmail1"><b>Enter Student Name:</b></label>
                      <input type="text" name="name" value="{{$student->name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter student name">
                        @if ($errors->first('name'))<div class="alert alert-danger">{!! $errors->first('name') !!}</div> @endif
                    </div>
                 


                    <div class="form-group">
                      <label for="exampleInputEmail1"><b>Enter Email address</b></label>
                      <input type="email" name="email" value="{{$student->email}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter email">
                        @if ($errors->first('email'))<div class="alert alert-danger">{!! $errors->first('email') !!}</div> @endif
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1"><b>Enter Phone Number</b></label>
                      <input type="text" name="phone" value="{{$student->phone}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter phone">
                        @if ($errors->first('phone'))<div class="alert alert-danger">{!! $errors->first('phone') !!}</div> @endif
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1"><b>Enter Address</b></label>
                      <input type="text" name="address" value="{{$student->address}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter address">
                        @if ($errors->first('address'))<div class="alert alert-danger">{!! $errors->first('address') !!}</div> @endif
                    </div>
                  
                    <div class="form-group">
                      <label for="exampleInputEmail1"><b>Enter Image</b></label>
                      <input type="file" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      <img src="/images/{{ $student->image }}" width="300px">
                         @if ($errors->first('image'))<div class="alert alert-danger">{!! $errors->first('image') !!}</div> @endif
                    </div>
                   
                
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>

              <!-- Form Sizing -->
              
</div>
          <!-- Modal Logout -->
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Are you sure you want to logout?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                  <a href="login.html" class="btn btn-primary">Logout</a>
                </div>
              </div>
            </div>
          </div>

        </div>























@endsection