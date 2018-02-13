@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Your companies</div>
                    <ul class="list-group list-group-flush">
                        @foreach($companies as $company)
                            <li class="list-group-item">    
                                <a href="/{{$company->id}}">
                                    {{ $company->name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
