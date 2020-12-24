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
                                        <h4 class="header-title mt-0 mb-1">Enquiry</h4>
                                        <p class="sub-header">
                                            View Enquiry
                                         
                                        </p>

                                        <table id="basic-datatable" class="table dt-responsive nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Customer_Id</th>
                                                    <th>Customer_Name</th>
                                                    <th>Messege</th>
                                                    <th>Status</th>
                                                    <th>Timestamp</th>
                                                    <th>Action</th>
                                                    
                                                </tr>
                                            </thead>
                                              <tbody>
                                                @foreach($enquiries as $enquiry)
                                                <tr>
                                                    <td>{{ $enquiry->customer_id }}</td>
                                                    <td>{{ $enquiry->customer_name }}</td>
                                                    <td>{{ $enquiry->messege }}</td>
                                                    <td>{{ $enquiry->timestamp }}</td>
                                                   <td>{{ $enquiry->action }}</td>
                                                    <td>
                                                        <a href="/editEnquiry/{{ $enquiry->customer_id }}"
                                                            class="btn btn-warning">Edit</a>
                                                        <a href="/deleteEnquiry/{{$enquiry->customer_id}}"
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

