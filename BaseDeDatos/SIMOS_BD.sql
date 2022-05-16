
DROP DATABASE IF EXISTS SIMOS_DB;
CREATE DATABASE IF NOT EXISTS SIMOS_DB DEFAULT CHARSET UTF8MB4 COLLATE utf8mb4_general_ci;
USE SIMOS_DB;

# 	1. TABLA PARA LOS DATOS DE LOS USUARIOS
CREATE TABLE Usuario(
	ID_Usuario INT AUTO_INCREMENT NOT NULL,
    
    Nombres VARCHAR(50),
    Apellidos VARCHAR(50),
    Contraseña VARCHAR(50),
    TipoUsuario VARCHAR(50),
    Correo VARCHAR(70),
    DireccionResponsable VARCHAR(200),
    SiglasDR VARCHAR(50),
    Departamento VARCHAR(200),
    SiglasDepartamento VARCHAR(50),
    
    PRIMARY KEY(ID_Usuario)
) ENGINE = INNODB;

#	2. TABLA PARA ALMACENAR DATOS DEL PROGRAMA/PROYECTO SOCIAL
CREATE TABLE ProgramaProyecto(
	ID_ProgramaProyecto INT AUTO_INCREMENT NOT NULL,
    ID_Usuario INT NOT NULL,
    
    PorcentajeAvance INT,
    EtapaActualProyecto VARCHAR(50),
    EjercicioFiscal	INT,
    
    PRIMARY KEY(ID_ProgramaProyecto),
    FOREIGN KEY(ID_Usuario) REFERENCES Usuario(ID_Usuario)
) ENGINE = INNODB;

#   3. FICHA TÉCNICA DEL PROYECTO
CREATE TABLE FichaTecnicaProyecto(
	ID_FichaTecnicaProyecto INT AUTO_INCREMENT NOT NULL,
    ID_ProgramaProyecto INT NOT NULL,
    
    NombreProyecto	VARCHAR(100),
	ClaveProyecto VARCHAR(20),
    DependenciaDelProyecto VARCHAR(200),
    SiglasDependenciaProyecto VARCHAR(50),
    UnidadResponsable VARCHAR(200),
    SiglasUnidadResponsable VARCHAR(50),
    NombreResponsable VARCHAR(100),
    ValidacionInfo	BOOLEAN,

	PRIMARY KEY(ID_FichaTecnicaProyecto),
    FOREIGN KEY(ID_ProgramaProyecto) REFERENCES ProgramaProyecto(ID_ProgramaProyecto)
) ENGINE = INNODB;

#	4. FICHA TÉCNICA DE LA INSTANCIA EVALUADORA
CREATE TABLE FichaTecnicaEvaluacion(
	ID_FichaTecnicaEvaluacion INT AUTO_INCREMENT NOT NULL,
    ID_ProgramaProyecto INT NOT NULL,
    
    InstanciaEvaluadora VARCHAR(500),
    NombreDeEvaluacion VARCHAR(500),
    TipoEvaluacion VARCHAR(200),
    AñoDeEvaluacion INT,
    NombreDelInforme VARCHAR(500),
    URL_Informe	VARCHAR(500),
    CostoEvaluacion INT,
    ValidacionInfo	BOOLEAN,
    
    PRIMARY KEY(ID_FichaTecnicaEvaluacion),
    FOREIGN KEY(ID_ProgramaProyecto) REFERENCES ProgramaProyecto(ID_ProgramaProyecto)
) ENGINE = INNODB;

#	5. TABLA PARA LA OPINION GENERAL DEL PROYECTO
CREATE TABLE OpinionGeneral(
	ID_OpinionGeneral INT AUTO_INCREMENT NOT NULL,
    ID_ProgramaProyecto INT NOT NULL,
    ComentariosObservacionesGenerales MEDIUMTEXT,
    ComentariosObservacionesPorTema	MEDIUMTEXT,
    
    PRIMARY KEY(ID_OpinionGeneral),
    FOREIGN KEY(ID_ProgramaProyecto) REFERENCES ProgramaProyecto(ID_ProgramaProyecto)
) ENGINE = INNODB;

