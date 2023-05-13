<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <tittle>简易计算器</tittle>
    <br />
</head>

<body>
        <?php
            $a = "";$b = "";$c = "";$sign1 = "";$sign2 = "";
            if(isset($_GET["a"])){
                $a = $_GET["a"];
            }
            if(isset($_GET["b"])){
                $b = $_GET["b"];
            }
            if(isset($_GET["c"])){
                $c = $_GET["c"];
            }
            if(isset($_GET["sign1"])){
                $sign1 = $_GET["sign1"];
            }
            if(isset($_GET["sign2"])){
                $sign2 = $_GET["sign2"];
            }
            $cal = $a.$sign1.$b.$sign2.$c;
            $result = eval("return $cal;");//eval函数把字符串当作语句处理
            //保留上次计算的第一个运算符
            $select1=$select2=$select3=$select4=$select5="";
            if($sign1 == "+"){
                $select1 = "selected";
            }else if($sign1 == "-"){
                $select2 = "selected";
            }else if($sign1 == "*"){
                $select3 = "selected";
            }else if($sign1 == "/"){
                $select4 = "selected";
            }else if($sign1 == "%"){
                $select5 = "selected";
            }
            //保留上次计算的第二个运算符
            $select1s=$select2s=$select3s=$select4s=$select5s="";
            if($sign2 == "+"){
                $select1s = "selected";
            }else if($sign2 == "-"){
                $select2s = "selected";
            }else if($sign2 == "*"){
                $select3s = "selected";
            }else if($sign2 == "/"){
                $select4s = "selected";
            }else if($sign2 == "%"){
                $select5s = "selected";
            }
        ?>
        <form>
                    <input type="number" name="a" required="required" placeholder="输入a的值" value="<?php echo $a;?>"/>
                    <select name="sign1" id="">
                        <option value="+" <?php echo $select1;?>>+</option>
                        <option value="-" <?php echo $select2;?>>-</option>
                        <option value="*" <?php echo $select3;?>>*</option>
                        <option value="/" <?php echo $select4;?>>/</option>
                        <option value="%" <?php echo $select5;?>>%</option>
                    </select>
                    <input type="number" name="b" required="required" placeholder="输入b的值" value="<?php echo $b;?>"/>
                    <select name="sign2" id="">
                        <option value="+" <?php echo $select1s;?>>+</option>
                        <option value="-" <?php echo $select2s;?>>-</option>
                        <option value="*" <?php echo $select3s;?>>*</option>
                        <option value="/" <?php echo $select4s;?>>/</option>
                        <option value="%" <?php echo $select5s;?>>%</option>
                    </select>
                    <input type="number" name="c" required="required" placeholder="输入c的值" value="<?php echo $c;?>"/>
                    = <input type="number" name="result" value = "<?php echo $result;?>"/>
                    <input type="submit" value="计算"/>
        </form>
        
    </body>

</html>