-- 导师推荐课程 --
CREATE TABLE `pl_teacher_rcd_offline_course` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `teacher_id` INT NOT NULL DEFAULT 0 COMMENT '导师ID',
    `offline_course_id` INT NOT NULL DEFAULT 0 COMMENT '线下课程ID',
    `createdAt` DATETIME NOT NULL DEFAULT current_timestamp,
    PRIMARY KEY(`id`)
);

-- 小程序版本审核 --
CREATE TABLE `pl_mp_version` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `version` CHAR(10) NOT NULL DEFAULT '',
    `status` TINYINT NOT NULL DEFAULT 0,
    `create_time` DATETIME NOT NULL DEFAULT current_timestamp,
    `release_time` DATETIME DEFAULT NULL,
    PRIMARY KEY(`id`)
);