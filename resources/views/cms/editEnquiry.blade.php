@include('cms.partial._header')
@include('cms.partial._navigation')

            <div class="content-page">
                <div class="content">
                    <!-- Start Content-->
                    <div class="container-fluid">
                        <div class="row page-title">
                            <div class="col-md-12">
                                <nav aria-label="breadcrumb" class="float-right mt-1">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="forms-basic.html#">Shreyu</a></li>
                                        <li class="breadcrumb-item"><a href="forms-basic.html#">Forms</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Basic</li>
                                    </ol>
                                </nav>
                                <h4 class="mb-1 mt-0">Basic Forms</h4>
                            </div>
                        </div>
                        
                        
                       

                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5>Enquiry</h5>
                                        <span>Edit Enquiry</span>
                                        <form class="theme-form" action="/updateEnquiry" method="POST">   
                                            @csrf  
                                           <div class="form-group row mb-3">
                                                <label for="inputEmail3" class="col-3 col-form-label"> Customer Id</label>
                                                <div class="col-9">
                                                    <input type="number" class="form-control" id="inputEmail3" required name='customer_id'placeholder="enter customer id "  value="{{$enquiries->customer_id}}">
                                                </div>
                                           </div>
                                            <div class="form-group row mb-3">
                                                <label for="inputEmail3" class="col-3 col-form-label">Customer Name </label>
                                                <div class="col-9">
                                                    <input type="text" class="form-control" id="inputEmail3" required name='customer_name'placeholder="enter customer name"  value="{{$enquiries->customer_name}}">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-3">
                                                <label for="inputPassword3" class="col-3 col-form-label">Messege</label>
                                                <div class="col-9">
                                                    <input type="text" class="form-control" id="inputPassword3" required name='messege' placeholder="enter messege"  value="{{$enquiries->messege}}">
                                                </div>
                                            </div>
                                           
                  
                                            <div class="form-group mb-0 justify-content-end row">
                                                <div class="col-9">
                                                    <button class="btn btn-primary">Update</button>  
                                                    
                                                    <button class="btn btn-secondary">Cancel</button>
                                                  
                                                </div>
                                            </div>
                                        </form>

                                    </div>  <!-- end card-body -->
                                </div>  <!-- end card -->
                            </div>  <!-- end col -->

                        </div>
                        <!-- end row -->

                        

        @include('cms.partial._footer')
