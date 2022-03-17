<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tasks</title>


    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="bg-gray-200">

    <nav class="p-6 bg-white flex justify-between mb-6">
        <ul class="flex items-center">
            <li>
                <a href="" class="p-4">Home</a>
            </li>

            <li>
                <a href="" class="p-4">Boards</a>
            </li>

            <li>
                <a href="" class="p-4">View List</a>
            </li>

            <li>
                <a href="" class="p-4">View Card</a>
            </li>
        </ul>

        <ul class="flex items-center">
            <li>
                <a href="{{ route('getOrganizationId') }}" class="p-4">Get Organization ID</a>
            </li>
        </ul>
    </nav>
    @yield('taskContent')
</body>

</html>
