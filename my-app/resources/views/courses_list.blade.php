<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Select a Course</title>
</head>
<body>

    <h2>Select Another Course</h2>
    <ul>
        @foreach ($courses as $id => $name)
            <li>
                <a href="{{ route('course.show', $id) }}">{{ $name }}</a>
            </li>
        @endforeach
    </ul>

</body>
</html>