8001:web-cbc: 字节反转攻击
在源代码后加注释 tip:index.txt 稍微降低难度

8002:iscc_collide: 字节扩展攻击
无

80003:iscc2018-1: Strcmp()函数漏洞
无

8004:iscc2018-2: ip伪造
删除2.php文件
加入header("content-type:text/html;charset=utf-8");解决中文乱码

80005:Web-01: PHP弱类型md5验证绕过，利用全局变量GLOBALS获取函数
文档有误 payload：?a=GLOBALS

8006:Web-02: 利用php伪协议
把文件复制到一个目录 运行docker build ./ 创建docker镜像
运行之后有两个镜像 注意选latest那个
然后docker run -dit --name Web-02 -p 端口:80 镜像ID即可

8007:Web-03:  写本地文件构造命令执行
文件roboot.txt 改名 robots.txt 
删除1.php

8008:Web-04:利用php伪协议
无

8009:Web-05:PHP审计
无

####:Web-06: 
没有部署，需要windows主机

8010:SW01:+string-为UTF-7编码的特征
文件名改为index.php 并且把里面的action也改成index.php

8011:SW02:基于时间的盲注，首先要猜到用户名是test.然后利用sqlmap跑，直接得到flag
需要进入docker mysql创建数据库sqli_database，导入数据库文件，之后删除数据库文件。
修改index.php文件中的数据库连接信息。

8012:SW03: 弱智题
无

8013:W01: 本地ip伪造
无

8014:W02:弱智题
无

####:W03:
没有压缩密码 源代码无法部署

8015:W04:宽字节注入，当网页编码为gbk时适用
同SW02的部署方法，需要先建立baji数据库，然后导入sql，删除sql文件
修改index.php里面的mysql信息.
修改php html mysql 的编码格式为gbk ，分别在2 ，7 ， 53行

8016:W05: 考察HTTP头的知识和BASE64编码
无

8017:W06: PHP代码审计
无

8018:W07:代码执行绕过
更改exec1.php名字为index.php,并给777权限
apt install iputils-ping 安装ping命令

8019:W08: SQL注入
需要导入sql文件，不需要自己建立数据库，导入之后删除sql文件
在include/conf.php中修改数据库连接信息，并修改mysql_connect函数为mysqli_connect函数
10行改为 mysqli_select_db($connect,$db) or die("error , failed");
18行改为  $result=mysqli_query($connect ,$query);
20行改为 if ($row = mysqli_fetch_array($result)){


8020:W09:
建立数据库
导入sql文件，删除sql文件
修改config.php的连接信息
修改web.tar.gz中的config.php中的flag字段