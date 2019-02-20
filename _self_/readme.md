### install
```
    啟動 mod rewrite
        a2enmod rewrite

    php install extend
        sudo apt-get install -y php-mbstring

    設定檔
        cd /var/www/phpmyadmin-self
        cp _self_/config.inc.php config.inc.php
        vi config.inc.php
        chmod 644 config.inc.php

    建立 phpmyadmin table
        mysql -u root -e "create database 'phpmyadmin'"
        mysql -u root -p phpmyadmin < sql/create_tables.sql

    security setting
        vi .htaccess
```

### phpmyadmin version
```
    4.7.6
```

### phpmyadmin self upgrade
```
    delete source code
    add source code

    mv examples /tmp/
    mv setup /tmp/
```

### ubuntu bash on windows (WSL)
```
    在 WSL 上面的 linux 檔案權限都是 777
    所以 config.inc.php 需要用 ln 外連到 linux 目錄中

    cd /var/www/phpmyadmin-self
    mv config.inc.php /var/phpmyadmin.config.inc.php
    ln -s /var/phpmyadmin.config.inc.php config.inc.php
    chmod 644 config.inc.php
```

### 錯誤查詢
```
    如果無法正常啓用
    或 出現 HTTP ERROR 500
    可以査看 error log
        tail -f /var/log/apache2/error.log
        tail -f /var/log/nginx/error.log
        tail -f /var/log/nginx/default.error.log
```
