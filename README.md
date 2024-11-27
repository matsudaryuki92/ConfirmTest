# お問い合わせフォーム
<h2>環境構築</h2>
Dockerビルド

　1.git clone git@github.com:matsudaryuki92/ConfirmTest.git<br>
　2.docker-compose up -d --build

*MySQLは、OSによって起動しない場合があるのでそれぞれのPCに合わせてdocker-compose.ymlファイルを編集してください

Laravle環境構築

　1.docker-compose exec php bash<br>
　2.composer install<br>
　3.env.exampleファイルから.envを作成し、環境変数を変更<br>
　4.php artisan key:generate<br>
　5.php artisan migrate<br>
　6.php artisan db:seed<br>

<h2>使用技術</h2>
<ul>
  <li>PHP 8.0</li>
  <li>Laravel 8.*</li>
  <li>MySQL 8.0</li>
</ul>

<h2>URL</h2>
<ul>
  <li>開発環境:http://localhost/</li>
  <li>phpMyAdmin:http://localhost:8080/</li>
</ul>
