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
                           
                            <form action="{{route('store.category')}}" method="post" id="myForm" enctype="multipart/form-data">  
                                @csrf

                                    <div class="row">
                                            <div class="col-lg-6">
                                                <div>
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">Category Name</label>
                                                        <input class="form-control" type="text" name="category_name" id="example-text-input">
                                                    </div>
                                                  
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="mt-3 mt-lg-0">
                                            
                                                    <div class="mb-3">
                                                        <label for="example-month-input" class="form-label">Image</label>
                                                        <input class="form-control" type="file" name="category_image"  id="example-month-input">
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
                             </form>
                        
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



<script type="text/javascript">
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                category_name: {
                    required : true,
                }, 

                category_image: {
                    required : true,
                }, 
                
            },
            messages :{
                field_name: {
                    required : 'Please Enter FieldName',
                }, 
                 

                field_name: {
                    required : 'Please Enter Image',
                }, 
                 

            },
            errorElement : 'span', 
            errorPlacement: function (error,element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight : function(element, errorClass, validClass){
                $(element).addClass('is-invalid');
            },
            unhighlight : function(element, errorClass, validClass){
                $(element).removeClass('is-invalid');
            },
        });
    });
    
</script>

@endsection