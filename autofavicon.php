<?php
namespace Grav\Plugin;

use Grav\Common\Plugin;
use RocketTheme\Toolbox\Event\Event;

class AutoFaviconPlugin extends Plugin
{
    public static function getSubscribedEvents()
    {
        return [
            'onOutputGenerated' => ['onOutputGenerated', 0],
        ];
    }

    public function onOutputGenerated()
    {
        $faviconPath = 'user/media/favicon.png';

        if (!file_exists($faviconPath)) {
            return; // ファビコンが存在しない場合は何もしない
        }

        if ($this->isAdmin()) {
            return;
        }

        // 出力される全体のHTMLを取得
        $output = $this->grav->output;

        // 既存の favicon 関連の link タグ（rel="icon" や rel="shortcut icon"）をマッチングして削除、
        // または自作のタグに置換する
        $pattern = '/<link\s+[^>]*rel=["\'](shortcut\s+)?icon["\'][^>]*>/i';
        
        $pluginFavicon = '<link rel="icon" type="image/png" href="' . $faviconPath .'" /><!-- AutoFaviconPlugin -->';

        // 既存のタグを消去し、</head> の直前に新しいファビコンを挿入するアプローチが安全です
        $output = preg_replace($pattern, '', $output);
        $output = str_replace('</head>', $pluginFavicon . "\n</head>", $output);

        // 書き換えたHTMLをGravに戻す
        $this->grav->output = $output;
    }

}

