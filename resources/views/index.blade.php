<!DOCTYPE html>
<html lang="zh-cmn-Hans">
<head>
    <meta charset="UTF-8" manifest="vote.manifest">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
    <title>第四届深圳工业大奖公众投票</title>
    <meta name="description" content="第四届深圳工业大奖评选公众投票">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}"/>
    <!-- 复选框css -->
    <link rel="stylesheet" href="{{asset('/css/jquery-labelauty.css')}}">
    <!-- 复选框css -->


</head>
<body>


<header>
    <div class="top"><img src="{{asset('/img/banner.jpg')}}"></div>
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
            <p>{{isset($voteCount)?$voteCount:"0"}}</p>
        </div>
    </div>
</header>

<div class="contain">
    <div class="rule">
        <h1>投票规则</h1>
        <p>1. 关注“深圳工业总会”官方微信公众号后方可投票。</p>
        <p>2. 每个微信号每天可投1票，每票需同时选择企业和工业家各不少于3个。</p>
    </div>
    <h1>候选企业</h1>
    <p class="center">按企业商号音序排列</p>
    <div class="row">
        <div class="brand">
            <img src="{{asset('/img/logo/1.png')}}">
            <p>艾礼富电子有限公司</p>
            <p><span>{{isset($companyCount['1'])?$companyCount['1']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="1" data-labelauty="选择"></p>
        </div>
        <div class="brand">
            <img src="{{asset('/img/logo/2.png')}}">
            <p>深圳奥特讯电力设备股份有限公司</p>
            <p><span>{{isset($companyCount['2'])?$companyCount['2']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="2" data-labelauty="选择"></p>
        </div>
    </div>

    <div class="row">
        <div class="brand">
            <img src="{{asset('/img/logo/3.png')}}">
            <p>深圳市板明科技有限公司</p>
            <p><span>{{isset($companyCount['3'])?$companyCount['3']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="3" data-labelauty="选择"></p>
        </div>
        <div class="brand">
            <img src="{{asset('/img/logo/4.png')}}">
            <p>深圳市宝德计算机系统有限公司</p>
            <p><span>{{isset($companyCount['4'])?$companyCount['4']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="4" data-labelauty="选择"></p>
        </div>
    </div>

    <div class="row">
        <div class="brand">
            <img src="{{asset('/img/logo/5.png')}}">
            <p>比亚迪股份有限公司</p>
            <p><span>{{isset($companyCount['5'])?$companyCount['5']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="5" data-labelauty="选择"></p>
        </div>
        <div class="brand">
            <img src="{{asset('/img/logo/6.png')}}">
            <p>深圳市超频三科技股份有限公司</p>
            <p><span>{{isset($companyCount['6'])?$companyCount['6']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="6" data-labelauty="选择"></p>
        </div>
    </div>

    <div class="row">
        <div class="brand">
            <img src="{{asset('/img/logo/7.png')}}">
            <p>深圳市创想三维科技有限公司</p>
            <p><span>{{isset($companyCount['7'])?$companyCount['7']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="7" data-labelauty="选择"></p>
        </div>
        <div class="brand">
            <img src="{{asset('/img/logo/8.png')}}">
            <p>深圳市大疆创新科技有限公司</p>
            <p><span>{{isset($companyCount['8'])?$companyCount['8']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="8" data-labelauty="选择"></p>
        </div>
    </div>

    <div class="row">
        <div class="brand">
            <img src="{{asset('/img/logo/9.png')}}">
            <p>方大智创科技有限公司</p>
            <p><span>{{isset($companyCount['9'])?$companyCount['9']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="9" data-labelauty="选择"></p>
        </div>
        <div class="brand">
            <img src="{{asset('/img/logo/10.png')}}">
            <p>深圳市飞荣达科技股份有限公司</p>
            <p><span>{{isset($companyCount['10'])?$companyCount['10']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="10" data-labelauty="选择"></p>
        </div>
    </div>

    <div class="row">
        <div class="brand">
            <img src="{{asset('/img/logo/11.png')}}">
            <p>飞亚达（集团）股份有限公司</p>
            <p><span>{{isset($companyCount['11'])?$companyCount['11']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="11" data-labelauty="选择"></p>
        </div>
        <div class="brand">
            <img src="{{asset('/img/logo/12.png')}}">
            <p>国药集团致君（深圳）制药有限公司</p>
            <p><span>{{isset($companyCount['12'])?$companyCount['12']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="12" data-labelauty="选择"></p>
        </div>
    </div>

    <div class="row">
        <div class="brand">
            <img src="{{asset('/img/logo/13.png')}}">
            <p>海能达通信股份有限公司</p>
            <p><span>{{isset($companyCount['13'])?$companyCount['13']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="13" data-labelauty="选择"></p>
        </div>
        <div class="brand">
            <img src="{{asset('/img/logo/14.png')}}">
            <p>深圳市华盛昌科技实业股份有限公司</p>
            <p><span>{{isset($companyCount['14'])?$companyCount['14']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="14" data-labelauty="选择"></p>
        </div>
    </div>

    <div class="row">
        <div class="brand">
            <img src="{{asset('/img/logo/15.png')}}">
            <p>深圳市华信天线技术有限公司</p>
            <p><span>{{isset($companyCount['15'])?$companyCount['15']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="15" data-labelauty="选择"></p>
        </div>
        <div class="brand">
            <img src="{{asset('/img/logo/16.png')}}">
            <p>华讯方舟科技有限公司</p>
            <p><span>{{isset($companyCount['16'])?$companyCount['16']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="16" data-labelauty="选择"></p>
        </div>
    </div>

    <div class="row">
        <div class="brand">
            <img src="{{asset('/img/logo/17.png')}}">
            <p>深圳市杰普特光电股份有限公司</p>
            <p><span>{{isset($companyCount['17'])?$companyCount['17']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="17" data-labelauty="选择"></p>
        </div>
        <div class="brand">
            <img src="{{asset('/img/logo/18.png')}}">
            <p>深圳市九洲电器有限公司</p>
            <p><span>{{isset($companyCount['18'])?$companyCount['18']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="18" data-labelauty="选择"></p>
        </div>
    </div>

    <div class="row">
        <div class="brand">
            <img src="{{asset('/img/logo/19.png')}}">
            <p>深圳市康冠技术有限公司</p>
            <p><span>{{isset($companyCount['19'])?$companyCount['19']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="19" data-labelauty="选择"></p>
        </div>
        <div class="brand">
            <img src="{{asset('/img/logo/20.png')}}">
            <p>康佳集团股份有限公司</p>
            <p><span>{{isset($companyCount['20'])?$companyCount['20']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="20" data-labelauty="选择"></p>
        </div>
    </div>

    <div class="row">
        <div class="brand">
            <img src="{{asset('/img/logo/21.png')}}">
            <p>深圳市柳鑫实业股份有限公司</p>
            <p><span>{{isset($companyCount['21'])?$companyCount['21']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="21" data-labelauty="选择"></p>
        </div>
        <div class="brand">
            <img src="{{asset('/img/logo/22.png')}}">
            <p>深圳市隆利科技股份有限公司</p>
            <p><span>{{isset($companyCount['22'])?$companyCount['22']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="22" data-labelauty="选择"></p>
        </div>
    </div>

    <div class="row">
        <div class="brand">
            <img src="{{asset('/img/logo/23.png')}}">
            <p>鹏鼎控股（深圳）股份有限公司</p>
            <p><span>{{isset($companyCount['23'])?$companyCount['23']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="23" data-labelauty="选择"></p>
        </div>
        <div class="brand">
            <img src="{{asset('/img/logo/24.png')}}">
            <p>普联技术有限公司</p>
            <p><span>{{isset($companyCount['24'])?$companyCount['24']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="24" data-labelauty="选择"></p>
        </div>
    </div>
    <div class="row">
        <div class="brand">
            <img src="{{asset('/img/logo/25.png')}}">
            <p>深南电路股份有限公司</p>
            <p><span>{{isset($companyCount['25'])?$companyCount['25']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="25" data-labelauty="选择"></p>
        </div>
        <div class="brand">
            <img src="{{asset('/img/logo/26.png')}}">
            <p>深圳市腾盛工业设备有限公司</p>
            <p><span>{{isset($companyCount['26'])?$companyCount['26']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="26" data-labelauty="选择"></p>
        </div>
    </div>
    <div class="row">
        <div class="brand">
            <img src="{{asset('/img/logo/27.png')}}">
            <p>深圳拓邦股份有限公司</p>
            <p><span>{{isset($companyCount['27'])?$companyCount['27']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="27" data-labelauty="选择"></p>
        </div>
        <div class="brand">
            <img src="{{asset('/img/logo/28.png')}}">
            <p>新百丽鞋业（深圳）有限公司</p>
            <p><span>{{isset($companyCount['28'])?$companyCount['28']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="28" data-labelauty="选择"></p>
        </div>
    </div>
    <div class="row">
        <div class="brand">
            <img src="{{asset('/img/logo/29.png')}}">
            <p>深圳市新星轻合金材料股份有限公司</p>
            <p><span>{{isset($companyCount['29'])?$companyCount['29']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="29" data-labelauty="选择"></p>
        </div>
        <div class="brand">
            <img src="{{asset('/img/logo/30.png')}}">
            <p>深圳怡化电脑股份有限公司</p>
            <p><span>{{isset($companyCount['30'])?$companyCount['30']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="30" data-labelauty="选择"></p>
        </div>
    </div>
    <div class="row">
        <div class="brand">
            <img src="{{asset('/img/logo/31.png')}}">
            <p>深圳市银河表计股份有限公司</p>
            <p><span>{{isset($companyCount['31'])?$companyCount['31']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="31" data-labelauty="选择"></p>
        </div>
        <div class="brand">
            <img src="{{asset('/img/logo/32.png')}}">
            <p>中国南玻集团股份有限公司</p>
            <p><span>{{isset($companyCount['32'])?$companyCount['32']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="32" data-labelauty="选择"></p>
        </div>
    </div>

    <h1>候选工业家</h1>
    <p class="center">按姓氏笔画排列</p>

    <div class="row">
        <div class="man">
            <img src="{{asset('/img/man/1.jpg')}}">
            <h6>马竹茂</h6>
            <p>深圳市宝德计算机系统有限公司总经理</p>
            <p><span>{{isset($peopleCount['1'])?$peopleCount['1']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="man" value="1" data-labelauty="选择"></p>
        </div>
        <div class="man">
            <img src="{{asset('/img/man/2.jpg')}}">
            <h6>王传福</h6>
            <p>比亚迪股份有限公司董事长兼总裁</p>
            <p><span>{{isset($peopleCount['2'])?$peopleCount['2']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="man" value="2" data-labelauty="选择"></p>
        </div>
    </div>

    <div class="row">
        <div class="man">
            <img src="{{asset('/img/man/3.jpg')}}">
            <h6>卢国明</h6>
            <p>深圳市腾盛工业设备有限公司总经理</p>
            <p><span>{{isset($peopleCount['3'])?"0":$peopleCount['3']}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="man" value="3" data-labelauty="选择"></p>
        </div>
        <div class="man">
            <img src="{{asset('/img/man/4.jpg')}}">
            <h6>杜建军</h6>
            <p>深圳市超频三科技股份有限公司董事长</p>
            <p><span>{{isset($peopleCount['4'])?$peopleCount['4']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="man" value="4" data-labelauty="选择"></p>
        </div>
    </div>

    <div class="row">
        <div class="man">
            <img src="{{asset('/img/man/5.jpg')}}">
            <h6>李迪初</h6>
            <p>深圳市长方集团股份有限公司CEO</p>
            <p><span>{{isset($peopleCount['5'])?$peopleCount['5']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="man"  value="5" data-labelauty="选择"></p>
        </div>
        <div class="man">
            <img src="{{asset('/img/man/6.jpg')}}">
            <h6>吴光胜</h6>
            <p>华讯方舟科技有限公司董事长</p>
            <p><span>{{isset($peopleCount['6'])?$peopleCount['6']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="man" value="6" data-labelauty="选择"></p>
        </div>
    </div>

    <div class="row">
        <div class="man">
            <img src="{{asset('/img/man/7.jpg')}}">
            <h6>吴新理</h6>
            <p>深圳市隆利科技股份有限公司总经理</p>
            <p><span>{{isset($peopleCount['7'])?$peopleCount['7']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="man" value="7" data-labelauty="选择"></p>
        </div>
        <div class="man">
            <img src="{{asset('/img/man/8.jpg')}}">
            <h6>沈庆芳</h6>
            <p>鹏鼎控股（深圳）股份有限公司董事长</p>
            <p><span>{{isset($peopleCount['8'])?$peopleCount['8']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="man" value="8" data-labelauty="选择"></p>
        </div>
    </div>

    <div class="row">
        <div class="man">
            <img src="{{asset('/img/man/9.jpg')}}">
            <h6>陈学敏</h6>
            <p>深圳市新星轻合金材料股份有限公司董事长兼总经理</p>
            <p><span>{{isset($peopleCount['9'])?$peopleCount['9']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="man" value="9" data-labelauty="选择"></p>
        </div>
        <div class="man">
            <img src="{{asset('/img/man/10.jpg')}}">
            <h6>陈春</h6>
            <p>深圳市创想三维科技有限公司总经理</p>
            <p><span>{{isset($peopleCount['10'])?$peopleCount['10']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="man" value="10" data-labelauty="选择"></p>
        </div>
    </div>

    <div class="row">
        <div class="man">
            <img src="{{asset('/img/man/11.jpg')}}">
            <h6>陈清州</h6>
            <p>海能达通信股份有限公司董事长</p>
            <p><span>{{isset($peopleCount['11'])?$peopleCount['11']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="man" value="11" data-labelauty="选择"></p>
        </div>
        <div class="man">
            <img src="{{asset('/img/man/12.jpg')}}">
            <h6>周彬</h6>
            <p>康佳集团股份有限公司总裁</p>
            <p><span>{{isset($peopleCount['12'])?$peopleCount['12']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="man" value="12" data-labelauty="选择"></p>
        </div>
    </div>

    <div class="row">
        <div class="man">
            <img src="{{asset('/img/man/13.jpg')}}">
            <h6>姜雪飞</h6>
            <p>崇达技术股份有限公司董事长</p>
            <p><span>{{isset($peopleCount['13'])?$peopleCount['13']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="man" value="13" data-labelauty="选择"></p>
        </div>
        <div class="man">
            <img src="{{asset('/img/man/14.jpg')}}">
            <h6>黄治家</h6>
            <p>深圳市杰普特光电股份有限公司董事长</p>
            <p><span>{{isset($peopleCount['14'])?$peopleCount['14']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="man" value="14" data-labelauty="选择"></p>
        </div>
    </div>


    <div class="row">
        <div class="man">
            <img src="{{asset('/img/man/15.jpg')}}">
            <h6>黄勇峰</h6>
            <p>飞亚达（集团）股份有限公司董事长</p>
            <p><span>{{isset($peopleCount['15'])?$peopleCount['15']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="man" value="15" data-labelauty="选择"></p>
        </div>
        <div class="man">
            <img src="{{asset('/img/man/16.jpg')}}">
            <h6>廖晓霞</h6>
            <p>深圳奥特讯电力设备股份有限公司董事长兼总经理</p>
            <p><span>{{isset($peopleCount['16'])?$peopleCount['16']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="man" value="16" data-labelauty="选择"></p>
        </div>
    </div>


    <div class="row">
        <div class="man">
            <img src="{{asset('/img/man/17.jpg')}}">
            <h6>熊伟</h6>
            <p>深圳市三旺通信股份有限公司董事长</p>
            <p><span>{{isset($peopleCount['17'])?$peopleCount['17']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="man" value="17" data-labelauty="选择"></p>
        </div>
        <div class="man">
            <img src="{{asset('/img/man/18.jpg')}}">
            <h6>熊海刚</h6>
            <p>方大智创科技有限公司总经理</p>
            <p><span>{{isset($peopleCount['18'])?$peopleCount['18']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="man" value="18" data-labelauty="选择"></p>
        </div>
    </div>

    <div class="check">
        <input type="hidden" id="tokenValue" name="_token" value="{{csrf_token()}}"/>
        <input type="hidden" id="openId" value="{{$openId}}">
        <a href="javascript:void(0)" class="vote_btn" onclick="voteClick()"><span>提交投票</span></a>
    </div>

    <div class="forum">
        <a href="http://www.fszi.org/"><img src="img/banner2.jpg"></a>
    </div>

</div>

    <footer>
        <p>主办单位：深圳工业总会  深圳商报</p>
        <p>Copyright © 2019 深圳工业总会</p>
    </footer>

<script src="{{asset('/js/jquery.min.js')}}"></script>
<!-- 复选框js -->
<script src="{{asset('/js/jquery-labelauty.js')}}"></script>

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
                            //window.location.href="/index"
                        }
                        else if(response==2)
                        {
                            alert('一天只能投一次票!');
                        }
                        else if(response==3)
                         {
                             alert('不在投票时间内!');
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
                        imgUrl: '{{asset('/img/thumb.png')}}', // 分享图标
                        type: '', // 分享类型,music、video或link，不填默认为link
                        dataUrl: ''
                    });

                    wx.onMenuShareTimeline({
                        title: '第四届深圳工业大奖公众投票', // 分享标题
                        link: 'http://gydj.fszi.org/', // 分享链接checkResult
                        imgUrl: '{{asset('/img/thumb.png')}}'
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
