# Dcat Admin 音视频预览扩展

[![](https://img.shields.io/packagist/v/zwping/dcat-media-player.svg)](https://packagist.org/packages/zwping/dcat-media-player)

#### 安装
```
composer require zwping/dcat-media-player
```

>具体安装方法请参考官方文档

#### 使用方法
```$xslt
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
});

// 数据详情中使用
$show->field('video')->video();
$show->field('audio')->audio();
```

#### License

Licensed under The [MIT License (MIT). ](https://github.com/dcat-admin-extensions/media-player/blob/master/LICENSE)


