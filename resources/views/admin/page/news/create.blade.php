<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset("admin/plugins/fontawesome-free/css/all.min.css") }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{ asset("admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css") }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset("admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css") }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset("admin/plugins/jqvmap/jqvmap.min.css") }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset("admin/dist/css/adminlte.min.css") }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset("admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css") }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset("admin/plugins/daterangepicker/daterangepicker.css") }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset("admin/plugins/summernote/summernote-bs4.min.css") }}">
    <title>{{ trans('label.admin.title.t2') }}</title>
</head>
<style>
    body{
        background: linear-gradient(120deg,#2980b9, #8e44ad);
        height: 100vh;
        overflow: hidden;
    }
</style>
<body>
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{ trans('label.admin.title.t3') }}</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            @if (session('failed'))
                <div class="alert alert-danger">
                    {{ session('failed') }}
                </div>
            @endif
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col md 12">
                        {{--                        <div class="card">--}}
                        {{--                            <div class="card-header">--}}
                        {{--                                <a href="{{ url('/admin/packages') }}" class="btn btn-primary btn-sm float-right"> {{ trans('labels.admin.btn.btn_back') }} </a>--}}
                        {{--                            </div>--}}
                        {{--                            <div class="card-body">--}}

                        {{--                                <form action="{{ url("admin/packages/store") }}" method="post">--}}
                        {{--                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
                        {{--                                    <div class="form-group">--}}
                        {{--                                        <label> {{ trans("labels.admin.add.form_label1") }} </label>--}}
                        {{--                                        <input type="text" name="name" class="form-control" value="{{ old("name") }}">--}}
                        {{--                                        @if ($errors->has('name'))--}}
                        {{--                                            <p style="height: 0; color: red; margin: 0">--}}
                        {{--                                                {{ $errors->first('name') }}--}}
                        {{--                                            </p>--}}
                        {{--                                            <br>--}}
                        {{--                                        @endif--}}
                        {{--                                    </div>--}}
                        {{--                                    <div class="form-group">--}}
                        {{--                                        <label> {{ trans("labels.admin.add.form_label2") }} </label><br>--}}
                        {{--                                        <input type="radio" name="max_file_size" id="16" value="{{ trans("labels.admin.add.radio1") }} @if( old("max_file_size") == config("const.package.max_file_size")[0]) checked @endif ">--}}
                        {{--                                        <label> {{ trans("labels.admin.add.radio1") }} </label><br>--}}
                        {{--                                        <input type="radio" name="max_file_size" value="{{ trans("labels.admin.add.radio2") }} @if( old("max_file_size") == config("const.package.max_file_size")[1]) checked @endif ">--}}
                        {{--                                        <label> {{ trans("labels.admin.add.radio2") }} </label><br>--}}
                        {{--                                        <input type="radio" name="max_file_size" value="{{ trans("labels.admin.add.radio3") }} @if( old("max_file_size") == config("const.package.max_file_size")[2]) checked @endif ">--}}
                        {{--                                        <label> {{ trans("labels.admin.add.radio3") }} </label><br>--}}
                        {{--                                        @if ($errors->has('max_file_size'))--}}
                        {{--                                            <p style="height: 0; color: red; margin: 0">--}}
                        {{--                                                {{ $errors->first('max_file_size') }}--}}
                        {{--                                            </p>--}}
                        {{--                                            <br>--}}
                        {{--                                        @endif--}}
                        {{--                                    </div>--}}
                        {{--                                    <div class="form-group">--}}
                        {{--                                        <label> {{ trans("labels.admin.add.form_label3") }} </label>--}}
                        {{--                                        <input type="number" name="max_file_upload" class="form-control" value="{{ old("max_file_upload") }}" min="1" max="20">--}}
                        {{--                                        @if ($errors->has('max_file_upload'))--}}
                        {{--                                            <p style="height: 0; color: red; margin: 0">--}}
                        {{--                                                {{ $errors->first('max_file_upload') }}--}}
                        {{--                                            </p>--}}
                        {{--                                            <br>--}}
                        {{--                                        @endif--}}
                        {{--                                    </div>--}}
                        {{--                                    <div class="form-group">--}}
                        {{--                                        <button type="submit" class="btn btn-primary"> {{ trans("labels.admin.btn.btn_save") }} </button>--}}
                        {{--                                    </div>--}}
                        {{--                                </form>--}}

                        {{--                            </div>--}}
                        {{--                        </div>--}}
                    </div>
                </div>
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

<script src="https://kit.fontawesome.com/1da19b0fb1.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset("admin/plugins/jquery/jquery.min.js") }}"></script>
<script>
    /**
     * Show file detail
     *
     * @param id
     */
    // function showFileDetail(id) {
    //     $("#show_modal").modal("show");
    //     $.ajax({
    //         url: '/file-manage/show/' + id,
    //         type: 'get',
    //         data: {},
    //         success: function (response) {
    //             console.log(response);
    //             if(response.code === 200) {
    //                 $("#file_name").text(response.data.name);
    //                 $("#file_size").text(response.data.file_size);
    //                 $("#file_upload").text(response.data.updated_at);
    //             }
    //         }
    //     })
    // }
    //
    // /**
    //  * Show upload new file
    //  */
    // function showUploadFileModal() {
    //     $("#upload_modal").modal("show");
    // }
    //
    // /**
    //  * Display icon process upload file
    //  */
    // function processSaveFile() {
    //     $("#loading").css("display", "block");
    //     $("#btn-save-file").text("");
    // }
</script>
</body>
</html>
