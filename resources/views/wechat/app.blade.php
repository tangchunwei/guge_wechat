<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>鼓歌艺术成绩查询系统</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://cdn.bootcss.com/weui/2.2.0/style/weui.min.css">
</head>
<body>
    <!-- 头部开始 -->
    <header>
        <div class="header_title">
        @yield('title')
        </div>
        <div class="header_description">
            @yield('description')
        </div>
    </header>
        <!-- 头部结束 -->
    <!-- 主题开始 -->
    <main>
        @yield('main')
    </main>
    <!-- 主题结束 -->
    <!-- 底部开始 -->
    <footer>
       @yield('footer')
    </footer>
    <!-- 底部结束 -->
    </body>
</html>