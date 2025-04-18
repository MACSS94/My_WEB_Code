USE consultas;

CREATE TABLE consultas (
	id_consultas INT PRIMARY KEY AUTO_INCREMENT,
	nome_paciente VARCHAR(100) NOT NULL,
	idade_paciente SMALLINT NOT NULL,
	genero_paciente VARCHAR(20) NOT NULL,
	nome_profissional_saude VARCHAR(100) NOT NULL,
	tipo_consulta VARCHAR(100) NOT NULL,
 	data_consulta DATETIME,
 	descricao_consulta VARCHAR(500)

);consultas