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

            <form role="form" id="form1" method="get" class="validate" action="/datas/show">

                <div class="form-group">
                    <label class="control-label">name</label>

                    <input type="text" class="form-control" name="name" data-validate="required"
                           value="Beijing Temperature"
                           data-message-required="The data name should be provide." placeholder="Required Field"/>
                </div>
                <div class="form-group">
                    <label class="control-label">type</label>

                    <input type="text" class="form-control" name="type" data-validate="required" value="Request"
                           data-message-required="The data type should be provide." placeholder="Required Field"/>
                </div>
                <div class="form-group">
                    <label class="control-label">data_type</label>

                    <input type="text" class="form-control" name="data_type" data-validate="required"
                           value="Sensor Data"
                           data-message-required="The data data_type should be provide." placeholder="Required Field"/>
                </div>
                <div class="form-group">
                    <label class="control-label">purpose</label>

                    <input type="text" class="form-control" name="purpose" data-validate="required" value="Research"
                           data-message-required="The data purpose should be provide." placeholder="Required Field"/>
                </div>
                <div class="form-group">
                    <label class="control-label">position</label>

                    <input type="text" class="form-control" name="position" data-validate="required" value="Chaoyang Qu"
                           data-message-required="The data position should be provide." placeholder="Required Field"/>
                </div>
                <div class="form-group">
                    <label class="control-label">access_mode</label>

                    <input type="text" class="form-control" name="access_mode" data-validate="required" value="URL"
                           data-message-required="The data access_mode should be provide."
                           placeholder="Required Field"/>
                </div>
                <div class="form-group">
                    <label class="control-label">access_detail</label>

                    <input type="text" class="form-control" name="access_detail" data-validate="required"
                           value="www.baidu.com"
                           data-message-required="The data access_detail should be provide."
                           placeholder="Required Field"/>
                </div>
                <div class="form-group">
                    <label class="control-label">pack_mode</label>

                    <input type="text" class="form-control" name="pack_mode" data-validate="required" value="rar"
                           data-message-required="The data pack_mode should be provide." placeholder="Required Field"/>
                </div>
                <div class="form-group">
                    <label class="control-label">file_type</label>

                    <input type="text" class="form-control" name="file_type" data-validate="required" value="JSON"
                           data-message-required="The data file_type should be provide." placeholder="Required Field"/>
                </div>
                <div class="form-group">
                    <label class="control-label">data_standard</label>

                    <input type="text" class="form-control" name="data_standard" data-validate="required"
                           value="No Standard"
                           data-message-required="The data_standard should be provide." placeholder="Required Field"/>
                </div>
                <div class="form-group">
                    <label class="control-label">start_time</label>

                    <input type="text" class="form-control" name="start_time" data-validate="required" value="August"
                           data-message-required="The data start_time should be provide." placeholder="Required Field"/>
                </div>
                <div class="form-group">
                    <label class="control-label">end_time</label>

                    <input type="text" class="form-control" name="end_time" data-validate="required" value="October"
                           data-message-required="The data end_time should be provide." placeholder="Required Field"/>
                </div>
                <div class="form-group">
                    <label class="control-label">includes</label>

                    <input type="text" class="form-control" name="includes" data-validate="required"
                           value="longitude, latitude"
                           data-message-required="The data includes should be provide." placeholder="Required Field"/>
                </div>

                <div class="form-group">
                    <label class="control-label">introduction</label>

                    <input type="text" class="form-control" name="introduction" data-validate="required"
                           value="It's a data sets of Beijing Temperature between August to October"
                           data-message-required="The data introduction should be provide."
                           placeholder="Required Field"/>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Update</button>
                    <a href="/datas/self" class="btn btn-white">Return</a>
                </div>

            </form>

        </div>
    </div>

    <!-- Imported scripts on this page -->
    <script src="/assets/js/jquery-validate/jquery.validate.min.js"></script>

@endsection