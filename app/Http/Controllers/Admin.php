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

            // if(M_ADmin::create([
            //                 'nama' => $request->nama,
            //                 'email' => $request->email,
            //                 'password' => encrypt($request->password)
            //             ])){
            //             return response()->jeson([
            //                 'status' => 'berhasil',
            //                 'message' => 'Data berhasil disimpan'
            //             ]);
            //                 }else{
            //                     return response()->jeson([
            //                     'status' => 'gagal',
            //                     'message' => 'Data gagal disimpan'
            //                 ]);
            //                 }



            $token = $request->token;
            $tokenDb = M_Admin::where('token', $token)->count();
            if($tokenDb > 0){
                $key = env('APP_KEY');
                $decoded = JWT::decode($token, $key, array('HS256'));
                $decoded_array = (array) $decoded;

                if($decoded_array['extime'] > time()){
                        if(M_ADmin::create([
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
}



