


@foreach ($employee as $employeelist)
{{ $employeelist->employee_id}} <br/>
{{ $employeelist->employee_name}} <br/>
{{ $employeelist->employee_address}} <br/>
{{ $employeelist->employee_phone_number}}
<br/>


@endforeach

<a href="{{ url('Employee/create')}}"> create </a>