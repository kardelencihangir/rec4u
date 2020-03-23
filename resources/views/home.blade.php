@extends('layouts.app')

@section('content')
    <div class="lg:flex"> <!-- lg "only for large screens-->
    <div class="lg:w-1/7">
        @include ('_sidebar-links')
    </div>

    <div class="lg:flex-1 lg:mx-10">
    
        <div class="border border-green-400 rounded-lg py-8 px-8">
        <div class="search-box mx-auto my-auto sm:w-full md:w-full lg:w-3/4 xl:w-3/4">
        <form class="flex flex-row" action="">
            <input 
            name="search"
            class="w-full"
            placeholder="Search artists">
            </input>
            <span 
            class="flex items-center rounded pl-4">
            <button type="submit" class="bg-green-500 rounded-lg shadow py-2 px-2 text-white">Search</button>
            </span>
            
        </form>

        <hr class="my-8">
        </div>
        
        </div>
        
    </div>

    </div>

    <div class="lg:w-1/5">
    
    </div>
    
    
@endsection
