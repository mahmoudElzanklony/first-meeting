@extends('indexadmin')
  @section('content')
  <div class="fileExplorer">
      
      <div class="thumbnail">
          <img src="{{asset('images/articles/'.$file)}}" alt="thumb" title='upload'>
          <br>
          {{$file}}
      </div>
      
  </div>
  @endsection