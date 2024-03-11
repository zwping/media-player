<?php

namespace Abovesky\DcatAdmin\MediaPlayer\Grid;

use Abovesky\DcatAdmin\MediaPlayer\MediaPlayer;
use Abovesky\DcatAdmin\MediaPlayer\Render\VideoLazyRender;

class VideoDisplayer extends Displayer {

    public string $cover;
    public bool $screenshot;

    public function setControls(string $cover='', bool $screenshot=true) {
        $this->cover = $cover;
        $this->screenshot = $screenshot;
    }


    public function renderBody() {
        $url = MediaPlayer::getValidUrl($this->value, $this->server);

        return VideoLazyRender::make([
            'url'           => $url,
            'screenshot'    => $this->screenshot ?? true,
            'cover'         => $this->cover ?? '',
        ]);
    }

    public function onHideEvent()
    {
        return <<<JS
window.dplayer.destroy();
JS;
    }
}
