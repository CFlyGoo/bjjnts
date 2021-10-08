
京训钉自动学习
===============
> 因为平台只允许单设备登陆，脚本执行期间不要登陆平台，否则会导致学习失败！

### 环境需求
php+git+composer

### 使用方式
1.克隆本项目 
`git clone https://gitee.com/CFlyGoo/bjjnts.git`

2.进入项目目录
`cd bjjnts`

3.安装依赖
`composer install`

4.编辑 **index.php** 填写账号密码

```
// 多用户学习
$userList = [
    ['username' => '账号1', 'password' => '密码1'],
    ['username' => '账号2', 'password' => '密码2'],
    ['username' => '账号3', 'password' => '密码3'],
];

// 单用户学习
$username = '账号';
$password = '密码'
```

5.以账号命名的287x287像素的jpg自拍照放入face文件夹

6.运行

```
php index.php
```
