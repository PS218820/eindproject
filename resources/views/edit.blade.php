<!DOCTYPE html>
<html lang="en">
<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
  <h1 class="bg-blue-500 text-gray-50 text-5xl">Edit</h1>

  <br>

  <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="{{ route('computers.update',[$computer->id])}}" method="POST">
        @csrf
        @method('PUT')
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="name" value="{{ $computer->name }}" placeholder="Name">
        <br>
        <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="maker" placeholder="Detail">{{ $computer->maker }}</textarea>
        <br>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">Submit</button>
  </form>
  <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="{{ route('computers.destroy', [$computer->id])}}" method="POST">
      @csrf
      @method('DELETE')
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">Delete</button>
  </form>
  <form action="/computers">
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Back to home</button>
  </form>
</body>
</html>
