
USE SIMOS_DB;	

INSERT INTO Usuario ( Correo, Contraseña, Perfil, Nombre, Apellidos )
VALUES ('mguzmanhu@guanajuato.gob.mx', 'marta123', 'Capturista', 'Martha Fernanda', 'Guzman Huerta');

# Tabla Usuario
INSERT INTO Usuario ( Correo, Contraseña, Perfil, Nombre, Apellidos )
VALUES ('magadan_vega@guanajuato.gob.mx', 'isa123', 'Validador', 'Rosa Isabel', 'Magadan Vega');
    
# Tabla ProgramaProyecto
INSERT INTO ProgramaProyecto(ID_Usuario, Nombre, Clave, NombreResponsable, DependenciaResponsable, SiglasDR, UnidadResponsable, SiglasUR, EjercicioFiscal, PorcentajeAvance, Etapa, SubEtapa, EstadoValidacion)
VALUES(1, '', '', '', '', '', '', '', '2019', '0', 'Información general', 'Sin información', 'Sin información');

# Tabla Evaluacion
INSERT INTO Evaluacion(ID_ProgramaProyecto, InstanciaEvaluadora, NombreDeLaEvaluacion, TipoDeEvaluacion, AñoDeEvaluacion, NombreDelInforme, URL_Informe, CostoEvaluacion, EstadoValidacion)
VALUES(1, 'Servicios Integrales en Educación y Tecnología', 'Evaluación de Desempeño, Ejercicio 2019-2020', 'Evaluación de Desempeño', 2019, 'Evaluación de Desempeño, Ejercicio 2019-2020',
		'', '100000', 'Información validada');

# Tabla OpinionGeneral
INSERT INTO OpinionGeneral(ID_ProgramaProyecto, ComentariosGenerales, EstadoValidacion, ConObservacion, Descripcion, IconoEstado, Estado)
		VALUES(1, 'El instituto, atendió por primera vez una evaluación de desempeño específica a los recursos del FAETA. Dicho proceso permitió conocer y reafirmar que las acciones, procesos, controles, estructuras, infraestructura y actividades diarias se realizan en apego a la normativa y cumplimiento con los requisitos de operación del Fondo de Aportaciones para la Educación Tecnológica y de Adultos, sin embargo, se identifican áreas de oportunidad que requieren de acciones para fortalecer la operacion del mismo. 
        El INAEBA, cuenta con la aportación de recursos federal y estatal, lo que permite la operación de los servicios del instituto con la combinación de recurso, no obstante, se tienen registros contables-presupuestales y controles administrativos de manera particular por cada fuente de funcionamiento a nivel general de gasto.
        Los apartados siguientes, son llenados con base en las posibilidades del INAEBA, derivado a que exiten recomendaciones en los que se involucra la participación de la SFIA o INEA.',
        'Información capturada', true, 'Observación realizada a la opinión general', 'archive', 'Sin atender');
    
SELECT *FROM OpinionGeneral;
SELECT *FROM ProgramaProyecto;

/*
# Tabla Observación
INSERT INTO Observacion(ConObservacion, Descripcion, IconoEstado, Estado)
VALUES(false, 'Observación general', 'none', 'Sin observación');

SELECT * FROM ProgramaProyecto;
SELECT Nombre, Clave, EjercicioFiscal, PorcentajeAvance, Etapa, SubEtapa FROM ProgramaProyecto WHERE ProgramaProyecto.EjercicioFiscal = '2019';
SELECT DISTINCT(EjercicioFiscal) FROM ProgramaProyecto ORDER BY EjercicioFiscal ASC;
UPDATE ProgramaProyecto SET Nombre='', Clave='', DependenciaResponsable='', SiglasDR='', UnidadResponsable='', SiglasUR='', NombreResponsable='' WHERE ID_Usuario = 1;
*/

