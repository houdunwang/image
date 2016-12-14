# 图像处理

图片组件提供了缩略图、水印等图像处理功能。

##初始化

```
$obj = new \houdunwang\arr\Image();
$obj->init([
           	//水印字体(必填)
           	'font'       => '/resource/font/font.ttf',
           	//水印图像(必填)
           	'image'      => '/resource/images/water.png',
           	//位置  1~9九个位置  0为随机(选填)
           	'pos'        => 9,
           	//透明度(选填)
           	'pct'        => 60,
           	//压缩比(选填)
           	'quality'    => 80,
           	//水印文字(选填)
           	'text'       => 'houdunwang.com',
           	//文字颜色(选填)
           	'text_color' => '#f00f00',
           	//文字大小(选填)
           	'text_size'  => 12,
]);
```

##缩略图

**语法**

```
Image::thumb($file, $outFile, $thumbWidth, $thumbHeight, $thunbType);

$img                     			图片
$outFile                      	缩略图文件
$thumbWidth                   	缩略宽度
$thumbHeight                     	缩略高度
$thunbType                			缩略方式：
1: 固定宽度  高度自增    2: 固定高度  宽度自增  3: 固定宽度  高度裁切          
4: 固定高度  宽度裁切    5: 缩放最大边         6: 缩略图尺寸不变，自动裁切图片
 

```

**应用**

```
$obj->thumb('file.jpg','new.jpg',200,200,6);
```

##水印
**语法**

```
/**
* 水印处理
*
* @param string $img 原图像
* @param string $outImg 加水印后的图像
* @param string $pos 水印位置
* @param string $waterImg 水印图片
* @param string $pct 透明度
* @param string $text 文字水印内容
*
* @return bool
*/
public function water( $img, $outImg, $pos=null, $waterImg=null, $text=null, $pct=null )
```

**应用**

```
$obj->water('file.jpg', 'new.jpg');
```