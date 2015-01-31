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
        [$data['name'],$data['vat'],$data['description'],$data['email'],$data['country'],$data['state'],$data['city'],$data['address']]);
    }

    public function delete($id){
        DB::delete('DELETE FROM `companies` WHERE `id` = '.$id);
    }

    public  function validate($data){
        $rules = ["name" => array("required"),
            "email" => array("required", "email"),
            "vat" => array("required", "regex:/[A-Z][A-Z][A-Z][0-9][0-9][0-9][0-9][0-9][A-Z][0-2]/")];
        $validator = Validator::make($data, $rules);
        return $validator;
    }
} 