<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body class="d-flex justify-content-center my-5">
    <table class="table-striped-columns">
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>GENDER</th>
                <th>ADDRESS</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($student as $stu)
            <tr>
                <td>{{ $stu['id'] }}</td>
                <td>{{ $stu['name'] }}</td>
                <td>{{ $stu['gender'] }}</td>
                <td>{{ $stu['address'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>