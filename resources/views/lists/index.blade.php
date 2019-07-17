@extends('base')

@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Lists</h1>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Title</td>
          <td>Description</td>
          <td>Tag</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($lists as $list)
        <tr>
            <td>{{$list->id}}</td>
            <td>{{$list->title}}</td>
            <td>{{$list->description}}</td>
            <td>{{$list->tag}}</td>
            <td>
                <a href="{{ route('lists.edit',$list->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('lists.destroy', $list->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Remove</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection
