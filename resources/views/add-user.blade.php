<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="container mx-auto mt-10">
      <a href="{{url('/')}}" class="bg-black px-3 py-2 text-white rounded-md">Go back</a>
      <div class="mt-5">
        <div class="mt-5 md:mt-0 md:col-span-2">
          <form action="generateUser" method="POST">
              @csrf
            <div class="shadow overflow-hidden sm:rounded-md">
              <div class="px-4 py-5 bg-white sm:p-6">
                <div class="grid grid-cols-5 gap-6">
                  <div class="col-span-6 sm:col-span-3">
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" name="name" id="name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm border-gray-300 rounded-md">
                  </div>
                  <div class="col-span-6 sm:col-span-3">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email ID</label>
                    <input type="email" name="email" id="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm border-gray-300 rounded-md">
                  </div>
    
                  <div class="col-span-6 sm:col-span-3">
                    <label for="phone" class="block text-sm font-medium text-gray-700">Contact Number</label>
                    <input type="tel" name="phone" id="phone" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm border-gray-300 rounded-md">
                  </div>
    
              <div class="px-4 py-3 text-right sm:px-6">
                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Add User</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    
</body>
</html>

  