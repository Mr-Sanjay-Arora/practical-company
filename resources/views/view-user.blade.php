<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Listing the User</title>
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body>
    <div class="container mx-auto my-16 px-60">
        <div>
            <ul class="flex space-x-2">
                <li><a href="/">Home</a></li>
                <li><a href="/list-user">Users History</a></li>
                <li><a href="/list-company">Company History</a></li>
            </ul>
        </div>
        <h1 class="text-center font-bold text-4xl">Welcome to our Company</h1>
    
        <div class="mt-20">
            <label class="font-bold">User Name : </label>
            <span>{{$user[0]->name}}</span>
        </div>
        <div>
            <label class="font-bold">Email ID : </label>
            <span>{{$user[0]->email_id}}</span>
        </div>
        <div>
            <label class="font-bold">Contact Number : </label>
            <span>{{$user[0]->phone}}</span>
        </div>
        <div>
            <label class="font-bold">Company associated : </label>
            <span>{{$company[0]->name}}</span>
        </div>
    </div>
</body>
</html>