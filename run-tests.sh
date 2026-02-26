#!/bin/bash

# 下载Composer
curl -sS https://getcomposer.org/installer | php

# 更新依赖
php composer.phar update

# 运行测试
./vendor/bin/phpunit --testdox tests