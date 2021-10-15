@extends('layouts.frontend')
@section('title', 'CIS')

@section('content')
<h1>This is CIS page</h1>
<ul class="list-group">
    @foreach ($years as $year)
        <a href="/cis/{{$year}}"
            class="list-group-item list-group-item-action">
            {{ $year }}</a>
    @endforeach    
</ul>
@endsection