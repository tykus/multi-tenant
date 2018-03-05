@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">x Dashboard</div>
                    <ul class="list-group list-group-flush">
                        @foreach($projects as $project)
                            <li class="list-group-item">    
                                {{ $project->name }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection