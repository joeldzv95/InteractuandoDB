const express = require('express');
const mongoose = require('mongoose');


const app = express();

mongoose.connect('mongodb://localhost/calendario')
    .then(db => console.log('Db connected'))
    .catch(err => console.log(err))

app.set('port', process.env.PORT || 3000);
app.listen(app.get('port'), ()=>{
    console.log(`Sever on port ${app.get('port')}`);
});

const Schema = mongoose.Schema;



const user = new Schema({
    user: String,
    password : {type: Number }
})



var userModel = mongoose.model('users' , user)

var Users = new userModel({user:'joel', password:12345});



Users.save(function (err){
    if(err) return console.log(err);
})

