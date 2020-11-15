/** 
 * *& By Wahyudi Andrian
 * ! Thanks to Tutorial : Rahul Gupta Medium
 * ! simple CRUD API
 * Model for Employees
 */



'use strict';

//load db config
var dbConn = require('./../../config/db.config.js');

//Make object employee
var Employee = function(employee) {
    this.first_name = employee.first_name;
    this.last_time = employee.last_time;
    this.email = employee.email;
    this.phone = employee.phone;
    this.organization = employee.organization;
    this.designation = employee.designation;
    this.salary = employee.salary; 
    this.status = employee.status ? employee.status : 1;
    this.created_at = new Date(); 
    this.updated_at = new Date(); 
};

//Insert Function
Employee.create = function (newEmp, result) {
    dbConn.query("INSERT INTO employees set ?", newEmp, function (err, res) {
    if(err) {
      console.log("error: ", err);
      result(err, null);
    }
    else{
      console.log(res.insertId);
      result(null, res.insertId);
    }
    });
};

//Function to select data by ID
Employee.findById = function (id, result) {
    dbConn.query("SELECT * FROM employees where id = ? ", id, function (err, res){
        if (err) {
            console.log("error: ", err);
            result(err, null);
        } else {
            result(null, res);
        }
    });
};

//Function to find All Data
Employee.findAll = function (result){
    dbConn.query("SELECT * FROM employees", function (err, res){
        if (err) {
            console.log("error: ", err);
            result(null, err);
        } else {
            console.log("employees: ", res);
            result(null, res);
        }
    });
};

//Function to Update data employee
Employee.update = function(id, employee, result){
    dbConn.query("UPDATE employees SET first_name=?, last_name=?, email=?, phone=?, organization=?, designation=?, salary=? WHERE id = ?", [employee.first_name, employee.last_name, employee.email,employee.phone,employee.organization,employee.designation,employee.salary, id], function(err, res) {
        if (err) {
            console.log("error: ", err);
            result(null, err);
        } else {
            result(null, res);
        }
    });
};

//Function to delete data employee
Employee.delete = function(id, result) {
    dbConn.query("DELETE FROM employees WHERE id = ?", [id], function (err, res){
        if (err) {
            console.log("error: ", err);
            result(null, err);
        } else {
            result(null, res);
        }
    });
};

module.exports = Employee;