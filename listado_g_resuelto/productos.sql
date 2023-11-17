-- Creación de la base de datos
CREATE DATABASE verduleria_db;

-- Usar la base de datos recién creada
USE verduleria_db;

-- Crear la tabla de productos
CREATE TABLE productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    precio DECIMAL(8, 2) NOT NULL,
    cantidad INT NOT NULL
);

-- Insertar 10 registros de prueba
INSERT INTO productos (nombre, precio, cantidad) VALUES
    ('Manzanas', 1.99, 50),
    ('Peras', 2.49, 40),
    ('Bananas', 0.99, 60),
    ('Zanahorias', 1.29, 75),
    ('Tomates', 2.99, 30),
    ('Pepinos', 1.49, 45),
    ('Lechugas', 1.79, 55),
    ('Pimientos', 1.99, 25),
    ('Brócoli', 1.99, 35),
    ('Calabacines', 1.29, 40);
