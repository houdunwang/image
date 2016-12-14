<?php
/** .-------------------------------------------------------------------
 * |  Software: [HDCMS framework]
 * |      Site: www.hdcms.com
 * |-------------------------------------------------------------------
 * |    Author: 向军 <2300071698@qq.com>
 * |    WeChat: aihoudun
 * | Copyright (c) 2012-2019, www.houdunwang.com. All Rights Reserved.
 * '-------------------------------------------------------------------*/
namespace houdunwang\image;

use hdphp\kernel\ServiceProvider;

class ImageProvider extends ServiceProvider {

	//延迟加载
	public $defer = true;

	public function boot() {
		\Image::init( c( 'image' ) );
	}

	public function register() {
		$this->app->single( 'Image', function ( $app ) {
			return new Image( $app );
		} );
	}
}