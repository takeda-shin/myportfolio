# MY Portfolio（開発中）
![トップ](https://user-images.githubusercontent.com/55591073/77496802-29ddc580-6e8f-11ea-8bab-e1bd7193b4ae.png)

## 概要

短時間で自分専用のポートフォリオサイトを作成出来ます。<br>
これから就職活動をする新人プログラマーで<br>
今すぐポートフォリオサイトが欲しい方をターゲットにしています。<br>
<br>
開発環境<br>
PHP/Laravel/MySQL/Github/heroku/Visual Studio Code<br>
<br>
現在実装済みの機能は以下の通りです。<br>
・ログイン機能<br>
・自己紹介（文章・画像の投稿・編集・表示）<br>
・開発実績（文章・画像の投稿・編集・表示）<br>
・問い合わせフォーム（ログイン時に設定したアドレスにメールが届く）<br>

## 接続先情報

http://myportfolio-iamhere.herokuapp.com/ <br>
ID: admin<br>
Pass: pass0318<br>
<br>
テストアカウント<br>
mail: admin@gmail.com <br>
pass: pass0318<br>

## 制作背景

TECH::CAMP福岡校にてRuby on Railsでのアプリ開発の基礎を学んだ筆者が<br>
以下の目的により開発したアプリになります。<br>
<br>
・開発現場での需要の多いphp、およびフレームワーク「Laravel」の学習<br>
・開発環境の構築から基礎学習・アプリ開発までを自分1人の力で行う訓練<br>
・HTML/CSSを用いたデザインの学習<br>
<br>
ポートフォリオを作成サイトを開発した理由としては以下の通りです。<br>
<br>
・アプリ(ユーザー管理機能・文章画像の投稿・問い合わせフォーム)の基本的機能を一通り学べる<br>
・これからプログラマーとしてのキャリアをスタートする自分が、今必要とするアプリ<br>

## DEMO
### トップページ
![トップ2](https://user-images.githubusercontent.com/55591073/77502685-dd9a8180-6e9e-11ea-81b2-f0fa9f4b5ed0.png)
新規登録・ログイン後はボタンが「ポートフォリオを作る」「ログアウト」に切り替わる。<br>
【今後実装したい機能・内容】<br>
・公開されているポートフォリオの一覧・検索機能<br>
・アプリの紹介ページの追加<br>

### 新規登録・ログイン
![新規登録・ログイン](https://user-images.githubusercontent.com/55591073/77502806-42ee7280-6e9f-11ea-9eae-79a51e499f2b.png)
【今後実装したい機能・内容】<br>
・デザインをアプリの雰囲気に合わせたものに変更<br>

### ポートフォリオ作成画面
![ポートフォリオ作成](https://user-images.githubusercontent.com/55591073/77503659-877b0d80-6ea1-11ea-9f9d-b8711ecefbcf.png)
トップページの「ポートフォリオを作る」ボタンより遷移。<br>
ポートフォリオのタイトルとキャッチコピーを入力し、<br>
「create」ボタンを押すことでポートフォリオのメイン画面と問い合わせフォームが作成される。<br>
【今後実装したい機能・内容】<br>
・デザインをアプリの雰囲気に合わせたものに変更<br>

### ポートフォリオメイン画面
![メイン画面](https://user-images.githubusercontent.com/55591073/77504006-72eb4500-6ea2-11ea-9c90-075e7f996aa2.png)
作成されたポートフォリオのメイン画面。作成者のみ上部にヘッダーが表示される<br>
（編集画面に遷移する「Edit」、トップページに戻る「Back」）<br>
【今後実装したい機能・内容】<br>
・デザインを数種類から選べるように。もしくは自由に色合いを変化させられるようにする。<br>

### 問い合わせフォーム
![問い合わせフォーム](https://user-images.githubusercontent.com/55591073/77504256-3704af80-6ea3-11ea-918c-a0e5a8cec2e3.png)
メイン画面と同時に作成される。このフォームに入力された内容は、ログイン時に使用するメールアドレスに送られる。<br>

### 編集画面
![タイトル編集](https://user-images.githubusercontent.com/55591073/77504511-dfb30f00-6ea3-11ea-85ec-4aa017099488.png)
ヘッダーの「Edit」をクリックすることでこのページに遷移。メイン画面の編集・更新を行える。<br>
左側の「ABOUTS」「WORKS」から自身のプロフィール、開発実績を追加できる。<br>
【今後実装したい機能・内容】<br>
・ポートフォリオ全体のデザインをカスタマイズできる機能<br>
・公開設定機能（公開、パスワード共有による限定公開、非公開）<br>

### プロフィール追加（編集）画面
![プロフィール編集](https://user-images.githubusercontent.com/55591073/77505004-408f1700-6ea5-11ea-8a69-f59f6dd080cb.png)
編集画面左の「ABOUTS」をクリックすることで遷移。すでに作成している場合は編集画面に遷移する。<br>
全て入力し、「SEND」をクリックすることでポートフォリオに「ABOUTS」部分が追加される。<br>
【今後実装したい機能・内容】<br>
・SNS入力は行わなくてもいいようにする。<br>
・（編集）プロフィール画像のみ再度入れ直さなければならない仕様を修正<br>
・（編集）プロフィール画像を入れ直した時、同時に以前の画像を削除<br>

### プロフィール画面
![プロフィール画面](https://user-images.githubusercontent.com/55591073/77505715-4685f780-6ea7-11ea-8430-d4c2526ffac5.png)
プロフィール追加画面にて入力を完了するとメイン画面の下に表示される。<br>
【今後実装したい機能・内容】<br>
・twitter/facebook/instagramのアイコンを設置し、クリックすることで各SNSに遷移する機能<br>

### 開発実績編集トップ画面
![WORKS編集トップ](https://user-images.githubusercontent.com/55591073/77506267-c82a5500-6ea8-11ea-914c-51b1dc1d33cd.png)
編集画面左の「ABOUTS」をクリックすることで遷移。<br>
すでに登録されている開発実績が並び、画像を押すことで編集画面に遷移する。<br>
上部の「WORKを追加」をクリックすることで、新たな開発実績を登録することができる。<br>
【今後実装したい機能・内容】<br>
・登録されている実績の画像が歪んでしまっているのを、綺麗に表示できるように修正<br>

### 開発実績追加（編集）画面
![WORK追加](https://user-images.githubusercontent.com/55591073/77506779-070cda80-6eaa-11ea-9b01-b03a840fc077.png)
指定の欄に内容を入力し、「SEND」をクリックすることで開発実績が登録される。<br>
1つ目の開発実績を登録した時点でポートフォリオに「WORKS」部分が追加される。<br>
【今後実装したい機能・内容】<br>
・URLを入力したら、自動的にサムネイル画像が作成される機能<br>
・（編集）画像のみ再度入れ直さなければならない仕様を修正<br>
・（編集）画像を入れ直した時、同時に以前の画像を削除<br>

### 開発実績追加（編集）画面
![WORKS](https://user-images.githubusercontent.com/55591073/77507548-fc534500-6eab-11ea-8214-dc2db70e69d0.png)
1つ目の開発実績を登録した時点でポートフォリオに追加。<br>
４つまでは一画面に表示でき、それ以上は横スクロールで見ることが出来る。<br>
「LINK」「GITHUB」からデプロイ先、GitHubに遷移する。<br>

### その他追加したい機能
・ブログやYouTubeなど、アウトプットに利用している媒体の公開<br>
・職務経歴書などの公開・ダウンロード機能（公開設定・パスワードで管理）<br>
・デザイナー向けに広告・印刷物などのPDF登録・ダウンロード機能<br>


## DB設計

## usersテーブル

|column|Type|Options|
|------|----|-------|
|name|string|null: false|
|email|string|null: false, unique: true|
|password|string|null: false|

### Association
- has_one :post

## postsテーブル

|column|Type|Options|
|------|----|-------|
|user_id|integer|null: false, foreign_key: true|
|title|string|null: false|
|body|text|null: false|

### Association
- belongs_to :user
- has_one :about
- has_many :works

## aboutsテーブル
|Column|Type|Options|
|------|----|-------|
|post_id|integer|null: false, foreign_key: true|
|family_name|string|null: false|
|first_name|string|null: false|
|family_name_eng|string|null: false|
|first_name_eng|string|null: false|
|base|string|null: false|
|email|string|null: false|
|performance|text|null: false, max-length:100|
|image|string|null: false, max-length:100|
|twitter|string|null: false, max-length:1024|
|facebook|string|null: false, max-length:1024|
|instagram|string|null: false, max-length:1024|
|message|text|null: false|

### Association
- belongs_to :post

## worksテーブル
|Column|Type|Options|
|------|----|-------|
|post_id|integer|null: false, foreign_key: true|
|title|string|null: false|
|introduction|text|null: false|
|language|text|null: false|
|image|string|null: false, max-length:100|
|link|string|null: false, max-length:1024|
|github|string||

### Association
- belongs_to :post