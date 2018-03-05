<form method="post" action="{{ route('projects.store') }}">
    {{ csrf_field() }}

    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
        <label for="name">Name</label>
        <input type="text" id="name" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

    @if ($errors->has('name'))
            <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Create Project</button>
    </div>
</form>