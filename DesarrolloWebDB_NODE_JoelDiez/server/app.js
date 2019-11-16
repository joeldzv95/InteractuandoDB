

 const path = require('path');
const express = require('express');
const mongoose = require('mongoose');
const Routing = require('./routes/index.js');
const bodyParser = require('body-parser');


const app = express();


//conectando a la base de datos

mongoose.connect('mongodb://localhost/calendario')
    .then(db => console.log('Db connected'))
    .catch(err => console.log(err))

//Settings

app.set('port', process.env.PORT || 3000);

app.use(express.static('client'))

//middleawers
app.use(bodyParser.json())
app.use(express.urlencoded({extended : false}));


//rutas

app.use('/', Routing)

    
//start server

app.listen(app.get('port'), ()=>{
    console.log(`Sever on port ${app.get('port')}`);
});




