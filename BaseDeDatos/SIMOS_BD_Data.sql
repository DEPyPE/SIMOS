
USE SIMOS_DB;

#SELECT * FROM RecomendacionDocumento;
#DELETE FROM DocumentoProyecto WHERE DocumentoProyecto.ID_DocumentoProyecto = 1;

INSERT INTO Usuario(Nombres, Apellidos, Contraseña, TipoUsuario, Correo, DireccionResponsable, SiglasDR, Departamento, SiglasDepartamento)
VALUES ('Martha Fernanda', 'Guzman Huerta', 'Marta123', 'Capturista', 'mguzmanhu@guanajuato.gob.mx', 'No disponible', 'No disponible', 'No disponible', 'No disponible');

INSERT INTO ProgramaProyecto(ID_Usuario, PorcentajeAvance, EtapaActualProyecto, EjercicioFiscal)
	VALUES (1, 0, 'Captura de información', '2019');

INSERT INTO FichaTecnicaProyecto(ID_ProgramaProyecto, NombreProyecto, ClaveProyecto, DependenciaDelProyecto, SiglasDependenciaProyecto, UnidadResponsable, SiglasUnidadResponsable, NombreResponsable)
VALUES(1, 'Fondo de Aportaciones para la Educación Tecnológica y Adulta, Subfondo Educación de Adultos', 'FAETA', 'Instituto de Alfabetización y Educación Básica del Estado de Guanajuato',
		'INAEBA', 'Sin información', 'Sin información', 'Ing. Eusebio Vega Pérez');

INSERT INTO FichaTecnicaEvaluacion(ID_ProgramaProyecto, InstanciaEvaluadora, NombreDeEvaluacion, TipoEvaluacion, AñoDeEvaluacion, NombreDelInforme, URL_Informe, CostoEvaluacion)
		VALUES(1, 'Servicios Integrales en Educación y Tecnología', 'Evaluación de Desempeño, Ejercicio 2019-2020', 'Evaluación de Desempeño', '2019',
			   'Evaluación de Desempeño, Ejercicio 2019-2020', 'docs/informe_FAETA.pdf', '0');

INSERT INTO OpinionGeneral(ID_ProgramaProyecto, ComentariosObservacionesGenerales, ComentariosObservacionesPorTema)
		VALUES(1, 'El instituto, atendió por primera vez una evaluación de desempeño específica a los recursos del FAETA. Dicho proceso permitió conocer y reafirmar que las acciones, procesos, controles, estructuras, infraestructura y actividades diarias se realizan en apego a la normativa y cumplimiento con los requisitos de operación del Fondo de Aportaciones para la Educación Tecnológica y de Adultos, sin embargo, se identifican áreas de oportunidad que requieren de acciones para fortalecer la operacion del mismo. 
        El INAEBA, cuenta con la aportación de recursos federal y estatal, lo que permite la operación de los servicios del instituto con la combinación de recurso, no obstante, se tienen registros contables-presupuestales y controles administrativos de manera particular por cada fuente de funcionamiento a nivel general de gasto.
        Los apartados siguientes, son llenados con base en las posibilidades del INAEBA, derivado a que exiten recomendaciones en los que se involucra la participación de la SFIA o INEA.',
        'Se emiten comentario por sección "Tabla 9. Fortalezas, Retos y Recomendaciones del Subfondo Educación para Adultos" del documento de evaluación
		Contribución y destino:
		Considerar la elaboración de un copmrendio normativo y acciones de Capacitación/difusión por parte de la SFIA al instituo y en lo particular al personal que interviene en los procesos de distribución de las Aportaciones. En la acción de mejora No°2, se plasm lo correspondiente al instituto.
		Procedimientos documentados de planeación de los recursos para la prestación de los servicios de educación tecnológica y de adultos:
		Documentar y/o actualizar y hacer énfasis en las cartas poceso, donde se registren las etapas, responsables, flujograma, instructivos, formatos de planeación, haciendo referecia a la correspondiente de FAETA.- El instituto cuenta con un Sistema de Gestión de la Calidad basado en la norma ISO 9001-2015, con la cual se certificó los diversos procesos de operación del Inaeba, dichos procesos consideran la operación de recursos estatal y federal, según aplique.');

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
/* UPDATE QUERIES */


SELECT * FROM RecomendacionesComentariosGenerales;	



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
