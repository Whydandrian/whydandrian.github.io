/** 
 * *& By Wahyudi Andrian
 * ! Thanks to Tutorial : Rahul Gupta Medium
 * ! simple CRUD API
 * Server App
 */



//import express dan bodyParser module
const express = require('express');
const bodyParser = require('body-parser');

//make express app
const app = express();

//setup server port
const port = process.env.PORT || 5000;

//parse request of content-type - application/x-www-form-urlencoded
app.use(bodyParser.urlencoded({ extended: true }));

//parse request of content-type - application/json
app.use(bodyParser.json());

//Create Route

//Route Home
app.get('/', (req, res) => {
    res.send("Hello Wahyudi!");
});

// Require employee routes
const employeeRoutes = require('./src/routes/employee.routes')
// using as middleware
app.use('/api/v1/employees', employeeRoutes)

//Listen for request
app.listen(port, () => {
    console.log('Server is listening on port 5000');
});