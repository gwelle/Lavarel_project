

@if ($user)
    <p>user : {{ $user }}</p>
@elseif ($age >= 30)
    <p>user : {{ $user }} à {{ $age  }} ans</p>)
@else
    <p>user : Not found  </p>
@endif

@foreach ($users as $u)
    <p>user : {{ $u }}</p>
    
@endforeach

{{--  --}}