<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if (session()->has('msg'))
    {{session()->get('msg')}}

    @endif
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">age</th>
            <th scope="col">address</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($data as $teacher)
            <tr>
                <th scope="row">{{$teacher->id}}</th>
                <td>{{$teacher->name}}</td>
                <td>{{$teacher->age}}</td>
                <td><img src="{{asset('/storage/TeacherImages/'.$teacher->image)}}" alt="asd"></td>
                <td>{{$teacher->address}}</td>
                <td>
                   <a href="{{route('EditTeacher',$teacher->id)}}">Edit</a>
                </td>
                 <td>
                    <form action="{{route('TeacherDelete',$teacher->id)}}" method="POST"  >
                        @method('PATCH')
                        @csrf
                        <button type="submit">Delete</button>
                    </form>
                </td>

              </tr>
            @endforeach


        </tbody>
      </table>
      <a href="{{route('CreateTeacherForm')}}" class="btn btn-primary">Add teacher</a>
</body>
</html>
