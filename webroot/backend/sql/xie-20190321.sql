ALTER TABLE `pl_shop` ADD COLUMN specs VARCHAR(512) NOT NULL DEFAULT '' COMMENT '商品规格';

ALTER TABLE `pl_shop` ADD COLUMN quantity INTEGER NOT NULL DEFAULT 0 COMMENT '库存数量';
UPDATE `pl_shop` SET quantity = 66666;

ALTER TABLE `pl_order_shop` ADD COLUMN spec VARCHAR(20) NOT NULL DEFAULT '' COMMENT '规格';


ALTER TABLE `pl_couser_test` 
    ADD COLUMN max_try_times INTEGER NOT NULL DEFAULT 5 COMMENT '允许最多考试次数', 
    ADD COLUMN rules TEXT COMMENT '考试规则';

ALTER TABLE `pl_user_couser_test_log` ADD COLUMN total INTEGER NOT NULL DEFAULT 0 COMMENT '总分';
ALTER TABLE `pl_user_couser_test_log` ADD COLUMN test_count INTEGER NOT NULL DEFAULT 0 COMMENT '测试次数';
ALTER TABLE `pl_user_couser_test_log` ADD COLUMN max_try_times INTEGER NOT NULL DEFAULT 0 COMMENT '允许最多考试次数';