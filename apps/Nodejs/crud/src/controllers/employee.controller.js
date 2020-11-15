/** 
 * *& By Wahyudi Andrian
 * ! Thanks to Tutorial : Rahul Gupta Medium
 * ! simple CRUD API
 * Controller for Employees
 */



'use strict';

//Load Model employee
const Employee = require('./../models/employee.model');


//Get All employees
exports.findAll = function (req, res){
    Employee.findAll(function(err, employee){
        console.log('controller');

        if(err)
        res.send(err);
        
        console.log('res', employee);

        res.send(employee);
    });
};

//Insert data employee
exports.create = function(req, res) {
    const new_employee = new Employee(req.body);

    //Handles Null Error
    if (req.body.constructor === Object && Object.keys(req.body).length === 0) {
        res.status(400).send({ error:true, message: 'Please provide all require field!' });
    } else {
        Employee.create(new_employee, function (err, employee) {
            if(err)
            res.send(err);
            res.json({error:false, message:"Employee added successfully!", data:employee});
        });
    }
};

//Find data employee
exports.findById = function(req, res){
    Employee.findById(req.params.id, function(err, employee){
        if (err)
        res.send(err);
        res.json(employee);      
    });
};

//Update data employee
exports.update = function(req, res) {
    if(req.body.constructor === Object && Object.keys(req.body).length === 0){
        res.status(400).send({ error:true, message: 'Please provide all required field!' });
    }else{
        Employee.update(req.params.id, new Employee(req.body), function(err, employee){
            if(err)
            res.send(err);
            res.json({ error:false, message: 'Employee successfuly updated!' });
        });
    }
};

//Delete data employee
exports.delete = function(req, res){
    Employee.delete(req.params.id, function(err, employee){
        if(err)
        res.send(err);
        res.json({ error:false, message: 'Employee successfully deleted!' });
    });
};