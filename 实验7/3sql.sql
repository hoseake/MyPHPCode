-- 14
-- SELECT username,realname FROM users WHERE realname LIKE '李%'

-- 15
-- SELECT * FROM users WHERE age IS NULL;

-- 16
-- SELECT * FROM goods ORDER BY price DESC;

-- 17
-- SELECT * FROM buys ORDER BY quantity DESC LIMIT 5;

-- 18
-- SELECT goodsno,goodsname,price FROM goods WHERE goodsno IN (
-- SELECT goodsno FROM buys WHERE userid IN (
-- SELECT userid FROM users WHERE username = 'bird'));

-- 19
-- SELECT goodsno,goodsname,price FROM goods WHERE goodsno IN (
-- SELECT goodsno FROM buys WHERE userid IN (
-- SELECT userid FROM users WHERE realname = '李飞'));

-- 20
SELECT a.*,b.goodsname,b.price,c.buydate,c.quantity
FROM users a,goods b,buys c
WHERE a.userid = c.userid
AND b.goodsno = c.goodsno
ORDER BY a.userid;