@extends('layouts.appShop')
@section('section')
<h3 class="text-center">Algolia Search Products Beds</h3>
<div id="app">
    {{-- <algolia></algolia> --}}
    <p class="text-center">Algola Search Tab</p>
    <algolia></algolia>
     
</div>

<script src="{{asset('js/app.js')}}"></script>    
@endsection
