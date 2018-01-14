CREATE TABLE 'emp' (
  'id' int(11) NOT NULL,
  'title' varchar(50) NOT NULL,
  'description' varchar(250) NOT NULL,
  'date_start' datetime NOT NULL,
  'date_end' datetime NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8_general_ci;

ALTER TABLE 'emp'
  ADD PRIMARY KEY ('id');

ALTER TABLE 'emp'
  MODIFY 'id' int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;COMMIT;