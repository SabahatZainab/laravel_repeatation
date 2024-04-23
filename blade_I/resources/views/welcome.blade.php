@php
    $fruits = ["Apple","Banana","Orange","Grapes"];
@endphp
{{-- @include('pages.header',['name'=>'Yahoo Baba']) --}}
@include('pages.header',['fruits'=>$fruits])

<h1>Welcome: Home Page!</h1>

{{5+9}}

<br><br>

{{"Hello World!"}}

<br><br>

{{"<h1>Hello World!</h1>"}}

<br><br>

{!!"<h1>Raining!</h1>"!!}

{{-- {{"<script>alert('raining')</script>"}} --}}

{{--Comment Statement--}}

{!! "<script>alert('raining!')</script>"!!}

@php
   $user = "sabahatzainab";
   $users = ["user1","user2","user3"];
@endphp

{{ $user }}

<ul>
    @foreach ($users as $user)
        {{-- <li>{{$loop->index}}-{{$user}}</li> --}}
        {{-- <li>{{$loop->iteration}}-{{$user}}</li> --}}
        {{-- <li>{{$loop->count}}-{{$user}}</li> --}}

        @if($loop->first)
            <li style="color:red">{{$user}}</li>
        @else
            <li>{{$user}}</li>
        @endif
    @endforeach
</ul>




@{{$user}} {{--if we are use @ at the first of statement it prints statement same output => {{$user}}--}}
@@if() {{--if we are use @ at the first of statement it prints statement same output => @if()--}}


@include('pages.footer')