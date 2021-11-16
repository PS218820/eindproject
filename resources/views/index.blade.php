<!DOCTYPE html>
<html lang="en">
<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computers - Index</title>
</head>
<body>
  <h1 class="bg-blue-500 text-gray-50 text-5xl">Computers</h1>

  <br>

  <ul class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    @foreach($computers as $computer)
      <li class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"><a href="computers/{{ $computer->id }}">{{ $computer->name }}</a></li>
    @endforeach
  </ul>
  <form action="/computers/create">
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Create</button>
  </form>
</body>
</html>
