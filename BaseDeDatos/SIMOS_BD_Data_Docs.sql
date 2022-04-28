USE SIMOS_DB;

INSERT INTO DocumentoProyecto(ID_ProgramaProyecto, NombreDocumento, FormatoDocumento, URL_Documento, EstadoRevision) VALUES(1, 'Formato de posicionamiento - 2019', 'docx', 'Resource\files', 'Aprobado');
INSERT INTO DocumentoProyecto(ID_ProgramaProyecto, NombreDocumento, FormatoDocumento, URL_Documento, EstadoRevision) VALUES(1, 'Formato de posicionamiento - 2019', 'pdf',  'Resource\files', 'En revisión');
INSERT INTO DocumentoProyecto(ID_ProgramaProyecto, NombreDocumento, FormatoDocumento, URL_Documento, EstadoRevision) VALUES(1, 'tabla_de_requerimientos', 			 'xlsx', 'Resource\files', 'Con recomendaciones');
INSERT INTO DocumentoProyecto(ID_ProgramaProyecto, NombreDocumento, FormatoDocumento, URL_Documento, EstadoRevision) VALUES(1, 'presentación_proyecto_final', 		 'pptx', 'Resource\files', 'Aprobado');
INSERT INTO DocumentoProyecto(ID_ProgramaProyecto, NombreDocumento, FormatoDocumento, URL_Documento, EstadoRevision) VALUES(1, 'plan_de_trabajo', 					 'pdf',  'Resource\files', 'En revisión');

INSERT INTO RecomendacionDocumento(ID_DocumentoProyecto, IdentificadorRecomendacion, AspectoSusceptibleDeMejora, BanderaRecomendacionCompletada)
	 VALUES (1, 0001, 'Contribución y destino: Considerar en el diagnóstico los elementos que se atienden mediante las diferentes fuentes de financiamiento, para tener claridad que el rezago educativo se ha disminuido con diferentes estrategias y recursos',
			false);
INSERT INTO RecomendacionDocumento(ID_DocumentoProyecto, IdentificadorRecomendacion, AspectoSusceptibleDeMejora, BanderaRecomendacionCompletada)
	 VALUES (1, 0002, 'Contribución y destino: Considerar la elaboración de un compendio normativo y acciones de Capacitación/Difusión por parte de la SFIA al instituto y en lo particular al personal que interviene en los procesos de distribución de las aportaciones.',
			false);
INSERT INTO RecomendacionDocumento(ID_DocumentoProyecto, IdentificadorRecomendacion, AspectoSusceptibleDeMejora, BanderaRecomendacionCompletada)
	 VALUES (1, 0003, 'Contribución y destino: Considerar en el diagnóstico los elementos que se atienden mediante las diferentes fuentes de financiamiento, para tener claridad que el rezago educativo se ha disminuido con diferentes estrategias y recursos',
			false);
            
INSERT INTO RecomendacionDocumento(ID_DocumentoProyecto, IdentificadorRecomendacion, AspectoSusceptibleDeMejora, BanderaRecomendacionCompletada)
	 VALUES (2, 0001, 'Contribución y destino: Considerar la elaboración de un compendio normativo y acciones de Capacitación/Difusión por parte de la SFIA al instituto y en lo particular al personal que interviene en los procesos de distribución de las aportaciones.',
			false);            
INSERT INTO RecomendacionDocumento(ID_DocumentoProyecto, IdentificadorRecomendacion, AspectoSusceptibleDeMejora, BanderaRecomendacionCompletada)
	 VALUES (2, 0002, 'Contribución y destino: Considerar en el diagnóstico los elementos que se atienden mediante las diferentes fuentes de financiamiento, para tener claridad que el rezago educativo se ha disminuido con diferentes estrategias y recursos',
			false);
            
INSERT INTO RecomendacionDocumento(ID_DocumentoProyecto, IdentificadorRecomendacion, AspectoSusceptibleDeMejora, BanderaRecomendacionCompletada)
	 VALUES (3, 0001, 'Contribución y destino: Considerar la elaboración de un compendio normativo y acciones de Capacitación/Difusión por parte de la SFIA al instituto y en lo particular al personal que interviene en los procesos de distribución de las aportaciones.',
			false);            
INSERT INTO RecomendacionDocumento(ID_DocumentoProyecto, IdentificadorRecomendacion, AspectoSusceptibleDeMejora, BanderaRecomendacionCompletada)
	 VALUES (3, 0002, 'Contribución y destino: Considerar en el diagnóstico los elementos que se atienden mediante las diferentes fuentes de financiamiento, para tener claridad que el rezago educativo se ha disminuido con diferentes estrategias y recursos',
			false);
            
INSERT INTO RecomendacionDocumento(ID_DocumentoProyecto, IdentificadorRecomendacion, AspectoSusceptibleDeMejora, BanderaRecomendacionCompletada)
	 VALUES (4, 0001, 'Contribución y destino: Considerar la elaboración de un compendio normativo y acciones de Capacitación/Difusión por parte de la SFIA al instituto y en lo particular al personal que interviene en los procesos de distribución de las aportaciones.',
			false);            
INSERT INTO RecomendacionDocumento(ID_DocumentoProyecto, IdentificadorRecomendacion, AspectoSusceptibleDeMejora, BanderaRecomendacionCompletada)
	 VALUES (4, 0002, 'Contribución y destino: Considerar en el diagnóstico los elementos que se atienden mediante las diferentes fuentes de financiamiento, para tener claridad que el rezago educativo se ha disminuido con diferentes estrategias y recursos',
			false);
INSERT INTO RecomendacionDocumento(ID_DocumentoProyecto, IdentificadorRecomendacion, AspectoSusceptibleDeMejora, BanderaRecomendacionCompletada)
	 VALUES (4, 0004, 'Contribución y destino: Considerar la elaboración de un compendio normativo y acciones de Capacitación/Difusión por parte de la SFIA al instituto y en lo particular al personal que interviene en los procesos de distribución de las aportaciones.',
			false);
INSERT INTO RecomendacionDocumento(ID_DocumentoProyecto, IdentificadorRecomendacion, AspectoSusceptibleDeMejora, BanderaRecomendacionCompletada)
	 VALUES (4, 0004, 'Contribución y destino: Considerar en el diagnóstico los elementos que se atienden mediante las diferentes fuentes de financiamiento, para tener claridad que el rezago educativo se ha disminuido con diferentes estrategias y recursos',
			false);
            
SELECT *FROM RecomendacionDocumento;
SELECT * FROM RecomendacionDocumento WHERE RecomendacionDocumento.ID_DocumentoProyecto = 1;