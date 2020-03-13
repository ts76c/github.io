# 東北６県の証明写真撮影マップ
MySQLを用いたGoogle Mapsへの吹き出し付きマーカー表示

## Description　説明
・MySQL（phpmyadmin）使用<br>
・吹き出しクリックで拠点名称表示<br>
・①自動証明写真機、②店舗内スタジオ撮影、③①と②両方にて、マーカーデザインを変更。<br>

<img width="1000" alt="Map" src="https://user-images.githubusercontent.com/55599388/76425032-6835a800-63ec-11ea-8e4e-47afdd2af818.png"><br>

## VS.　比較
Google Mapsで「証明写真」と検索すると、近隣の自動証明写真機を調べることが可能です。
東北地方に設置されている自動証明写真機（約200台）を私自らGoogle Mapsに登録しました。
その際、「【証明写真】新寺生協」のようにSEO対策と設置先がわかるように名称を登録していましたが、Googleに掲載するローカルビジネス情報のガイドライン「ビジネスの所在地が別の事業体の中にあることを示す出店先情報」に抵触する為、順次「証明写真」のみへと切り替えが進んでいます。
Google Mapsでは、マップ上のマーカー配置や住所では、その場所をすぐに認識できませんが、本マップであればマーカー表示にて出店先情報が容易に確認できます。

## Requirement

## Usage

## Install

## Contribution

## Licence

[MIT](https://github.com/tcnksm/tool/blob/master/LICENCE)

## Author

[tcnksm](https://github.com/tcnksm)



・map.phpが起動ファイルになります。<br>
・データベース情報やAPIkeyは環境に応じて変更をお願い致します。<br>
（ini.phpにまとめていますが、Google MapsのAPIkeyは、GCPよりオーナー確認のエラーが表示されるので、map.php内に直接入力いただくと正しく表示されます。<br>
・JPG1つとPNG2つのファイルは、マーカー画像になります。


