@extends('back.layouts.master')
@section('title', 'Alumni')

@section('head')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.23/datatables.min.css"/>
@endsection

@section('master')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Alumni</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                            <li class="breadcrumb-item active">List</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="blog-table-header card-header">
                        <h4 class="card-title mb-0 flex-grow-1">Alumni</h4>
                        @isset(auth()->user()->role->permission['permission']['alumni']['add'])
                        <a href="{{route('back.alumni.create')}}" class="btn btn-info float-right"><i class="ri-add-circle-line"></i> Create New</a>
                        @endisset
                    </div><!-- end card header -->

                    <div class="card-body table-responsive">
                        <table class="table table-bordered table-sm" id="dataTable">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Status</th>
                                <th scope="col" class="text-right">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($alumnies as $key => $alumni)
                                    <tr>
                                        <th scope="row">{{$key + 1}}</th>
                                        <td>{!! $alumni->name !!}</td>
                                        <td>
                                            @isset(auth()->user()->role->permission['permission']['alumni']['edit'])
                                            @include('switcher::switch', [
                                                'table' => 'alumnis',
                                                'data' => $alumni
                                            ])
                                            @endisset
                                        </td>
                                        <td class="text-right">
                                            @isset(auth()->user()->role->permission['permission']['alumni']['edit'])
                                            <a class="btn btn-sm btn-success" href="{{route('back.alumni.edit', $alumni->id)}}"><i class="ri-edit-2-line"></i></a>
                                            @endisset
                                            @isset(auth()->user()->role->permission['permission']['alumni']['delete'])
                                            <form class="d-inline-block" action="{{route('back.alumni.destroy', $alumni->id)}}" method="POST">
                                                @method('DELETE')
                                                @csrf

                                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Are you sure to remove?')">
                                                    <i class="ri-delete-bin-5-line"></i>
                                                </button>
                                            </form>
                                            @endisset
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->

    </div>
    <!-- container-fluid -->
</div>
<!-- End Page-content -->

@endsection

@section('footer')
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.23/datatables.min.js"></script>

<script>
    $(document).ready( function () {
        $('#dataTable').DataTable({
            order: [[0, "asc"]],
        });
    });
</script>
@endsection
