<!DOCTYPE html>
<html lang="zh">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="keywords" content="LightYear,LightYearAdmin,光年,后台模板,后台管理系统,光年HTML模板">
<meta name="description" content="Light Year Admin V5是一个基于Bootstrap v5.1.3的后台管理系统的HTML模板。">
<title>QQ改机型工具</title>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<link rel="stylesheet" type="text/css" href="assets/Light_Year/css/materialdesignicons.min.css">
<link rel="stylesheet" type="text/css" href="assets/Light_Year/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/Light_Year/css/style.min.css">
<style>
/* 持续抖动动画 */
.btn-outline-info.shake {
  animation: gentleShake 0.9s infinite ease-in-out;
}

@keyframes gentleShake {
  0%, 100% { transform: translateX(0) rotate(0deg); }
  25% { transform: translateX(-1px) rotate(-0.5deg); }
  75% { transform: translateX(1px) rotate(0.5deg); }
}
</style>
</head>
<body>
<div class="container-fluid"  id="app">
    <div class="row justify-content-center mian_ui">
        <div class="col-xs-12 col-sm-10 col-md-8 col-lg-6 center-block" style="float: none;">
        <div class="panel panel-primary">
        	<div class="panel-heading" style="text-align: center;"><h3 class="panel-title">
        		登录
        	</div>
        	<div class="panel-body" style="text-align: center;">
        		<div class="list-group">
        			<div class="list-group-item"><img src="https://sqimg.qq.com/qq_product_operations/im/qqlogo/imlogo_b.png"></div>
	        		<div class="list-group-item list-group-item-info" style="font-weight: bold;" id="login">
	        			<span id="loginmsg">使用QQ手机版扫描二维码</span><span id="loginload" style="padding-left: 10px;color: #790909;">.</span>
	        		</div>
	        		<div class="list-group-item" id="qrimg">
	        		</div><br>
	        		<div class="d-grid gap-2"  id="mobile" style="display:none;">
                         <button type="button" class="btn btn-outline-info shake" id="mlogin" onclick="mloginurl()">👉免扫码快捷登录👈</button>
                         <button type="button" class="btn btn-outline-primary" onclick="qrlogin()">我已完成登录</button>
                    </div>
	        	</div>
        	</div>
        </div>
        <div class="card " style="margin-top: 20px;"><div class="card-body  p-4">
            <p style="font-weight: 600;font-size: 16px;text-align: justify;">✅温馨提示：<br>1️⃣请在手机自带浏览器内使用本服务。<br>2️⃣登录首选“免扫码快捷登录”方式。<br>3️⃣如果登录失败则使用扫码登录，这里必须手机摄像头对着扫，不支持截图长按扫码！</p>
    </div></div>
        </div>
    </div>
</div>

<script type="text/javascript" src="assets/Light_Year/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/Light_Year/js/popper.min.js"></script>
<script type="text/javascript" src="assets/Light_Year/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/Light_Year/js/main.min.js"></script>
<script type="text/javascript" src="assets/js/login.js?v=8"></script>
</body>
</html>