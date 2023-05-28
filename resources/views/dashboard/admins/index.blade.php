@extends('dashboard.layouts.master')

@section('body')


<br />
sss
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{__('admin.All Journals')}}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.home')}}">{{__('admin.Home')}}</a></li>
                        <li class="breadcrumb-item active">{{__('admin.All Journals')}}</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{__('admin.All Journals')}}</h3>
                <div class="card-tools">
                    <a href="{{  route('admins.create') }}" class="btn btn-primary create add-permission">
                        <i class="ti-plus"></i> {{__('admin.create new journal')}}
                    </a>
                </div>
            </div>
            <div class="card-body" >
                <table class="table table-bordered yajra-datatable">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>email</th>
                            <th>status</th>
                            <th width="150px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
               
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->


@endsection


@push('scripts')

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>  
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>



<script type="text/javascript">
    $(function () {
      
      var table = $('.yajra-datatable').DataTable({
          processing: true,
          serverSide: true,
          order:[
            ['0', 'ASC']
          ],
          ajax: "{{ route('admins.index') }}",
          columns: [
              {data: 'name', name: 'name'},
              {data: 'email', name: 'email'},
              {data: 'status', name: 'status'},
              {data: 'action', name: 'action',  orderable: true,searchable: true }
          ]
      });
      
    });
  </script>


@endpush