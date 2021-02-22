CREATE DATABASE my_app; --Creamos la base de datos

USE my_app; --Entramos a la base de datos

--* = Opcional

CREATE USER 'rootuser'@'localhost' IDENTIFIED BY 'rootpassword'; --* Creamos el usuario, puedes ponerle otro nombre y contrasena

GRANT ALL PRIVILEGES ON my_app.* TO 'rootuser'@'localhost'; --* Le damos privilegios solo a la base de datos que acabamos de crear

FLUSH PRIVILEGES; --* Aplicamos los cambios

--Creamos la tabla "users"
CREATE TABLE users (
  id INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL, --Un identificador para diferenciar a los usuarios
  username VARCHAR(260) NOT NULL, --Un nombre de usuario
  email VARCHAR(260) NOT NULL UNIQUE, --Un correo para que pueda ingresar
  password VARCHAR(260) NOT NULL, --Una contrasena para que pueda acceder
  created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP, --Y esto para guardar la fecha de creacion del usuario
  active TINYINT(1) NOT NULL DEFAULT 1 --Y este valor por si necesitamos desactivar un usuario
);
