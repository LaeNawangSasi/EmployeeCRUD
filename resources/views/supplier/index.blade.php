
@foreach ($supplier as $supplierlist)
{{ $supplierlist->Supplier_id}}
{{ $supplierlist->Supplier_name}}
 <p style="color:green">{{ $supplierlist->Supplier_addres}}</p>

<br />
@endforeach
<a href="{{ url('Supplier/create')}}"> Back To </a>