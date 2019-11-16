const express = require('express');
const router = express.Router();

const Task = require('../task.js');
const Users = require('../users.js');


// Validación ususario


router.post('/login', async (req, res) => {
    var user = req.body.user;
    var pass = req.body.pass;
    const users = await Users.find({
        'user': user
    });
    process.env.idUser = users[0].id
    if (users.length > 0) {
        if (user == users[0].user && pass == users[0].password) {
            res.send('Validado')

        }
    } else {
        console.log('no existe');
    }


})


//Inicializar calendario

router.get('/events/all', async (req, res) => {
    var id = process.env.idUser;
    const task = await Task.find({
        "user_id": id
    })

    if (task != null) {
        var taskSend = [];
        for (let i = 0; i < Object.keys(task).length; i++) {

            var parameters ={
                id: task[i].id,
                title : task[i].title,
                start : task[i].start,
                end : task[i].end
            }
            
            taskSend.push(parameters)
            
        }
        
        res.send(taskSend);
        console.log(taskSend);

    } else {
        res.send({})

    }

})

//guardar eventos

router.post('/events/new', async (req, res) => {


    var id = process.env.idUser;
    var title = req.body.title;
    var start = req.body.start;
    var end = req.body.end


    const task = new Task({
        user_id: id,
        title: title,
        start: start,
        end: end,
    })

    await task.save(task);
    res.send(task._id);

})

//Eliminar evento

router.post('/events/delete/', async (req, res) =>{
    console.log(req.body.id)
    const id = req.body.id;
    await Task.remove({_id : id});
    res.send('Se eliminó el evento')

})





module.exports = router;