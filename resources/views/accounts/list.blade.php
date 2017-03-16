@extends('partials.layout')
@section('content')
    <div class="page-title">
        <div class="title-env">
            <h1 class="title">Accounts</h1>
            <p class="description">Your eth accounts</p>
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

                    <strong>Accounts</strong>
                </li>
            </ol>

        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title text-primary h3">Account Name</h3>
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
            <div class="row">
                <p>Account Description</p>
                <ul class="list-unstyled list-margin">
                    <li>Account Address: <strong>address</strong> </li>
                    <li>Account Eth: <strong> 0.0</strong> eths</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title text-primary h3">Account Name</h3>
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
            <div class="row">
                <p>Account Description</p>
                <ul class="list-unstyled list-margin">
                    <li>Account Address: <strong>address</strong> </li>
                    <li>Account Eth: <strong> 0.0</strong> eths</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title text-primary h3">Account Name</h3>
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
            <div class="row">
                <p>Account Description</p>
                <ul class="list-unstyled list-margin">
                    <li>Account Address: <strong>address</strong> </li>
                    <li>Account Eth: <strong> 0.0</strong> eths</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
