@extends('partials.layout')
@section('content')
    <div class="page-title">
        <div class="title-env">
            <h1 class="title">Request Search</h1>
            <p class="description">Search the request onchain</p>
        </div>
        <div class="breadcrumb-env">
            <ol class="breadcrumb bc-1">
                <li>
                    <a href="/"><i class="fa-home"></i>Home</a>
                </li>
                <li>
                    <a href="/provides">Data Provide</a>
                </li>
                <li class="active">

                    <strong>Request Search</strong>
                </li>
            </ol>
        </div>
    </div>

    <div class="panel panel-default">

        <div class="panel-body">
            <form role="form" id="form1" method="get" class="validate" action="/provides/search">

                <div class="form-group">
                    <label class="control-label">name</label>

                    <input type="text" class="form-control" name="name"
                           data-message-required="The data name should be provide." placeholder="Data name"/>
                </div>
                <div class="form-group">
                    <label class="control-label">data_type</label>

                    <input type="text" class="form-control" name="data_type"
                           data-message-required="The data data_type should be provide." placeholder="Data type"/>
                </div>
                <div class="form-group">
                    <label class="control-label">purpose</label>

                    <input type="text" class="form-control" name="purpose"
                           data-message-required="The data purpose should be provide." placeholder="The purpose of data"/>
                </div>
                <div class="form-group">
                    <label class="control-label">position</label>

                    <input type="text" class="form-control" name="position"
                           data-message-required="The data position should be provide." placeholder="The position of data"/>
                </div>
                <div class="form-group">
                    <label class="control-label">access_mode</label>

                    <input type="text" class="form-control" name="access_mode"
                           data-message-required="The data access_mode should be provide."
                           placeholder="The access mode of data"/>
                </div>
                <div class="form-group">
                    <label class="control-label">access_detail</label>

                    <input type="text" class="form-control" name="accesse_detail"
                           data-message-required="The data access_detail should be provide."
                           placeholder="The access detail of data"/>
                </div>
                <div class="form-group">
                    <label class="control-label">pack_mode</label>

                    <input type="text" class="form-control" name="pack_mode"
                           data-message-required="The data pack_mode should be provide." placeholder="The pack mode of data"/>
                </div>
                <div class="form-group">
                    <label class="control-label">file_type</label>

                    <input type="text" class="form-control" name="file_type"
                           data-message-required="The data file_type should be provide." placeholder="The file type of data"/>
                </div>
                <div class="form-group">
                    <label class="control-label">data_standard</label>

                    <input type="text" class="form-control" name="data_standard"
                           data-message-required="The data_standard should be provide." placeholder="The data standard of data"/>
                </div>
                <div class="form-group">
                    <label class="control-label">start_time</label>

                    <input type="text" class="form-control" name="start_time"
                           data-message-required="The data start_time should be provide." placeholder="The data start time"/>
                </div>
                <div class="form-group">
                    <label class="control-label">end_time</label>

                    <input type="text" class="form-control" name="end_time"
                           data-message-required="The data end_time should be provide." placeholder="The data end time"/>
                </div>
                <div class="form-group">
                    <label class="control-label">includes</label>

                    <input type="text" class="form-control" name="includes"
                           data-message-required="The data includes should be provide." placeholder="Includes of data"/>
                </div>

                <div class="form-group">
                    <label class="control-label">introduction</label>

                    <input type="text" class="form-control" name="introduction"
                           data-message-required="The data introduction should be provide."
                           placeholder="Introduction of data"/>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Search</button>
                    <button type="reset" class="btn btn-white">Reset</button>
                </div>

            </form>
        </div>
    </div>
@endsection