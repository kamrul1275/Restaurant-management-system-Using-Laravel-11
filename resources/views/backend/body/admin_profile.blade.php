@extends('backend.admin_master')
@section('admin_content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


<div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Profile</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Contacts</a></li>
                                            <li class="breadcrumb-item active">Profile</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

            <div class="row">
                <div class="col-xl-9 col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm order-2 order-sm-1">
                                    <div class="d-flex align-items-start mt-3 mt-sm-0">
                                        <div class="flex-shrink-0">
                                            <div class="avatar-xl me-3">
                                                <img src="{{(!empty($profileleData->photo)) ? url('/upload/admin_image/'.$profileleData->photo) :  url('upload/no_image.jpg')}}" alt="" class="img-fluid rounded-circle d-block">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div>
                                                <h5 class="font-size-16 mb-1">{{$profileleData->name}}</h5>
                                                <p class="text-muted font-size-13">{{$profileleData->email}}</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>



                                     <!-- form start -->



            <div class="card-body p-4">
        
                <div class="row">

                <form action="{{route('admin.profile.store')}}"  method="post" enctype="multipart/form-data">

        @csrf
            
            <div class="col-lg-6">
                <div>
                    <div class="mb-3">
                        <label for="example-text-input" class="form-label">Name</label>
                        <input class="form-control" type="text" name="name" value="{{$profileleData->name}}" id="example-text-input">
                    </div>
                    <div class="mb-3">
                        <label for="example-search-input" class="form-label">Email</label>
                        <input class="form-control" type="search" name="email" value="{{$profileleData->email}}" id="example-search-input">
                    </div>
                    <div class="mb-3">
                        <label for="example-number-input" class="form-label">Number</label>
                        <input class="form-control" type="number" name="phone_number" value="{{$profileleData->phone_number}}" value="+880 " id="example-number-input">
                    </div>
               
                    
                </div>
            </div>

            <div class="col-lg-6">
                <div class="mt-3 mt-lg-0">
                   
                    <div class="mb-3">
                        <label for="example-month-input" class="form-label">Address</label>
                        <input class="form-control" type="text"  name="address" value="{{$profileleData->address}}" id="example-month-input">
                    </div>
                    <div class="mb-3">
                        <label for="example-week-input" class="form-label">Photo</label>
                        <input class="form-control" id="image" type="file" name="photo"  id="example-week-input">
                    </div>

            


                    <div class="avatar-xl me-3">
                    <img id="showImage" src="{{(!empty($profileleData->photo)) ? url('upload/admin_image/'.$profileleData->photo) :  url('upload/no_image.jpg')}}" alt="" class="img-fluid rounded-circle d-block">
                    </div>


            
                   
                </div>


            </div>

            
            <div class="col-sm-auto">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>


                </form>

        </div>
    </div>




                                  
                                    <!-- form end -->
                                    <div class="row">
                                            <div class="col-lg-6">
                                                <div>
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">Name</label>
                                                        <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
                                                    </div>
                                                  
                                                    <div class="mb-3">
                                                        <label for="example-email-input" class="form-label">Email</label>
                                                        <input class="form-control" type="email" value="bootstrap@example.com" id="example-email-input">
                                                    </div>
                                                
                                                    <div class="mb-3">
                                                        <label for="example-number-input" class="form-label">Number</label>
                                                        <input class="form-control" type="number" value="42" id="example-number-input">
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="mt-3 mt-lg-0">
                                                    <div class="mb-3">
                                                        <label for="example-date-input" class="form-label">Address</label>
                                                        <input class="form-control" type="date" value="2019-08-19" id="example-date-input">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="example-month-input" class="form-label">Image</label>
                                                        <input class="form-control" type="file" value="2019-08" id="example-month-input">
                                                    </div>
                                                    <div class="mb-3">
                                                    <img id="showImage" src="{{(!empty($profileleData->photo)) ? url('upload/admin_image/'.$profileleData->photo) :  url('upload/no_image.jpg')}}" width="100px;" height="90px;" alt="" class="img-fluid rounded-circle d-block">
                                                    </div>
                                                    
                                                    <div class="col-sm-auto">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>

            
                                                
                                                </div>
                                            </div>
                                        </div>
                        

                        
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->

        
                    <!-- end tab content -->
                </div>
                <!-- end col -->

              
                <!-- end col -->
            </div>
                        <!-- end row -->




                                   
                    </div> <!-- container-fluid -->
                </div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        })
    })
</script>

@endsection