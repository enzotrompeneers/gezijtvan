<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>task</title>
</head>
<body>
    <p>title: {{ $task->title }}, body: {{ $task->body }}</p>
    <ul>
        <li>id: {{ $task->id }}</li>
        <li>title: {{ $task->title }}</li>
        <li>body: {{ $task->body }}</li>
        <li>complete: {{ $task->complete }}</li>
        <li>created at: {{ $task->created_at }}</li>
        <li>updated at:{{ $task->updated_at }}</li>
    </ul>
</body>
</html>