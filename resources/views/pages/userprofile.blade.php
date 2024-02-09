
{{ $username=$_GET['NAME'];}}
{{ $usernumber=$_GET['PASSWORD'];}}
@if ($_GET['NAME'] == 'abhi@c.in')
    {!!"<script>alert('Name is for abhishek')</script>"!!}
@endif
@php
    $val=['abhi','abhishek','abhi yadav','I-abhi','etc'];
@endphp

<ul>
@foreach ($val as $item)

{{-- @if ($loop->first)
<li style="color: red">{{$loop->index}}-{{$item}}</li>
@elseif($loop->last)
<li style="color: blue">{{$loop->index}}-{{$item}}</li>
@else
<li>{{$loop->index}}-{{$item}}</li> --}}
@if ($loop->even)
<li style="color: red">{{$loop->index}}-{{$item}}</li>
@elseif($loop->odd)
<li style="color: blue">{{$loop->index}}-{{$item}}</li>
    
@endif
    
@endforeach
</ul>