/*

INSERT INTO Recomendaciones(ID_ProgramaProyecto, IdentificadorRecomendacion, AspectoSusceptibleDeMejora, TipoActoresInvolucradosEnSolucion, NivelDePrioridad, AccionDeMejora, AreaResponsable,
							FechaCompromisoDeCumplimiento, ResultadosEsperados, EvidenciasSolicitadas, BanderaRecomendacionCompletada)
		VALUES(1, 1, 'Contribución y destino: Considerar en el diagnóstico los elementos que se atienden mediante las diferentes fuentes de financiamiento, para tener claridad que el rezago educativo se ha disminuido con diferentes estrategias y recursos',
				'Institucional', 'Medio', 'Revisión y actualización el diagnóstico del programa', 'Dirección de Planeación y Enlace Regional Coordinación de Planeación y Programación', '2021-11-30', 'Diagnóstico actualizado', 'Documentos de pdf', 'En proceso');

INSERT INTO Recomendaciones(ID_ProgramaProyecto, IdentificadorRecomendacion, AspectoSusceptibleDeMejora, TipoActoresInvolucradosEnSolucion, NivelDePrioridad, AccionDeMejora, AreaResponsable,
							FechaCompromisoDeCumplimiento, ResultadosEsperados, EvidenciasSolicitadas, BanderaRecomendacionCompletada)
		VALUES(1, 2, 'Contribución y destino: Considerar la elaboración de un compendio normativo y acciones de Capacitación/Difusión por parte de la SFIA al instituto y en lo particular al personal que interviene en los procesos de distribución de las aportaciones.',
				'Interinstitucional', 'Medio', 'Elaboración de un repositorio de la normativa correspondiente al fondo y su difusión al personal del INAEBA que interviene en los procesos de recepción, y ejercicio del mismo.', 
                'Dirección de Administración y Coordinación de Recursos Financieros', '2021-10-01', 'Estructura normativa de consulta y personal informado en relación al fondo',
                'Repositorio Digital Lista de participantes/difusión', 'Corregido');

INSERT INTO Recomendaciones(ID_ProgramaProyecto, IdentificadorRecomendacion, AspectoSusceptibleDeMejora, TipoActoresInvolucradosEnSolucion, NivelDePrioridad, AccionDeMejora, AreaResponsable, FechaCompromisoDeCumplimiento, ResultadosEsperados, EvidenciasSolicitadas, BanderaRecomendacionCompletada) VALUES(1, 3, 'km', 'k', 'Medio', 'km', 'km', '2021-10-01', 'km', 'km', 'Sin atender');

INSERT INTO RecomendacionesComentariosGenerales(ID_OpinionGeneral, RecomendacionTexto, FechaRecomendacion, EstatusRecomendacion) VALUES(1, 'Corrección de ortografía en todo el texto', '2002-04-27', 'Sin atender');
INSERT INTO RecomendacionesComentariosGenerales(ID_OpinionGeneral, RecomendacionTexto, FechaRecomendacion, EstatusRecomendacion) VALUES(1, 'Mejorar la calidad de los gráficos', '2002-04-27', 'Sin atender');
INSERT INTO RecomendacionesComentariosGenerales(ID_OpinionGeneral, RecomendacionTexto, FechaRecomendacion, EstatusRecomendacion) VALUES(1, 'Ajustar el título en las subsecciones', '2002-04-27', 'Sin atender');
INSERT INTO RecomendacionesComentariosGenerales(ID_OpinionGeneral, RecomendacionTexto, FechaRecomendacion, EstatusRecomendacion) VALUES(1, 'Corrección de ortografía en todo el texto', '2002-04-27', 'Sin atender');
INSERT INTO RecomendacionesComentariosGenerales(ID_OpinionGeneral, RecomendacionTexto, FechaRecomendacion, EstatusRecomendacion) VALUES(1, 'Mejorar la calidad de los gráficos', '2002-04-27', 'Sin atender');
INSERT INTO RecomendacionesComentariosGenerales(ID_OpinionGeneral, RecomendacionTexto, FechaRecomendacion, EstatusRecomendacion) VALUES(1, 'Ajustar el título en las subsecciones', '2002-04-27', 'Sin atender');
INSERT INTO RecomendacionesComentariosGenerales(ID_OpinionGeneral, RecomendacionTexto, FechaRecomendacion, EstatusRecomendacion) VALUES(1, 'Corrección de ortografía en todo el texto', '2002-04-27', 'Sin atender');
INSERT INTO RecomendacionesComentariosGenerales(ID_OpinionGeneral, RecomendacionTexto, FechaRecomendacion, EstatusRecomendacion) VALUES(1, 'Mejorar la calidad de los gráficos', '2002-04-27', 'Sin atender');

INSERT INTO RecomendacionesComentariosEspecificos(ID_OpinionGeneral, RecomendacionTexto, FechaRecomendacion, EstatusRecomendacion) VALUES(1, 'Mejorar la redacción de los comentarios específicos por tema', '2002-04-27', 'Sin atender');
INSERT INTO RecomendacionesComentariosEspecificos(ID_OpinionGeneral, RecomendacionTexto, FechaRecomendacion, EstatusRecomendacion) VALUES(1, 'Agregar referencias de las fuentes de información consultadas', '2002-04-27', 'Sin atender');
INSERT INTO RecomendacionesComentariosEspecificos(ID_OpinionGeneral, RecomendacionTexto, FechaRecomendacion, EstatusRecomendacion) VALUES(1, 'Mejorar la redacción de los comentarios específicos por tema', '2002-04-27', 'Sin atender');
INSERT INTO RecomendacionesComentariosEspecificos(ID_OpinionGeneral, RecomendacionTexto, FechaRecomendacion, EstatusRecomendacion) VALUES(1, 'Agregar referencias de las fuentes de información consultadas', '2002-04-27', 'Sin atender');

SELECT * FROM OpinionGeneral;

#SELECT IdentificadorRecomendacion FROM Recomendaciones;
SELECT * FROM RecomendacionesComentariosGenerales;	

*/


