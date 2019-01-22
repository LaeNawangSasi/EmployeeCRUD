<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Supplier;
class SupplierController extends Controller
{   function index(){
        //echo "Aku butuh duit";
        $supplier = Supplier::get (['Supplier_id',
        'Supplier_name',
        'Supplier_addres']);
        //var_dump($supplier);
        return view ('supplier.index',compact('supplier'));
}
function create(){
    return view ('supplier.create');
}
public function store (Request $request){
    // echo "halo";
    $txtId = $request->input('txt_Sid');
    $txtName = $request->input('txt_Sname');
    $txtAddress = $request->input('txt_Saddress');

    echo $txtId." <br/>".
    $txtName."<br/> ".
    $txtAddress;

    Supplier::create([
        'Supplier_id'=>$txtId,
        'Supplier_name'=>$txtName,
        'Supplier_addres'=>$txtAddress
    ]);
    return redirect('/Supplier');
}
public function show($id){
    echo $id;

    return view ('supplier.show',
    ['supplier'=> Supplier::where('Supplier_id',$id)]);
}
}
