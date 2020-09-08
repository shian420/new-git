<?php require_once('data.php');
?>

<!DOCTYPE html>
<html lang="ja">
<meta charset="utf-8">
<head>
<title>マリ天トップ</title>
<link rel="stylesheet" href="stylesheet.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/a1bcc1e98a.js" crossorigin="anonymous"></script>
</head>
<body>


<header>
  <div class="header-left">
    <span class="fas fa-bars"></span>
    <h1 class="hader-logo">マリ天市場<span class="header">.co.jp</span></h1>
    <p class="p1">お届け先 あなたはだ～れ？<br>
    <span class="zyusyo">572-0000</span></p>
  </div>

  <div class="header-midle">
    <?php
      $categories=array('ゲーム','マンガ','本','PC・周辺機器','マリゾンKindle','サウンド機器',
      'ていとの家の物
      ','音楽CD','デジタルミュージック','Androidアプリ','iphoneアクセサリー','偽グリーン'
      ,'クラシック','家電・カメラ','文房具・オフィス用品','辞書','ペット用品','ドラッグストア'
      ,'PCソフト','ベビー用品','DVD','ファッション',' メンズ',' レディース','服&ファッション小物'
      ,'おもちゃ','キッズ&ベビー','俺ガイル最終章おめ！','はめふら2期','スピーカー','イヤホン'
      ,'クレジットカード');
      ?>

      <select class="content-select" name="content">
        <option value="選択なし">すべて</option>
      <?php
      foreach($categories as $category){
      echo "<option value='{$category}'>{$category}</option>";
      }
       ?>
      </select>
    <input type="search" placeholder="キーワードを入力">
    <div class="search-box">
    <img src="../アイコン画像/kensaku.png" class="icon" alt="検索ボタン">
    </div>
    <div class="clear"></div>
    <nav>
        <ul>
          <li>マリ天ギフト券</li>
          <li>ランキング</li>
          <li>マリ天プライム</li>
          <li>キミストア</li>
          <li>カスタマーサービス</li>
          <li>クーポン</li>
          <li>本</li>
          <li>マリゾンKindle</li>
          <li>ていと</li>
          <li>山さん</li>
        </ul>
      </nav>
<div class="clear"></div>
  </div>

  <div class="header-menu-right">
    <li>名無し<br>
      <span class="header-list-right">アカウント&リスト   </span></li>
      <li>返品するな<br>
        <span class="header-list-right">注文履歴  </span></li>
        <li>絶対登録<br>
          <span class="header-list-right">プライム  </span></li>
          <li><img class="kart" src="../アイコン画像/kart.png" alt="カート">
            <span class="header-list-right">カート</span></li>
          </ul>
  </div>
  <div class="clear-left"></div>
<div class="clear"></div>

</header>
<p class="getCount">検索結果 <?php echo Menu::getCount() ?>件の不良品が見つかりました <span>"お金捨てたい病 騙されたい"</span>
</p>

<div class="wrapper">

  <?php
  $radios=array('ゲーム','マンガ','本','PC・周辺機器','マリゾンKindle','サウンド機器',
  'ていとの家の物
  ','音楽CD','デジタルミュージック','Androidアプリ','iphoneアクセサリー','偽グリーン'
  ,'クラシック','家電・カメラ','文房具・オフィス用品','辞書','ペット用品','ドラッグストア'
  ,'PCソフト','ベビー用品','DVD','ファッション',' メンズ',' レディース','服&ファッション小物'
  ,'おもちゃ','キッズ&ベビー','俺ガイル最終章おめ！','はめふら2期','スピーカー','イヤホン'
  ,'クレジットカード');
  ?>

.<div class="side-menu">
<ul class="radio-ul">
  <li class="radio-bold">ブランド</li>
  <?php
foreach ($radios as $radio):?>
  <li>
<input type="radio" name="radio" value="list">
<?php echo $radio ?></li>
<?php endforeach; ?>
</ul>
</div><!-- side-menu -->

<div class="container">

<div class="content-items">
  <?php foreach($menus as $menu):?>
<div class="content-item">
  <a href="show.php?name=<?php echo $menu->getName() ?>">
    <img src="<?php echo $menu->getImage() ?>" class="menu-image">
  </a>
<div class="menu-left">
<a href="show.php?name=<?php echo $menu->getName() ?>">

  <h3 class="item-name"><?php echo $menu->getName() ?></h3></a>
<?php if($menu instanceof Figyua): ?>
 <p class="item-type"><?php echo $menu->getType() ?></p>
<?php elseif($menu instanceof Present):?>
  <p class="item-type"><?php echo $menu->getLank() ?></p>
<?php elseif($menu instanceof Aoudio):?>
  <h5 class="sample-lisson">サンプル視聴↓</h5><audio  class="sound" src="<?php echo $menu->getAoudio() ?>" controls></audio>
<?php endif; ?>
  <a href="show.php?name=<?php echo $menu->getName() ?>">
    <h3 class="item-price">￥<?php echo number_format($menu->getTotalPrice()) ?><span class="zeikomi"> (税込価格)</span></h3></a>

</div><!-- menu-left -->
<div class="clear"></div>
</div><!-- content-item -->
<?php endforeach ?>
</div><!-- content-items -->
</div><!-- container -->




<div class="clear-left"></div>
<div class="clear"></div>

</div><!-- wrapper -->
<script src="script.js"></script>
<script src="java.js"></script>


</body>
</html>
