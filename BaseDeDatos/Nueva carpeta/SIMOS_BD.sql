
-- 	1. TABLA PARA LOS DATOS DE LOS USUARIOS
CREATE TABLE dbo.Usuario(
	ID_Usuario	INT PRIMARY KEY IDENTITY (1, 1),
    Correo		VARCHAR(100),
    Contraseña	VARCHAR(50),
    Perfil		VARCHAR(50),
	Nombre		VARCHAR(50),
    Apellidos	VARCHAR(50),
) ;
