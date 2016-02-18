CREATE TABLE users (
  idUser INT NOT NULL AUTO_INCREMENT,
  name VARCHAR(50) NOT NULL,
  last_name VARCHAR(120) NULL,
  status ENUM('active','inactive','deleted') NOT NULL,
  user VARCHAR(20) NOT NULL,
  password VARCHAR(100) NOT NULL,
  phone VARCHAR(20) NULL,
  remember_token VARCHAR(120) NULL,
  created_at DATETIME NULL,
  updated_at DATETIME NULL,
  PRIMARY KEY(idUser)
)ENGINE=InnoDB;


CREATE TABLE customers (
  idCustomer INT NOT NULL AUTO_INCREMENT,
  name VARCHAR(100) NOT NULL,
  address VARCHAR(200) NOT NULL,
  company VARCHAR(100) NULL,
  ocupation VARCHAR(100) NULL,
  email VARCHAR(150) NOT NULL,
  phone VARCHAR(30) NOT NULL,
  cell_phone VARCHAR(30) NULL,
  status ENUM('active','inactive','deleted') NOT NULL,
  created_at DATETIME NULL,
  updated_at DATETIME NULL,
  PRIMARY KEY(idCustomer)
)ENGINE=InnoDB;


CREATE TABLE documentations (
  idDocumentation INT NOT NULL AUTO_INCREMENT,
  request_credit VARCHAR(200) NULL,
  address VARCHAR(200) NULL,
  format_credit VARCHAR(200) NULL,
  status_bank VARCHAR(200) NULL,
  identification VARCHAR(200) NULL,
  birth VARCHAR(200) NULL,
  proceedings VARCHAR(200) NULL,
  property_copy VARCHAR(200) NULL,
  property_taxes VARCHAR(200) NULL,
  photos VARCHAR(200) NULL,
  ticket_water VARCHAR(200) NULL,
  map VARCHAR(200) NULL,
  pay_of_appraisal VARCHAR(200) NULL,
  certificate_assessment VARCHAR(200) NULL,
  appraisal VARCHAR(200) NULL,
  pay_of_assessment VARCHAR(200) NULL,
  created_at DATETIME NULL,
  updated_at DATETIME NULL,
  idCustomer INT NOT NULL,
  PRIMARY KEY(idDocumentation),
  FOREIGN KEY (idCustomer) REFERENCES customers(idCustomer) ON DELETE CASCADE ON UPDATE CASCADE 
)ENGINE=InnoDB;









