<div class="content-wrapper">
    <!-- Content Header Start -->
    <section class="content-header">
        <div>
            <h1 class="text-center">List Page</h1>
        </div>
    </section>
    <!-- Content Header End -->


    <!-- Main Content Start -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-12 list">
                    <div class="px-5">
                        <div class="card mt-4">
                            <div class="card-header">
                                <h3 class="card-title">List</h3>
{{--                                <a href="{{url('/form')}}" class="float-sm-right btn btn-primary">Add</a></div>--}}
                            <!-- ./card-header -->
                            <div class="card-body">
                                <table id="userInfoTable" class="table table-striped table-bordered table-condensed mb-0">
                                    <thead>
                                    <tr class="text-center">
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody id="userInfoRows" class="text-center">
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- Main Content End -->

</div>

<!-- DataTables JavaScript -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>


<script>
    $(document).ready(function () {
    });

    $('#userInfoTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "list-user",
        columns:[
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'status', name: 'status'},
            {data: 'action', name: 'action'}
            // Define columns for your data
        ]
    });


</script>
