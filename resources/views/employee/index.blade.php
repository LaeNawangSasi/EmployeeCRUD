
@foreach ($employee as $employeelist)
{{ $employeelist->employee_id}} <br/>
{{ $employeelist->employee_name}} <br/>
{{ $employeelist->employee_address}}
<h3 style="color:red">{{ $employeelist->employee_phone_number}}</h3>
 <a href ="/Employee/{{$employeelist->employee_id}}"> Look </a> 
 <a href ="/Employee/{{$employeelist->employee_id}}/edit">Edit </a> <br/>

<form action="/Employee/{{$employeelist->employee_id}}" method="post">
    {{ csrf_field()}} 
    {{ method_field('DELETE')}} 
<button> X </button></form>
@endforeach

<a href="{{ url('Employee/create')}}"> Back To </a>