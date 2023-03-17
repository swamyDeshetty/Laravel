
<x-user-component/>

<!-- @include('header') -->
@include('header')

@foreach($users as $data)
<h4>{{$data}}</h4>
@endforeach

@for($i=0;$i<10;$i++)

<h4>{{$i}}</h4>
@endfor


<p>hello this</p>