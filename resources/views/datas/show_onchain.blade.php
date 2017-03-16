@extends('partials.layout')
@section('content')
    <div class="page-title">
        <div class="title-env">
            <h1 class="title">Data Object</h1>
            <p class="description">Show a data object</p>
        </div>
        <div class="breadcrumb-env">
            <ol class="breadcrumb bc-1">
                <li>
                    <a href="/"><i class="fa-home"></i>Home</a>
                </li>
                <li>
                    <a href="/datas/self">Data Management</a>
                </li>
                <li class="active">

                    <strong>Show Data</strong>
                </li>
            </ol>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                <p>Beijing Temperature</p>
                <ul class="list-unstyled list-margin">
                    <li>name: <strong>Beijing Temperature</strong></li>
                    <li>type: <strong>Provide</strong></li>
                    <li>data_type: <strong>Sensor Data</strong></li>
                    <li>purpose: <strong>Research</strong></li>
                    <li>position: <strong>Chaoyang Qu</strong></li>
                    <li>access_mode: <strong>URL</strong></li>
                    <li>access_detail: <strong>www.baidu.com</strong></li>
                    <li>pack_mode: <strong>rar</strong></li>
                    <li>file_type: <strong>JSON</strong></li>
                    <li>data_standard: <strong>No Standard</strong>
                    <li>start_time: <strong>August</strong></li>
                    <li>end_time: <strong>October</strong></li>
                    <li>includes: <strong>longitude, latitude</strong></li>
                    <li>introduction: <strong>It's a data sets of Beijing Temperature between August to October</strong></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Imported scripts on this page -->
    <script src="/assets/js/jquery-validate/jquery.validate.min.js"></script>

@endsection