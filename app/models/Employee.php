<?php
/**
 * Created by PhpStorm.
 * User: MAH4E
 * Date: 31/01/15
 * Time: 11:26
 */



class Employee {

    public function getAll(){
        $employees = DB::select('select * from employee');
        return $employees;
    }

    public function getById($id){
        $companies=DB::select('SELECT * FROM `companies-employees` JOIN `companies` ON `companies-employees`.`company_id`=`companies`.`id` AND `companies-employees`.`employee_id`='.$id );
        $employee=DB::select('select * from employee WHERE id='.$id);
        return array($employee,$companies);
    }

    public  function create($data){
            DB::insert('INSERT INTO `employee`(`name`, `surname`, `email`, `age`, `gender`, `experience`) VALUES (?,?,?,?,?,?)',
                [$data['name'],$data['surname'],$data['email'],$data['age'],$data['gender'],$data['exp']]);

    }

    public function edit($data, $id){
        DB::update('UPDATE `employee` SET `name`=?, `surname`=?, `email`=?, `age`=?, `gender`=?, `experience`=? WHERE `id` = '.$id,
            [$data['name'],$data['surname'],$data['email'],$data['age'],$data['gender'],$data['exp'],$data['exp']]);
    }

    public function delete($id){
        DB::delete('DELETE FROM `employee` WHERE `id` = '.$id);
        DB::delete('DELETE FROM `companies-employees` WHERE `employee_id` = '.$id);
    }

    public  function validate($data){

        $rules = ["name" => array("required"),
            "surname" => array("required"),
            "email" => array("required", "email"),
            "age" => array("required", "regex:/[0-9]+/"),
            "gender" => array("required"),
            "exp" => array("required", "regex:/[0-9]+/")];
        $validator = Validator::make($data, $rules);
        return $validator;
    }
} 