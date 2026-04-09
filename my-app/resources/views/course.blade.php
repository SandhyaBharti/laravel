<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Selected Course</title>
</head>
<body>

    <h2>Selected Course</h2>
    <p><strong>Course ID:</strong> {{ $courseId }}</p>
    <p><strong>Course Name:</strong> {{ $courseName }}</p>

    <br>
    <a href="{{ route('courses.list') }}">Select Another Course</a>

</body>
</html>