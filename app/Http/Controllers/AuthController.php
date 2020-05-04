<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Users;
use App\Models\Jamaah;

class AuthController extends Controller
{
	public function __construct()
	{
		session_start();
	}
    
    /* Landing Page */
    public function landing()
    {
        return view('landing');
    }

    public function login()
    {
        return view('auth.login');
    }
    /*
		Login Admin Dan Pengurus
    */
    public function loginProcess(Request $request)
    {
    	try {
    		
    		$email = $request->input('email');
    		$password = $request->input('password');
    		$level_id = $request->input('id_level');

    		$where = [
    			'email' => $email,
    			'password' => $password,
    			'id_level' => $level_id
    		];

    		$data = Users::where($where)->first();

    		if ($data) {

    			// Session data
    			$dataSession = [
    				'username' => $data->username,
    				'id_level' => $data->id_level
    			];

    			$_SESSION = $dataSession;

    			if($data->id_level === 1){
    				// print_r($dataSession); die();
    				return redirect('admin');
    			
    			}elseif ($data->id_level === 2) {
    				echo "pengurus";
    			}

    		}else{
    			return redirect('login')->with('gagal', 'Login gagal');
    		}

    	} catch (Exception $e) {
    		echo $e;
    	}
    }

    public function logout()
    {
        if(session_destroy()){
            return redirect('login');
        }
    }

    /*
		Jamaah Login
    */
    public function loginJamaah()
    {
        return view('auth.login_jamaah');
    }

    public function loginProcessJamaah(Request $request)
    {
        try {
            $email = $request->input('email');
            $password = $request->input('password');

            $where = [
                'email' => $email,
                'password' => $password
            ];

            $login = Users::where($where)->first();

            if ($login->id_level == 3) {
                
                // Session Data
                $dataSession = [
                    'username' => $login->username,
                    'id_level' => $login->id_level
                ];

                $_SESSION = $dataSession;

                echo "login jamaah";
            }else{
                echo "gagal";
            }

        } catch (Exception $e) {
            echo $e;
        }
    }

    /*
		Jamaah Register
    */
    public function jamaahRegister()
    {
    	return view('auth.jamaah_register');
    }

    public function jamaahProcess(Request $request)
    {
    	try {

    		// Users Masjid
    		$insert = new Users;
    		$insert->email = $request->input('email');
    		$insert->username = $request->input('username');
    		$insert->password = $request->input('password');
    		$insert->alamat = $request->input('alamat');
    		$insert->id_level = 3;
    		$save = $insert->save();

    		if($save){
    			$id_user = Users::select('id_users')->where('email', $request->input('email'))->first();

    			// Users Jmaah
    			$insert2 = new Jamaah;
    			$insert2->id_jamaah = $id_user->id_users;
    			$insert2->nama = $request->input('nama');
    			$insert2->jenis_kelamin = $request->input('jenis_kelamin');
    			$insert2->status_jamaah = $request->input('status_jamaah');
    			$insert2->tgl_lahir = $request->input('tgl_lahir');
    			$insert2->tempat_lahir = $request->input('tempat_lahir');
    			$save2 = $insert2->save();

    			return redirect('login/jamaah');
    		}else{
    			echo "gagal";
    		}
    	
    	} catch (Exception $e) {
    		echo $e;
    	}
    }
}
