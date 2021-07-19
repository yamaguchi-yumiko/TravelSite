# TravelSite

## Build Setup

```bash
#vendorのインストール
$composer install 

###.envの作成
cp .env.example .env 

###アプリケーションキーの初期化
php artisan key:generate

###起動
./vendor/bin/sail up -d

###停止
./vendor/bin/sail down

###Mysqlへ接続 
./vendor/bin/sail mysql 

```

