# DB定義書
## ER図
[ER図はこちら](https://github.com/ASO2001040/2021ECsite/blob/8a4ffd29be36eeace42ee85f3df4f499da8450dd/DB%E8%A8%AD%E8%A8%88%E6%9B%B8/ER%E5%9B%B3.md)

# DBテーブルカラム一覧

# データベース設計図

## サインインテーブル(sign_in)

|和名|属性名(カラム名)|型|PK|NN|FK|
|---|-----|--|--|--|--|
|メールアドレス|e_mail|varchar(50)||○||
|パスワード|pass|varchar(30)||○|○|
|名前|name|varchar(20)||○||

## 商品詳細テーブル(commodity)

|和名|属性名(カラム名)|型|PK|NN|FK|
|---|-----|--|--|--|--|
|商品名|commodity_name|varchar(20)|○|○||
|商品テキスト|ex_text|varchar(50) |○|○|○|
|商品コード|ID|int(10)||○||
|価格|money|int(10)||○||
|サイズ|size|varchar(2)||○||

## 顧客情報(member)

|和名|属性名(カラム名)|型|PK|NN|FK|
|---|-----|--|--|--|--|
|顧客コード|user_ID|int(10)|○|○||
|パスワード|pass|varchar(20)||○||
|氏名|name|varchar(20)||○||
|住所|address|varchar(100)||○||
|電話番号|tel|int(11)||○||
|メールアドレス|mail|varchar(50)||○||

## お気に入り一覧(favorites)

|和名|属性名(カラム名)|型|PK|NN|FK|
|---|-----|--|--|--|--|
|顧客コード|user_id|int(10)|○|○||
|商品コード|id|int(10)||○||

## 検索履歴(search_words)

|和名|属性名(カラム名)|型|PK|NN|FK|
|---|-----|--|--|--|--|
|顧客コード|user_id|int(10)|○|○||
|検索id|id|int(10)||○||
|検索ワード|words|varchar(30)||○||
|時間|timestamp|||○||
