<form>
			<p>
				<input type="text" name="numStr" required="required"/>
			</p>
</form>
<?php
    $numStr = "";
    if(isset($_GET["numStr"])){
        $numStr = $_GET["numStr"];
    }
    $nums = explode(" ",$numStr);
    $sum = 0;
    for($i = 0;$i<5;$i++)
    {
        $sum += $nums[$i];
    }
    echo number_format($sum/count($nums),2);
?>