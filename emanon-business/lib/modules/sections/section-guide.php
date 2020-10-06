<?php
/**
* Solution Section
* @package WordPress
* @subpackage Emanon_Business
* @since Emanon Business 1.0
*/
	$solution_section_title = get_theme_mod( 'solution_section_title', '' );
	$solution_section_description = get_theme_mod( 'solution_section_description', '' );
?>
<?php if( is_front_page() && !is_paged() ) :?>
<!--solution section-->
<div id="solution-section" class="eb-solution-section angle">
	<div class="container inner">
		<div class="solution-header wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
		<a name="guide"></a>
			<h2>忍者エクスプレスのサービス一覧</h2>
		</div>
		<div class="clearfix">
			<div class="col6 first">
				<div class="import-guide-box">
					<div class="box-title">輸入プラン</div>
					<p style="text-align: center;"><span style="font-size: 42pt;"><i class="fa fa-plane"><span style="color: transparent; display: none;">icon-android</span></i></span></p>
					<div class="import-export-guide-box-inner">
						<span class="under-yellow">輸入プランは<font color="#ff6060" size="4"><b>「アメリカ」から「日本」向け</b></font>のお荷物をお届けいたします。</span>アメリカ国内で購入された商品を忍者エクスプレスがご指定の日本の住所までお届けいたします。購入代行も承ります。
						<div class="import-export-guide-box">
						<ul>
							<li>・月会費：$0～</li>
							<li>・国際送料：$0~</li>
							<li>・会員マイページ上で荷物の入出荷状況を一括確認</li>
						</ul>
						</div>
						<center><a href="http://localhost/ninja-express-test/guide/import-guide/" class="btn-sticky">詳しく見る</a></center>
					</div>
				</div>
			</div>
			<div class="col6">
				<div class="export-guide-box">
					<div class="box-title">輸出プラン</div>
						<p style="text-align: center;"><span style="font-size: 42pt;"><i class="fa fa-cubes"><span style="color: transparent; display: none;">icon-android</span></i></span></p>
						<div class="import-export-guide-box-inner">
						<span class="under-yellow">輸出プランは<font color="#ff6060" size="4"><b>「日本」から「アメリカ」向け</b></font>のお荷物をお届けいたします。</span>ご指定いただい日本の住所へ忍者エクスプレスが直接集荷にお伺いします。US AmazonへFBA納品ももちろん対応可能！
						<div class="import-export-guide-box">
						<ul>
							<li>・月会費：¥0～</li>
							<li>・国際送料：¥0~</li>
							<li>・ご指定された日本国内の住所まで直接集荷！</li>
						</ul>
						</div>
						<center><a href="http://localhost/ninja-express-test/guide/export-guide/" class="btn-sticky">詳しく見る</a></center>
					</div>
				</div>
			</div>
		</div>
		
		<div class="box-title-Midstream-red">
			<span class="box-title"><i class="fa fa-exclamation-triangle"></i>注意</span>
			<b>※<font color="#ff6060" size="4">輸入プラン</font>と<font color="#ff6060" size="4">輸出プラン</font>、それぞれでアカウントの登録が必要です。</b>
			<p>輸入プランと輸出プランどちらもご利用される場合は、<span class="under-yellow">それぞれでアカウントの取得が必要です</span>。</p>
			<p>どちらか1つで両プランを利用することはできませんので、お間違いのないようご登録をお願いいたします。</p>
		</div>
	</div>
</div>
<!--end solution section-->
<?php endif; ?>