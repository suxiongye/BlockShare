@extends('partials.layout')
@section('content')
    <div class="page-title">
        <div class="title-env">
            <h1 class="title">Help</h1>
            <p class="description">How to use the system ?</p>
        </div>
        <div class="breadcrumb-env">
            <ol class="breadcrumb bc-1">
                <li>
                    <a href="/"><i class="fa-home"></i>Home</a>
                </li>
                <li>

                    <a href="/about">About</a>
                </li>
                <li class="active">

                    <strong>Help</strong>
                </li>
            </ol>

        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title text-primary h3">Tips</h3>
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
                <p>Tip Description</p>
            </div>
        </div>
    </div>
@endsection