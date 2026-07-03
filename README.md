# AutoFavicon
AutoFavicon (Grav Plugin)

Automatically inserts "favicon.png" into the HTML `<head>` without editing the theme.

## Features
- AutoFavicon does not require modifying the theme’s "base.html.twig".
- It automatically inserts "favicon.png" into the HTML `<head>`.
- It searches for "favicon.png" in `/user/data/media/` and in any page’s media folder.

- AutoFavicon は、Gravテーマ側の "base.html.twig" を編集する必要はありません。
- "favicon.png" を HTML の `<head>` に自動挿入するプラグインです。
- `/user/data/media/`または、任意ページのメディアフォルダから"favicon.png"を探します。

## Usage
Just place favicon.png in one of the following locations:
- `/user/data/media/favicon.png`
- Any page’s media folder.
    - eg.: `/user/pages/01.home/favicon.png`.

上記の場所に favicon.png を置くだけで動作します。

## Direct installation using Grav Admin 2 plugin.
In Tools → Direct Install, paste the following ZIP URL:

https://github.com/volty98/AutoFavicon/releases/latest/download/AutoFavicon.zip

No manual download required — Grav will install the plugin automatically.

Grav Admin 2 の Tools → Direct Install に、以下の ZIP URL を貼るだけでインストールできます：

https://github.com/volty98/AutoFavicon/releases/latest/download/AutoFavicon.zip


## Manual installation
Place this folder in:

`/user/plugins/autofavicon/`

and enable the plugin.

ZIP を解凍しファイルを以下に配置し、有効化してください：

`/user/plugins/autofavicon/`

## License
MIT
