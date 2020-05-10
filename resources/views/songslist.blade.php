

@extends('layouts.app')

@section('content')
    <div class="lg:flex"> <!-- lg "only for large screens-->
    <div class="lg:w-1/7">
        @include ('_sidebar-links')
    </div>

    <div class="lg:flex-1 lg:mx-10">
    
        

        <div class="border border-green-400 rounded-lg py-8 px-8">

        @include('_search-bar')
        
        <div class="border border-gray-300 rounded-lg">
        
        <div>
        <table class="table-fixed w-full">
  <thead>
    <tr>
      <th class="w-1/2 px-4 py-2">Song Title</th>
    </tr>
  </thead>
  <tbody>

  @foreach($songs as $song)
  <tr>
      <td class="border px-4 py-2"> {{$song}} </td>
    </tr>
  @endforeach
    
    
    
  </tbody>
</table>
        </div>

        </div>        
        
    </div>

    </div>

    </div>

    <div class="lg:w-1/5">
    
    </div>
    
    </div>
@endsection
