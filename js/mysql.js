const mysql = require('mysql')

const conection = mysql.createConnection({
  host: 'localhost',
  user: 'code',
  password: 'admi',
  database: 'usuarios',
})

conection.connect( (err) => {
  if(err) throw err
  console.log('La conexion funcion')
})

conection.end()
