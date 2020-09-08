<?php require_once('figyua.php');
	require_once('present.php');
	require_once('aoudio.php');
	require_once('review.php');
	require_once('user.php');

$shian=new Figyua("シアンの等身大フィギュア",10000,'image1.png',4," ￥オタクの場合60000",'あったか～い');
$tyoshi=new Figyua("ていと(生身)",1,'teito.jpg',3," ￥1円だと思った？残念！40000でした！",'セール中');
$maritenn=new Aoudio('マリ天1stアルバム',90000,'mariten.jpg',5,"無料！ほめて！",'mariten.mp3');
$dowaru=new Figyua("ドワルの喋るスポンジボブ",0,'mig.jpg',1," ￥無料じゃないんだよなあ～ 30000です(笑)","~恋人へのプレゼントに~");

$menus=array($shian,$tyoshi,$maritenn,$dowaru);

$user1=new User("hatiman","男");
$user2=new User("yui","女");
$user3=new User("yukino","女2");
$user4=new User("iroha","女3");

$users=array($user1,$user2,$user3,$user4,);

$review1=new Review($shian->getName(),$user1->getUserId(),"解体して遊ぶの楽しい。ただ声がキモいな");
$review2=new Review($tyoshi->getName(),$user2->getUserId(),"この人ゲームしかしないじゃん！マジありえないし！キモイ！");
$review3=new Review($maritenn->getName(),$user3->getUserId(),"アルバムと書いてあったのに1曲しかないのだけれど。どういうことかしら？");
$review4=new Review($dowaru->getName(),$user4->getUserId(),"先輩にプレゼントしたら超引かれたんですけど。責任とってくださいね？");
$review5=new Review($shian->getName(),$user4->getUserId(),"何ですかこの人形いきなり告ってきたんですけど人形とかありえないし声気持ち悪いしごめんなさい無理です");
$review6=new Review($tyoshi->getName(),$user3->getUserId(),"あなたはっきり喋りなさい。けど...楽しかったわ。またいつか、私を助けてね。");
$review7=new Review($maritenn->getName(),$user1->getUserId(),"テンションMAXで歌ってたら妹に見られた。死にたい。");
$review8=new Review($dowaru->getName(),$user2->getUserId(),"何これ超面白い！食器洗うの楽だし！でもドワルって誰なんだろう...");

$reviews=array($review1,$review2,$review3,$review4,$review5,$review6,$review7,$review8);

?>
