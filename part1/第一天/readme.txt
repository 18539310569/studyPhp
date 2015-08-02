
开发环境：在window系统下建议使用集成安装（灵活）
生产环境：

PHP的安装方式：
	1. window下：集成安装和分别安装(一个个单独安装)。
	2. linux系统下：rpm包的安装，源码包安装，yum源安装, 一键安装。
    
每个软件的配置文件和日志文件：

使用phpinfo测试（查看）php运行环境。

1.查看每个服务配置文件：
   php配置文件：
		xamp： D:\xampp\php\php.ini 
		wamp： D:\wamp\bin\apache\apache2.4.4\bin\php.ini
   
   apache配置文件：
		xamp:  D:\xampp\apache\conf\httpd.conf
		wamp： D:\wamp\bin\apache\apache2.4.4\conf\httpd.conf
		
		其中：DocumentRoot "D:/xampp/htdocs" 表示web根目录
		其他：DocumentRoot "D:/wamp/www" 表示web根目录
   
   mysql配置文件：
		xamp： D:\xampp\mysql\bin\my.ini
		wamp： D:\wamp\bin\MySQL\my.ini
   

2. 本开发环境中只有两个服务：apache（web服务）和MySQL（数据库服务）
	 其中php不是服务，是一个解释引擎。故没有启动和停止。
	 
	启动和关闭服务：
		1. 通过窗口（图形界面）
	 
		2. 通过系统服务来去启动和停止。
			右键【我的电脑】->【管理】->【系统服务】
	 
		3. 是命令行（在开始->运行->中输入cmd回车）
			在xamp中：
				net stop apache2.4   //停止apache服务
				net start apache2.4  //启动apache服务
				net stop mysql	//停止MySQL服务
				net stop mysql  //启动MySQL服务
				
			在wamp中：
				net stop wampapache   //停止apache服务
				net start wampapache  //启动apache服务
				net stop wampmysql	//停止MySQL服务
				net stop wampmysql  //启动MySQL服务
				
			
1. PHP是什么？
	 PHP是超文本预处理器，在服务器端执行的，是嵌入到HTML中的脚本程序。
	 PHP是解释型语言（非编译型）。
	 
2. 以当前wamp软件的安装，我们的web根目录：D:\xampp\htdocs\
	访问方式：使用浏览器：http://localhost/
