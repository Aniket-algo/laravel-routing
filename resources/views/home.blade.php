{{-- if we want to send value in include we have to pass in array --}}

{{-- sending multiple value --}}
@php
    // $fruits = ['one'=>'Apple','two'=>'Mango','three'=>'Grapes','four'=>'Banana'];
    $fruits = [];
@endphp

@include('pages.header',['name'=> $fruits])


<h1>Home Page : first route</h1>
<a href="/plan">Plan</a>
<a href="{{route('mypost') }}">Data</a>

@include('pages.footer')