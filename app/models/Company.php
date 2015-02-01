<?php
/**
 * Created by PhpStorm.
 * User: MAH4E
 * Date: 31/01/15
 * Time: 17:39
 */

class Company {

    public function getAll(){
        return DB::select('select * from companies');
    }

    public function getById($id){
        return DB::select('select * from companies WHERE id='.$id);
    }

    public  function create($data){
        $date=new DateTime("now");
        DB::insert('INSERT INTO `companies`(`name`, `description`, `vat`, `email`, `country`, `state`, `city`, `address`, `created`) VALUES (?,?,?,?,?,?,?,?,?)',
            [$data['name'],$data['description'],$data['vat'],$data['email'],$data['country'],$data['state'],$data['city'],$data['address'],$date]);
    }

    public function edit($data, $id){
        DB::update('UPDATE `companies` SET `name`=?, `vat`=?, `description`=?, `email`=?, `country`=?, `state`=?, `city`=?, `address`=? WHERE `id` = '.$id,
        [htmlentities($data['name']),$data['vat'],$data['description'],$data['email'],$data['country'],$data['state'],$data['city'],$data['address']]);
    }

    public function delete($id){
        DB::delete('DELETE FROM `companies` WHERE `id` = '.$id);
    }

    public  function validate($data){
        $rules = ["name" => array("required"),
            "description" => "required|min:10|max:100",
            "country" => "required|min:5|max:20",
            "state" => "required|min:5|max:20",
            "city" => "required|min:3|max:20",
            "address" => "required|min:10|max:100",
            "email" => array("required", "email"),
            "vat" => array("required", "regex:/([A-Z]{3}[0-9]{4}[^a-z^A-Z^0-9]{1}[A-Z]{1}[0-2]{1})|([A-Z]{3}[0-9]{5}[A-Z]{1}[0-2]{1})+$/")];
        $validator = Validator::make($data, $rules);
        return $validator;
    }
} 