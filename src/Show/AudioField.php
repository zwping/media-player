<?php

namespace Abovesky\DcatAdmin\MediaPlayer\Show;

use Abovesky\DcatAdmin\MediaPlayer\MediaPlayer;
use Dcat\Admin\Admin;
use Dcat\Admin\Show\AbstractField;
use Illuminate\Support\Str;

class AudioField extends AbstractField
{
    private string $id;
    private string $url;
    private string $name;
    private string $artist;
    private string $cover;

    protected function requireAssets()
    {
        Admin::js(['@extension/zwping/dcat-media-player/APlayer/APlayer.min.js']);
        Admin::css(['@extension/zwping/dcat-media-player/APlayer/APlayer.min.css']);
    }

    protected function addScript()
    {
        $this->id = 'aplayer-' . Str::random(8);

        Admin::script(
            <<<JS
const ap = new APlayer({
    container: document.getElementById('$this->id'),
    listFolded: true,
    audio: [{
        name: '$this->name',
        artist: '$this->artist',
        url: '$this->url',
        cover: '$this->cover'
    }]
});

$(document).on('pjax:beforeReplace', function() {
    ap.destroy();
});
JS
        );
    }

    public function render(string $server='', string $name='', string $artist='', string $cover='') {
        $this->name = $name;
        $this->artist = $artist;
        $this->cover = $cover;
        $this->url = MediaPlayer::getValidUrl($this->value, $server);

        if (empty($this->url)) {
            return '';
        }

        $this->requireAssets();
        $this->addScript();

        return "<div id='$this->id'></div>";
    }
}
