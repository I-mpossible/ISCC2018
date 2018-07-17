参考实验吧题目http://www.shiyanbar.com/ctf/1940
利用with rollup特性使查询的密码为空。从而绕过登陆
这里思路是利用注册页面给出的提示知道用户名为iscc_xxxx(四位数字)
然后利用payload:    iscc_xxxx'  group by pwd with rollup limit 1 offset 1#  来使查询的密码为空
其中xxxx是需要爆破的地方，利用burp可以轻松做到。