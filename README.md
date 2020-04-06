# 東北６県で証明写真が撮影できる所
・MySQLを用いたGoogle Mapsへの吹き出し付きマーカー表示
https://idphotos.ts76cn.com/index.php

## Description　説明
・MySQL（phpmyadmin）使用<br>
・吹き出しクリックで拠点名称表示<br>
・① 自動証明写真機<br>
　② 店舗内スタジオ撮影<br>
　③ ①と②両方<br>
にて、マーカーデザインを変更。<br>

## Demonstration
<img width="1000" alt="Map" src="https://user-images.githubusercontent.com/55599388/76425032-6835a800-63ec-11ea-8e4e-47afdd2af818.png"><br>

## VS.　比較
・Google Mapsで「証明写真」と検索すると、近隣の自動証明写真機を調べることが可能です。<br>
・東北地方に設置されている自動証明写真機（約200台）を私自らGoogle Mapsに登録しました。
その際、「【証明写真】新寺生協」のようにSEO対策と兼ねて設置先がわかるように名称登録していましたが、Googleに掲載するローカルビジネス情報のガイドライン「ビジネスの所在地が別の事業体の中にあることを示す出店先情報」に抵触する為、順次「証明写真」のみへと切り替えが進んでいます。<br>
・Google Mapsでは、マップ上のマーカー配置や住所では、その場所をすぐに認識できませんが、本マップであればマーカー表示にて出店先情報が容易に確認できます。<br>

## Requirement　要件
・PHP 7.2.21<br>
・phpMyAdmin 4.9.0.1（MySQL 5.7.26）<br>

## Usage　使用法
・sqlフォルダ内「ID-photos-Maps.sql」でtable作成が可能です。<br>
（データは非公表となります。ご了承ください。）<br>
・map.phpが起動ファイルになります。<br>
・ini.phpのデータベース情報やAPIkeyは環境に応じて変更をお願い致します。<br>
・JPG1つとPNG2つのファイルは、マーカー画像になります。<br>
