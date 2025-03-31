const mysql = require('mysql');

const conexion = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: '',
    database: 'crud_bd'
});

conexion.connect((error)=>{
    if(error){
        console.error('Error de conexion:' + error);
        return
    }else{
        console.log('Conectado a la Base de Datos');
    }
    
});

module.exports = conexion;
