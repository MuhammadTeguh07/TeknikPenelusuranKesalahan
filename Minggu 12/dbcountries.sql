CREATE OR REPLACE TABLE `tbl_country` (
`country_id` INT( 3 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`country_name` VARCHAR( 25 ) NOT NULL
)ENGINE = MYISAM;

INSERT INTO `tbl_country` (`country_id`, `country_name`) VALUES
(1, 'Indonesia'),
(2, 'Malaysia'),
(3, 'Cina');

CREATE OR REPLACE TABLE `tbl_state` (
`state_id` INT( 3 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`country_id` INT( 3 ) NOT NULL ,
`state_name` VARCHAR( 35 ) NOT NULL,
CONSTRAINT FOREIGN KEY(country_id) REFERENCES tbl_country(country_id)
) ENGINE = MYISAM ;

INSERT INTO `tbl_state` (`state_id`, `country_id`, `state_name`) VALUES
(1, 1, 'Jawa Timur'),
(2, 1, 'Jawa Barat'),
(3, 2, 'Kuala Lumpur'),
(4, 3, 'Wuhan');

CREATE OR REPLACE TABLE `tbl_city` (
`city_id` INT( 3 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`state_id` INT( 3 ) NOT NULL ,
`city_name` VARCHAR( 35 ) NOT NULL,
CONSTRAINT FOREIGN KEY(state_id) REFERENCES tbl_state(state_id)
) ENGINE = MYISAM ;

INSERT INTO `tbl_city` (`city_id`, `state_id`, `city_name`) VALUES
(1, 11, 'Gresik'),
(2, 12, 'Bandung'),
(3, 13, 'Kuala Lumpur'),
(4, 14, 'Wuhan');
