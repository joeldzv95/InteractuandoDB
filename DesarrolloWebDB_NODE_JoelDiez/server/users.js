const mongoose = require('mongoose');
const Schema = mongoose.Schema;

const user = new Schema({
    user: String,
    password : {type: Number }
});

module.exports = mongoose.model('users',user);