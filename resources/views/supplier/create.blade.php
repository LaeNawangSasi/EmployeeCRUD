<form method="POST" action="{{route('Supplier.store')}}">{{ csrf_field()}}
<input type="text" name="txt_Sid" /><br/><br/>
<input type="text" name="txt_Sname" /><br/><br/>
<input type="text" name="txt_Saddress" />
<input type="submit"
       name="sbm_save"
       id="sbm_save"
       value="save" />

</form>