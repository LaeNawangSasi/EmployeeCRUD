


@foreach ($customer as $customerlist)
{{ $customerlist->customer_id}}
{{ $customerlist->name}}
 <p style="color:green">{{ $customerlist->address}}</p>
 <a href ="/Customer/{{$customerlist->customer_id}}"> Look </a> 
 <a href ="/Customer/{{$customerlist->customer_id}}/edit">   Edit </a> <br/>
<br/>
<form action="/Customer/{{$customerlist->customer_id}}" method="post">{{ csrf_field()}} {{ method_field('DELETE')}} 
<button> X </button></form>
@endforeach

<a href="{{ url('Customer/create')}}"> Back To </a>