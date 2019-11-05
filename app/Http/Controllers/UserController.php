<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// validate kiem tr du lieu
use  App\Http\Requests\{AddUserRequest,EditUserRequest};
use  App\Models\Users;

class UserController extends Controller
{
    function getUser(request $r) {

        if($r->has('search')){
            $keyWord = $r->search;
            $data['users'] = Users::where('full', 'like', '%'.$keyWord.'%') -> orwhere('phone', 'like', '%'.$keyWord.'%') -> paginate(10);
        }else{
            $data['users'] = Users::paginate(10);
        }

        // $data['bien_mang'] =[
        //     ['id' => 1,'name' => 'A', 'email' => 'a@gmail.com'],
        //     ['id' => 2,'name' => 'B', 'email' => 'b@gmail.com'],
        //     ['id' => 3,'name' => 'C', 'email' => 'c@gmail.com']
        // ];
    

        // return view('user', $data);
       //$data['users'] = Users::paginate(10);
       
       return view('user', $data);

    }
    function getAddUser() {
        return view('add_user');

    }
    function postAddUser(AddUserRequest $r){
        //$r: chua du lieu input
        //$r->all(); lây ra toan bộ dữ liệu trong input
        //dd($r->all());
        
        //dd($r->address); lay ra du lieu cua inout co nam la 'address'
        //dd( $r->full);
        
        // kiem tra du lieu bang request
        //Cau truc :$r->request([mang chua cac quy tac],[mang chua cac thong bao khi loi])
        //key: name cua input
        //value: quy tac tuong ung voi input do'(cac quy tac ngan cach' nhau boi? "")

        // $rules =[
        //     "full"=>"required|min:3",
        //     "phone"=>"required|numeric",
        //     "address"=>"required",
        //     "id_number"=>"required"
        // ];
        // key :"[ten input ][loi tuong ung]"
        //value: loi tuong ung'    
        // $messager =[
        //     "full.required"=>"Khong duoc de trong Ho va Ten",
        //     "full.min"=>"Khong duoc nho hon 3 ky tu",
        //     "phone.required"=>"Khong duoc de trong SDT",
        //     "phone.numeric"=>"SDT phai la so",
        //     "address.required"=>"Khong duoc de trong Dia chi",
        //     "id_number.required"=>"Khong duoc de trong CMT"

        // ];
        
        //$r->validate($rules, $messager);
        //dd($r->request);

        $user = new Users;

        $user->full=$r->full;
        $user->phone=$r->phone;
        $user->address=$r->address;
        $user->id_number=$r->id_number;
        $user->save();
        return redirect('/');
    }
    function getEditUser($idUser) {
        $data['user'] = Users::find($idUser);
     
       return view('edit_user', $data);

    }
    function postEditUser($idUser, EditUserRequest $r) {
        $user = Users::find($idUser);    
        //dd($data['user']['full']);
        $user -> full = $r -> full;
        $user -> phone = $r -> phone;
        $user -> address = $r -> address;
        $user -> id_number = $r -> id_number;
        $user -> save();
        //session flash hien thi 1 lan duy nhat sau do se mat di
        //->with('key', 'value'); tao session flash
        return redirect()->back()->with('thongbao', 'da sua thanh con');

    }
    function deleteUser($idUser){
        Users::destroy($idUser);
        return redirect()->back();
    }
}
