<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>抽奖程序</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/index.css">

<script type="text/javascript">
	function check(){
		flag=true;
		var fm=document.form;
		if(fm.prize.value==''){
			flag=false;
		}
		if(fm.daynum.value==''){
			flag=false;
		}
		if(fm.minprize.value==''){
			flag=false;
		}
		if(fm.minmen.value==''){
			flag=false;
		}
		if(fm.maxmen.value==''){
			flag=false;
		}
		if(!flag){
			alert('字段不能为空！');
			return false;
		}
		return true;
	}
</script>
</head>
<body>
	<header>
	</header>
	<div id="cj">
		<div class="panel panel-primary">
			<div class="panel-heading">初始化数据</div>
			<div class="panel-body">
				<form name="form" target="_blank" action="cj.php" method="post" onsubmit="return check();" >
					<div class="form-group">
						<label for="prize">奖品总数:</label>
						<input type="text" class="form-control" id="prize" name="prize">
				  	</div>
					<div class="form-group">
						<label for="daynum">发放天数：</label>
						<input type="text" class="form-control" id="daynum" name="daynum">
				 	</div>
				 	<div class="form-group">
						<label for="minprize">每天至少发放奖品数:</label>
						<input type="text" class="form-control" id="minprize" name="minprize">
				  	</div>
					<div class="form-group">
						<label for="minmen">预计每天抽奖最少人数：</label>
						<input type="text" class="form-control" id="minmen" name="minmen">
				 	</div>
				 	<div class="form-group">
						<label for="maxmen">预计每天抽奖最多人数：</label>
						<input type="text" class="form-control" id="maxmen" name="maxmen">
				 	</div>
				  <button type="submit" class="btn btn-primary">提交</button>
				</form>
			</div>
		</div>
	</div>

</body>
</html>




















 