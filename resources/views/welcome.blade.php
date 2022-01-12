<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>Laravel Traits Example</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
<div class="container mt-5">
    <table class="table table-inverse">
        <thead>
        <tr>
            <th>Animal ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Description</th>
            <th>Can Fly!</th>
            <th>Eyes</th>
            <th>Ryan speak to it?</th>
        </tr>
        </thead>
        <tbody>

        @foreach($animal as $data)
            <tr id="animal{{$data->id}}">
                <td>{{$data->id}}</td>
                <td>{{$data->name}}</td>
                <td>{{$data->address}}</td>
                <td>{{$data->description}}</td>
                @if($data->description == 'bat' || $data->description == 'eagle' || $data->description == 'falcon')
                    <td>Yes!</td>
                @else
                    <td>No</td>
                @endif
                <td>{{$eyes->numberOfEyes}}</td>
                @if($data->description == 'bat' || $data->description == 'eagle' || $data->description == 'falcon' || $data->description == 'homo sapian')
                    <td>Absolutely</td>
                @else
                    <td>Not yet...</td>
                @endif
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>

</html>
