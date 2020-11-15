// const express = require('express');
// const app = express();

//Route Home Page
// app.get('/',(req, res) => {
//     res.send('Welcome To Express')
// });

//Route About Page
// app.get('/about',(req, res) => {
//     res.send('This About Page')
// });
//load path and express module
const path = require('path');
const express = require('express');

//hbs view engine
const hbs = require('hbs');

//load bodyparser middleware
const bodyParser = require('body-parser');

const app = express();

//set dynamic views file
app.set('views', path.join(__dirname, 'views'));

//set view engine
app.set('view engine', 'hbs');

app.use(bodyParser.urlencoded({ extended: false }));

//set public folder as static folder for static file
app.use(express.static('public'));

//route home page
app.get('/', (req, res) => {
    //render index.hbs
    res.render('index', {
        name : 'Wahyudi Andrian'
    });
});

//Route Home Page With Parameter
// app.get('/:name', (req, res) => {
//     res.render('index', {
//         name : req.params.name
//     });
// });

//Route Form Page
app.get('/post', (req, res) => {
    res.render('form');
});

//Route Submit Form
app.post('/post', (req, res) => {
    res.render('index', {
        name : req.body.textname
    });
});

//route about page
app.get('/about', (req, res) => {
    res.send('This about page Wahyudi!');
});

app.listen(8000, () => {
    console.log('Server is running at port 8000');
});