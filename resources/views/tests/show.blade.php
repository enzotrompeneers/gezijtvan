<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test</title>
</head>
<body>
    <ul>
        <li>id: {{ $test->id }}</li>
        <li>title: {{ $test->text }}</li>
        <li>created at: {{ $test->created_at }}</li>
        <li>updated at:{{ $test->updated_at }}</li>
    </ul>
</body>
</html>