#	5.1 TABLA PARA LAS OBSERVACIONES HECHAS PARA LOS COMENTARIOS GENERALES
CREATE TABLE RecomendacionesComentariosGenerales(
	ID_RecomendacionesComentariosGenerales INT AUTO_INCREMENT NOT NULL,
    ID_OpinionGeneral	INT NOT NULL,
    RecomendacionTexto	TEXT,
    FechaRecomendacion	DATE,
    EstatusRecomendacion VARCHAR(20),
    
    PRIMARY KEY(ID_RecomendacionesComentariosGenerales),
    FOREIGN KEY(ID_OpinionGeneral) REFERENCES OpinionGeneral(ID_OpinionGeneral)
) ENGINE = INNODB;

#	5.2 TABLA PARA LAS OBSERVACIONES HECHAS PARA LOS COMENTARIOS ESPECÍFICOS POR TEMA
CREATE TABLE RecomendacionesComentariosEspecificos(
	ID_RecomendacionesComentariosEspecificos INT AUTO_INCREMENT NOT NULL,
    ID_OpinionGeneral	INT NOT NULL,
    RecomendacionTexto	TEXT,
    FechaRecomendacion	DATE,
    EstatusRecomendacion VARCHAR(20),
    
    PRIMARY KEY(ID_RecomendacionesComentariosEspecificos),
    FOREIGN KEY(ID_OpinionGeneral) REFERENCES OpinionGeneral(ID_OpinionGeneral)
) ENGINE = INNODB;

# 	6. TABLA PARA ALMACENAR DATOS DE LOS DOCUMENTOS DE CADA PROYECTO
CREATE TABLE DocumentoProyecto(
	ID_DocumentoProyecto INT AUTO_INCREMENT NOT NULL,
    ID_ProgramaProyecto INT NOT NULL,
    
    NombreDocumento TINYTEXT,
    FormatoDocumento TINYTEXT,
    URL_Documento TEXT,
    EstadoRevision TEXT,
    
    PRIMARY KEY (ID_DocumentoProyecto),
    FOREIGN KEY(ID_ProgramaProyecto) REFERENCES ProgramaProyecto(ID_ProgramaProyecto)
) ENGINE = INNODB;

#	7. TABLA PARA ALMACENAR DATOS DE LAS RECOMENDACIONES HECHAS AL PROYECTO
CREATE TABLE Recomendaciones(
	ID_Recomendacion INT AUTO_INCREMENT NOT NULL,
    ID_ProgramaProyecto INT NOT NULL,
    
    IdentificadorRecomendacion INT,
    AspectoSusceptibleDeMejora	TINYTEXT,
    TipoActoresInvolucradosEnSolucion TINYTEXT,
    NivelDePrioridad TINYTEXT,
    AccionDeMejora TEXT,
    AreaResponsable TEXT,
    FechaCompromisoDeCumplimiento DATE,
    ResultadosEsperados TEXT,
    EvidenciasSolicitadas TEXT,
    BanderaRecomendacionCompletada TINYTEXT,
    
    PRIMARY KEY(ID_Recomendacion),
    FOREIGN KEY(ID_ProgramaProyecto) REFERENCES ProgramaProyecto(ID_ProgramaProyecto)
) ENGINE = INNODB;

CREATE TABLE RecomendacionDocumento(
	ID_RecomendacionDocumento INT AUTO_INCREMENT NOT NULL,
    ID_DocumentoProyecto INT NOT NULL,
	IdentificadorRecomendacion TINYTEXT,
    AspectoSusceptibleDeMejora	TEXT,
	BanderaRecomendacionCompletada BOOLEAN,
    
    PRIMARY KEY( ID_RecomendacionDocumento ),
    FOREIGN KEY(ID_DocumentoProyecto) REFERENCES DocumentoProyecto(ID_DocumentoProyecto)
)




