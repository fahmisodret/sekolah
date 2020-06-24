<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserController extends Controller
{
    /**
     * Menampilkan data user.
     * Role = Admin
     *
     * @return data user
     */
    public function index()
    {
    	$data['kel'] = User::all();
        return view('admin.user.index', $data);
    }

    /**
     * Menampilkan data user.
     * Role = Admin
     *
     * @return data user
     */
    public function edit($id)
    {
        $data['data'] = User::find($id);
        return view('admin.user.edit', $data);
    }


    /**
     * insert data user.
     * Role = Admin
     *
     * @param $id
     * @return data user
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:20'],
		]);
        $requestData = $request->all();

        $data = User::find($id);
        $data->update([
            'name' => $requestData['name'],
            'phone' => $requestData['phone'],
        ]);
        
        return redirect('admin/user');
    }


    /**
     * verify data user.
     * Role = Admin
     *
     * @param $id
     * @return data user
     */
    public function verif($id)
    {
        $user = User::find($id);
        $res = $user->update(['status'=>!$user->status]);
        if(!$res){
            $status = 500;
            $message = 'User Not updated!';
        }

        return redirect('admin/user');
    }


    /**
     * delete data user.
     * Role = Admin
     *
     * @param $id
     * @return data user
     */
    public function destroy($id)
    {
        $status = 200;
        $message = 'User deleted!';
        $res = User::destroy($id);
        if(!$res){
            $status = 500;
            $message = 'User Not deleted!';
        }

        return redirect('admin/user')
            ->with(['flash_status' => $status,'flash_message' => $message]);
    }
}
