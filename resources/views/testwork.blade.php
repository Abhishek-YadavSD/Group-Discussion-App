@php
    $cont=["abhi","abhishek","hims","divy","abhinav","ayush"];
    $name='xyz';
@endphp
{{-- @foreach ($cont as $item)
   <h1>{{$item}}</h1>
@endforeach --}}
<script>
    var names =@json($name);
    console.log(names);
    data=@json($cont);
    console.table(data);
</script>