@include('frontend.dashboard.header')
      
      <section class="section pt-4 pb-4 osahan-account-page">
         <div class="container">
            <div class="row">
               <div class="col-md-3">
                 


@include('frontend.dashboard.saidbar')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

               </div>
               <div class="col-md-9">
                  <div class="osahan-account-page-right rounded shadow-sm bg-white p-4 h-100">
                     <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                           <h4 class="font-weight-bold mt-0 mb-4">User Profile</h4>
                           <div class="bg-white card mb-4 order-list shadow-sm">
                              <div class="gold-members p-4">
                                 <a href="#">
                                    <div class="media">
                                       <img class="mr-4" src="{{asset('frontend/img/3.jpg')}}" alt="Generic placeholder image">
                                       <div class="media-body">
                                          <span class="float-right text-info">Delivered on Mon, Nov 12, 7:18 PM <i class="icofont-check-circled text-success"></i></span>
                                          <h6 class="mb-2">
                               
   @php
      $id = Auth::user()->id;
      $profileData = App\Models\User::find($id);
   @endphp   

                                          <div class="row">
                                            <div class="col-lg-6">
                                                <div>
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">Name</label>
                                                        <input class="form-control" type="text" value="{{$profileData->name}}" id="example-text-input">
                                                    </div>
                                                  
                                                    <div class="mb-3">
                                                        <label for="example-email-input" class="form-label">Email</label>
                                                        <input class="form-control" type="email" value="{{$profileData->email}}" id="example-email-input">
                                                    </div>
                                                
                                                    <div class="mb-3">
                                                        <label for="example-number-input" class="form-label">Number</label>
                                                        <input class="form-control" type="number" value="{{$profileData->phone_number}}" id="example-number-input">
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="mt-3 mt-lg-0">
                                                    <div class="mb-3">
                                                        <label for="example-date-input" class="form-label">Address</label>
                                                        <input class="form-control" type="text" value="2019-08-19" id="example-date-input">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="example-month-input" class="form-label">Image</label>
                                                        <input class="form-control" type="file" value="2019-08" id="example-month-input">
                                                    </div>
                                                    <div class="mb-3">
                                                    <img id="showImage" src="{{(!empty($profileData->photo)) ? url('upload/admin_image/'.$profileData->photo) :  url('upload/no_image.jpg')}}" width="100px;" height="90px;" alt="" class="img-fluid rounded-circle d-block">
                                                    </div>
                                                    
                                                    <div class="col-sm-auto">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>

            
                                                
                                                </div>
                                            </div>
                                        </div>
                        
                                 </div>
                                 </div>
                                 </a>
                              </div>
                           </div>
                        
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      
      <section class="section pt-5 pb-5 text-center bg-white">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h5 class="m-0">Operate food store or restaurants? <a href="login.html">Work With Us</a></h5>
               </div>
            </div>
         </div>
      </section>
   
@include('frontend.dashboard.footer')

     

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