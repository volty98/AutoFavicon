# AutoFavicon
AutoFavicon (Grav Plugin)

Automatically inserts "favicon.png" into the HTML `<head>` without editing the theme.

## Features
- AutoFavicon does not require modifying the theme’s "base.html.twig".
- It automatically inserts "favicon.png" into the HTML `<head>`.
- It searches for "favicon.png" in `/user/data/media/`.

- AutoFavicon は、Gravテーマ側の "base.html.twig" を編集する必要はありません。
- "favicon.png" を HTML の `<head>` に自動挿入するプラグインです。
- `/user/data/media/`から"favicon.png"を探します。

## Usage
Just place favicon.png in one of the following locations:
- `/user/data/media/favicon.png`

上記の場所に favicon.png を置くだけで動作します。

## Direct installation using Grav Admin 2 plugin.
In Tools → Direct Install, Upload the following ZIP :

Tools → Direct Install に、以下の ZIP をアップロードするだけでインストールできます：

https://github.com/volty98/AutoFavicon/releases/latest/download/AutoFavicon.zip


## Manual installation
Place this folder in:

`/user/plugins/autofavicon/`

and enable the plugin.

上記のフォルダを作成し、解凍したファイルを配置すれば導入されます。

## License
MIT
