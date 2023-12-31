# ソフト部門講習会テンプレ

## 目次
1. 環境構築
2. 基本事項


## 環境構築
### もろもろのインストール(多分)
dockerをインストールしてもらうだけで十分なはず

### .envファイル記入
[.env.example](./.env.example)をコピーして.envファイルを作成  
必要情報を記入する\
一番下に
- YOUR_NAME=template

があるので、自分の名前を入れる。（ニックネームでいい）\
\
現在プロジェクト名がtodo-app-templateなのでこれを変更したい場合は

```shell
cd ~/(git cloneしたディレクトリー)
mv todo-app-template todo-app-flet_pro
```
\
Docker上での実行なので気にする必要はないが、気になる人は変えても良い項目
- DB_DATABASE
- DB_USERNAME
- DB_PASSWORD

### 起動
```shell
docker compose up
```
[http://localhost:8000](http://localhost:8000) で起動している。

### 初期設定など
```shell
source .env && docker exec -it todo-$YOUR_NAME-php-apache /bin/bash
```
でコンテナ内に入り以下を実行。
```shell
export COMPOSER_PROCESS_TIMEOUT=1200
composer install
source .env
php artisan key:generate
php artisan migrate
php artisan db:seed
```




## 基本事項
### 起動
```shell
docker compose up
```

### phpMyAdmin
[http://localhost:8001](http://localhost:8001)

### artisan系コマンド実行
DB関係の操作をするときは
```shell
source .env && docker exec -it todo-$YOUR_NAME-php-apache /bin/bash
```
でコンテナに入ってからartisan系コマンドを実行
```shell
source .env && php artisan migrate
```

それ以外のときはそのまま実行しても、コンテナに入っていても可

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
