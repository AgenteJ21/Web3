//referencia express
const express = require('express');
//invocar mediante el app
const app = express();

//motor de plantillas
app.set('view engine','ejs');

app.use(express.urlencoded({extended:false}));
app.use(express.json());

app.use('/', require('./router'));

app.listen(5000, ()=>{
    console.log('SERVER corriendo en http//:localhost:5000');
})