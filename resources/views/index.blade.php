﻿<!DOCTYPE html>
<html lang="zh-cmn-Hans">
<head>
    <meta charset="UTF-8" manifest="vote.manifest">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
    <title>第四届深圳工业大奖公众投票</title>
    <meta name="description" content="第四届深圳工业大奖评选公众投票">
    <link rel="stylesheet" href="http://wx.fszi.org/vote/css/style.css"/>
    <!-- 复选框css -->
    <link rel="stylesheet" href="http://wx.fszi.org/vote/css/jquery-labelauty.css">
    <!-- 复选框css -->


</head>
<body>


<header>
    <div class="top"><img src="http://wx.fszi.org/vote/img/banner.jpg"></div>
    <div class="count">
        <div class="count1 left">
            <p>候选企业</p>
            <p>32</p>
        </div>
        <div class="count2 left">
            <p>候选工业家</p>
            <p>18</p>
        </div>
        <div class="count3 right">
            <p>投票人次</p>
            <p id="totalCount">{{isset($voteCount)?$voteCount:"0"}}</p>
        </div>
    </div>
</header>

<div class="contain">
    <h1>活动简介</h1>
    <p class="intro">“深圳工业大奖”是由深圳工业总会和深圳商报联合主办，旨在激励深圳工业界创优争先而设立的专门奖项，表彰长期致力于实体经济发展，振兴民族工业的工业家和工业企业，并形成与中国工业大奖相对应的体系。是深圳工业界的最高荣誉。“深圳工业大奖”每两年评选一次，迄今已连续举办三届。</p>
    <div class="rule">
        <h1>投票规则</h1>
        <p>1. 关注“深圳工业总会”官方微信公众号后方可投票。</p>
        <p>2. 每个微信号每天可投1票，每票需同时选择企业和工业家各不少于3个。</p>
    </div>
   

    <h1>候选工业家</h1>
    <p class="center">按姓氏笔画排序</p>

    <div class="row">
        <div class="man">
            <img src="http://wx.fszi.org/vote/img/man/1.jpg">
            <p>1号</p>
            <h5>马竹茂</h5>
            <p>深圳市宝德计算机系统有限公司总经理</p>
            <p><span id="pc1">{{isset($peopleCount['1'])?$peopleCount['1']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="man" value="1" data-labelauty="选择"></p>
        </div>
        <div class="man">
            <img src="http://wx.fszi.org/vote/img/man/2.jpg">
            <p>2号</p>
            <h5>王传福</h5>
            <p>比亚迪股份有限公司董事长兼总裁</p>
            <p><span id="pc2">{{isset($peopleCount['2'])?$peopleCount['2']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="man" value="2" data-labelauty="选择"></p>
        </div>
    </div>

    <div class="row">
        <div class="man">
            <img src="http://wx.fszi.org/vote/img/man/3.jpg">
            <p>3号</p>
            <h5>卢国明</h5>
            <p>深圳市腾盛工业设备有限公司总经理</p>
            <p><span id="pc3">{{isset($peopleCount['3'])?$peopleCount['3']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="man" value="3" data-labelauty="选择"></p>
        </div>
        <div class="man">
            <img src="http://wx.fszi.org/vote/img/man/4.jpg">
            <p>4号</p>
            <h5>杜建军</h5>
            <p>深圳市超频三科技股份有限公司董事长</p>
            <p><span id="pc4">{{isset($peopleCount['4'])?$peopleCount['4']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="man" value="4" data-labelauty="选择"></p>
        </div>
    </div>

    <div class="row">
        <div class="man">
            <img src="http://wx.fszi.org/vote/img/man/5.jpg">
            <p>5号</p>
            <h5>李迪初</h5>
            <p>长方集团康铭盛（深圳）科技有限公司董事长</p>
            <p><span id="pc5">{{isset($peopleCount['5'])?$peopleCount['5']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="man"  value="5" data-labelauty="选择"></p>
        </div>
        <div class="man">
            <img src="http://wx.fszi.org/vote/img/man/6.jpg">
            <p>6号</p>
            <h5>吴光胜</h5>
            <p>华讯方舟科技有限公司董事长</p>
            <p><span id="pc6">{{isset($peopleCount['6'])?$peopleCount['6']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="man" value="6" data-labelauty="选择"></p>
        </div>
    </div>

    <div class="row">
        <div class="man">
            <img src="http://wx.fszi.org/vote/img/man/7.jpg">
            <p>7号</p>
            <h5>吴新理</h5>
            <p>深圳市隆利科技股份有限公司总经理</p>
            <p><span id="pc7">{{isset($peopleCount['7'])?$peopleCount['7']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="man" value="7" data-labelauty="选择"></p>
        </div>
        <div class="man">
            <img src="http://wx.fszi.org/vote/img/man/8.jpg">
            <p>8号</p>
            <h5>沈庆芳</h5>
            <p>鹏鼎控股（深圳）股份有限公司董事长</p>
            <p><span id="pc8">{{isset($peopleCount['8'])?$peopleCount['8']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="man" value="8" data-labelauty="选择"></p>
        </div>
    </div>

    <div class="row">
        <div class="man">
            <img src="http://wx.fszi.org/vote/img/man/9.jpg">
            <p>9号</p>
            <h5>陈学敏</h5>
            <p>深圳市新星轻合金材料股份有限公司董事长兼总经理</p>
            <p><span id="pc9">{{isset($peopleCount['9'])?$peopleCount['9']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="man" value="9" data-labelauty="选择"></p>
        </div>
        <div class="man">
            <img src="http://wx.fszi.org/vote/img/man/10.jpg">
            <p>10号</p>
            <h5>陈春</h5>
            <p>深圳市创想三维科技有限公司总经理</p>
            <p><span id="pc10">{{isset($peopleCount['10'])?$peopleCount['10']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="man" value="10" data-labelauty="选择"></p>
        </div>
    </div>

    <div class="row">
        <div class="man">
            <img src="http://wx.fszi.org/vote/img/man/11.jpg">
            <p>11号</p>
            <h5>陈清州</h5>
            <p>海能达通信股份有限公司董事长</p>
            <p><span id="pc11">{{isset($peopleCount['11'])?$peopleCount['11']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="man" value="11" data-labelauty="选择"></p>
        </div>
        <div class="man">
            <img src="http://wx.fszi.org/vote/img/man/12.jpg">
            <p>12号</p>
            <h5>周彬</h5>
            <p>康佳集团股份有限公司总裁</p>
            <p><span id="pc12">{{isset($peopleCount['12'])?$peopleCount['12']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="man" value="12" data-labelauty="选择"></p>
        </div>
    </div>

    <div class="row">
        <div class="man">
            <img src="http://wx.fszi.org/vote/img/man/13.jpg">
            <p>13号</p>
            <h5>姜雪飞</h5>
            <p>崇达技术股份有限公司董事长</p>
            <p><span id="pc13">{{isset($peopleCount['13'])?$peopleCount['13']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="man" value="13" data-labelauty="选择"></p>
        </div>
        <div class="man">
            <img src="http://wx.fszi.org/vote/img/man/14.jpg">
            <p>14号</p>
            <h5>黄治家</h5>
            <p>深圳市杰普特光电股份有限公司董事长</p>
            <p><span id="pc14">{{isset($peopleCount['14'])?$peopleCount['14']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="man" value="14" data-labelauty="选择"></p>
        </div>
    </div>


    <div class="row">
        <div class="man">
            <img src="http://wx.fszi.org/vote/img/man/15.jpg">
            <p>15号</p>
            <h5>黄勇峰</h5>
            <p>飞亚达（集团）股份有限公司董事长</p>
            <p><span id="pc15">{{isset($peopleCount['15'])?$peopleCount['15']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="man" value="15" data-labelauty="选择"></p>
        </div>
        <div class="man">
            <img src="http://wx.fszi.org/vote/img/man/16.jpg">
            <p>16号</p>
            <h5>廖晓霞</h5>
            <p>深圳奥特迅电力设备股份有限公司董事长兼总经理</p>
            <p><span id="pc16">{{isset($peopleCount['16'])?$peopleCount['16']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="man" value="16" data-labelauty="选择"></p>
        </div>
    </div>


    <div class="row">
        <div class="man">
            <img src="http://wx.fszi.org/vote/img/man/17.jpg">
            <p>17号</p>
            <h5>熊伟</h5>
            <p>深圳市三旺通信股份有限公司董事长</p>
            <p><span id="pc17">{{isset($peopleCount['17'])?$peopleCount['17']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="man" value="17" data-labelauty="选择"></p>
        </div>
        <div class="man">
            <img src="http://wx.fszi.org/vote/img/man/18.jpg">
            <p>18号</p>
            <h5>熊海刚</h5>
            <p>方大智创科技有限公司总经理</p>
            <p><span id="pc18">{{isset($peopleCount['18'])?$peopleCount['18']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="man" value="18" data-labelauty="选择"></p>
        </div>
    </div>


    <h1>候选企业</h1>
    <p class="center">按企业商号音序排序</p>
    <div class="row">
        <div class="brand">
            <img src="http://wx.fszi.org/vote/img/logo/1.png">
            <p>1号</p>
            <h5>艾礼富电子（深圳）有限公司</h5>
            <p><span id="cp1">{{isset($companyCount['1'])?$companyCount['1']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="1" data-labelauty="选择"></p>
        </div>
        <div class="brand">
            <img src="http://wx.fszi.org/vote/img/logo/2.png">
            <p>2号</p>
            <h5>深圳奥特迅电力设备股份有限公司</h5>
            <p><span id="cp2">{{isset($companyCount['2'])?$companyCount['2']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="2" data-labelauty="选择"></p>
        </div>
    </div>

    <div class="row">
        <div class="brand">
            <img src="http://wx.fszi.org/vote/img/logo/3.png">
            <p>3号</p>
            <h5>深圳市板明科技有限公司</h5>
            <p><span id="cp3">{{isset($companyCount['3'])?$companyCount['3']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="3" data-labelauty="选择"></p>
        </div>
        <div class="brand">
            <img src="http://wx.fszi.org/vote/img/logo/4.png">
            <p>4号</p>
            <h5>深圳市宝德计算机系统有限公司</h5>
            <p><span id="cp4">{{isset($companyCount['4'])?$companyCount['4']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="4" data-labelauty="选择"></p>
        </div>
    </div>

    <div class="row">
        <div class="brand">
            <img src="http://wx.fszi.org/vote/img/logo/5.png">
            <p>5号</p>
            <h5>比亚迪股份有限公司</h5>
            <p><span id="cp5">{{isset($companyCount['5'])?$companyCount['5']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="5" data-labelauty="选择"></p>
        </div>
        <div class="brand">
            <img src="http://wx.fszi.org/vote/img/logo/6.png">
            <p>6号</p>
            <h5>深圳市超频三科技股份有限公司</h5>
            <p><span id="cp6">{{isset($companyCount['6'])?$companyCount['6']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="6" data-labelauty="选择"></p>
        </div>
    </div>

    <div class="row">
        <div class="brand">
            <img src="http://wx.fszi.org/vote/img/logo/7.png">
            <p>7号</p>
            <h5>深圳市创想三维科技有限公司</h5>
            <p><span id="cp7">{{isset($companyCount['7'])?$companyCount['7']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="7" data-labelauty="选择"></p>
        </div>
        <div class="brand">
            <img src="http://wx.fszi.org/vote/img/logo/8.png">
            <p>8号</p>
            <h5>深圳市大疆创新科技有限公司</h5>
            <p><span id="cp8">{{isset($companyCount['8'])?$companyCount['8']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="8" data-labelauty="选择"></p>
        </div>
    </div>

    <div class="row">
        <div class="brand">
            <img src="http://wx.fszi.org/vote/img/logo/9.png">
            <p>9号</p>
            <h5>方大智创科技有限公司</h5>
            <p><span id="cp9">{{isset($companyCount['9'])?$companyCount['9']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="9" data-labelauty="选择"></p>
        </div>
        <div class="brand">
            <img src="http://wx.fszi.org/vote/img/logo/10.png">
            <p>10号</p>
            <h5>深圳市飞荣达科技股份有限公司</h5>
            <p><span id="cp10">{{isset($companyCount['10'])?$companyCount['10']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="10" data-labelauty="选择"></p>
        </div>
    </div>

    <div class="row">
        <div class="brand">
            <img src="http://wx.fszi.org/vote/img/logo/11.png">
            <p>11号</p>
            <h5>飞亚达（集团）股份有限公司</h5>
            <p><span id="cp11">{{isset($companyCount['11'])?$companyCount['11']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="11" data-labelauty="选择"></p>
        </div>
        <div class="brand">
            <img src="http://wx.fszi.org/vote/img/logo/12.png">
            <p>12号</p>
            <h5>国药集团致君（深圳）制药有限公司</h5>
            <p><span id="cp12">{{isset($companyCount['12'])?$companyCount['12']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="12" data-labelauty="选择"></p>
        </div>
    </div>

    <div class="row">
        <div class="brand">
            <img src="http://wx.fszi.org/vote/img/logo/13.png">
            <p>13号</p>
            <h5>海能达通信股份有限公司</h5>
            <p><span id="cp13">{{isset($companyCount['13'])?$companyCount['13']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="13" data-labelauty="选择"></p>
        </div>
        <div class="brand">
            <img src="http://wx.fszi.org/vote/img/logo/14.png">
            <p>14号</p>
            <h5>深圳市华盛昌科技实业股份有限公司</h5>
            <p><span id="cp14">{{isset($companyCount['14'])?$companyCount['14']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="14" data-labelauty="选择"></p>
        </div>
    </div>

    <div class="row">
        <div class="brand">
            <img src="http://wx.fszi.org/vote/img/logo/15.png">
            <p>15号</p>
            <h5>深圳市华信天线技术有限公司</h5>
            <p><span id="cp15">{{isset($companyCount['15'])?$companyCount['15']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="15" data-labelauty="选择"></p>
        </div>
        <div class="brand">
            <img src="http://wx.fszi.org/vote/img/logo/16.png">
            <p>16号</p>
            <h5>华讯方舟科技有限公司</h5>
            <p><span id="cp16">{{isset($companyCount['16'])?$companyCount['16']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="16" data-labelauty="选择"></p>
        </div>
    </div>

    <div class="row">
        <div class="brand">
            <img src="http://wx.fszi.org/vote/img/logo/17.png">
            <p>17号</p>
            <h5>深圳市杰普特光电股份有限公司</h5>
            <p><span id="cp17">{{isset($companyCount['17'])?$companyCount['17']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="17" data-labelauty="选择"></p>
        </div>
        <div class="brand">
            <img src="http://wx.fszi.org/vote/img/logo/18.png">
            <p>18号</p>
            <h5>深圳市九洲电器有限公司</h5>
            <p><span id="cp18">{{isset($companyCount['18'])?$companyCount['18']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="18" data-labelauty="选择"></p>
        </div>
    </div>

    <div class="row">
        <div class="brand">
            <img src="http://wx.fszi.org/vote/img/logo/19.png">
            <p>19号</p>
            <h5>深圳市康冠科技股份有限公司</h5>
            <p><span id="cp19">{{isset($companyCount['19'])?$companyCount['19']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="19" data-labelauty="选择"></p>
        </div>
        <div class="brand">
            <img src="http://wx.fszi.org/vote/img/logo/20.png">
            <p>20号</p>
            <h5>康佳集团股份有限公司</h5>
            <p><span id="cp20">{{isset($companyCount['20'])?$companyCount['20']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="20" data-labelauty="选择"></p>
        </div>
    </div>

    <div class="row">
        <div class="brand">
            <img src="http://wx.fszi.org/vote/img/logo/21.png">
            <p>21号</p>
            <h5>深圳市柳鑫实业股份有限公司</h5>
            <p><span id="cp21">{{isset($companyCount['21'])?$companyCount['21']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="21" data-labelauty="选择"></p>
        </div>
        <div class="brand">
            <img src="http://wx.fszi.org/vote/img/logo/22.png">
            <p>22号</p>
            <h5>深圳市隆利科技股份有限公司</h5>
            <p><span id="cp22">{{isset($companyCount['22'])?$companyCount['22']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="22" data-labelauty="选择"></p>
        </div>
    </div>

    <div class="row">
        <div class="brand">
            <img src="http://wx.fszi.org/vote/img/logo/23.png">
            <p>23号</p>
            <h5>鹏鼎控股（深圳）股份有限公司</h5>
            <p><span id="cp23">{{isset($companyCount['23'])?$companyCount['23']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="23" data-labelauty="选择"></p>
        </div>
        <div class="brand">
            <img src="http://wx.fszi.org/vote/img/logo/24.png">
            <p>24号</p>
            <h5>普联技术有限公司</h5>
            <p><span id="cp24">{{isset($companyCount['24'])?$companyCount['24']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="24" data-labelauty="选择"></p>
        </div>
    </div>
    <div class="row">
        <div class="brand">
            <img src="http://wx.fszi.org/vote/img/logo/25.png">
            <p>25号</p>
            <h5>深南电路股份有限公司</h5>
            <p><span id="cp25">{{isset($companyCount['25'])?$companyCount['25']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="25" data-labelauty="选择"></p>
        </div>
        <div class="brand">
            <img src="http://wx.fszi.org/vote/img/logo/26.png">
            <p>26号</p>
            <h5>深圳市腾盛工业设备有限公司</h5>
            <p><span id="cp26">{{isset($companyCount['26'])?$companyCount['26']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="26" data-labelauty="选择"></p>
        </div>
    </div>
    <div class="row">
        <div class="brand">
            <img src="http://wx.fszi.org/vote/img/logo/27.png">
            <p>27号</p>
            <h5>深圳拓邦股份有限公司</h5>
            <p><span id="cp27">{{isset($companyCount['27'])?$companyCount['27']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="27" data-labelauty="选择"></p>
        </div>
        <div class="brand">
            <img src="http://wx.fszi.org/vote/img/logo/28.png">
            <p>28号</p>
            <h5>新百丽鞋业（深圳）有限公司</h5>
            <p><span id="cp28">{{isset($companyCount['28'])?$companyCount['28']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="28" data-labelauty="选择"></p>
        </div>
    </div>
    <div class="row">
        <div class="brand">
            <img src="http://wx.fszi.org/vote/img/logo/29.png">
            <p>29号</p>
            <h5>深圳市新星轻合金材料股份有限公司</h5>
            <p><span id="cp29">{{isset($companyCount['29'])?$companyCount['29']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="29" data-labelauty="选择"></p>
        </div>
        <div class="brand">
            <img src="http://wx.fszi.org/vote/img/logo/30.png">
            <p>30号</p>
            <h5>深圳怡化电脑股份有限公司</h5>
            <p><span id="cp30">{{isset($companyCount['30'])?$companyCount['30']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="30" data-labelauty="选择"></p>
        </div>
    </div>
    <div class="row">
        <div class="brand">
            <img src="http://wx.fszi.org/vote/img/logo/31.png">
            <p>31号</p>
            <h5>深圳市银河表计股份有限公司</h5>
            <p><span id="cp31">{{isset($companyCount['31'])?$companyCount['31']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="31" data-labelauty="选择"></p>
        </div>
        <div class="brand">
            <img src="http://wx.fszi.org/vote/img/logo/32.png">
            <p>32号</p>
            <h5>中国南玻集团股份有限公司</h5>
            <p><span id="cp32">{{isset($companyCount['32'])?$companyCount['32']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="32" data-labelauty="选择"></p>
        </div>
    </div>

    <div class="check">
        <input type="hidden" id="tokenValue" name="_token" value="{{csrf_token()}}"/>
        <input type="hidden" id="openId" value="{{$openId}}">
        <a href="javascript:void(0)" class="vote_btn" onclick="voteClick()"><span>提交投票</span></a>
    </div>

    <div class="forum">
        <a href="https://www.huodongxing.com/event/8508561308800"><img src="img/banner2.jpg"></a>
    </div>

</div>

    <footer>
        <p>主办单位：深圳工业总会  深圳商报</p>
        <p>Copyright © 2019 深圳工业总会</p>
    </footer>

<script src="http://wx.fszi.org/vote/js/jquery.min.js"></script>
<!-- 复选框js -->
<script src="http://wx.fszi.org/vote/js/jquery-labelauty.js"></script>

<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js" type="text/javascript" charset="utf-8"></script>


    <script>

        $(function(){
            $(':input').labelauty();
        });

        function voteClick()
        {
            var logVoteCount=[],manVoteCount=[];

            $("input[name='logo']").each(function(){
            if($(this).is(':checked'))
            {
                logVoteCount.push($(this).attr('value'));
            }
            });
            $("input[name='man']").each(function(){
                if($(this).is(':checked'))
                {
                    manVoteCount.push($(this).attr('value'));
                }
            });

            if(logVoteCount.length<3)
            {
              alert("请至少选择3个企业");
            }
            else if(manVoteCount.length<3)
            {
                alert("请至少选择3个企业家");
            }
            else{
                var token=$('#tokenValue').val();
                $.ajax({
                   url:'/vote',
                    type:'POST',
                    data:{
                        votee:JSON.stringify(logVoteCount),
                        votep:JSON.stringify(manVoteCount),
                        _token:token
                    },
                    success:function(response){
                        // sublodend();
                        if(response==1)
                        {
                            alert('投票成功!');

                            var totalCount=parseInt($('#totalCount').text());
                            $('#totalCount').text(totalCount+logVoteCount.length+manVoteCount.length);
                            for(var $i=0;$i<logVoteCount.length;$i++)
                            {
                                var currentCount= parseInt($('#cp'+logVoteCount[$i]).text());
                                $('#cp'+logVoteCount[$i]).text(currentCount+1);
                            }

                            for(var $i=0;$i<manVoteCount.length;$i++)
                            {
                                var currentCount= parseInt($('#pc'+manVoteCount[$i]).text());
                                $('#pc'+manVoteCount[$i]).text(currentCount+1);
                            }
                            //window.location.href="/index"
                        }
                        else if(response==2)
                        {
                            alert('一天只能投一次票!');
                        }
                        else if(response==3)
                        {
                             alert('投票已经结束!');
                        }
                        else{
                            alert('投票失败,请重新投!');
                        }

                    },
                    complete:function()
                    {
                        // sublodend();
                    },
                    error:function()
                    {
                        alert('投票失败!');
                        // sublodend();
                    }

                });
            }
        }
    </script>
    <!-- 复选框js  -->

<script type="text/javascript" charset="utf-8">
    wx.config(<?php echo $js->config(array('checkJsApi','onMenuShareAppMessage', 'onMenuShareTimeline'), false) ?>);

    wx.ready(function () {

        wx.checkJsApi({
            jsApiList: ['onMenuShareAppMessage'], // 需要检测的JS接口列表，所有JS接口列表见附录2,
            success: function(res) {
                if(res.checkResult.onMenuShareAppMessage)
                {
                    wx.onMenuShareAppMessage({
                        title: '第四届深圳工业大奖公众投票', // 分享标题
                        desc: '第四届深圳工业大奖公众投票正在火热进行', // 分享描述
                        link: 'http://gydj.fszi.org/', // 分享链接
                        imgUrl: 'http://wx.fszi.org/vote/img/thumb.png', // 分享图标
                        type: '', // 分享类型,music、video或link，不填默认为link
                        dataUrl: ''
                    });

                    wx.onMenuShareTimeline({
                        title: '第四届深圳工业大奖公众投票', // 分享标题
                        link: 'http://gydj.fszi.org/', // 分享链接checkResult
                        imgUrl: 'http://wx.fszi.org/vote/img/thumb.png'
                    });
                };
                // 如：{"checkResult":{"chooseImage":true},"errMsg":"checkJsApi:ok"}
            }
        });



    });

</script>

    <!-- 百度统计  -->
    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?0d1031f7c74d8a4a33cac86fce2fc8f4";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>

</body>
</html>
