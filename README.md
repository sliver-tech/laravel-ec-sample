# Laravel ECサイト サンプル

ECサイトと、その管理画面のサンプルです。

## ローカル環境構築

1. まず、以下のアプリをPCにインストールしてください。
  - VSCode
  - Docker
2. 次に、VSCodeを開き、左上部の[ファイル > フォルダーを開く]から、このフォルダ(laravel-ec-sampleフォルダ)を選択する。
3. VSCodeの拡張機能をインストールする
  - コマンドでインストールする場合は、以下のコマンドを順に実行してください。
    ```
    code --install-extension bmewburn.vscode-intelephense-client
    ```
    ```
    code --install-extension cweijan.vscode-database-client2
    ```
    ```
    code --install-extension MehediDracula.php-namespace-resolver
    ```
    ```
    code --install-extension MS-CEINTL.vscode-language-pack-ja
    ```
    ```
    code --install-extension onecentlin.laravel-blade
    ```
    ```
    code --install-extension xdebug.php-pack
    ```
  - VSCodeの拡張機能タブでインストールする場合は、以下の<パッケージ名>/<作者>の拡張機能を検索してインストールすること。
    - Database Client/Weijan Chen
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
5. データベースのデータを見るための準備
  - VSCodeの一番左に縦人ランデルアイコンのうち、「Database」というものを選択（丸い円柱のアイコン）
  - タブ内右上部の、「＋」ボタン(Add Connection)ボタンを押下する。データベース接続内容を入力するタブが出現する
  - 「Name」に「Larave-EC-Sample」と入力。
  - 下の「Username」に「tester」と入力
  - 「Password」に「password」と入力
  - 「Save」ボタンを押下

# 作業で使うもの

## 開発中のECサイト:
- [http://localhost](http://localhost)

## タスク一覧
- 

## ファイルを編集しても変更が反映されないときは
以下のコマンドを実行しましょう。
```
./cache.sh
```
