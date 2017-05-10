-- 创建用户表
CREATE TABLE IF NOT EXISTS `user`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(30) NOT NULL DEFAULT '',
    `passwd` VARCHAR(32) NOT NULL DEFAULT 'e10adc3949ba59abbe56e057f20f883e',
    `created_time` INT(10) NOT NULL DEFAULT 0
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 测试数据
INSERT INTO `user` (name, passwd, created_time) VALUES
('Mark', md5('12345'), UNIX_TIMESTAMP()),
('Lily', md5('12345'), UNIX_TIMESTAMP()),
('Lucy', md5('12345'), UNIX_TIMESTAMP()),
('Bob', md5('12345'), UNIX_TIMESTAMP()),
('Tom', md5('12345'), UNIX_TIMESTAMP()),
('Christian', md5('12345'), UNIX_TIMESTAMP());
