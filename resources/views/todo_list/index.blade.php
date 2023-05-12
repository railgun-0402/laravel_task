<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>テスト</title>

    @vite('resources/css/app.css')
</head>

<body>
    @if ($todo_lists->isNotEmpty())
    <div class="container px-5 mx-auto">
        <ul class="font-medium text-gray-900 bg-white rounded-lg border border-gray-200">
            @foreach ($todo_lists as $item)
            <li class="py-4 px-5 w-full rounded-t-lg border-b last:border-b-0 border-gray-200">
                {{ $item->name }}
            </li>
            @endforeach
        </ul>
    </div>
    @endif
</body>

</html>