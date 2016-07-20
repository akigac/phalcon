# phalconメモ書き（個人用なため、以下の手順だけでできるわけではないです）

## 環境
###開発環境
macosx
vagrant+virtualbox
ローカルのプロジェクトをvagrantの共有に設定

###サーバー環境
nginx+xdebug
php-fpm
→リダイレクトやphp-fpmのソケットなど、conf設定は公式等を参照

mysql
→localhost参照＆開発用としてrootパスワードなし設定
共有フォルダを、webサーバーのドキュメントルートに設定

## phalcon環境構築（サーバー）
git clone --depth=1 git://github.com/phalcon/cphalcon.git
cd cphalcon/build
sudo ./install

### IDEでは以下を落としてinclude pathに設定（ローカル＆サーバー）
git clone https://github.com/phalcon/phalcon-devtools.git
cd phalcon-devtools
. ./phalcon.sh
※これでphalconコマンドがたしかつかえたはず

### phalconの便利ツール（0から作るときに以下は使える）
phalcon create-project invo --enable-webtools

このgit上のファイルじゃなくて、新規プロジェクトを作るなら上記でプロジェクトを使うとwebtoolが使えて便利
→webtool内プロジェクトに適用させるやり方もあるらしい

### 作成後のアクセス確認
http://vagrant.localhost/store/webtools.php
（baseurlの設定とか上手くいかなくて、/にしてsotre抜いてやった）
→これ使うとDB連携したモデルが自動で作れて便利だった。

メモ書き程度に。
ソースや手順整理は改めて気が向いたて気に。


### gitのソースについて
・ユーザー登録(セッションにユーザー情報なければここがトップ)
・セッション管理（ユーザー情報）
・ログイン
をざっくり作ったもの

認証機能では、セキュリティ関連は考慮せず単純にググったものを参考に作ったものを上げてます。（2016/7/20時点）
