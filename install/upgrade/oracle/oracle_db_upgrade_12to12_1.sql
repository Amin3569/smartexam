


CREATE TABLE tce_sslcerts (
	ssl_id NUMBER(19,0) NOT NULL,
	ssl_name VARCHAR2(255) NOT NULL,
	ssl_hash VARCHAR2(32) NOT NULL,
	ssl_end_date DATE NOT NULL,
	ssl_enabled NUMBER(1) DEFAULT '0' NOT NULL,
	ssl_user_id NUMBER(19,0) DEFAULT 1 NOT NULL,
constraint pk_tce_sslcerts primary key (ssl_id)
);
CREATE SEQUENCE tce_sslcerts_seq MINVALUE 1 START WITH 1 INCREMENT BY 1 CACHE 3;
CREATE OR REPLACE TRIGGER tce_sslcerts_trigger BEFORE INSERT ON tce_sslcerts FOR EACH ROW BEGIN SELECT tce_sslcerts_seq.nextval INTO :new.tus_id FROM DUAL; END;;

CREATE TABLE tce_testsslcerts (
	tstssl_test_id NUMBER(19,0) NOT NULL,
	tstssl_ssl_id NUMBER(19,0) NOT NULL,
constraint pk_tce_testsslcerts primary key (tstssl_test_id, tstssl_ssl_id)
);

ALTER TABLE tce_testsslcerts ADD Constraint rel_test_ssl foreign key (tstssl_test_id) references tce_tests (test_id) ON DELETE cascade;
ALTER TABLE tce_testsslcerts ADD Constraint rel_ssl_test foreign key (tstssl_ssl_id) references tce_sslcerts (ssl_id) ON DELETE cascade;
