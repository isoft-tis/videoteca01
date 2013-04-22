CREATE TABLE administrador (
  id_administrador INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  usuario_codsis_usr INTEGER UNSIGNED NOT NULL,
  turno_adm VARCHAR(45) NULL,
  PRIMARY KEY(id_administrador, usuario_codsis_usr),
  INDEX administrador_FKIndex1(usuario_codsis_usr)
);

CREATE TABLE docente (
  id_docente INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  usuario_codsis_usr INTEGER UNSIGNED NOT NULL,
  carrera_doc VARCHAR(45) NULL,
  PRIMARY KEY(id_docente),
  INDEX docente_FKIndex1(usuario_codsis_usr)
);

CREATE TABLE estudiante (
  id_est INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  usuario_codsis_usr INTEGER UNSIGNED NOT NULL,
  carrera_est VARCHAR(45) NOT NULL,
  semestre_est INTEGER UNSIGNED NULL,
  PRIMARY KEY(id_est),
  INDEX estudiante_FKIndex1(usuario_codsis_usr)
);

CREATE TABLE pdf (
  id_pdf INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  estudiante_id_est INTEGER UNSIGNED NOT NULL,
  area_pdf VARCHAR(80) NOT NULL,
  PRIMARY KEY(id_pdf),
  INDEX pdf_FKIndex1(estudiante_id_est)
);

CREATE TABLE usuario (
  codsis_usr INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  ci_usr VARCHAR(45) NOT NULL,
  nombre_usr VARCHAR(45) NOT NULL,
  apellido_pat_usr VARCHAR(45) NOT NULL,
  apellido_mat_usr VARCHAR(45) NOT NULL,
  direccion_usr VARCHAR(45) NULL,
  telefono_usr VARCHAR(45) NOT NULL,
  correo_usr VARCHAR(45) NOT NULL,
  login_usr VARCHAR(45) NOT NULL,
  password_usr VARCHAR(45) NOT NULL,
  PRIMARY KEY(codsis_usr)
);

CREATE TABLE video (
  id_video INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  estudiante_id_est INTEGER UNSIGNED NOT NULL,
  introduccion_vid VARCHAR(200) NOT NULL,
  duracion_vid TIME NOT NULL,
  idioma_vid VARCHAR(45) NOT NULL,
  tamano_vid VARCHAR(45) NOT NULL,
  formato_vid VARCHAR(45) NOT NULL,
  calidad_vid VARCHAR(45) NOT NULL,
  enlace_vid VARCHAR(45) NOT NULL,
  fecha_pub_vid DATE NOT NULL,
  PRIMARY KEY(id_video),
  INDEX video_FKIndex1(estudiante_id_est)
);


