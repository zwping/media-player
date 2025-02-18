<?php
/*
 * @Author       : zwping
 * @Date         : 2023-12-22 15:29:13
 * @LastEditors  : zwping
 * @LastEditTime : 2023-12-22 15:46:07
 * @Description  : dcat-admin扩展中方法 自动补全
 * Copyright (c) 2023 by zwping, All Rights Reserved. 
 */

 namespace Dcat\Admin\Grid {

    /**
     * 简单使用
     * $grid->column('video')->video();
     * 设置服务器地址
     * $grid->column('video')->video('http://cdn.domain.com/');
     * 高级自定义用法
     * $grid->column('video')->video(function (\Abovesky\DcatAdmin\MediaPlayer\Grid\VideoDisplayer $video){
     *     // 自定义弹窗标题
     *     $video->title('标题');
     *     // 自定义按钮文字
     *     $video->button('按钮文字');
     *     // 自定义按钮图标
     *     $video->icon('fa fa-play');
     *     // 自定义服务器地址
     *     $video->server('http://cdn.domain.com/');
     *     // 设置播放器设置
     *     $video->setControls(string $cover='', bool $screenshot=true);
     *     // 音频播放器设置
     *     $audio->setControls(string $name='', string $artist='', string $cover='');
     * });
     * @method \Abovesky\DcatAdmin\MediaPlayer\Grid\VideoDisplayer video()
     * @method \Abovesky\DcatAdmin\MediaPlayer\Grid\AudioDisplayer audio()
     */
    class Column { }

 }

 namespace Dcat\Admin\Show {

    /**
     * @method \Abovesky\DcatAdmin\MediaPlayer\Show\VideoField video(string $server='', string $cover='', bool $screenshot=true)
     * @method \Abovesky\DcatAdmin\MediaPlayer\Show\AudioField audio(string $server='', string $name='', string $artist='', string $cover='')
     */
    class Field { }
    
 }
