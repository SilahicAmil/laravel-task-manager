<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<main>
    <nav class="flex h-12">
        <ul class="flex ml-auto bg-red-500 p-4 items-center gap-12">
            <li>
                <a href="/register">Register</a>
            </li>
            <li>
                <a href="/login">Login</a>
            </li>

        </ul>
    </nav>
    {{$slot}}
</main>
</body>
</html>