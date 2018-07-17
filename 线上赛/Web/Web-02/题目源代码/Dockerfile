# 选择基础镜像
FROM eboraas/apache-php

# 维护者信息
MAINTAINER HeartSky

# 拷贝文件
WORKDIR /var/www/html/
RUN ["rm","index.html"]
ADD web.tar /var/www/html/
RUN ["mv","flag.php","../"]

# 修改 log 位置
# RUN ["ln","-s","/var/log/apache2/access.log","/var/www/html/J6cz1SITsJNS3UdcpUuO2SuJcZlpbkmq/hIvfc5OrwirA6msaFaLuFMsyRzwuSarA.txt"]

# 更新 apache 配置文件(不列出目录结构)
RUN ["mv","apache2.conf","/etc/apache2/apache2.conf"]

# 替换 php.ini
RUN ["mv","php.ini","/etc/php5/apache2/php.ini"]

# 替换 000-default.conf，实现修改 log 位置
RUN ["mkdir","J6cz1SITsJNS3UdcpUuO2SuJcZlpbkmq"]
RUN ["mv","000-default.conf","/etc/apache2/sites-enabled/"]

# 更改用户 shell
RUN ["chsh","-s","/bin/bash","www-data"]

# 开放端口
EXPOSE 80

# 开启 apache 服务
RUN ["service","apache2","start"]

# 设置文件权限
RUN ["chmod","755","."]
RUN ["chmod","644","index.php","show.php"]
RUN ["chmod","744","1.jpg"]
RUN ["chmod","644","../flag.php"]

# access.log
# J6cz1SITsJNS3UdcpUuO2SuJcZlpbkmq/hIvfc5OrwirA6msaFaLuFMsyRzwuSarA.txt
# error.log
# J6cz1SITsJNS3UdcpUuO2SuJcZlpbkmq/pGxXWzuGNKEeqk1XtSISgPrizVGEPluI.txt