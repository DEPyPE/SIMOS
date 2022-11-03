
DROP DATABASE IF EXISTS SIMOS_DB;
CREATE DATABASE IF NOT EXISTS SIMOS_DB DEFAULT CHARSET UTF8MB4 COLLATE utf8mb4_general_ci;
USE SIMOS_DB;

# 	1. TABLA PARA LOS DATOS DE LOS USUARIOS
CREATE TABLE Usuario(
	ID_Usuario INT AUTO_INCREMENT NOT NULL,
    
    Correo VARCHAR(100),
    Contraseña VARCHAR(50),
    Perfil VARCHAR(50),
	Nombre VARCHAR(50),
    Apellidos VARCHAR(50),
    
    PRIMARY KEY(ID_Usuario)
) ENGINE = INNODB;

#	2. TABLA PARA ALMACENAR DATOS DEL PROGRAMA/PROYECTO SOCIAL
CREATE TABLE ProgramaProyecto(
	ID_ProgramaProyecto INT AUTO_INCREMENT NOT NULL,
    ID_Usuario INT NOT NULL,
    
    # FICHA TÉCNICA DEL PROGRAMA/PROYECTO
	Nombre VARCHAR(300),
    Clave VARCHAR(50),
	NombreResponsable	VARCHAR(150),
	DependenciaResponsable VARCHAR(200),
    SiglasDR VARCHAR(50),
    UnidadResponsable VARCHAR(200),
    SiglasUR VARCHAR(50),
    EstadoValidacion VARCHAR(30),
    
    # INFORMACIÓN GENERAL DEL PROGRAMA/PROYECTO
    EjercicioFiscal	INT,
    PorcentajeAvance INT,
    Etapa VARCHAR(500),
    SubEtapa VARCHAR(500),
	
    PRIMARY KEY(ID_ProgramaProyecto),
    FOREIGN KEY(ID_Usuario) REFERENCES Usuario(ID_Usuario)
) ENGINE = InnoDB;

#	3. TABLA PARA ALMACENAR DATOS DE LA FICHA TÉCNICA DEL PROGRAMA O PROYECTO
CREATE TABLE Evaluacion(
	ID_Evaluacion INT AUTO_INCREMENT NOT NULL,
    ID_ProgramaProyecto INT NOT NULL,
    
    InstanciaEvaluadora VARCHAR(300),
    NombreDeLaEvaluacion VARCHAR(300),
	TipoDeEvaluacion	VARCHAR(150),
    AñoDeEvaluacion		INT,
    NombreDelInforme	VARCHAR(300),
    URL_Informe			VARCHAR(300),
	CostoEvaluacion		VARCHAR(50),
    EstadoValidacion	VARCHAR(50),
    
    PRIMARY KEY( ID_Evaluacion ),
    FOREIGN KEY( ID_ProgramaProyecto ) REFERENCES ProgramaProyecto(ID_ProgramaProyecto)
) ENGINE = InnoDB;

#	4. TABLA PARA ALMACENAR DATOS DE LA OPINION GENERAL DEL POSICIONAMIENTO
CREATE TABLE OpinionGeneral(
	ID_OpinionGeneral INT AUTO_INCREMENT NOT NULL,
    ID_ProgramaProyecto	INT NOT NULL,
    
    ComentariosGenerales	TEXT,
    EstadoValidacion	VARCHAR(50),
    
    # Observaciones
	ConObservacion 	BOOLEAN,
    Descripcion 	VARCHAR(500),
    IconoEstado	    VARCHAR(20),
    Estado			VARCHAR(30),
    
    PRIMARY KEY( ID_OpinionGeneral ),
    FOREIGN KEY( ID_ProgramaProyecto ) 	REFERENCES ProgramaProyecto( ID_ProgramaProyecto )
)ENGINE = InnoDB;

/*

#	7. TABLA PARA ALMACENAR DATOS SOBRE LOS TEMAS Y SU CONTENIDO
CREATE TABLE Tema(
	ID_Tema INT AUTO_INCREMENT NOT NULL,
    ID_Observacion INT NOT NULL,
    
    TituloDelTema		VARCHAR(200),
    ContenidoDelTema	VARCHAR(1000),
    
    PRIMARY KEY( ID_Tema 		),
    FOREIGN KEY( ID_Observacion ) REFERENCES Observacion( ID_Observacion )
)ENGINE = InnoDB;

#	7.1 TABLA PARA ALMACENAR DATOS SOBRE LOS COMENTARIOS Y OBSERVACIONES ESPECIFICAS DEL POSICIONAMIENTO
CREATE TABLE ComentarioYObservacionesEspecificosPorTema(
	ID_ComentarioYObservacionesEspecificosPorTema INT AUTO_INCREMENT NOT NULL,
    ID_Tema INT NOT NULL,
    
    Título 	VARCHAR(200),
    
    PRIMARY KEY( ID_ComentarioYObservacionesEspecificosPorTema ),
    FOREIGN KEY( ID_Tema ) REFERENCES Tema(ID_Tema )
)
*/
