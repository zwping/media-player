<?php

namespace Abovesky\DcatAdmin\MediaPlayer\Grid;

use Abovesky\DcatAdmin\MediaPlayer\MediaPlayer;
use Abovesky\DcatAdmin\MediaPlayer\Render\AudioLazyRender;

class AudioDisplayer extends Displayer {

    public string $audioName;
    public string $audioArtist;
    public string $audioCover;

    public function setControls(string $name='', string $artist='', string $cover='') {
        $this->audioName = $name;
        $this->audioArtist = $artist;
        $this->audioCover = $cover;
    }

    public function renderBody() {
        $url = MediaPlayer::getValidUrl($this->value, $this->server);

        return AudioLazyRender::make([
            'url'       => $url,
            'name'      => $this->audioName ?? '',
            'artist'    => $this->audioArtist ?? '',
            'cover'     => $this->audioCover ?? '',
        ]);
    }

    public function onHideEvent() {
        return <<<JS
window.aplayer.destroy();
JS;
    }
}
