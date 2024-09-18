# My Work

「My Work」はサンプルのポートフォリオです。

お問い合わせフォームでは実際にデータベースにアクセスしてデータを保存できます。

## 使用技術

・PHP7.4.9

・laravel8

・MySQL8.0.26

## 環境構築

1.docker-compose exec php bash

2.composer install

3.「.env.example」ファイルを「.env」ファイルに命名を変更。または、新しく.envファイルを作成

4..envに以下の環境変数を追加

DB_CONNECTION=mysql

DB_HOST=mysql

DB_PORT=3306

DB_DATABASE=laravel_db

DB_USERNAME=laravel_user

DB_PASSWORD=laravel_pass

5.アプリケーションキーの作成

php artisan key:generate

# URL

開発環境：http://localhost/

phpMyAdmin:：http://localhost:8080/



