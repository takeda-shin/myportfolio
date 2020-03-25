# MY Portfolio
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
mail:  <br>
pass:  <br>

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
### 新規登録・ログイン
![新規登録・ログイン](https://user-images.githubusercontent.com/55591073/77502806-42ee7280-6e9f-11ea-9eae-79a51e499f2b.png)




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