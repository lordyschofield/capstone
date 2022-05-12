@extends('layouts.base')


@section('content')

<!-- component -->
<form method="POST">

    @csrf
    @method('PUT')


    <div class="bg-indigo-50 min-h-screen md:px-20 pt-6 flex justify-center">
      <div class=" bg-white rounded-md px-6 py-10 max-w-2xl mx-auto items-center text-center">
        <h1 class="text-center text-2xl font-bold text-gray-500 mb-10">EDIT LEADS</h1>
        <div class="space-y-4 ml-10">
          <div>
            <label for="title" class="text-lx font-serif">Lead Name:</label>
            <input type="text" placeholder="title" id="title" class="ml-6 outline-none py-1 px-2 text-md border-2 rounded-md" />
          </div>
          
          <div>
            <label for="name" class="text-lx font-serif">Company:</label>
            <input type="text" placeholder="name" id="name" class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md" />
          </div>
          <div>
            <label for="email" class="text-lx font-serif">Email:</label>
            <input type="text" placeholder="name" id="email" class=" outline-none py-1 px-2 text-md border-2 rounded-md" />
          </div>
          <div>
            <label for="email" class="text-lx font-serif">Phone:</label>
            <input type="text" placeholder="name" id="email" class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md" />
          </div>
          <div>
            <label for="email" class="text-lx font-serif">Lead Source:</label>
            <input type="text" placeholder="name" id="email" class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md" />
          </div>
          <div>
            <label for="email" class="text-lx font-serif">Lead Owner:</label>
            <input type="text" placeholder="name" id="email" class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md" />
          </div>
          <div>
            <label for="email" class="text-lx font-serif">Lead Status:</label>
            <input type="text" placeholder="name" id="email" class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md" />
          </div>
          
          <button class=" px-6 py-2 mx-auto block rounded-md text-lg font-semibold text-indigo-100 bg-indigo-600" type="">Update</button>
        </div>
      </div>
    </div>
  </form>














@endsection