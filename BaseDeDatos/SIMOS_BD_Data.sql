
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

INSERT INTO Tema(ID_ProgramaProyecto, TituloDelTema, ContenidoDelTema, Observacion, ConObservacion, Descripcion, IconoEstado, Estado)
	   VALUES(1, 'Contribución y destino',
				 'Considerar la elaboración de un compendio normativo y acciones de Capacitación/difusión por parte de la SFIA al instituto y en lo particular al personal que interviene en los procesos de distribución de las aportaciones.- En la acción de mejora N°. 2, se plasma lo correspondiente al instituto.',
				 '', false, '', '', '');
                 
INSERT INTO Tema(ID_ProgramaProyecto, TituloDelTema, ContenidoDelTema, Observacion, ConObservacion, Descripcion, IconoEstado, Estado)
	   VALUES(1, 'Procedimientos documentados de planeación de los recursos para la prestación de los servicios de educación tecnológica y de adultos',
				 'Documentr y/o actualizar y hacer énfasis en las cartas proceso, donde se registren las etapas, responsables, flujogramas, instructivos y formatos de planeación, haciendo referencia a la correspondiente de FAETA.- El instituto cuenta con un Sistema de Gestión de la Calidad, bajo la norma ISO 9001-2015, con la cual se certificó los diversos procesos de operación del INAEBA, dichos procesos consideran la operación de recursos estatal y federal, según aplique. Considerar la viabilidad de una estructura organizativa contable y presupuestal, que permita transitar a un esquema de registro y seguimiento sobre el destino de las aportaciones por tipo de servicio y/o distribución geográfico y/o operación de Coordinación Regional y sus Coordinaciones Zona.- La operación actual del fondo, no cuenta con el detalle del destino de las aportaciones por tipo de servicio o distribución geográfica en relación a la estructura financiera del Instituto, como se requería en la evaluación. Lo anterior, no ha impedido la toma de decisiones o la inoperatividad del Instituto, ya que dichos controles a registros del fondo, no se han requerido por los entes Coordinadores a nivel financiero (SFIA, INEA) o Fiscalizadores (ASF, ASEG, OIC) con dicho detalle y permite la identificación y revisión del fondo.',
				 '', false, '', '', '');

INSERT INTO Tema(ID_ProgramaProyecto, TituloDelTema, ContenidoDelTema, Observacion, ConObservacion, Descripcion, IconoEstado, Estado)
	   VALUES(1, 'Generación de Información y rendición de cuentas',
				 'Contar con mecanismos de desagregación de la información del ejercicio, destino y resultados del FAETA, de acuerdo con la Guía Sistema de la SHCP. Establecer un protocolo de verificación de la instancia normativa para control de calidad de la información. El Instituto reporta trimestralmente el ejercicio de los recursos del fondo, dichos reportes se realizan con la desagregación a nivel partida; por lo que se anexa al presente el reporte de la información trimestral reportada por la Instituto (Evidencia en Carpeta: Validado FAETA 2020-2021). Referente al "protocolo de verificación de la instancia normativa", se comparte el Oficio circular N° DGIP/1516/2020 donde la SFIA indica los periodos de captura en el Sistema de Recursos Federales Transferidos (SRFT) Portal SHCP, en lo particular, se establece en Numeral 4, la validación por SFIA: "Gestión/validación por parte de esta Secretaría del 16 de diciembre de 2020 al 20 de enero del 2021.": por lo que, en apego a las acciones. se sugiere la atención de dicha acción de mejora por la SFIA.',
				 '', false, '', '', '');

INSERT INTO Tema(ID_ProgramaProyecto, TituloDelTema, ContenidoDelTema, Observacion, ConObservacion, Descripcion, IconoEstado, Estado)
	   VALUES(1, 'Orientación y medición de resultados',
				 'A partir de lo contingencia Covid-15, generar esquemas de controles de riesgos que minimicen los impactos negativas en las metas iniciales. Asi como el replanteamiento de metas en dichos casos. - Se estableció un Comité y Subcomité de Seguridad Sanitaria, con el objetivo de regular y establecer los protocolos sanitarios a implementar en los diversos centros de trabajo del Instituto, con la finalidad de salvaguardar la salud de los colaboradores y de los jóvenes y adultos atendidos en los diversos servicios educativos del Inaeba. Todo esto, apegado a los criterios establecidos por la Secretaria de Salud del Estado (Evidencia en Carpeta: Contingencia Covid-19). Referente al replanteamiento de las metas Institucionales derivado de la contingencia sanitaria, se recibió por parte de Inea el oficio con el ajuste a las metas originales programadas para el ejercicio fiscal 2020, derivado de esto, se genera el POA apegado a los criterios que se establecen en dicho documento (Evidencia en Carpeta: METAS).',
				 '', false, '', '', '');
    
SELECT *FROM Tema;

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
