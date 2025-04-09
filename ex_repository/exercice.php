<?php 
require_once("UtilisateurRepository.php");
require_once("SectionRepository.php");
$contrat = new UtilisateurRepository();
$contratou = new SectionRepository();
$section = array("designation"=>"GL", "description"=>"touskié formatique");
$etudiant1 = array("name"=>"rami", "birthday"=>'2025-04-05', "image"=>"https://www.bing.com/images/search?view=detailV2&ccid=G3uMMhck&id=2BC472AAEF2022DF0D1230B5BA9BA69BF6430D12&thid=OIP.G3uMMhckz6dHCR0-x77krAHaLH&mediaurl=https%3a%2f%2fwww.newkidscenter.com%2fimages%2f10400996%2fimage005.jpg&cdnurl=https%3a%2f%2fth.bing.com%2fth%2fid%2fR.1b7b8c321724cfa747091d3ec7bee4ac%3frik%3dEg1D9pumm7q1MA%26pid%3dImgRaw%26r%3d0&exph=1200&expw=800&q=Cute+Newborn&simid=608011827929945150&FORM=IRPRST&ck=9578ADAC12759562190EF46F986608A8&selectedIndex=4&itb=0", "section"=>1111);
$etudiant2 = array("name"=>"sami", "birthday"=>'2025-04-04', "image"=>"https://www.bing.com/images/search?view=detailV2&ccid=vxWQRLqO&id=202878481330CB399406D782E938CB6AEBAE15DA&thid=OIP.vxWQRLqOYRPngEyMPMRpsgHaFS&mediaurl=https%3a%2f%2f4.bp.blogspot.com%2f-CmVyHAx39BI%2fT_0frqIleHI%2fAAAAAAAAFn4%2fSi8wCidYiIk%2fs1600%2fCute%2bnewborn%2bbaby%2bpictures.jpg&cdnurl=https%3a%2f%2fth.bing.com%2fth%2fid%2fR.bf159044ba8e6113e7804c8c3cc469b2%3frik%3d2hWu62rLOOmC1w%26pid%3dImgRaw%26r%3d0&exph=571&expw=800&q=Cute+Newborn&simid=608019485865875577&FORM=IRPRST&ck=09E869CAC28B5BC85EE140C096DF845E&selectedIndex=17&itb=0", "section"=>2222);
//Du code exécuté une seule fois
 $contrat->create($etudiant2);
// $contratou->create($section);
//$contrat->create($etudiant2);
// print_r($contrat->findAll());
print_r($contrat->findAll());
$contrat->delete(11);
print_r($contrat->findAll());
// echo 'pause <br>';
// print_r($contratou->findAll());
?>