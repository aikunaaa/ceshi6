DROP DATABASE IF EXISTS `students`;
CREATE DATABASE students;
GRANT SELECT,INSERT,UPDATE,DELETE on students.* to haxo@'127.0.0.1' identified by 'haxo';
GRANT SELECT,INSERT,UPDATE,DELETE on students.* to haxo@localhost identified by 'haxo';
use students;

/**/ CREATE TABLE `information`  (
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL
  ) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

INSERT INTO `information` VALUES ('ikun', 'FLAGFLAGFLAG');

