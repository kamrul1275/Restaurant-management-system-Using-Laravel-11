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
                        <!-- end page title -->



                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                
                                    <div class="card-body">
        
                                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                            <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Category Name</th>
                                                <th>Image</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
        
        
                                            <tbody>

                                            @foreach ($categories as $key=> $iteam)

                                            <tr>
                                                <td>{{$key+1}}</td>
                                                <td>{{ $iteam->category_name}} </td>
                                                <td>
                                                @if($iteam->category_image)
                                                    <img src="{{ asset($iteam->category_image) }}" alt="{{ $iteam->category_name }}" width="80" height="80">
                                                @else
                                                    No Image
                                                @endif
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



@endsection