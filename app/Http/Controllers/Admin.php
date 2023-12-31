<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use Firebase\JWT\JWT;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\Encryption\DecryptException;

use App\M_Admin;

class Admin extends Controller
{
    // tambah admin
    public function tambahAdmin(Request $request){
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'email' => 'required | unique:tbl_user',
            'password' => 'required',
            'token' => 'required'

        ]);

        if($validator->fails()){
            return response()->json([
                'status' => 'gagal', 
                'message' => $validator->messages()
            ]);
        }

            //  if(M_Admin::create([
            //                 'nama' => $request->nama,
            //                 'email' => $request->email,
            //                 'password' => encrypt($request->password)
            //             ])){
            //             return response()->json([
            //                 'status' => 'berhasil',
            //                 'message' => 'Data berhasil disimpan'
            //             ]);
            //             }else{
            //                     return response()->json([
            //                     'status' => 'gagal',
            //                     'message' => 'Data gagal disimpan'
            //                 ]);
            //             }  


            $token = $request->token;
            $tokenDb = M_Admin::where('token', $token)->count();
            if($tokenDb > 0){
                $key = env('APP_KEY');
                $decoded = JWT::decode($token, $key, array('HS256'));
                $decoded_array = (array) $decoded;

                if($decoded_array['extime'] > time()){
                        if(M_Admin::create([
                            'nama' => $request->nama,
                            'email' => $request->email,
                            'password' => encrypt($request->password)
                        ])){
                        return response()->json([
                            'status' => 'berhasil',
                            'message' => 'Data berhasil disimpan'
                        ]);
                        }else{
                                return response()->json([
                                'status' => 'gagal',
                                'message' => 'Data gagal disimpan'
                            ]);
                        }                   
                }else{
                    return response()->json([
                    'status' => 'gagal',
                    'message' => 'Token kadaluwarsa'
                ]);
                } 
            }      
    }
    
    // login admin
    public function loginAdmin(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required | unique:tbl_user',
            'password' => 'required'
          

        ]);

        if($validator->fails()){
            return response()->json([
                'status' => 'gagal', 
                'message' => $validator->messages()
            ]);
        }
        $cek = M_Admin::where('email', $request->email)->count();
        $admin = M_Admin::where('email', $request->email)->get();

        if($cek > 0){
            foreach ($admin as $adm) {
                if($request->password == decrypt($adm->password)){
                    $key = env('APP_KEY');
                   $data = array(
                    "extime" => time()+(60*120),
                    "id_admin" => $adm->id_user
                   );
                   $jwt = JWT::encode($data,$key);
                   return response()->json([
                        'status' => 'berhasil',
                        'message' => 'Berhasil login'
                        'token' => $jwt;

                    ]);

                }else{
                    return response()->json([
                        'status' => 'gagal',
                        'message' => 'Password Salah'

                    ]);
                }
            }

        }else{
            return response()->json([
                'status' => 'gagal',
                'message' => 'Email tidak terdaftar'
            ]);
        }
    }

    // hapus admin
    public function hapusAdmin(Request $request){
        $validator = Validator::make($request->all(), [
            'id_user' => 'required',            
            'token' => 'required'

        ]);

        if($validator->fails()){
            return response()->json([
                'status' => 'gagal', 
                'message' => $validator->messages()
            ]);
        }

            $token = $request->token;
            $tokenDb = M_Admin::where('token', $token)->count();
            if($tokenDb > 0){
                $key = env('APP_KEY');
                $decoded = JWT::decode($token, $key, array('HS256'));
                $decoded_array = (array) $decoded;

                if($decoded_array['extime'] > time()){
                        if(M_Admin::where('id_user', $request->id_user->delete())){
                        return response()->json([
                            'status' => 'berhasil',
                            'message' => 'Data berhasil dihapus'
                        ]);
                        }else{
                                return response()->json([
                                'status' => 'gagal',
                                'message' => 'Data gagal dihapus'
                            ]);
                        }                   
                }else{
                    return response()->json([
                    'status' => 'gagal',
                    'message' => 'Token kadaluwarsa'
                ]);
                } 
            }      
    }
    
}



