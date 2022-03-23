<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Bookings Counter for all your company</title>
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body>
    <div class="container mx-auto my-16">
      <div>
        <ul class="flex space-x-2">
            <li><a href="/">Home</a></li>
            <li><a href="/list-user">Users History</a></li>
            <li><a href="/list-company">Company History</a></li>
        </ul>
    </div>
    <h1 class="text-center font-bold text-4xl">Welcome to our Company</h1>

    <div class="mt-16">
      <form action="generateCompany" method="POST" class=" mt-6">
        @csrf
        <div class="relative z-0 mb-6 w-full group">
          <input type="text" name="name" value="{{old('name')}}" class="pr-10 border border-gray-300 outline-none py-2.5 indent-2  text-sm text-gray-900 bg-transparent rounded-md dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600" placeholder="Enter Name"  />
          <div class="ml-4 text-md text-cyan-500 mt-2 text-sm">
          @error('name')
              {{$message}}
          @enderror
          </div>
        </div>
        <div class="relative z-0 mb-6 w-full group">
          <input type="text" name="city" value="{{old('city')}}" class="pr-10 border border-gray-300 outline-none py-2.5 indent-2  text-sm text-gray-900 bg-transparent rounded-md dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600" placeholder="Enter Email ID"  />
          <div class="ml-4 text-md text-cyan-500 mt-2 text-sm">
          @error('city')
              {{$message}}
          @enderror
          </div>
        </div>

          <div class="mt-8">
          <button type="submit" class=" text-white bg-cyan-700 hover:bg-cyan-800 font-medium rounded-md text-sm px-9 py-3 text-center dark:bg-cyan-600 dark:hover:bg-cyan-700">Add Company</button>
          </div>
          <div class="text-left text-sm mt-4">
          {{session('email')}}
          </div>
      </form>
    </div>
    </div>
    
    <div class="container mx-auto mt-10">
      <div class="mt-5">
        <div class="mt-5 md:mt-0 md:col-span-2">
          <form action="generateUser" method="POST">
              @csrf
              <div class="relative z-0 mb-6 w-full group">
                <input type="text" name="name" value="{{old('name')}}" class="pr-10 border border-gray-300 outline-none py-2.5 indent-2  text-sm text-gray-900 bg-transparent rounded-md dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600" placeholder="Enter Name"  />
                <div class="ml-4 text-md text-cyan-500 mt-2 text-sm">
                @error('name')
                    {{$message}}
                @enderror
                </div>
              </div>
              <div class="relative z-0 mb-6 w-full group">
                <input type="text" name="email" value="{{old('email')}}" class="pr-10 border border-gray-300 outline-none py-2.5 indent-2  text-sm text-gray-900 bg-transparent rounded-md dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600" placeholder="Enter Email ID"  />
                <div class="ml-4 text-md text-cyan-500 mt-2 text-sm">
                @error('email')
                    {{$message}}
                @enderror
                </div>
              </div>
      
              <div class="relative z-0 mb-6 w-full group">
                <input type="tel" name="phone" value="{{old('phone')}}" class="pr-10 border border-gray-300 outline-none py-2.5 indent-2  text-sm text-gray-900 bg-transparent rounded-md dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600" placeholder="Enter Phone Number"  />
                <div class="ml-4 text-md text-cyan-500 mt-2 text-sm">
                @error('phone')
                    {{$message}}
                @enderror
                </div>
              </div>
      
                <div class="mt-8">
                <button type="submit" class=" text-white bg-cyan-700 hover:bg-cyan-800 font-medium rounded-md text-sm px-9 py-3 text-center dark:bg-cyan-600 dark:hover:bg-cyan-700">Add User</button>
                </div>
            </div>
          </form>
        </div>
      </div>
    </div>
</body>
</html>