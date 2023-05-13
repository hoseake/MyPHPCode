-- 为了不影响数据，注释了前面的语句，数字为题目序号

-- 3
-- INSERT INTO `goods` VALUES (20,'洗衣机',3200,10);

-- 4
-- UPDATE goods
-- SET price = 20,`storage` = 100
-- WHERE goodsname = '摄像头';

-- 5
-- UPDATE users
-- SET age = 35,balance = 150
-- WHERE username = 'bird';

-- 6
-- UPDATE goods
-- SET price = 40,`storage` = 80
-- WHERE goodsno = 4;

-- 7
-- DELETE FROM buys
-- WHERE buys.quantity = 0;

-- 8
-- 联表删除，左连接
-- DELETE buys
-- FROM buys LEFT JOIN users on buys.userid = users.userid
-- WHERE realname = '李大鹏';

-- 9
-- DELETE FROM buys WHERE buys.userid IN (
-- SELECT userid FROM users WHERE realname = '王明')
-- AND buys.goodsno = (
-- SELECT goodsno FROM goods WHERE goodsname = '耳机');

-- 10
-- SELECT username,realname FROM users;

-- 11
-- SELECT * FROM buys WHERE year(buydate) = 2017; -- 第一种方法
-- SELECT * FROM buys WHERE buydate BETWEEN '2017/1/1' AND '2017/12/31'; -- 第二种方法

-- 12
-- SELECT username FROM users WHERE userid IN (SELECT userid FROM buys WHERE goodsno = '1');

-- 13
-- SELECT * FROM users WHERE age > 40;

