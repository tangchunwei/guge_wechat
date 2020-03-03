@extends('wechat.app')
<body>
    @section('title','“炫丽童年梦”广东粤西地区才艺大赛成绩查询')
    @section('description','说明：请输入正确的条件进行查询，忘记请联系老师')
    @section('main')
            <!-- 输入框 -->
            <div class="weui-cell weui-cell_active" id="js_cell">
                <div class="weui-cell__hd"><label class="weui-label">名字</label></div>
                <div class="weui-cell__bd weui-flex">
                    <input id="js_input" class="weui-input" autofocus="" type="text" pattern="[0-9]*" placeholder="请输入要查询的名字" maxlength="16">
                    <button id="js_input_clear" class="weui-btn_reset weui-btn_icon weui-btn_input-clear">
                    <i class="weui-icon-clear"></i>
                    </button>
                </div>
        </div>
        <!-- 提交按钮 -->
        <div class="weui-form__opr-area">
        <a class="weui-btn weui-btn_primary weui-btn_active" href="javascript:" id="showTooltips">确定</a>
        </div>
    @endsection
    @section('footer')
        <a href="#">查询帮助</a>
    @endsection
    </body>
</html>