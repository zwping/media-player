# Dcat Admin 音视频预览扩展

[![](https://img.shields.io/packagist/v/zwping/dcat-media-player.svg)](https://packagist.org/packages/zwping/dcat-media-player)

## 截图

![main](https://raw.githubusercontent.com/zwping/media-player/master/screenshot/main.png)
![show](https://raw.githubusercontent.com/zwping/media-player/master/screenshot/show.png)

## 安装

1. `composer require zwping/dcat-media-player`
2. 扩展中更新&启用

## 使用方法
```
// 数据表格中使用
$grid->column('video')->video();
$grid->column('audio')->audio();

// 设置服务器地址
$grid->column('video')->video('http://cdn.domain.com/');

// 高级自定义用法
$grid->column('video')->video(function (\Abovesky\DcatAdmin\MediaPlayer\Grid\VideoDisplayer $video){
    // 自定义弹窗标题
    $video->title('标题');
    // 自定义按钮文字
    $video->button('按钮文字');
    // 自定义按钮图标
    $video->icon('fa fa-play');
    // 自定义服务器地址
    $video->server('http://cdn.domain.com/');
    // 设置播放器设置
    $video->setControls(string $cover='', bool $screenshot=true);
});

// 数据详情中使用
$show->field('video')->video(string $server='', string $cover='', bool $screenshot=true);
$show->field('audio')->audio(string $server='', string $name='', string $artist='', string $cover='');
```


