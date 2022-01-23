## 目的
* メニューを表示させるWebサイトを作る。
* メニューを登録させるWebサイトを作る。

## 何を作るのか

* メニューを表示させるWebサイトを作成します。
* メニューをジャンル毎に分け、ジャンルページのジャンルを押すとジャンルに合ったメニューが表示されます。
* メニューを押すとメニューの詳細が表示されます。
* メニューの追加、削除、編集ができるようにします。
* メニューのジャンルの追加、削除、編集ができるようにします。

## 要件

1. メニューのジャンルを表示する。
2. メニューを表示する。
3. メニューのジャンルの追加、削除、編集ができる。
4. メニューの追加、削除、編集ができる。

## 開発ステップ

### 1. 静的Webサイトを作成
1. メニューのジャンル画面、メニュー画面、メニュー詳細画面
2. メニューのデモデータを配列で作成
3. メニュー画面、メニュー詳細画面に2.で作成したデモデータを読み込ませる。
4. メニューのジャンルの連想配列を作り、2.で作った配列を埋め込む。
5. メニューのジャンル画面に4.で作成したデータを読み込ませる。

### 2. 1.で作ったサイトをデータベースに対応させる
1. メニューを保存するテーブルを作成する。
2. メニューをデータベースに登録できる。
3. メニューをデータベースから表示できる。
