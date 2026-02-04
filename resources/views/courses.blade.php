<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses and Subjects</title>
</head>

<body style="padding:20px; font-family: Arial, sans-serif;">

    <h1 style="text-align:center;">Hand-On #2</h1>

    <!-- COURSES TABLE -->
    <h2>Courses</h2>
    <table border="1" width="100%" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Course Name</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($courses as $course)
                <tr>
                    <td>{{ $course->id }}</td>
                    <td>{{ $course->course_name }}</td>
                    <td>{{ $course->course_description }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" style="text-align:center;">No courses found</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <!-- SUBJECTS TABLE -->
    <h2 style="margin-top:40px;">Subjects</h2>
    <table border="1" width="100%" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Subject Name</th>
                <th>Course</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($subjects as $subject)
                <tr>
                    <td>{{ $subject->id }}</td>
                    <td>{{ $subject->subject_name }}</td>
                    <td>{{ $subject->course->course_name ?? 'No course' }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" style="text-align:center;">No subjects found</td>
                </tr>
            @endforelse
        </tbody>
    </table>

</body>
</html>
