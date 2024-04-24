@php
    $value = '23';
@endphp

{{-- @includeWhen(true,'pages.header',["name"=>"helloworld"]) --}} {{-- include header file when condition is true--}}
{{-- @includeWhen(false,'pages.header',["name"=>"helloworld"]) --}}

{{-- @includeWhen(empty($value), 'pages.header',['status'=> 'true']) --}}
@includeUnless(empty($value),'pages.header',['status'=>'false'] ){{-- run when condition id false--}}
<h1>Welcome Page</h1>

@include('pages.footer')
@includeIf('pages.content') {{-- check any page content found or not if found include it , in simple include directive we found if any this content view not found!--}}

