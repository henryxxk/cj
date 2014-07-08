<?php
header("Content-Type:text/html;charset=utf-8");
//奖品数
$prize=intval($_POST['prize']);
//发放天数
$daynum=intval($_POST['daynum']);
//每天至少发放奖品数
$minprize=intval($_POST['minprize']);
//平均每天的发放奖品数
$avgprize=floor($prize/$daynum);
//最少人数
$minmen=intval($_POST['minmen']);
//最大人数
$maxmen=intval($_POST['maxmen']);
//第一天
$day=1;
//累计发放奖品数
$tmprize=0;
//累计人数
$tmpmen=0;
//每天实际发放的奖品数
$randprize=0;
echo '输入的奖品数为：'.$prize.'个；发放天数为：'.$daynum.'天；每天至少发放奖品数为：'.$minprize.'个；最少人数为：'.$minmen.'人；最大人数为：'.$maxmen.'人。';
echo '<br/>';
//只进行一次迭代
while($day<=$daynum){
	//每一天的随机人数
	$randmen=mt_rand($minmen, $maxmen);
	if($day==1){
		$randprize=mt_rand($minprize,$avgprize);
		$tmprize+=$randprize;//累加发放奖品数
	}
	if($day>1 && $day<$daynum){
		//前$daynum-1天的随机发放的奖品数
		$randprize=floor(($prize-$tmprize)/($daynum-$day+1));
		//前$daynum-1天累计发放的奖品总数
		$tmprize+=$randprize;
	}
	if($day==$daynum){
		//第$daynum天的奖品数是总奖品数减去前$daynum-1天累计发放的奖品总数
		$randprize=$prize-$tmprize;
	}
	$luckyLen=floor($randmen/$randprize);//中奖间隔
	echo '<br/>';
	echo '第'.$day.'天抽奖人数：'.$randmen.'人  奖品发放数量:'.$randprize.'个 中奖间隔：'.$luckyLen;
	echo '<br/>';
	for($i=$tmpmen+1;$i<=$randmen+$tmpmen;$i++){
		if($i%$luckyLen==0){//中奖判断
			echo 'ID '.$i.'--- 1';
			echo '<br/>';
		}
	}
	$tmpmen+=$randmen;//累加抽奖人数
	//统计
	if($day==$daynum){
		echo '<br/>';
		echo '总共抽奖人数为：'.$tmpmen.'人。每人中奖的概率为：'.(number_format($prize/$tmpmen,5)*100).'%';
	}
	
	$day++;
	
}

?>