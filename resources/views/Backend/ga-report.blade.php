@extends('Backend.backend-master')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <i class="nav-icon fas fa-tachometer-alt mr-2"></i>Dashboard
                        </li>
                        <li class="breadcrumb-item">Report</li>
                        <li class="breadcrumb-item active">Google Analytics</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
                <div class="card">
                    <div class="card-header bg-white">
                        <h3>Google Analytics Report</h3>
                    </div>
                    <!-- /.card-header -->

                    <div class="card-body scrollable">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                        <table class="table table-bordered data_table_ga_report" data-order='[[ 0, "desc" ]]'>
                            <thead>
                                <tr role="row">
                                    <th style="width:10%;">Date</th>
                                    <th style="width:5%;">Visitors</th>
                                    <th style="width:15%;">Page Title</th>
                                    <th style="width:10%;">Page Views</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($analyticsData as $data)
                                    <tr role="row">
                                        <td>{{ $data['date'] }}</td>
                                        <td>{{ $data['visitors'] }}</td>
                                        <td>{{ $data['pageTitle'] }}</td>
                                        <td>{{ $data['pageViews'] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </div>
                        </table>

                    </div>
                    <!-- /.card-body -->
                </div>

</section>
    <!-- /.content -->
@endsection
@section('scripts')
<script type="text/javascript">
   $('.data_table_ga_report').DataTable({
    "scrollX": false,
    "scrollY": false,
    "ordering": true,
  });
</script>
@endsection
