CREATE DATABASE IF NOT EXISTS prueba;
USE prueba;

CREATE TABLE Usuarios (
    usuario_id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    correo VARCHAR(150) NOT NULL UNIQUE,
    contraseña VARCHAR(255) NOT NULL,
    fecha_creacion_user TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) CHARSET=utf8mb4;

CREATE TABLE Categorias (
    categoria_id INT PRIMARY KEY AUTO_INCREMENT,
    nombre_categoria VARCHAR(100) NOT NULL,
    categoria_padre_id INT,
    FOREIGN KEY (categoria_padre_id) REFERENCES Categorias(categoria_id)
);

CREATE TABLE ProyectosArduino (
    proyecto_id INT PRIMARY KEY AUTO_INCREMENT,
    titulo VARCHAR(150) UNIQUE,
    codigo_fuente_url VARCHAR(500),
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    usuario_id INT,
    FOREIGN KEY (usuario_id) REFERENCES Usuarios(usuario_id)
);

CREATE TABLE Proyecto_has_categoria (
    categoria_id INT,
    proyecto_id INT,
    PRIMARY KEY (categoria_id, proyecto_id),
    FOREIGN KEY (categoria_id) REFERENCES Categorias(categoria_id),
    FOREIGN KEY (proyecto_id) REFERENCES ProyectosArduino(proyecto_id)
);
