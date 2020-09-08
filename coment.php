
<!DOCTYPE html>
<html lang="ja">
<meta charset="utf-8">
<head>
<title>マリ天トップ</title>
<link rel="stylesheet" href="stylesheet.css">
<script src="https://kit.fontawesome.com/a1bcc1e98a.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

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
<div class="review-write">
  <form enctype="multipart/form-data" action="show.php" method="post">
    <input type="file" name="image" accept=".png, .jpg, jpeg" required>
    <input type="text" name="name" placeholder="名前を入力してください" maxlength="20" required>
    <textarea name="review" placeholder="ここに愚痴を書いてください" required></textarea>
    <input type="submit" value="送信">
  </form>
</div><!-- review-write -->

  <script src="script.js"></script>
  <script src="java.js"></script>


  </body>
  </html>
