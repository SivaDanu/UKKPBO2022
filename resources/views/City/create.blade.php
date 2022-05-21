<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add City</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2>Add City</h2>
                </div>
                <div class="modal-body">
                    <form action="{{route('city.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            Name Of City :
                            <input type="text" name="name_city" class="form-control">
                        </div>
                        <div class="form-group">
                            Code Of Area  :
                            <input type="text" name="code_area" class="form-control">
                        </div>
                        <div class="modal-footer">
                            {{-- <button type=""> --}}
                                <a href="{{route('city.index')}}"  class="btn btn-danger">CANCEL & BACK</a>
                            {{-- </button> --}}
                            <button type="submit" class="btn btn-primary">PROSES</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
