
@extends('masterlayout')
@section('data')
<h3>@if (session()->has('msg'))
    {{session()->get('msg')}}
@endif</h3>
@if ($errors->any())
    @foreach ($errors->all() as $error)
      <h1>  {{$error}}</h1>

    @endforeach
@endif
<form action="{{route('CreateTeacher') }}" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        @csrf
      <label for="exampleInputEmail1">name</label>
      <input type="text" class="form-control"  name="name" id="exampleInputEmail1" aria-describedby="emailHelp" >
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Age</label>
      <input type="text" name="age" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">image</label>
        <input type="file" name="image"  class="form-control" id="exampleInputPassword1">
      </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Adress</label>
        <input type="text" name="address" class="form-control" id="exampleInputPassword1" >
      </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
