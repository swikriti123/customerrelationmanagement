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
                                        <h5>News</h5>
                                        <span>Update News</span>                                   
                                           
                                    
                                        <form class="form-horizontal" action="/updateNews" method="POST">
                                            @csrf 


                                            <div class="form-group row mb-3">
                                                <label for="inputEmail3" class="col-3 col-form-label"> Category_Id</label>
                                                <div class="col-9">
                                                    <input type="number" class="form-control"  hidden name='category_id'placeholder="enter category id "   value="{{$n->category_id}}">
                                                </div>
                                            </div>

                                            <div class="form-group row mb-3">
                                                <label for="inputEmail3" class="col-3 col-form-label"> Title </label>
                                                <div class="col-9">
                                                    <input type="text" class="form-control"  required name='title'placeholder="enter title "  value="{{$n->title}}">
                                                </div>
                                            </div>

                                            <div class="form-group row mb-3">
                                                <label for="inputEmail3" class="col-3 col-form-label"> Excerpt </label>
                                                <div class="col-9">
                                                    <input type="text" class="form-control"  required name='excerpt'placeholder="enter excerpt "  value="{{$n->excerpt}}">
                                                </div>
                                            </div>

                                            <div class="form-group row mb-3">
                                                <label for="inputEmail3" class="col-3 col-form-label"> Content </label>
                                                <div class="col-9">
                                                    <input type="text" class="form-control"  required name='content'placeholder="enter content "  value="{{$n->content}}">
                                                </div>
                                            </div>

                                             <div class="form-group row mb-3">
                                                <label for="inputEmail3" class="col-3 col-form-label"> Image</label>
                                                <div class="col-9">
                                                    <input type="file" class="form-control"   name='image'placeholder="choose image "   value="{{$n->image}}">
                                                </div>
                                            </div>

                                            <div class="form-group row mb-3">
                                                <label for="inputEmail3" class="col-3 col-form-label"> Likes</label>
                                                <div class="col-9">
                                                    <input type="number" class="form-control"  required name='likes'placeholder="enter likes "   value="{{$n->likes}}">
                                                </div>
                                            </div>


                                            <div class="form-group row mb-3">
                                                <label for="inputEmail3" class="col-3 col-form-label"> Views</label>
                                                <div class="col-9">
                                                    <input type="number" class="form-control" id="inputEmail3" required name='views'placeholder="enter excerpt "   value="{{$n->views}}">
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
