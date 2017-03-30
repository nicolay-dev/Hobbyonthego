CREATE TABLE USER(
		id_user			INT	     NOT NULL	AUTO_INCREMENT,	
		name			VARCHAR(50)  NOT NULL,
		pass			VARCHAR(50)  NOT NULL,

		CONSTRAINT user_pk_name PRIMARY KEY (id_user)
);

CREATE TABLE EVENT(
		id_event       		INT	  	NOT NULL AUTO_INCREMENT, 
		descr			VARCHAR(500)  	NOT NULL,
		fecha			DATE		NOT NULL,
		usuario			INT	  	NOT NULL,
		
		CONSTRAINT eve_pk_id_event PRIMARY KEY (id_event)
);

ALTER TABLE EVENT ADD(
	CONSTRAINT eve_fk_usuario FOREIGN KEY (usuario) REFERENCES USER(id_user)
);