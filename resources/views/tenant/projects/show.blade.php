@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <panel class="panel-default">
                    <div class="panel-heading">Project {{ $project->name }}</div>
                    <div class="panel-body"></div>
                </panel>
            </div>
        </div>
    </div>

@endsection