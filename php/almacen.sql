CREATE DATABASE almacen CHARACTER SET utf8 COLLATE utf8_general_ci;
USE almacen;

CREATE TABLE Rol (
    IdRol INT PRIMARY KEY AUTO_INCREMENT,
    Rol varchar(50) NOT NULL
);

INSERT INTO Rol (Rol)
VALUES ('Almacenista'), ('Alumnos');

CREATE TABLE Usuarios (
    IdUser INT PRIMARY KEY AUTO_INCREMENT,
    NombreU VARCHAR(100),
    ApellidoP VARCHAR(150),
    ApellidoM VARCHAR(150),
    Perfil INT,
    Correo varchar(200) NOT NULL,
    Contrasena varchar(255) NOT NULL,
    CONSTRAINT Rol_FK FOREIGN KEY (Perfil) REFERENCES Rol(IdRol)
);

CREATE TABLE Productos (
    IdProducto INT PRIMARY KEY AUTO_INCREMENT,
    NombreProducto VARCHAR(150),
    Descripcion VARCHAR(200),
    Stock INT,
    FechaIngreso DATE
);

CREATE TABLE Requisiciones (
    IdRequi INT PRIMARY KEY AUTO_INCREMENT,
    IdUsuario INT,
    IdProducto INT,
    Cantidad INT,
    FechadelPedido DATE,
    CONSTRAINT Usuarios_FK FOREIGN KEY (IdUsuario) REFERENCES Usuarios(IdUser),
    CONSTRAINT Productos_FK FOREIGN KEY (IdProducto) REFERENCES Productos(IdProducto)
);
