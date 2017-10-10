<!DOCTYPE html>
<html lang="en">
<head>

    <title>首页</title>
</head>
<body>
<div style="float: right">
    <a href="/admin/logout"><i class="fa fa-eject fa-fw"></i>退出</a>
</div>
<div style="float:left">
    <h1>企业票数排行</h1>
    <ul>
        <?php $a=1;?>
    @foreach($votee as $k=>$v)
           @if($k==1)
            <li>{{$a}}.深圳市博敏电子有限公司:{{$v}}</li>
            @elseif($k==2)
            <li>{{$a}}.深圳长城开发科技股份有限公司:{{$v}}</li>
            @elseif($k==3)
            <li>{{$a}}.深圳市创世纪机械有限公司:{{$v}}</li>
            @elseif($k==4)
            <li>{{$a}}.深圳市东方亮彩精密技术有限公司:{{$v}}</li>
            @elseif($k==5)
            <li>{{$a}}.深圳市高斯宝电气技术有限公司:{{$v}}</li>
            @elseif($k==6)
            <li>{{$a}}.深圳光韵达光电科技股份有限公司:{{$v}}</li>
            @elseif($k==7)
            <li>{{$a}}.深圳市今天国际物流技术股份有限公司:{{$v}}</li>
            @elseif($k==8)
            <li>{{$a}}.深圳市康冠技术有限公司:{{$v}}</li>
            @elseif($k==9)
            <li>{{$a}}.深圳科士达科技股份有限公司:{{$v}}</li>
            @elseif($k==10)
            <li>{{$a}}.深圳市蓝海华腾技术股份有限公司:{{$v}}</li>
            @elseif($k==11)
            <li>{{$a}}.深圳领威科技有限公司:{{$v}}</li>
            @elseif($k==12)
            <li>{{$a}}.深圳市三利谱光电科技股份有限公司:{{$v}}</li>
            @elseif($k==13)
            <li>{{$a}}.深圳市三诺数字科技有限公司:{{$v}}</li>
            @elseif($k==14)
            <li>{{$a}}.蛇口南顺面粉有限公司:{{$v}}</li>
            @elseif($k==15)
            <li>{{$a}}.深圳市深铃车业有限公司:{{$v}}</li>
            @elseif($k==16)
            <li>{{$a}}.深南电路股份有限公司:{{$v}}</li>
            @elseif($k==17)
            <li>{{$a}}.深圳市深赛尔股份有限公司:{{$v}}</li>
            @elseif($k==18)
            <li>{{$a}}.深圳市同方电子新材料有限公司:{{$v}}</li>
            @elseif($k==19)
            <li>{{$a}}.深圳市新纶科技股份有限公司:{{$v}}</li>
            @elseif($k==20)
            <li>{{$a}}.深圳新宙邦科技股份有限公司:{{$v}}</li>
            @elseif($k==21)
            <li>{{$a}}.深圳怡钛积科技股份有限公司:{{$v}}</li>
            @elseif($k==22)
            <li>{{$a}}.亿和精密金属制品（深圳）有限公司:{{$v}}</li>
            @elseif($k==23)
            <li>{{$a}}.深圳市赢合科技股份有限公司:{{$v}}</li>
            @elseif($k==24)
            <li>{{$a}}.深圳市证通电子股份有限公司:{{$v}}</li>
            @endif
               <?php $a++;?>
    @endforeach
    </ul>
</div>

<div style="float:right">
    <h1>企业家票数排行</h1>
    <ul>
        <?php $j=1;?>
        @foreach($votep as $k=>$v)
            @if($k==1)
                <li>{{$j}}.王合球(深圳欧陆通电子有限公司董事长):{{$v}}</li>
            @elseif($k==2)
                <li>{{$j}}.刘国民(深圳市深赛尔股份有限公司董事长):{{$v}}</li>
            @elseif($k==3)
                <li>{{$j}}.刘骏(深圳市日联科技有限公司董事长):{{$v}}</li>
            @elseif($k==4)
                <li>{{$j}}.李荣(深圳市贝加电子材料有限公司董事长):{{$v}}</li>
            @elseif($k==5)
                <li>{{$j}}.邱文渊(深圳市蓝海华腾技术股份有限公司总经理):{{$v}}</li>
            @elseif($k==6)
                <li>{{$j}}.张建军(深圳市三利谱光电科技股份有限公司总经理):{{$v}}</li>
            @elseif($k==7)
                <li>{{$j}}.张耀华(亿和精密金属制品（深圳）有限公司总裁):{{$v}}</li>
            @elseif($k==8)
                <li>{{$j}}.陈德庆(深圳市和宏实业股份有限公司总裁):{{$v}}</li>
            @elseif($k==9)
                <li>{{$j}}.侯若洪(深圳光韵达光电科技股份有限公司董事长):{{$v}}</li>
            @elseif($k==10)
                <li>{{$j}}.顾进跃(深圳市威勒科技股份有限公司总经理):{{$v}}</li>
            @elseif($k==11)
                <li>{{$j}}.曾胜强(深圳市证通电子股份有限公司总裁):{{$v}}</li>
            @elseif($k==12)
                <li>{{$j}}.薛广洲(深圳中科强华科技有限公司副总经理):{{$v}}</li>
            @endif
            <?php $j++;?>
        @endforeach
    </ul>
</div>
</body>
</html>