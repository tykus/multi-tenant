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
                                <a href="{{ route('projects.show', $project) }}">{{ $project->name }}</a>
                                <form method="post" action="{{ route('projects.delete', $project) }}" class="form-inline pull-right">
                                    {{ csrf_field() }}
                                    {{ method_field('delete') }}
                                    <button class="btn btn-outline-danger pull-right">&times;</button>
                                </form>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="card mt-5">
                    <div class="card-header">New Project</div>
                    <div class="card-body">
                        @include('tenant.projects.partials.create')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
