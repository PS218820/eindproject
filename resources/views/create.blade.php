<!DOCTYPE html>
<html lang="en">
<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
  <h1 class="bg-blue-500 text-gray-50 text-5xl">Create</h1>

  <br>

   <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="{{ route('computers.store')  }}" method="POST">
     @csrf
     <p>Name</p>
     <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="name" class="form-control" placeholder="name">
     <p>Maker</p>
     <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="maker" class="form-control" placeholder="maker">
     <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">Submit</button>
   </form>
   <form action="/computers">
     <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Back to home</button>
   </form>
</body>
</html>
