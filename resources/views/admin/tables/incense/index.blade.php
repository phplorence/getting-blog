@extends('layouts.master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    @include('sweet::alert');
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                NHÓM HƯƠNG
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{  route('admin.dashboard') }}"><i class="fas fa-home"></i> Trang chủ</a></li>
                <li class="active">Nước hoa</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <!-- /.box-header -->
                        <button id="btnCreateNewIncense" type="button" class="btn btn-default btn-sm">Thêm mới</button>
                        <div class="box-body">
                            <table id="incenseTable" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th class="text-center" style="width: 5.00%">STT</th>
                                    <th class="text-center" style="width: 15.00%">Tên nhóm hương</th>
                                    <th class="text-center" style="width: 15.00%">Mô tả</th>
                                    <th class="text-center" style="width: 40.00%">Chi tiết</th>
                                    <th class="text-center" style="width: 15.00%">Link bài viết</th>
                                    <th class="text-center" style="width: 10.00%">Thao tác</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @include('modal.incense.create')
    @include('modal.incense.edit')
    @include('modal.dialog.loading')
@endsection
@section('script')
    <script src="{{ URL::asset('js/incense.js') }}"></script>
@endsection

