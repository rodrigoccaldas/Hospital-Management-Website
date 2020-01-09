-- credits:     Hospital_Management:_Data_Base_
--	------------------ 
--	- Rodrigo Caldas -   up201708987
--	- Tiago Ribeiro  -   up201708988
--  	------------------


DROP TABLE IF EXISTS users;
CREATE TABLE users (
  username VARCHAR PRIMARY KEY,
  password VARCHAR
);

DROP TABLE IF EXISTS especialidade;
CREATE TABLE especialidade (
  idE INTEGER PRIMARY KEY AUTOINCREMENT,
  name VARCHAR NOT NULL  		
);

DROP TABLE IF EXISTS Consulta;
Create Table Consulta(		
	idC INTEGER PRIMARY KEY AUTOINCREMENT,
	idE INTEGER NOT NULL,
	nameMed TEXT NOT NULL,
  	Data TEXT NOT NULL ,		
  	Hora TEXT NOT NULL,
	FOREIGN KEY (idE) REFERENCES especialidade(name)
);

DROP TABLE IF EXISTS Marcacao;
Create Table Marcacao(		
	idC INTEGER PRIMARY KEY AUTOINCREMENT,
	username VARCHAR,
	data DATA,
	idE INTEGER NOT NULL 
);



DROP TABLE IF EXISTS Pessoa;
Create Table Pessoa(
	Nome character varying(40) NOT NULL,			-- Nome
	Morada character varying(100) NOT NULL,			-- Morada
	username VARCHAR  PRIMARY KEY,
	Telemovel TEXT CHECK (Telemovel > 0),
	FOREIGN KEY (username) REFERENCES users(username)
);

DROP TABLE IF EXISTS Medico;
Create Table Medico(		
	idM INTEGER PRIMARY KEY AUTOINCREMENT,
	nome VARCHAR,
	pagina INTEGER,
	especialidade VARCHAR,
	sobre TEXT
);



INSERT INTO users(username,password) VALUES ('1','356a192b7913b04c54574d18c28d46e6395428ab');
	 
INSERT INTO especialidade(name) VALUES ('Anestesiologia');
INSERT INTO especialidade(name) VALUES ('Cardiologia');
INSERT INTO especialidade(name) VALUES ('Dermatologia');
INSERT INTO especialidade(name) VALUES ('Geriatria');
INSERT INTO especialidade(name) VALUES ('Neurologia');
INSERT INTO especialidade(name) VALUES ('Urologia');

INSERT INTO Medico(nome,pagina,especialidade,sobre) VALUES ('Patrícia Sequeira',1,'Anestesiologia','Licenciada em Medicina pelo ICBAS/UP (1996) Assistente de Anestesiologia, Coordenadora da Unidade de Cuidados Intensivos do Hospital Lusíadas Porto. Em junho de 2006 obteve o European Diploma in Intensive Care Medicine (EDICM) atribuído pela European Society of Intensive Care Medicine (ESICM).');
INSERT INTO Consulta(idE,nameMed,Data,Hora) VALUES (1,'Patrícia Sequeira','Segunda-Feira','11:30');
INSERT INTO Consulta(idE,nameMed,Data,Hora) VALUES (1,'Patrícia Sequeira','Sexta-Feira','10:30');


INSERT INTO Medico(nome,pagina,especialidade,sobre) VALUES ('António Silva',2,'Cardiologia','Doutoramento em Ciências Médicas na Universidade do Porto. Licenciatura em Medicina pela Universidade do Porto. Consultor de Cardiologia. Especialidade em Cardiologia. Subespecialidade em Cardiologia de intervenção.');
INSERT INTO Consulta(idE,nameMed,Data,Hora) VALUES (2,'António Silva','Terça-Feira','8:30');
INSERT INTO Consulta(idE,nameMed,Data,Hora) VALUES (2,'António Silva','Quarta-Feira','9:30');

INSERT INTO Medico(nome,pagina,especialidade,sobre) VALUES ('Tiago Sá',3,'Dermatologia','Dermatologista e Venereologista com o grau Consultor. Várias apresentações em simpósios e congressos, com trabalhos publicados. Membro da Academia Europeia de Dermatologia e Venereologia (EADV). Fellow da Academia Americana de Dermatologia (AAD). Sócio efetivo da Sociedade Portuguesa de Dermatologia e Venereologia (SPDV). Membro da International Society for Human and Animal Micology.');
INSERT INTO Consulta(idE,nameMed,Data,Hora) VALUES (3,'Tiago Sá','Segunda-Feira','14:30');
INSERT INTO Consulta(idE,nameMed,Data,Hora) VALUES (3,'Tiago Sá','Sábado','16:30');

INSERT INTO Medico(nome,pagina,especialidade,sobre) VALUES ('Beatriz Almeida',4,'Geriatria','Principais áreas de interesse:  Coloproctologia Especialista de Gastrenterologia pela Ordem dos médicos. Consultora de Gastrenterologia. Ex especialista de Gastro do Hospital da Marinha e do Hospital dos Capuchos. Ex presidente da sociedade Portuguesa de Coloproctologia e seu membro fundador. Assessor da HPP Saúde para a implementação da Unidade de Gastro no Hospital Lusíadas Lisboa e seu coordenador até junho de 2013.');
INSERT INTO Consulta(idE,nameMed,Data,Hora) VALUES (4,'Beatriz Almeida','Segunda-Feira','10:30');
INSERT INTO Consulta(idE,nameMed,Data,Hora) VALUES (4,'Beatriz Almeida','Sexta-Feira','10:30');

INSERT INTO Medico(nome,pagina,especialidade,sobre) VALUES ('Bruno Ribeiro',5,'Neurologia','Licenciatura em Medicina pelo I.C.B.A.S. – Universidade do Porto (1993). Especialista de Neurologia do Serviço de Neurologia do Hospital de Santo António (2000). Assistente Hospitalar de Neurologia do Serviço de Neurologia do Hospital de Santo António (2001).');
INSERT INTO Consulta(idE,nameMed,Data,Hora) VALUES (5,'Bruno Ribeiro','Terça-Feira','9:30');
INSERT INTO Consulta(idE,nameMed,Data,Hora) VALUES (5,'Bruno Ribeiro','Quarta-Feira','10:30');

INSERT INTO Medico(nome,pagina,especialidade,sobre) VALUES ('Rodrigo Kelven',6,'Urologia','Mestrado integrado em Medicina pela Faculdade de Ciências Médicas da Universidade Nova de Lisboa em 2008. Internato médico de Urologia no Centro Hospitalar de Lisboa Central até 2016. Especialista em Urologia pela Ordem dos Médicos e Fellow da European Board of Urology. Assistente Hospitalar no Centro Hospitalar do Oeste desde 2016.');
INSERT INTO Consulta(idE,nameMed,Data,Hora) VALUES (6,'Rodrigo Kelven','Terça-Feira','10:30');
INSERT INTO Consulta(idE,nameMed,Data,Hora) VALUES (6,'Rodrigo Kelven','Sábado','14:30');
