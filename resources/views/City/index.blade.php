<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Kota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 align="center">Data Kota</h1>
            <a href="{{route('city.create')}}">
                <button class="btn btn-primary">Add New City</button> <br><br>
            </a>
            <table class="table table-bordered table-striped">
                <tr>
                    <th>No : </th>
                    <th>Name City : </th>
                    <th>Code Of Area : </th>
                    <th>Action : </th>
                </tr>
                @php
                    $nomor= 1;
                @endphp
                @foreach ($data_city as $city)
                <tr>
                    <td>{{$nomor++}}</td>
                    <td>{{$city->name_city}}</td>
                    <td>{{$city->code_area}}</td>
                    <td>
                        {{-- <a href="{{route('city.edit', $city->id)}}">
                            <button class="btn btn-warning">EDIT</button>
                        </a> --}}
                        <form action="{{route('city.destroy', $city->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">DELETE</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        <form action="{{route('logout')}}" method="POST" value="Logout">
            @csrf
            <button class="btn btn-danger">Logout</button>
        </form>
    </div>
</body>
</html>
