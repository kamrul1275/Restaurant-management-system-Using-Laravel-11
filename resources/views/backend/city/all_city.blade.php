@extends('backend.admin_master')



@section('admin_content')

  <!-- start page title -->
  <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">DataTables</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                            <li class="breadcrumb-item active">DataTables</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>


                            </div>



                            <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Default Datatable</h4>

                                   



<!-- modal start -->

<div>
                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#myModal">Add City</button>

                                            <!-- sample modal content -->
                                            <div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" data-bs-scroll="true" aria-hidden="true" style="display: none;">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="myModalLabel">Create City</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>

                                        <form action="{{route('store.city')}}" method="post" id="myForm" enctype="multipart/form-data">  
                                        @csrf
                                                        <div class="modal-body">


                                    <div class="row">
                                          
                                                <div>
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">City Name</label>
                                                        <input class="form-control" type="text" name="city_name" id="example-text-input">
                                                    </div>
                                                  
                                                </div>

                                        </div>
                                  
                        
                                                         
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Save changes</button>
                                                        </div>

                                           </form>

                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->
                                        </div> <!-- end preview-->
<!-- end modal -->



                                        
                                    </div>
                                    <div class="card-body">
        
                                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                            <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>city Name</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
        
        
                                            <tbody>

                                            @foreach ($cities as $key=>$iteam)

                                            <tr>
                                                <td>
                                                    {{ $key+1 }}
                                                </td>
                                                <td>
                                                    {{ $iteam->city_name }}
                                                </td>
                                                <td>
                                                    <a href="" class="btn btn-success">Edit</a>
                                                    <a href="" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                                
                                            @endforeach
                                          
                                            </tbody>
                                        </table>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row --> 




              
                        <!-- end page title -->



        



@endsection