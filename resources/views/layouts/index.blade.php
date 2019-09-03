<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="">
<meta name="description" content="闹着玩">
<meta name="author" content="闹着玩">
<link href="/index/css/css.css" rel="stylesheet">
<link href="favicon.ico" rel="SHORTCUT ICON">
<title>闹着玩</title>
</head>
<body>
<!--head-->
<div class="top">
  <div class="wrap clearfix">
    <em class="myfont">&#xe632;</em><span class="songti">服务热线：</span><span class="tel">15695491215</span>
    <a href="#" target="_blank" class="ico weibo"></a>
    <a href="#" target="_blank" class="ico weixin"></a>
    <a href="#" target="_blank" class="ico qq"></a>
    <span class="fr"><a href="javascript:;" class="loginbtn">登录</a><a href="javascript:;" class="o regbtn">免费注册</a><a href="about.html">帮助中心</a></span>
  </div>
</div>
<div class="head">
  <div class="wrap pct-h clearfix">
    <a href="index.html" class="logo indent">logo</a>
    <div class="adtxt indent">有钱没钱，找十七金融</div>
    <ul class="nav">
      <li><a href="index.html">首页</a></li>
      <li><a href="invest.html">我要投资</a></li>
      <li><a href="borrow.html">我要借款</a></li>
      <li><a href="about.html">关于我们</a></li>
    </ul>
  </div>
</div>

@section('content')
@show

<!--foot-->
<div class="foot">
  <div class="wrap clearfix">
    <div class="footsection fl">
      <a href="about.html">关于我们</a>  |  <a href="news.html">网站公告</a>  |  <a href="reports.html">媒体报道</a>  |  <a href="partners.html">合作伙伴</a>  |  <a href="#">安全保障</a>  |  <a href="#">本金保障</a>  |  <a href="#">帮助中心</a>  |  <a href="#">如何投资</a>  |  <a href="#">如何借款</a>
      <p class="mt10">Copyright 2014 十七贷款, All Rights Reserved 版权所有 沪ICP备00000000号</p>
      <div class="img mt15 clearfix">
        <a href="#" target="_blank"><img src="/index/images/img1.jpg"></a>
        <a href="#" target="_blank"><img src="/index/images/img2.jpg"></a>
        <a href="#" target="_blank"><img src="/index/images/img3.jpg"></a>
        <a href="#" target="_blank"><img src="/index/images/img4.jpg"></a>
        <a href="#" target="_blank"><img src="/index/images/img5.jpg"></a>
      </div>
    </div>
    <div class="footaside fr">
      热线电话 (服务时间 00:00 - 24:00 )
      <p><span class="tel">15695491215</span><a href="#" target="_blank">在线客服<em class="ico"></em></a></p>
      关注我们  <a href="#" target="_blank" class="ico weibo"></a> <a href="#" target="_blank" class="ico weixin"></a><a href="#" target="_blank" class="ico qq"></a>
    </div>
  </div>
</div>

<div class="Pop-up">
  <div class="pop-bd">
    <div class="hand"><div class="myfont close">&#xe611;</div></div>
    <div class="bd" id="form1">
      <div class="hd">会员登录</div>
      <div class="txt"><h1>为您提供简单、安全、高收益的理财服务</h1>优先选择有担保的优质债权 足值抵押物可以降低风险 分散投资，更能降低风险</div>
      <div class="form">
        <label><span>用户名</span><input type="text" class="form-control first" value="" name="name"></label>
        <label><span>密码</span><input type="password" class="form-control last" value="" name="name"></label>
        <button type="button" value="" class="button login" id="login" onclick="window.location.href='member.html'">登录</button>
        <div class="mt15"><a href="javascript:;" id="btnreg">没有帐号？</a>&nbsp;|&nbsp;<a href="#">忘记密码？</a></div>
      </div>      
    </div>
    <div class="bd none" id="form2">
      <div class="hd">会员注册</div>
      <div class="txt"><h1>为您提供简单、安全、高收益的理财服务</h1>优先选择有担保的优质债权 足值抵押物可以降低风险 分散投资，更能降低风险</div>
      <div class="form">
        <label><span>用户名</span><input type="text" class="form-control first" value="" name="name"></label>
        <label><span>手机</span><input type="text" class="form-control" value="" name="name"></label>
        <label><span>密码</span><input type="password" class="form-control" value="" name="name"></label>
        <label><span>确认密码</span><input type="password" class="form-control last" value="" name="name"></label>
        <button type="button" value="" class="button login" id="reg" onclick="window.location.href='member.html'">注册</button>
        <div class="mt15"><a href="javascript:;" id="btnlogin">没有帐号？</a>&nbsp;|&nbsp;<a href="#">忘记密码？</a></div>
      </div>      
    </div>
  </div>
</div>

</body>
</html>