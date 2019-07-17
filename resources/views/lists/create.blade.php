@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Create a list</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('lists.store') }}">
          @csrf
          <div class="form-group">
              <label for="first_name">Title:</label>
              <input type="text" class="form-control" name="title"/>
          </div>

          <div class="form-group">
              <label for="last_name">Description:</label>
              <input type="text" class="form-control" name="description"/>
          </div>

          <div class="form-group">
              <label for="email">Tag:</label>
              <input type="text" class="form-control" name="tag"/>
          </div>
          <button type="submit" class="btn btn-primary-outline">Add List</button>
      </form>
  </div>
</div>
</div>
@endsection
