我本地php环境
```
PHP 7.3.4 (cli) (built: Apr  2 2019 21:57:22) ( NTS MSVC15 (Visual C++ 2017) x64 )
Copyright (c) 1997-2018 The PHP Group
Zend Engine v3.3.4, Copyright (c) 1998-2018 Zend Technologies
php_yaf.dll 为yaf的windows扩展
```
_library_ _plugins_ `都是插件目录 需要更改Yaf的配置项`
```
1	routerStartup	在路由之前触发	这个是7个事件中, 最早的一个. 但是一些全局自定的工作, 还是应该放在Bootstrap中去完成
2	routerShutdown	路由结束之后触发	此时路由一定正确完成, 否则这个事件不会触发
3	dispatchLoopStartup	分发循环开始之前被触发	 
4	preDispatch	分发之前触发	如果在一个请求处理过程中, 发生了forward, 则这个事件会被触发多次
5	postDispatch	分发结束之后触发	此时动作已经执行结束, 视图也已经渲染完成. 和preDispatch类似, 此事件也可能触发多次
6	dispatchLoopShutdown	分发循环结束之后触发	此时表示所有的业务逻辑都已经运行完成, 但是响应还没有发送
```
### 路由
简单的两种形式 具体教程http://www.laruence.com/manual/yaf.routes.default.html
```
http://www.yaf.com/?c=index&a=index
http://www.yaf.com/index/index
```