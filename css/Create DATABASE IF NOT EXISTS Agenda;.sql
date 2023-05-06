Create DATABASE IF NOT EXISTS Agenda;

use Agenda;

Create table if not exists users (
    DNI varchar(8) not null PRIMARY,
    NOMBRE varchar(50) not null,
    ApellidoPa varchar(100) not null,
    ApellidoMa varchar(100) not null,
    Edad varchar(3) not null,
    Correo varchar(50) not null,
    Dirreccion varchar(100) not null,
    Telefono varchar(9) not null,
)