@php
    // $fruits = ["one"=>'aba',"two"=> 'sf',"three"=>'hh']
    $fruits = []
@endphp
@include('pages.header',['fruits'=>$fruits])
{{-- @include('pages.header',['name'=>'Yahoo BABA']) --}}


<h1>WELCOME PAGE</h1>


@include('pages.footer')