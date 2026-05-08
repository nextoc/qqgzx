<?php
if(!file_exists('config.php'))
{
    include('install/index.html');
    exit;
}
include('core/common.php');
if (config('state') == 0) {
    exit("<script language='javascript'>window.location.href='404.php';</script>");
}
if (config('jump') == 1) {
    require_once('core/WxqqJump.php');
}

$raw = config('kmurl');
$isValidUrl = filter_var($raw, FILTER_VALIDATE_URL) !== false;
if ($isValidUrl) {
    $kmurl = $raw;
    $kmgong = '';
} else {
    $kmurl = '';
    $kmgong = $raw;
}
?>
<!DOCTYPE html>
<html lang="zh">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="keywords" content="<?= htmlspecialchars(config('keywords')) ?>">
<meta name="description" content="<?= htmlspecialchars(config('description')) ?>">
<title><?= htmlspecialchars(config('title')) ?> -QQ修改在线状态型号_自定义修改QQ在线状态</title>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<link rel="stylesheet" type="text/css" href="assets/Light_Year/css/materialdesignicons.min.css">
<link rel="stylesheet" type="text/css" href="assets/Light_Year/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/Light_Year/css/style.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/mian.css?=<?=rand(1,999)?>">
<style>
.mask{position:fixed;top:300px;z-index:1001;left:-210px;text-align:right;}.activation-tip{display:inline-flex;align-items:center;gap:6px;background:#fff4f0;border:1px solid #ffccbc;border-radius:16px;padding:4px 12px;font-size:12px;font-weight:500;color:#e65100;margin-bottom:5px;font-weight:bold;}</style>
</head>
<body>
<div class="container-fluid"  id="app">
    <div class="row justify-content-center mian_ui">
        <div class="col-md-6 col-sm-8 col-xs-12">
            <div class="card ">
                <div class="card-body  p-4">
                    <div class="badge mian_name" style="padding: 8px 15px;font-weight: 600;background-color: #6576ff;">
                        <span class="">QQ自定义在线机型</span></div>
                    <p class="user_ui" v-html="login"></p>
                    <div class="input-group mb-3 input-group-lg ">
                      <span class="input-group-text fs-6" >手机IMEI</span>
                      <input type="text" class="form-control fs-6" placeholder="点击查看教程  👉"  name="imei" v-model="imei">
                          <button type="button" class="btn btn-outline-primary fs-6"  data-toggle="modal" data-target="#help">获取</button>
                    </div>    
                    <div class="input-group mb-3 input-group-lg">
                      <span class="input-group-text fs-6">选择型号</span>
                      <select class="form-select fs-6"  id="xz_phone" name="xz_phone" @change="onChange($event)" v-model="key"  aria-label="默认下拉选择示例"> 
                        <option value="1" selected>iPhone 17 Pro Max</option>
                        <option value="2">iPhone 17 Pro</option>
                        <option value="3">iPhone 17</option>
                        <option value="4">iPhone Air</option>
                        <option value="5">自定义文字/机型</option>
                        <option value="6">iPhone 16 Pro Max</option>
                        <option value="7">iPhone 16 Pro</option>
                        <option value="8">iPhone 16 Plus</option>
                        <option value="9">iPhone 16</option>
                        <option value="10">iPhone 15 Pro Max</option>
                        <option value="11">iPhone 15 Plus</option>
                        <option value="12">iPhone 15</option>
                        <option value="13">iPhone 14 Pro Max</option>
                        <option value="14">iPhone 14 Max</option>
                        <option value="15">iPhone 14</option>
                        <option value="16">iPhone 13 Pro Max</option>
                        <option value="17">iPhone 13</option>
                        <option value="18">iPhone 13 Mini</option>
                        <option value="19">iPhone 12 Pro Max</option>
                        <option value="20">iPhone 12 Pro</option>
                        <option value="21">iPhone 12</option>
                        <option value="22">iPhone 12 mini</option>
                        <option value="23">iPhone 11 Pro Max</option>
                        <option value="24">iPhone 11 Pro</option>
                        <option value="25">iPhone 11</option>
                        <option value="26">iPhone XS Max</option>
                        <option value="27">iPhone XS</option>
                        <option value="28">iPhone XR</option>
                        <option value="29">iPhone X</option>
                        <option value="30">iPhone 8 Plus</option>
                        <option value="31">iPhone 8</option>
                        <option value="32">iPhone 7 Plus</option>
                        <option value="33">iPhone 7</option>
                        <option value="34">iPhone 6s Plus</option>
                        <option value="35">iPhone 6s</option>
                        <option value="36">iPhone 6 Plus</option>
                        <option value="37">iPhone 6</option>
                        <option value="38">iPhone SE</option>
                        <option value="39">iPhone 5s</option>
                        <option value="40">iPhone 5c</option>
                        <option value="41">iPhone 5</option>
                        <option value="42">iPhone 4s</option>
                        <option value="43">iPhone 4</option>
                        <option value="44">iPad</option>
                        <option value="45">iPad2</option>
                        <option value="46">iPad3</option>
                        <option value="47">iPad4</option>
                        <option value="48">iPad Air</option>
                        <option value="49">iPad Air 2</option>
                        <option value="50">iPad mini</option>
                        <option value="51">iPad mini 2</option>
                        <option value="52">iPad mini 3</option>
                        <option value="53">iPad mini 4</option>
                        <option value="54">HUAWEI Mate X5</option>
                        <option value="55">HUAWEI Mate 60 Pro</option>
                        <option value="56">Xiaomi 14 Pro</option>
                        <option value="57">Xiaomi MIX Alpha</option>
                        <option value="58">保时捷</option>
                        <option value="59">法拉利</option>
                        <option value="60">二战时期军用BB机</option>
                        <option value="61">诺基亚 - 怀旧版</option>
                        <option value="62">Android安卓</option>
                      </select>
                    </div>                    
                    <div class="input-group mb-3 input-group-lg" v-show="showButton">
                      <span class="input-group-text fs-6" >自定义机型</span>
                      <input type="n" class="form-control fs-6" placeholder="请输入自定义机型"  name="model" v-model="model">
                    </div>
                    
                    <div class="input-group mb-3 input-group-lg">
                      <span class="input-group-text fs-6" >网络状态</span>
                      <input type="text" class="form-control fs-6" placeholder="输入网络如:5G"  name="descc" v-model="descc">
                      <button type="button" class="btn btn-outline-primary fs-6"  data-toggle="modal" data-target="#shuom">说明</button>
                    </div>

                    <p>在线状态预览：<span class="text-primary">{{model}}在线 - {{descc}}</span></p>
                  
                    <div class="d-grid gap-2" style="padding-bottom: 10px;">
                         <button type="button" class="btn btn-outline-primary"  @click="change()">立即修改</button>
                    </div>
                
                    <div class="alert alert-info" role="alert" style="color: rgb(13, 132, 155);padding: 10px;border: 1px solid #c1ebf4;">
                        <?= empty(trim(config('circular'))) ? '<li style="color: #d62121;">所有手机QQ通用，如果要设置其他文字或加颜色，在选择型号处点击【自定义文字/机型】即可</li><li>如果修改失败，请仔细核对自己的IMEI必须一字不差，前后中间不要有任何空格或者多余的符号</li><li>登录QQ提示异地属于正常情况但不会有风险，若有顾虑请勿使用本系统，避免造成误会!</li>' : config('circular'); ?>
                    </div> 
                    <div v-html="result" v-show="showresult"></div>
                </div>
            </div>
        </div><span style="font-size: 10px;text-align: center;">本工具仅限用于学习娱乐使用，如本站内容侵犯您的权益，请联系本站删除。<br>
                邮箱：<?= config('adminqq') ?>@qq.com</span>
      </div>
        <div class="modal fade" id="help" tabindex="-1" aria-labelledby="helpLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="helpLabel">获取IMEI教程</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
                </div>
        <div class="modal-body">
                <p>(1)在手机QQ内部打开链接：<font-size style="color: #ffffff;background-color: #ff0000;">https://1105583577.urlshare.cn</font-size>
                <button type="button" class="btn btn-outline-purple btn-xs btn-round copy-btn"  data-clipboard-text="https://1105583577.urlshare.cn" style="padding: 1px 9px;font-size: 12px;">点击复制</button><br><font style="font-size: 12px;font-weight: 400;color: #ff4b34;">（可以复制链接打开QQ发给自己然后点击链接打开）</font></p>
                <p>(2)点击“设备信息”</p>
                <p>【安卓】找到最后的<span style="color: #ffffff;background-color: #ff0000;font-weight: 700;">androidID</span>后面的内容。若修改失败则用<span style="color: #ffffff;background-color: #ff0000;font-weight: 700;">identifier</span>后面内容进行尝试<br>【苹果】前两行找到<span style="color: #ffffff;background-color: #ff0000;font-weight: 700;">msf_identifier</span>后面的内容。</p>
                下方是示例图片
                <img style="width: 100%;" src="https://p0.meituan.net/csc/cc25c766f221b647ec2563efd28d75ec291923.jpg">
                <p style="color: rgb(255 39 39);background-color: rgb(219 219 219 / 54%);font-weight: 500;">【截图】后使用下方工具自动提取</p>
                <iframe src="//zx.aate.cc/tq.php" style="width:100%; height:550px; border:none;"></iframe>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">关闭</button>
        </div>
      </div>
    </div>
  </div>
  
          <div class="modal fade" id="shuom" tabindex="-1" aria-labelledby="helpLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="helpLabel">网络状态使用说明</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                  </button>
                </div>
        <div class="modal-body">
        <p style="color: rgb(255 39 39);background-color: rgb(219 219 219 / 54%);font-weight: 500;">如果需要自定义网络状态，必须在手机QQ设置中关闭“我的网络状态可见”。否则会出现两个网络！不想自定义则留空即可！</p>
        <p>注意：仅支持输入数字和字母。如：5G、6G、WiFi或者其他</p>
        <p>QQ设置>隐私设置>我的网络状态可见>关闭<br>下方是示例图片</p>
        <img src="assets/wl.jpg" style="width: 100%;border: 10px solid rgb(223 223 223 / 43%);border-radius: 4%;">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">关闭</button>
        </div>
      </div>
    </div>
  </div>
  
<div class="text-center footer">
      <p><?=config('copyright');?><br><a  style="color:#AAAAAA;" href="https://beian.miit.gov.cn"><?=config('icp');?></a></p>
  </div>
</div>

<script src="assets/js/3.6.0-jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/nioapp.min.js"></script>
<script src="assets/js/script.js"></script>
<script src="assets/js/vue.min.js"></script>
<script type="text/javascript" src="assets/js/mian.js?=<?=rand(1,999)?>"></script>
<script type="text/javascript" src="assets/layer/layer.js"></script>
<script src="assets/js/1.7.1-clipboard.min.js"></script>

<script>
var kmurl = <?= json_encode($kmurl) ?>;
var kmgong = <?= json_encode($kmgong) ?>;
</script>

<script>
new Vue({
    el: '#app',
    data: {
        model: 'iPhone 17 Pro Max',
        desc: '',
        descc:'',
        imei: '',
        showresult: false,
        result: '',
        key:'1',
        showButton:false,
        login:''
    },
    mounted() {
        var qq = getCookie('qq');
        var nickname= getCookie('nickname');
        var clipboard = new Clipboard('.copy-btn', {
            container: document.getElementById('help')
        });
        clipboard.on('success', function (e) {
            layer.msg('复制成功', {icon:1, time:600})
        });
        clipboard.on('error', function (e) {
            layer.msg('复制失败，请长按链接后手动复制');
        });
        if(getCookie('device_imei')){
            this.imei = getCookie('device_imei');
        }
        if(qq==null){
            this.login = '<div class="user_pic_ui"><svg t="1749269458607" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="22449" width="80" height="80"><path d="M512 25.6C243.2 25.6 25.6 243.2 25.6 512s217.6 486.4 486.4 486.4 486.4-217.6 486.4-486.4-217.6-486.4-486.4-486.4z m169.984 583.168s-11.776 34.304-34.304 65.024c0 0 39.936 14.336 36.352 50.688 0 0 1.536 40.96-84.992 37.888 0 0-60.928-5.12-79.36-31.744h-15.872c-18.432 26.624-79.36 31.744-79.36 31.744-86.528 2.56-84.992-37.888-84.992-37.888-3.584-36.864 36.352-50.688 36.352-50.688-22.016-30.72-34.304-65.024-34.304-65.024-54.272 90.624-48.64-12.8-48.64-12.8 10.24-60.928 52.736-100.864 52.736-100.864C339.456 439.808 361.984 430.08 361.984 430.08c4.608-171.52 146.944-168.448 150.016-168.448 3.072 0 145.408-3.072 150.016 168.448 0 0 22.528 9.728 16.384 65.024 0 0 42.496 39.936 52.736 100.864 0 0 5.632 103.424-49.152 12.8z" p-id="22450" fill="#dbdbdb"></path></svg></div><div class="user_name_ui"><b>未登录</b></div><div class="user_btn_ui"><a href="login.php" class="btn btn-sm btn-outline-success">立即登陆</a></div>'
        }else{
            this.login = '<div class="user_pic_ui"><image class="user_pic" src="//q.qlogo.cn/headimg_dl?dst_uin='+qq+'&spec=640&img_type=jpg"/></div><div class="user_name_ui"><b>'+qq+'</b></div><div class="user_name_ui"><b>'+nickname+'</b></div><div id="user_info"></div><div class="user_btn_ui"><a href="login.php" class="btn btn-sm btn-outline-success">切换账号</a>&nbsp;<button type="button" class="btn btn-sm btn-outline-info"  id="btn_kmcz"  @click="btn_kmcz()">使用卡密</button></div>' 
        }
    },
    methods: {
        onChange(event){
            if(this.key==5){
                this.showButton=true;
            }else{
                this.showButton=false;
                this.model=event.target[event.target.value - 1].innerText;
            }
        },
        change() {
            if(this.model == ''){
                layer.alert('请输入自定义机型');
                return false;
            }
            if(this.imei == ''){
                layer.alert('请输入手机IMEI');
                return false;
            }
            var that = this;
            $.post('ajax.php',{act:'submit',model: this.model,desc: this.desc,descc: this.descc,imei: this.imei},function(json){
                var code = json.code;
                if(code == 200){
                    setCookie('device_imei', that.imei);
                    layer.msg('恭喜提交成功，请返回QQ查看！',{icon: 1,anim: 2});
                    get_userinfo();
                }else if (code == 202) {
                    var msg = json.msg;
                    layer.msg(msg, {icon: 2, anim: 2, time: 2000}, function() {
                    window.location.href = 'login.php'; 
                           });
                } else{
                    var msg =  json.msg
                    layer.msg(msg,{icon: 2,anim: 2});
                }                
            });
        }
    },
})
</script>
<script>
    $('#btn_kmcz').on('click', function () {
        layer.prompt({ title: '请输入您的卡密', formType: 0 }, function (text, index) {
            $.post('ajax.php', { act: 'kmcz', km: text }, function (data) {
                if (data.code == 200) {
                    layer.close(index);
                    layer.msg(data.msg, { icon: 1 });
                    get_userinfo();
                } else if (data.code == 201) {
                    layer.msg(data.msg, { icon: 2, time: 2000 }, function () { 
                        window.location.href = 'login.php'; 
                    });
                } else {
                    layer.msg(data.msg, { icon: 2 });
                }
            });
        });
    });
</script>


</body>
</html>
