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
                                        <li class="breadcrumb-item"><a href="tables-datatables.html#">Shreyu</a></li>
                                        <li class="breadcrumb-item"><a href="tables-datatables.html#">Tables</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Advanced</li>
                                    </ol>
                                </nav>
                                <h4 class="mb-1 mt-0">Advanced Tables</h4>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mt-0 mb-1">Category</h4>
                                        <p class="sub-header">
                                            View Category
                                         
                                        </p>

                                        <table id="basic-datatable" class="table dt-responsive nowrap">
                                            <thead>
                                                <tr>
                                                    <th> Category_Id</th>
                                                    <th>Title</th>
                                                    <th>Excerpt</th>
                                                    <th>Content</th>
                                                    <th>Image</th>
                                                    <th>Likes</th>
                                                    <th>Views</th>
                                                    <th>Status</th>
                                                    <th>Timestamp</th>
                                                    <th>Action</th>
                                                    
                                                </tr>
                                            </thead>
                                              <tbody>
                                                @foreach($n as $news)
                                                <tr>
                                                    <td>{{ $news->category_id }}</td>
                                                    <td>{{ $news->title }}</td>
                                                    <td>{{ $news->excerpt }}</td>
                                                    <td>{{ $news->content }}</td>
                                                    <td>{{$news->image}}</td>
                                                    <td>{{$news->likes}}</td>
                                                    <td>{{$news->views}}</td>
                                                    <td>{{$news->status}}</td>
                                                    <td>{{ $news->timestamp }}</td>
                                                    <td>{{ $news->action }}</td>
                                                    <td>
                                                        <a href="/editNews/{{ $news->category_id }}"
                                                            class="btn btn-warning">Edit</a>
                                                        <a href="/deleteNews/{{$news->category_id}}"
                                                            class="btn btn-danger">Delete</a>
                                                    </td>
                                                </tr>
                                            @endforeach
   
                                                     </tbody>
                                        </table>

                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div>
                        <!-- end row-->
                    </div> <!-- container-fluid -->

                </div> <!-- content -->
                @include('cms.partial._footer')
<script>
    $().DataTable();

</script>

