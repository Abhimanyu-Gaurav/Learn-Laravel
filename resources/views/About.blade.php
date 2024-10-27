@include('common.header')
@include('common.inner',['page'=>"This is about page"]) {{--pass data from main view to subview--}}


<h1>About Page</h1>
<h1>{{$name}}</h1>
