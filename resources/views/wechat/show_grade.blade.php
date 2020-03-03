@extends('wechat.app')
<body>
    @section('title','查询结果')
    @section('description','提示：对成绩有疑问请与老师联系')
    @section('main')
    <div class="grade_show">
        <div class="weui-cell ">
                <!-- 名字 -->
                <div class="weui-cell__bd">
                    <p>名字</p>
                </div>
                <div class="weui-cell__ft">朱联清</div>
        </div>
        <div class="weui-cell ">
                <!-- 节目名称 -->
                <div class="weui-cell__bd">
                    <p>节目名称</p>
                </div>
                <div class="weui-cell__ft">冬天的孩子</div>
        </div>
        <div class="weui-cell ">
                <!-- 指导老师 -->
                <div class="weui-cell__bd">
                    <p>指导老师</p>
                </div>
                <div class="weui-cell__ft">梁泽天</div>
        </div>
    </div>
    <div class="show_null">
    <a href="javascript:;" class="weui-btn_cell weui-btn_cell-warn">没找到结果，点击重新查询</a>
    </div>
    @endsection
    </body>
</html> 