/*

INSERT INTO Recomendaciones(ID_ProgramaProyecto, IdentificadorRecomendacion, AspectoSusceptibleDeMejora, TipoActoresInvolucradosEnSolucion, NivelDePrioridad, AccionDeMejora, AreaResponsable,
							FechaCompromisoDeCumplimiento, ResultadosEsperados, EvidenciasSolicitadas, BanderaRecomendacionCompletada)
		VALUES(1, 1, 'Contribución y destino: Considerar en el diagnóstico los elementos que se atienden mediante las diferentes fuentes de financiamiento, para tener claridad que el rezago educativo se ha disminuido con diferentes estrategias y recursos',
				'Institucional', 'Medio', 'Revisión y actualización el diagnóstico del programa', 'Dirección de Planeación y Enlace Regional Coordinación de Planeación y Programación', '2021-11-30', 'Diagnóstico actualizado', 'Documentos de pdf', false);

INSERT INTO Recomendaciones(ID_ProgramaProyecto, IdentificadorRecomendacion, AspectoSusceptibleDeMejora, TipoActoresInvolucradosEnSolucion, NivelDePrioridad, AccionDeMejora, AreaResponsable,
							FechaCompromisoDeCumplimiento, ResultadosEsperados, EvidenciasSolicitadas, BanderaRecomendacionCompletada)
		VALUES(1, 2, 'Contribución y destino: Considerar la elaboración de un compendio normativo y acciones de Capacitación/Difusión por parte de la SFIA al instituto y en lo particular al personal que interviene en los procesos de distribución de las aportaciones.',
				'Interinstitucional', 'Medio', 'Elaboración de un repositorio de la normativa correspondiente al fondo y su difusión al personal del INAEBA que interviene en los procesos de recepción, y ejercicio del mismo.', 
                'Dirección de Administración y Coordinación de Recursos Financieros', '2021-10-01', 'Estructura normativa de consulta y personal informado en relación al fondo',
                'Repositorio Digital Lista de participantes/difusión', false);

SELECT *FROM FichaTecnicaProyecto WHERE FichaTecnicaProyecto.ID_FichaTecnicaProyecto = 10;
*/
