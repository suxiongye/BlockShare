@extends('partials.layout')
@section('content')
    <div class="page-title">
        <div class="title-env">
            <h1 class="title">Data Onchain</h1>
            <p class="description">The Data Objects onchain</p>
        </div>
        <div class="breadcrumb-env">
            <ol class="breadcrumb bc-1">
                <li>
                    <a href="/"><i class="fa-home"></i>Home</a>
                </li>
                <li>
                    <a href="/datas/onchain">Datas</a>
                </li>
                <li class="active">

                    <strong>Data Onchain</strong>
                </li>
            </ol>
        </div>
    </div>
    <!-- Basic Setup -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Datas Onchain</h3>

            <div class="panel-options">
                <a href="#" data-toggle="panel">
                    <span class="collapse-icon">&ndash;</span>
                    <span class="expand-icon">+</span>
                </a>
                <a href="#" data-toggle="remove">
                    &times;
                </a>
            </div>
        </div>
        <div class="panel-body">

            <script type="text/javascript">
                jQuery(document).ready(function ($) {
                    $("#example-1").dataTable({
                        aLengthMenu: [
                            [10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]
                        ]
                    });
                });
            </script>

            <table id="example-1" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Block</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Data_Type</th>
                    <th>Purpose</th>
                    <th>Position</th>
                    <th>Access_mode</th>
                    <th>File_type</th>
                    <th>Start_time</th>
                    <th>End_time</th>
                </tr>
                </thead>

                <tfoot>
                <tr>
                    <th>Block</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Data_Type</th>
                    <th>Purpose</th>
                    <th>Position</th>
                    <th>Access_mode</th>
                    <th>File_type</th>
                    <th>Start_time</th>
                    <th>End_time</th>
                </tr>
                </tfoot>

                <tbody>
                <tr>
                    <td>123456</td>
                    <td><a href="/datas/show_onchain">Beijing Temperature</a></td>
                    <td>Provide</td>
                    <td>Sensor Data</td>
                    <td>Research</td>
                    <td>ChaoYangQu</td>
                    <td>URL</td>
                    <td>JSON</td>
                    <td>August</td>
                    <td>October</td>
                </tr>
                <tr>
                    <td>123454</td>
                    <td><a href="/datas/show_onchain">Beijing Temperature</a></td>
                    <td>Request</td>
                    <td>Sensor Data</td>
                    <td>Research</td>
                    <td>ChaoYangQu</td>
                    <td>URL</td>
                    <td>JSON</td>
                    <td>August</td>
                    <td>October</td>
                </tr>
                </tbody>
            </table>

        </div>
    </div>

    <!-- Bottom Scripts -->
    <script src="/assets/js/datatables/js/jquery.dataTables.min.js"></script>

    <!-- Imported scripts on this page -->
    <script src="/assets/js/datatables/dataTables.bootstrap.js"></script>
    <script src="/assets/js/datatables/yadcf/jquery.dataTables.yadcf.js"></script>
    <script src="/assets/js/datatables/tabletools/dataTables.tableTools.min.js"></script>


@endsection