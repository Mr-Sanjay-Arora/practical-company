<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Listing all the Users</title>
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body>
    <div class="container mx-auto my-16 px-60">
      <div>
        <ul class="flex space-x-2">
            <li><a href="/">Home</a></li>
            <li><a href="/list-user">User History</a></li>
            <li><a href="/list-company">Company History</a></li>
        </ul>
    </div>
    <h1 class="text-center font-bold text-4xl">Welcome to our company</h1>

    <div class="flex flex-col mt-16">
      <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8 mx-4">
          <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
              <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
    <table class="min-w-full divide-y divide-gray-200">
      <thead class="bg-white">
        <tr>
          <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Name</th>
          <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Email ID</th>
          <th scope="col" class="px-6 py-3 text-xs font-medium uppercase tracking-wider text-center">Created at</th>
      </tr>
      </thead>
      <tbody class="bg-white divide-y divide-gray-200 ">
        @foreach($users as $list)
        <?php 
          $date = Date::createFromFormat('Y-m-d H:i:s', $list->created_at);
          $bdate = $date->format("M d, Y");

        ?>
        <tr class="">
          <td class="px-6 py-4 whitespace-nowrap">
            <div class="flex items-center">
              <div class="ml-0">
                <div class="text-sm text-gray-900">{{$list->name}}</div>
              </div>
            </div>
          </td>
          <td class="px-6 py-4 whitespace-nowrap">
            <div class="flex items-center">
              <div class="ml-0">
                <div class="text-sm text-gray-900">{{$list->email_id}}</div>
              </div>
            </div>
          </td>
          <td class="px-6 py-4 whitespace-nowrap text-center">
              <div class="text-sm text-gray-900">{{$bdate}}</div>
          </td>

          <td class="px-6 py-4 whitespace-nowrap">
            <div class="text-sm text-gray-900"><a href="/view-user/{{$list->id}}">View</a></div>
            <div class="text-sm text-gray-900"><a href="/delete-user/{{$list->id}}">Delete</a></div>
          </td>
        @endforeach
      </tbody>
    </table>
</div>
    </div>
</body>
</html>