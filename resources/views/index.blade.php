<!DOCTYPE html>
<html lang="zh-cmn-Hans">
<head>
    <meta charset="UTF-8" manifest="vote.manifest">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
    <title>第三届深圳工业大奖公众投票</title>
    <meta name="description" content="第三届深圳工业大奖评选公众投票">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}"/>
    <!-- 复选框css -->
    <link rel="stylesheet" href="{{asset('/css/jquery-labelauty.css')}}">
    <!-- 复选框css -->
    <!-- 百度统计  -->
    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "//hm.baidu.com/hm.js?0d1031f7c74d8a4a33cac86fce2fc8f4";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>

</head>
<body>

<header>
    <div class="top"><img src="{{asset('/img/banner.jpg')}}"></div>
    <div class="count">
        <div class="count1 left">
            <p>候选企业</p>
            <p>24</p>
        </div>
        <div class="count2 left">
            <p>候选工业家</p>
            <p>12</p>
        </div>
        <div class="count3 right">
            <p>投票人次</p>
            <p>{{$voteCount}}</p>
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
            <p>深圳市博敏电子有限公司</p>
            <p><span>{{isset($companyCount['1'])?$companyCount['1']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="1" data-labelauty="选择"></p>
        </div>
        <div class="brand">
            <img src="{{asset('/img/logo/2.png')}}">
            <p>深圳市创世纪机械有限公司</p>
            <p><span>{{isset($companyCount['2'])?$companyCount['2']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="2" data-labelauty="选择"></p>
        </div>
    </div>

    <div class="row">
        <div class="brand">
            <img src="{{asset('/img/logo/3.png')}}">
            <p>深圳市东方亮彩精密技术有限公司</p>
            <p><span>{{isset($companyCount['3'])?$companyCount['3']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="3" data-labelauty="选择"></p>
        </div>
        <div class="brand">
            <img src="{{asset('/img/logo/4.png')}}">
            <p>深圳市高斯宝电气技术有限公司</p>
            <p><span>{{isset($companyCount['4'])?$companyCount['4']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="4" data-labelauty="选择"></p>
        </div>
    </div>

    <div class="row">
        <div class="brand">
            <img src="{{asset('/img/logo/5.png')}}">
            <p>深圳光韵达光电科技股份有限公司</p>
            <p><span>{{isset($companyCount['5'])?$companyCount['5']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="5" data-labelauty="选择"></p>
        </div>
        <div class="brand">
            <img src="{{asset('/img/logo/6.png')}}">
            <p>深圳市今天国际物流技术股份有限公司</p>
            <p><span>{{isset($companyCount['6'])?$companyCount['6']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="6" data-labelauty="选择"></p>
        </div>
    </div>

    <div class="row">
        <div class="brand">
            <img src="{{asset('/img/logo/7.png')}}">
            <p>深圳市康冠技术有限公司</p>
            <p><span>{{isset($companyCount['7'])?$companyCount['7']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="7" data-labelauty="选择"></p>
        </div>
        <div class="brand">
            <img src="{{asset('/img/logo/8.png')}}">
            <p>深圳科士达科技股份有限公司</p>
            <p><span>{{isset($companyCount['8'])?$companyCount['8']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="8" data-labelauty="选择"></p>
        </div>
    </div>

    <div class="row">
        <div class="brand">
            <img src="{{asset('/img/logo/9.png')}}">
            <p>深圳市蓝海华腾技术股份有限公司</p>
            <p><span>{{isset($companyCount['9'])?$companyCount['9']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="9" data-labelauty="选择"></p>
        </div>
        <div class="brand">
            <img src="{{asset('/img/logo/10.png')}}">
            <p>深圳领威科技有限公司</p>
            <p><span>{{isset($companyCount['10'])?$companyCount['10']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="10" data-labelauty="选择"></p>
        </div>
    </div>

    <div class="row">
        <div class="brand">
            <img src="{{asset('/img/logo/11.png')}}">
            <p>深圳市三利谱光电科技股份有限公司</p>
            <p><span>{{isset($companyCount['11'])?$companyCount['11']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="11" data-labelauty="选择"></p>
        </div>
        <div class="brand">
            <img src="{{asset('/img/logo/12.png')}}">
            <p>深圳市三诺数字科技有限公司</p>
            <p><span>{{isset($companyCount['12'])?$companyCount['12']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="12" data-labelauty="选择"></p>
        </div>
    </div>

    <div class="row">
        <div class="brand">
            <img src="{{asset('/img/logo/13.png')}}">
            <p>蛇口南顺面粉有限公司</p>
            <p><span>{{isset($companyCount['13'])?$companyCount['13']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="13" data-labelauty="选择"></p>
        </div>
        <div class="brand">
            <img src="{{asset('/img/logo/14.png')}}">
            <p>深圳市深铃车业有限公司</p>
            <p><span>{{isset($companyCount['14'])?$companyCount['14']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="14" data-labelauty="选择"></p>
        </div>
    </div>

    <div class="row">
        <div class="brand">
            <img src="{{asset('/img/logo/15.png')}}">
            <p>深南电路股份有限公司</p>
            <p><span>{{isset($companyCount['15'])?$companyCount['15']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="15" data-labelauty="选择"></p>
        </div>
        <div class="brand">
            <img src="{{asset('/img/logo/16.png')}}">
            <p>深圳市深赛尔股份有限公司</p>
            <p><span>{{isset($companyCount['16'])?$companyCount['16']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="16" data-labelauty="选择"></p>
        </div>
    </div>

    <div class="row">
        <div class="brand">
            <img src="{{asset('/img/logo/17.png')}}">
            <p>深圳市同方电子新材料有限公司</p>
            <p><span>{{isset($companyCount['17'])?$companyCount['17']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="17" data-labelauty="选择"></p>
        </div>
        <div class="brand">
            <img src="{{asset('/img/logo/18.png')}}">
            <p>深圳市新纶科技股份有限公司</p>
            <p><span>{{isset($companyCount['18'])?$companyCount['18']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="18" data-labelauty="选择"></p>
        </div>
    </div>

    <div class="row">
        <div class="brand">
            <img src="{{asset('/img/logo/19.png')}}">
            <p>深圳新宙邦科技股份有限公司</p>
            <p><span>{{isset($companyCount['19'])?$companyCount['19']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="19" data-labelauty="选择"></p>
        </div>
        <div class="brand">
            <img src="{{asset('/img/logo/20.png')}}">
            <p>深圳怡钛积科技股份有限公司</p>
            <p><span>{{isset($companyCount['20'])?$companyCount['20']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="20" data-labelauty="选择"></p>
        </div>
    </div>

    <div class="row">
        <div class="brand">
            <img src="{{asset('/img/logo/21.png')}}">
            <p>亿和精密金属制品（深圳）有限公司</p>
            <p><span>{{isset($companyCount['21'])?$companyCount['21']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="21" data-labelauty="选择"></p>
        </div>
        <div class="brand">
            <img src="{{asset('/img/logo/22.png')}}">
            <p>深圳市赢合科技股份有限公司</p>
            <p><span>{{isset($companyCount['22'])?$companyCount['22']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="22" data-labelauty="选择"></p>
        </div>
    </div>

    <div class="row">
        <div class="brand">
            <img src="{{asset('/img/logo/23.png')}}">
            <p>深圳市证通电子股份有限公司</p>
            <p><span>{{isset($companyCount['23'])?$companyCount['23']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="23" data-labelauty="选择"></p>
        </div>
        <div class="brand">
            <img src="{{asset('/img/logo/24.png')}}">
            <p>深圳中科强华科技有限公司</p>
            <p><span>{{isset($companyCount['24'])?$companyCount['24']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="logo" value="24" data-labelauty="选择"></p>
        </div>
    </div>

    <h1>候选工业家</h1>
    <p class="center">按姓氏笔画排列</p>

    <div class="row">
        <div class="man">
            <img src="{{asset('/img/man/1.png')}}">
            <h6>王合球</h6>
            <p>深圳欧陆通电子有限公司董事长</p>
            <p><span>{{isset($peopleCount['1'])?$peopleCount['1']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="man" value="1" data-labelauty="选择"></p>
        </div>
        <div class="man">
            <img src="{{asset('/img/man/2.png')}}">
            <h6>刘国民</h6>
            <p>深圳市深赛尔股份有限公司董事长</p>
            <p><span>{{isset($peopleCount['2'])?$peopleCount['2']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="man" value="2" data-labelauty="选择"></p>
        </div>
    </div>

    <div class="row">
        <div class="man">
            <img src="{{asset('/img/man/3.png')}}">
            <h6>刘骏</h6>
            <p>深圳市日联科技有限公司董事长</p>
            <p><span>{{isset($peopleCount['3'])?"0":$peopleCount['3']}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="man" value="3" data-labelauty="选择"></p>
        </div>
        <div class="man">
            <img src="{{asset('/img/man/4.png')}}">
            <h6>李荣</h6>
            <p>深圳市贝加电子材料有限公司董事长</p>
            <p><span>{{isset($peopleCount['4'])?$peopleCount['4']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="man" value="4" data-labelauty="选择"></p>
        </div>
    </div>

    <div class="row">
        <div class="man">
            <img src="{{asset('/img/man/5.png')}}">
            <h6>邱文渊</h6>
            <p>深圳市蓝海华腾技术股份有限公司总经理</p>
            <p><span>{{isset($peopleCount['5'])?$peopleCount['5']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="man"  value="5" data-labelauty="选择"></p>
        </div>
        <div class="man">
            <img src="{{asset('/img/man/6.png')}}">
            <h6>张建军</h6>
            <p>深圳市三利谱光电科技股份有限公司总经理</p>
            <p><span>{{isset($peopleCount['6'])?$peopleCount['6']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="man" value="6" data-labelauty="选择"></p>
        </div>
    </div>

    <div class="row">
        <div class="man">
            <img src="{{asset('/img/man/7.png')}}">
            <h6>张耀华</h6>
            <p>亿和精密金属制品（深圳）有限公司总裁</p>
            <p><span>{{isset($peopleCount['7'])?$peopleCount['7']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="man" value="7" data-labelauty="选择"></p>
        </div>
        <div class="man">
            <img src="{{asset('/img/man/8.png')}}">
            <h6>陈德庆</h6>
            <p>深圳市和宏实业股份有限公司总裁</p>
            <p><span>{{isset($peopleCount['8'])?$peopleCount['8']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="man" value="8" data-labelauty="选择"></p>
        </div>
    </div>

    <div class="row">
        <div class="man">
            <img src="{{asset('/img/man/9.png')}}">
            <h6>侯若洪</h6>
            <p>深圳光韵达光电科技股份有限公司董事长</p>
            <p><span>{{isset($peopleCount['9'])?$peopleCount['9']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="man" value="9" data-labelauty="选择"></p>
        </div>
        <div class="man">
            <img src="{{asset('/img/man/10.png')}}">
            <h6>顾进跃</h6>
            <p>深圳市威勒科技股份有限公司总经理</p>
            <p><span>{{isset($peopleCount['10'])?$peopleCount['10']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="man" value="10" data-labelauty="选择"></p>
        </div>
    </div>

    <div class="row">
        <div class="man">
            <img src="{{asset('/img/man/11.png')}}">
            <h6>曾胜强</h6>
            <p>深圳市证通电子股份有限公司总裁</p>
            <p><span>{{isset($peopleCount['11'])?$peopleCount['11']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="man" value="11" data-labelauty="选择"></p>
        </div>
        <div class="man">
            <img src="{{asset('/img/man/12.png')}}">
            <h6>薛广洲</h6>
            <p>深圳中科强华科技有限公司副总经理</p>
            <p><span>{{isset($peopleCount['12'])?$peopleCount['12']:"0"}}</span>票</p>
            <p class="dowebok"><input type="checkbox" name="man" value="12" data-labelauty="选择"></p>
        </div>
    </div>

    <div class="check">
        <input type="hidden" id="tokenValue" name="_token" value="{{csrf_token()}}"/>
        <a href="javascript:void(0)" class="vote_btn" onclick="voteClick()"><span>提交投票</span></a>
    </div>
</div>

    <footer>
        <p>主办单位：深圳工业总会</p>
        <p>联系电话：0755-83688772</p>
    </footer>

    <script src="{{asset('/js/jquery.min.js')}}"></script>
    <!-- 复选框js -->
    <script src="{{asset('/js/jquery-labelauty.js')}}"></script>
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

            if(logVoteCount<3)
            {
              alert("请至少选择3个企业");
            }
            else if(manVoteCount<3)
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

</body>
</html>
