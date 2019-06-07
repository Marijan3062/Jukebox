<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

class FormController extends Controller
{
    public function index(Request $request)
    {
        $id = $request->input('id', null);

        if ($request->has('id')) {
            // this is editing an existing record
            $query = "
                SELECT *
                FROM `songs`
                WHERE `id` = ? 
            ";
            $record = DB::selectOne($query, [$id]);

        } else {
            // this is creating a new record, create an empty object
            $record = (object)[
                'id'          => null,
                'name'        => null,
                'code'        => null
            ];
        }
 
        // if the form was submitted
        if ($request->method() == 'POST') {
 
            // validate request data
            $this->validate($request, [
                'name' => 'required',
                'code' => 'required'
                
            ]);
 
            // update the data from request
            $record->name = $request->input('name');
            $record->code = $request->input('code');
            $record->id = $request->input('id');
            
 
            // save the data
            if ($request->has('id')) {
                // update existing record
                $query = 
                   "UPDATE `songs`
                   SET `name` = ?,
                   `code` = ?
                   WHERE `id` = ?";

                DB::update($query, [
                    $record->name,
                    $record->code,
                    $id
                ]);

            } else {
                // insert a new record
                $query = 
                   "INSERT 
                   INTO `songs`
                   (`name`, `code`)
                   VALUES
                   (?, ?)";
                DB::insert($query, [
                    $record->name,
                    $record->code
                ]);
 
                // update the value of the autoincremented id
                $record->id = DB::getPdo()->lastInsertId();
            }
 
            // flash success message
            Session::flash('success_message', 'OK!');
 
            // redirect to edit
            return redirect('form?id='.$record->id);
        }
 
        // prepare the edit form
         return view('/form', [
            'record' => $record
        ]);
 
        // put the form into the rest of the page
        // return view('/form', [
        //     'content' => $edit_form
        // ]);
    }
}
