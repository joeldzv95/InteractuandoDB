const mongoose = require('mongoose');
const Schema = mongoose.Schema;

const taskSchema = new Schema({
    user_id : String,
    title : String,
    start : Date,
    end : Date,

});

module.exports = mongoose.model('task', taskSchema);