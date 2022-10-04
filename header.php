<?php
/*
Template Name: eブックスリニューアル
Template URI: http://localhost/wordpress_gifuebooks_local
Description: ebooksリニューアルのヘッダーファイルです
Author: 株式会社太洋社
Author URL: https://www.p-taiyosha.co.jp/
Version: 6.0
*/
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Pragma" content="no-cache"><!-- キャッシュを無効にする -->
	<meta http-equiv="Cache-Control" content="no-cache"><!-- キャッシュを無効にする -->
    <title><?php bloginfo( 'name'); ?></title>
		<meta name="description" content="岐阜県内の情報が電子書籍で読めるポータルサイト“Gifu ebooks（ギフイーブックス）”。自治体の情報を中心に「いつでも」「誰でも」「どこからでも」。明智光秀ゆかりの地・岐阜県は大河ドラマのロケ地であり、「麒麟がくる」の舞台になっています。岐阜県内の広報誌・観光・イベント・防災情報が無料閲覧できる岐阜イーブックス。">
		<?php wp_head(); ?>
</head>
<body>

	<header>
		<nav class="gebooks_nav_box">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><h1><img src="<?php echo get_template_directory_uri(); ?>/img/header/logo-w-1.png" alt="ギフイーブックスロゴ画像" width="342" height="70"></h1></a>
			<ul class="gebooks_nav">
				<li><a href="#"><p>Gifu ebooksとは</p></a></li>
				<li><a href="#"><p>掲載の方法</p></a></li>
				<li><a href="#"><p>お問い合せ</p></a></li>
			</ul>
			<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/header/mushimegane.png" alt="メインビジュアルモバイルパッド版" width="65" height="65"></a>
		</nav>
		
	</header>