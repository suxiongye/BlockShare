@extends('partials.layout')
@section('content')
    <div class="page-title">
        <div class="title-env">
            <h1 class="title">Create Account</h1>
            <p class="description">Create an eth account</p>
        </div>
        <div class="breadcrumb-env">
            <ol class="breadcrumb bc-1">
                <li>
                    <a href="/"><i class="fa-home"></i>Home</a>
                </li>
                <li>

                    <a href="/accounts">Accounts</a>
                </li>
                <li class="active">

                    <strong>Create Accounts</strong>
                </li>
            </ol>

        </div>
    </div>
    <div class="panel panel-default">

        <div class="panel-body">

            <form role="form" id="form1" method="get" class="validate" action="/">

                <div class="form-group">
                    <label class="control-label">Account Name</label>

                    <input type="text" class="form-control" name="name" data-validate="required" data-message-required="The account name should be provide." placeholder="Required Field" />
                </div>

                <div class="form-group">
                    <label class="control-label">Password</label>

                    <input type="password" class="form-control" name="password" data-validate="required,minlength[6]" placeholder="Password Field" />
                </div>

                <div class="form-group">
                    <label class="control-label">Repeat Password</label>

                    <input type="password" class="form-control" name="repeatPassword" data-validate="required,minlength[6]" placeholder="Repeat Password Field" />
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success">Confirm</button>
                    <button type="reset" class="btn btn-white">Reset</button>
                </div>

            </form>

        </div>
    </div>

    <!-- Imported scripts on this page -->
    <script src="/assets/js/jquery-validate/jquery.validate.min.js"></script>

@endsection