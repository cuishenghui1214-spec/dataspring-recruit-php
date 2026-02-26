<h1>你好 我做完了</h1><br>

<h2>动手</h2>
greeting方法是我自己写的<br>
但是docker和phpunit的话，我以前基本没有接触过<br>
所以是用Trae帮我完成的<br>
刚开始总是拉取失败，折腾了很久<br>
结果手动改了镜像ttps://docker.1ms.run，就OK了<br>
因为我的环境是windows，所以多了一些bat文件<br>
AI用了一些在线编译编译测试工具，所以有多生成了一些.php文件<br>

改动文件有2个，Dockerfile和Makefile<br>

从Dockerfile来看<br>
原本的太简单，没有安装一些必备的包以及composer，这个需要改进<br>

Makefile的话<br>
好像是把命令修改成了运行容器<br>
原来的docker-compose exec recruit make tests我不太懂是啥意思，这块可能要系统性地看一遍才能了解吧<br>

<h2>思考</h2>
1.我们准备的单元测试类（MyGreeterTest）是否存在问题？（是或者否）<br>
-有问题啊，只用strlen无法判断函数是否满足需求<br>

2.如果问题1你的答案"是"的话，请问有哪些问题？以及你认为针对每个问题应该如何改善？<br>
-greeting方法可以传入时间戳，可以把一些特定的时间戳传入方法进行验证（如果要用strtotime之类的方法的话，要考虑时区问题），里面必须要包含6:00 12:00 18:00等关键时间<br>

大概就这样了，请过目<br>
