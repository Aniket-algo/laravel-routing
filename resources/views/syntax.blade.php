{{-- Printing message in blade --}}

{{ "Welcome to blade" }}
<br><br>
{{ 5+2 }}

<br><br>
{{ "<h1>Welcome to Blade Heading</h1>" }} {{--it is more secure syntax it prevent from xss attacks  --}}

<br><br>
{!!   "<h1>Welcome to Blade Heading</h1>" !!}


{!! "<script>alert('Hello World')</script>" !!}

{{-- to print variable we have to define var first  --}}

@php
 $user= "Aniket";
@endphp

{{ $user }}


{{-- to create an array in php --}}

@php
 $sports = ["Cricket","badminton","tennis","kabaddi"];
@endphp

{{-- to print an data using loop in blade  --}}


<ul>
@foreach ($sports as $spot )
@if ($loop->last)
<li style="color: red;">{{$spot}}</li>
@else
<li>{{$spot}}</li>
@endif


@endforeach
</ul>


{{-- if we want to just print variable name in blae not value  --}}
@php
    $variable = "Welcome to variable";
@endphp

{{ $variable }}
<br><br>
@{{ $variable }}

