@include('admin/inc/header')

<!-- Left Sidebar -->
@include('admin/inc/left-sidebar')

<!-- Right Sidebar -->
@include('admin/inc/right-sidebar')

<style>
    .dataTables_wrapper .dt-buttons{
        display: none;
    }
</style>

<!-- Main Content -->
<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="{{url('')}}"><i class="zmdi zmdi-home"></i> {{\App\Setting::setting()->app_name}}</a></li>
                    <li class="breadcrumb-item active">Blog List</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">

        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger">
                {{ $errors->first() }}
            </div>
        @endif

        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card action_bar">
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-lg-5 col-md-5 col-6">

                            </div>
                            <div class="col-lg-7 col-md-7 col-3 text-right">

                                <button type="button" class="btn btn-neutral hidden-sm-down" onclick="$('.buttons-csv')[0].click();">
                                    <i class="zmdi zmdi-archive"></i>
                                </button>
                                <button type="button" class="btn btn-neutral hidden-sm-down" onclick="$('.buttons-print')[0].click();">
                                    <i class="zmdi zmdi-print"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Exportable Table -->
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>inquery </strong> </h2>

                    </div>
                    <div class="body">
                        <table class="table table-bordered table-striped table-hover dataTable js-plaintable">
                            <thead>
                            <tr>
                                <th># </th>
                                <th>Name </th>
                                <th>Email </th>
                                <th>Status </th>
                                <th>Timestamp </th>
                                <th>Action </th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th># </th>
                                <th>Name </th>
                                <th>Email </th>
                                <th>Status </th>
                                <th>Timestamp </th>
                                <th>Action </th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($records??array() as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->status}}</td>
                                    <td>{{$item->created_at}}</td>
                                    <td>
                                        <a data-toggle="modal" data-target="#largeShowModal{{$item->id}}" class="btn btn-icon btn-icon-mini" title="Show"><i class="zmdi zmdi-eye"> </i></a>
                                        <a data-toggle="modal" data-target="#largeEditModal{{$item->id}}" class="btn btn-icon btn-icon-mini" title="Edit"><i class="zmdi zmdi-edit"> </i></a>
                                        <a class="btn btn-danger btn-icon btn-icon-mini" title="Delete ">
                                            {!! Form::open([
                                               'method'=>'DELETE',
                                               'url' => ['/admin/inquery', $item->id],
                                               'style' => 'display:inline'
                                            ]) !!}
                                            {!! Form::button('<i class="zmdi zmdi-delete"></i> ', array(
                                                 'type' => 'submit',
                                                 'class' => 'btn btn-danger btn-xs btnper',
                                                'title' => 'Delete user',
                                                'onclick'=>'return confirm("আপনি কি নিশ্চিত?")'
                                                 )) !!}
                                            {!! Form::close() !!}
                                        </a>
                                    </td>
                                </tr>



                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Exportable Table -->
    </div>
</section>


@foreach($records??array() as $item)

    <!-- Show Modal Start -->
    <div class="modal fade" id="largeShowModal{{$item->id}}" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Show Inquery</strong></h2>
                        </div>
                        <div class="body">
                            <table class="table">
                                <tr>
                                    <td>Name</td>
                                    <td>{{$item->name}}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>{{$item->email}}</td>
                                </tr>
                                <tr>
                                    <td>Content</td>
                                    <td>{{html_entity_decode($item->message)}}</td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td>{{$item->status}}</td>
                                </tr>
                                <tr>
                                    <td>Create Date</td>
                                    <td>{{$item->created}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
                </div>
            </div>
        </div>
    </div>
    <!--Edit Modal End-->

@endforeach



@include('admin/inc/footer')

