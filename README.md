sumradio
========
简介
============================
开发代号：sumradio
本程序最终解释权归三明学院论坛工作室所有
本程序是一个使用PHP MySQL开发的点歌台程序，适用于各类学校广播站的点歌节目
程序设计：qwe7002(三明学院论坛工作室技术员)
前端设计：Ricter(使用了bootstarp v2、bootstarp v3作为框架)
本程序遵循GPL v2协议
如何安装
============================
请编辑/class/conf.php中的内容，填写好您的mysql数据库用户名，密码，数据库名称以及网站名称。后台密码点信息，请注意后台密码拥有清空数据库的权限，请设置的稍微复杂以避免猜测。
登陆您的mysql数据库（建议使用phpmyadmin）导入/sql/mysql.sql文件
设置好apache，nginx（本程序建议使用apache，当然这并不代表您不能使用IIS，事实上它适用于任何一个能执行PHP的服务器程序）
自动执行
============================
本系统拥有两个自动执行任务，为/admin/class/delsic.php（删除已播放，未播放歌曲）/admin/class/autoupdate.php（空闲自动点歌系统 ps:就是作弊程序啦）这两个程序请写入计划任务自动运行。
关于作弊
============================
本系统拥有一个作弊系统，能够在没有人点歌的时候自动点歌，此系统的规则为当点歌记录为0时，自动点歌。此数值可以在/admin/class/autoupdate.php中修改。
