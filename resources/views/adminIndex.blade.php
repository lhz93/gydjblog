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
            <li>{{$a}}.艾礼富电子有限公司:{{$v}}</li>
            @elseif($k==2)
            <li>{{$a}}.深圳奥特讯电力设备股份有限公司:{{$v}}</li>
            @elseif($k==3)
            <li>{{$a}}.深圳市板明科技有限公司:{{$v}}</li>
            @elseif($k==4)
            <li>{{$a}}.深圳市宝德计算机系统有限公司:{{$v}}</li>
            @elseif($k==5)
            <li>{{$a}}.比亚迪股份有限公司:{{$v}}</li>
            @elseif($k==6)
            <li>{{$a}}.深圳市超频三科技股份有限公司:{{$v}}</li>
            @elseif($k==7)
            <li>{{$a}}.深圳市创想三维科技有限公司:{{$v}}</li>
            @elseif($k==8)
            <li>{{$a}}.深圳市大疆创新科技有限公司:{{$v}}</li>
            @elseif($k==9)
            <li>{{$a}}.方大智创科技有限公司:{{$v}}</li>
            @elseif($k==10)
            <li>{{$a}}.深圳市飞荣达科技股份有限公司:{{$v}}</li>
            @elseif($k==11)
            <li>{{$a}}.飞亚达（集团）股份有限公司:{{$v}}</li>
            @elseif($k==12)
            <li>{{$a}}.国药集团致君（深圳）制药有限公司:{{$v}}</li>
            @elseif($k==13)
            <li>{{$a}}.海能达通信股份有限公司:{{$v}}</li>
            @elseif($k==14)
            <li>{{$a}}.深圳市华盛昌科技实业股份有限公司:{{$v}}</li>
            @elseif($k==15)
            <li>{{$a}}.深圳市华信天线技术有限公司:{{$v}}</li>
            @elseif($k==16)
            <li>{{$a}}.华讯方舟科技有限公司:{{$v}}</li>
            @elseif($k==17)
            <li>{{$a}}.深圳市杰普特光电股份有限公司:{{$v}}</li>
            @elseif($k==18)
            <li>{{$a}}.深圳市九洲电器有限公司:{{$v}}</li>
            @elseif($k==19)
            <li>{{$a}}.深圳市康冠科技股份有限公司:{{$v}}</li>
            @elseif($k==20)
            <li>{{$a}}.康佳集团股份有限公司:{{$v}}</li>
            @elseif($k==21)
            <li>{{$a}}.深圳市柳鑫实业股份有限公司:{{$v}}</li>
            @elseif($k==22)
            <li>{{$a}}.深圳市隆利科技股份有限公司:{{$v}}</li>
            @elseif($k==23)
            <li>{{$a}}.鹏鼎控股（深圳）股份有限公司:{{$v}}</li>
            @elseif($k==24)
            <li>{{$a}}.普联技术有限公司:{{$v}}</li>
            @elseif($k==25)
            <li>{{$a}}.深南电路股份有限公司:{{$v}}</li>
            @elseif($k==26)
            <li>{{$a}}.深圳市腾盛工业设备有限公司:{{$v}}</li>
            @elseif($k==27)
            <li>{{$a}}.深圳拓邦股份有限公司:{{$v}}</li>
            @elseif($k==28)
            <li>{{$a}}.新百丽鞋业（深圳）有限公司:{{$v}}</li>
            @elseif($k==29)
            <li>{{$a}}.深圳市新星轻合金材料股份有限公司:{{$v}}</li>
            @elseif($k==30)
            <li>{{$a}}.深圳怡化电脑股份有限公司:{{$v}}</li>
            @elseif($k==31)
            <li>{{$a}}.深圳市银河表计股份有限公司:{{$v}}</li>
            @elseif($k==32)
            <li>{{$a}}.中国南玻集团股份有限公司:{{$v}}</li>
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
                <li>{{$j}}.马竹茂(深圳市宝德计算机系统有限公司总经理):{{$v}}</li>
            @elseif($k==2)
                <li>{{$j}}.王传福(比亚迪股份有限公司董事长兼总裁):{{$v}}</li>
            @elseif($k==3)
                <li>{{$j}}.卢国明(深圳市腾盛工业设备有限公司总经理):{{$v}}</li>
            @elseif($k==4)
                <li>{{$j}}.杜建军(深圳市超频三科技股份有限公司董事长):{{$v}}</li>
            @elseif($k==5)
                <li>{{$j}}.李迪初(长方集团康铭盛（深圳）科技有限公司):{{$v}}</li>
            @elseif($k==6)
                <li>{{$j}}.吴光胜(华讯方舟科技有限公司董事长):{{$v}}</li>
            @elseif($k==7)
                <li>{{$j}}.吴新理(深圳市隆利科技股份有限公司总经理):{{$v}}</li>
            @elseif($k==8)
                <li>{{$j}}.沈庆芳(鹏鼎控股（深圳）股份有限公司董事长):{{$v}}</li>
            @elseif($k==9)
                <li>{{$j}}.陈学敏(深圳市新星轻合金材料股份有限公司董事长兼总经理):{{$v}}</li>
            @elseif($k==10)
                <li>{{$j}}.陈春(深圳市创想三维科技有限公司总经理):{{$v}}</li>
            @elseif($k==11)
                <li>{{$j}}.陈清州(海能达通信股份有限公司董事长):{{$v}}</li>
            @elseif($k==12)
                <li>{{$j}}.周彬(康佳集团股份有限公司总裁):{{$v}}</li>
            @elseif($k==13)
                <li>{{$j}}.姜雪飞 (崇达技术股份有限公司董事长):{{$v}}</li>
            @elseif($k==14)
                <li>{{$j}}.黄治家(深圳市杰普特光电股份有限公司董事长):{{$v}}</li>
            @elseif($k==15)
                <li>{{$j}}.黄勇峰(飞亚达（集团）股份有限公司董事长):{{$v}}</li>
            @elseif($k==16)
                <li>{{$j}}.廖晓霞(深圳奥特讯电力设备股份有限公司董事长兼总经理):{{$v}}</li>
            @elseif($k==17)
                <li>{{$j}}.熊伟(深圳市三旺通信股份有限公司董事长):{{$v}}</li>
            @elseif($k==18)
                <li>{{$j}}.熊海刚(方大智创科技有限公司总经理):{{$v}}</li>
            @endif
            <?php $j++;?>
        @endforeach
    </ul>
</div>
</body>
</html>