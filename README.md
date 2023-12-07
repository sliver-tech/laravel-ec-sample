# Laravel ECサイト サンプル

ECサイトと、その管理画面のサンプルです。

## ローカル環境構築

1. 以下のアプリをPCにインストールすること。
  - VSCode
  - Docker
2. 次に、VSCodeを開き、左上部の[ファイル > フォルダーを開く]から、このフォルダ(laravel-ec-sampleフォルダ)を選択する。
3. VSCodeの拡張機能をインストールする
  - コマンドでインストールする場合は、以下のコマンドを順に実行すること。
    ```
    code --install-extension bmewburn.vscode-intelephense-client
    ```
    ```
    code --install-extension MehediDracula.php-namespace-resolver
    ```
    ```
    code --install-extension onecentlin.laravel-blade
    ```
    ```
    code --install-extension xdebug.php-pack
    ```
  - VSCodeの拡張機能タブでインストールする場合は、以下の<パッケージ名>/<作者>の拡張機能を検索してインストールすること。
    - PHP Intelephense/Ben Mewburn
    - PHP Namespace Resolver
    - Laravel Blade Snipets/Winnie Lin
    - PHP Extension Pack/Xdebug
4. VSCodeでターミナルを開き、以下のコマンドを順に実行。
  ```
  docker compose up -d
  ```
  ```
  docker compose exec php bash
  ```
  ```
  ./junbi.sh
  ```

# 作業で使うもの

## 開発中のECサイト:
- [http://localhost](http://localhost)

## 開発中のECサイト 管理者ログイン画面:
- [http://localhost/login](http://localhost/login)

## DBを確認する場所(phpMyAdmin)
- [http://localhost:3001/index.php?route=/database/structure&db=laravel](http://localhost:3001/index.php?route=/database/structure&db=laravel)

## タスク一覧
- 

## 作業で使うコマンド

### 開発サーバを全て停止するコマンド(laravel-ec-sampleフォルダで実行すること!)
```
docker compose stop
```

### 開発サーバを全て起動するコマンド(laravel-ec-sampleフォルダで実行すること!)
```
docker compose start
```

### phpから始まるコマンドを実行する前に実行するコマンド(laravel-ec-sampleフォルダで実行すること!)
```
docker compose exec php bash
```

### phpから始まるコマンドを実行するときは、入力カーソルの左側が「root@xxxxxxxxxx:/work/src#」となっていることを確認しよう！

## ファイルを編集しても変更が反映されないときは
以下のコマンドを実行しましょう。
```
./cache.sh
```
