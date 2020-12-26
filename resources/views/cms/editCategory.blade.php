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
                        
                       

                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5>Category</h5>
                                        <span>Add Category</span>                                   
                                           
                                    
                                        <form class="form-horizontal" action="/updateCategory" method="POST">
                                            @csrf 

                                            <div class="form-group row mb-3">
                                                <label for="inputEmail3" class="col-3 col-form-label"> Id</label>
                                                <div class="col-9">
                                                    <input type="number" class="form-control" id="inputEmail3"   hidden  required name='id'placeholder="enter category id"  value="{{$categories->id}}">
                                                </div>
                                            </div>

                                            <div class="form-group row mb-3">
                                                <label for="inputEmail3" class="col-3 col-form-label"> Name</label>
                                                <div class="col-9">
                                                    <input type="text" class="form-control" id="inputEmail3" required name='name'placeholder="enter category name"  value="{{$categories->name}}">
                                                </div>
                                            </div>


                                            <div class="form-group row mb-3">
                                                <label for="inputEmail3" class="col-3 col-form-label"> Image</label>
                                                <div class="col-9">
                                                    <input type="file" class="form-control" id="inputEmail3"  name='image'placeholder="choose image "   value="{{$categories->image}}">
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
