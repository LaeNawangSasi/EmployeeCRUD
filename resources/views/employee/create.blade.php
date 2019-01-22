<!-- ini create dari view -->

<form method="POST" action="{{route('Employee.store')}}">{{ csrf_field()}}
<p > ID </p><input type="text" name="txt_id" /><br/><br/>
<p> Name </p><input type="text" name="txt_name" /><br/><br/>
<p> Address </p><input type="text" name="txt_address" /><br/><br/>
<p> Phone </p><input type="text" name="txt_phone" />
<input type="submit"
       name="sbm_save"
       id="sbm_save"
       value="save" />

</form>