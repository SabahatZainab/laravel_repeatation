<h1>Header Footer</h1>

{{-- <p>{{$name}}</p> --}}
{{-- @foreach ($fruits as $key=>$item)
    <p>{{$key}}-{{$item}}</p>
@endforeach --}}

@forelse ($fruits as $key=>$item)
    <p>{{$key}}-{{$item}}</p>
@empty
    <p>No Value Found...</p>
@endforelse