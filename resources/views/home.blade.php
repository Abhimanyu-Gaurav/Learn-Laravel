<h1>Home</h1>
<a href="/">Home page</a>
<a href="/about/Anil">About page</a>  

<h1>{{$name}}</h1>  {{-- # Template engine i.e blade {{}}, Here we display varaible --}}
{{-- <h1>{{rand()}}</h1>  <!--Excute function, It is php bydefault function>> --}}

{{-- <h1>{{$users[1]}}</h1> --}}

 {{-- ##if-else --}}
@if($name=='abhi')
<h2>this is abhi</h2>
@elseif ($name=='prashant')
<h2>this is prashant</h2>
@else
<h2>other user</h2>
@endif

{{-- ##loop --}}
<div>
    @for($i=0; $i<=10; $i++)
    <h3>{{$i}}</h3>
    @endfor
</div>