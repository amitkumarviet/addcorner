<?php

/* @var $this yii\web\View */
$this->title = Yii::t('app', Yii::$app->name);
?>


<?php //include('mobile-ajax.php');
   // $mobile=new Rechargemobile();
?>

        <!--<meta name="Description" content="Online Recharge for FULL TALKTIME, BOOSTER, SMS and 3G Packs. Experience yourself in 10 Seconds.">	
        <meta name="Keywords" content="online recharge,mobile recharge,prepaid recharge,easy recharge,e recharge,easy mobile recharge,online mobile recharge,online dth recharge,online prepaid recharge,online easy recharge,prepaid mobile recharge,all mobile recharge,tv recharge,3g recharge,dth recharge">
        <meta name="google-site-verification" content="uKiw0Q7JqQ_kLwlbe76dnpnJBVxIbDPFcriWWg6vOno">
        <meta name="msvalidate.01" content="ADFCA5F0AB573E981235BFCA1FCA3DF0">
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <meta name="robots" content="index,follow">-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <!--styles Start-->
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine:bold,bolditalic|Inconsolata:italic|Droid+Sans">
        <link href="#" type="image/x-icon" rel="shortcut icon">
        <link href="http://localhost/amit/b/css/bootstrap.css" rel="stylesheet">
        <!--<link href="http://localhost/amit/b/css/ycommon.css" rel="stylesheet">-->
        <!--[if IE 7>
          <link rel="stylesheet" href="./xcommon/font/css/font-ie7.min.css">
        <![endif]-->
        <!--[if lte IE 8]>
          <script src="./bootstrap/js/respond.min.js"></script>
        <![endif]-->
        <!--styles End-->
        <style class="firebugResetStyles" type="text/css" charset="utf-8">/* See license.txt for terms of usage */
            /** reset styling **/
            .firebugResetStyles {
                z-index: 2147483646 !important;
                top: 0 !important;
                left: 0 !important;
                display: block !important;
                border: 0 none !important;
                margin: 0 !important;
                padding: 0 !important;
                outline: 0 !important;
                min-width: 0 !important;
                max-width: none !important;
                min-height: 0 !important;
                max-height: none !important;
                position: fixed !important;
                transform: rotate(0deg) !important;
                transform-origin: 50% 50% !important;
                border-radius: 0 !important;
                box-shadow: none !important;
                background: transparent none !important;
                pointer-events: none !important;
                white-space: normal !important;
            }
            style.firebugResetStyles {
                display: none !important;
            }

            .firebugBlockBackgroundColor {
                background-color: transparent !important;
            }

            .firebugResetStyles:before, .firebugResetStyles:after {
                content: "" !important;
            }
            /**actual styling to be modified by firebug theme**/
            .firebugCanvas {
                display: none !important;
            }
            .firebugLayoutBox {
                width: auto !important;
                position: static !important;
            }

            .firebugLayoutBoxOffset {
                opacity: 0.8 !important;
                position: fixed !important;
            }

            .firebugLayoutLine {
                opacity: 0.4 !important;
                background-color: #000000 !important;
            }

            .firebugLayoutLineLeft, .firebugLayoutLineRight {
                width: 1px !important;
                height: 100% !important;
            }

            .firebugLayoutLineTop, .firebugLayoutLineBottom {
                width: 100% !important;
                height: 1px !important;
            }

            .firebugLayoutLineTop {
                margin-top: -1px !important;
                border-top: 1px solid #999999 !important;
            }

            .firebugLayoutLineRight {
                border-right: 1px solid #999999 !important;
            }

            .firebugLayoutLineBottom {
                border-bottom: 1px solid #999999 !important;
            }

            .firebugLayoutLineLeft {
                margin-left: -1px !important;
                border-left: 1px solid #999999 !important;
            }

            /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
            .firebugLayoutBoxParent {
                border-top: 0 none !important;
                border-right: 1px dashed #E00 !important;
                border-bottom: 1px dashed #E00 !important;
                border-left: 0 none !important;
                position: fixed !important;
                width: auto !important;
            }

            .firebugRuler{
                position: absolute !important;
            }

            .firebugRulerH {
                top: -15px !important;
                left: 0 !important;
                width: 100% !important;
                height: 14px !important;
                background: url("data:image/png,%89PNG%0D%0A%1A%0A%00%00%00%0DIHDR%00%00%13%88%00%00%00%0E%08%02%00%00%00L%25a%0A%00%00%00%04gAMA%00%00%D6%D8%D4OX2%00%00%00%19tEXtSoftware%00Adobe%20ImageReadyq%C9e%3C%00%00%04%F8IDATx%DA%EC%DD%D1n%E2%3A%00E%D1%80%F8%FF%EF%E2%AF2%95%D0D4%0E%C1%14%B0%8Fa-%E9%3E%CC%9C%87n%B9%81%A6W0%1C%A6i%9A%E7y%0As8%1CT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AATE9%FE%FCw%3E%9F%AF%2B%2F%BA%97%FDT%1D~K(%5C%9D%D5%EA%1B%5C%86%B5%A9%BDU%B5y%80%ED%AB*%03%FAV9%AB%E1%CEj%E7%82%EF%FB%18%BC%AEJ8%AB%FA'%D2%BEU9%D7U%ECc0%E1%A2r%5DynwVi%CFW%7F%BB%17%7Dy%EACU%CD%0E%F0%FA%3BX%FEbV%FEM%9B%2B%AD%BE%AA%E5%95v%AB%AA%E3E5%DCu%15rV9%07%B5%7F%B5w%FCm%BA%BE%AA%FBY%3D%14%F0%EE%C7%60%0EU%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5JU%88%D3%F5%1F%AE%DF%3B%1B%F2%3E%DAUCNa%F92%D02%AC%7Dm%F9%3A%D4%F2%8B6%AE*%BF%5C%C2Ym~9g5%D0Y%95%17%7C%C8c%B0%7C%18%26%9CU%CD%13i%F7%AA%90%B3Z%7D%95%B4%C7%60%E6E%B5%BC%05%B4%FBY%95U%9E%DB%FD%1C%FC%E0%9F%83%7F%BE%17%7DkjMU%E3%03%AC%7CWj%DF%83%9An%BCG%AE%F1%95%96yQ%0Dq%5Dy%00%3Et%B5'%FC6%5DS%95pV%95%01%81%FF'%07%00%00%00%00%00%00%00%00%00%F8x%C7%F0%BE%9COp%5D%C9%7C%AD%E7%E6%EBV%FB%1E%E0(%07%E5%AC%C6%3A%ABi%9C%8F%C6%0E9%AB%C0'%D2%8E%9F%F99%D0E%B5%99%14%F5%0D%CD%7F%24%C6%DEH%B8%E9rV%DFs%DB%D0%F7%00k%FE%1D%84%84%83J%B8%E3%BA%FB%EF%20%84%1C%D7%AD%B0%8E%D7U%C8Y%05%1E%D4t%EF%AD%95Q%BF8w%BF%E9%0A%BF%EB%03%00%00%00%00%00%00%00%00%00%B8vJ%8E%BB%F5%B1u%8Cx%80%E1o%5E%CA9%AB%CB%CB%8E%03%DF%1D%B7T%25%9C%D5(%EFJM8%AB%CC'%D2%B2*%A4s%E7c6%FB%3E%FA%A2%1E%80~%0E%3E%DA%10x%5D%95Uig%15u%15%ED%7C%14%B6%87%A1%3B%FCo8%A8%D8o%D3%ADO%01%EDx%83%1A~%1B%9FpP%A3%DC%C6'%9C%95gK%00%00%00%00%00%00%00%00%00%20%D9%C9%11%D0%C0%40%AF%3F%EE%EE%92%94%D6%16X%B5%BCMH%15%2F%BF%D4%A7%C87%F1%8E%F2%81%AE%AAvzr%DA2%ABV%17%7C%E63%83%E7I%DC%C6%0Bs%1B%EF6%1E%00%00%00%00%00%00%00%00%00%80cr%9CW%FF%7F%C6%01%0E%F1%CE%A5%84%B3%CA%BC%E0%CB%AA%84%CE%F9%BF)%EC%13%08WU%AE%AB%B1%AE%2BO%EC%8E%CBYe%FE%8CN%ABr%5Dy%60~%CFA%0D%F4%AE%D4%BE%C75%CA%EDVB%EA(%B7%F1%09g%E5%D9%12%00%00%00%00%00%00%00%00%00H%F6%EB%13S%E7y%5E%5E%FB%98%F0%22%D1%B2'%A7%F0%92%B1%BC%24z3%AC%7Dm%60%D5%92%B4%7CEUO%5E%F0%AA*%3BU%B9%AE%3E%A0j%94%07%A0%C7%A0%AB%FD%B5%3F%A0%F7%03T%3Dy%D7%F7%D6%D4%C0%AAU%D2%E6%DFt%3F%A8%CC%AA%F2%86%B9%D7%F5%1F%18%E6%01%F8%CC%D5%9E%F0%F3z%88%AA%90%EF%20%00%00%00%00%00%00%00%00%00%C0%A6%D3%EA%CFi%AFb%2C%7BB%0A%2B%C3%1A%D7%06V%D5%07%A8r%5D%3D%D9%A6%CAu%F5%25%CF%A2%99%97zNX%60%95%AB%5DUZ%D5%FBR%03%AB%1C%D4k%9F%3F%BB%5C%FF%81a%AE%AB'%7F%F3%EA%FE%F3z%94%AA%D8%DF%5B%01%00%00%00%00%00%00%00%00%00%8E%FB%F3%F2%B1%1B%8DWU%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*UiU%C7%BBe%E7%F3%B9%CB%AAJ%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5*%AAj%FD%C6%D4%5Eo%90%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5%86%AF%1B%9F%98%DA%EBm%BBV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%AD%D6%E4%F58%01%00%00%00%00%00%00%00%00%00%00%00%00%00%40%85%7F%02%0C%008%C2%D0H%16j%8FX%00%00%00%00IEND%AEB%60%82") repeat-x !important;
                border-top: 1px solid #BBBBBB !important;
                border-right: 1px dashed #BBBBBB !important;
                border-bottom: 1px solid #000000 !important;
            }

            .firebugRulerV {
                top: 0 !important;
                left: -15px !important;
                width: 14px !important;
                height: 100% !important;
                background: url("data:image/png,%89PNG%0D%0A%1A%0A%00%00%00%0DIHDR%00%00%00%0E%00%00%13%88%08%02%00%00%00%0E%F5%CB%10%00%00%00%04gAMA%00%00%D6%D8%D4OX2%00%00%00%19tEXtSoftware%00Adobe%20ImageReadyq%C9e%3C%00%00%06~IDATx%DA%EC%DD%D1v%A20%14%40Qt%F1%FF%FF%E4%97%D9%07%3BT%19%92%DC%40(%90%EEy%9A5%CB%B6%E8%F6%9Ac%A4%CC0%84%FF%DC%9E%CF%E7%E3%F1%88%DE4%F8%5D%C7%9F%2F%BA%DD%5E%7FI%7D%F18%DDn%BA%C5%FB%DF%97%BFk%F2%10%FF%FD%B4%F2M%A7%FB%FD%FD%B3%22%07p%8F%3F%AE%E3%F4S%8A%8F%40%EEq%9D%BE8D%F0%0EY%A1Uq%B7%EA%1F%81%88V%E8X%3F%B4%CEy%B7h%D1%A2E%EBohU%FC%D9%AF2fO%8BBeD%BE%F7X%0C%97%A4%D6b7%2Ck%A5%12%E3%9B%60v%B7r%C7%1AI%8C%BD%2B%23r%00c0%B2v%9B%AD%CA%26%0C%1Ek%05A%FD%93%D0%2B%A1u%8B%16-%95q%5Ce%DCSO%8E%E4M%23%8B%F7%C2%FE%40%BB%BD%8C%FC%8A%B5V%EBu%40%F9%3B%A72%FA%AE%8C%D4%01%CC%B5%DA%13%9CB%AB%E2I%18%24%B0n%A9%0CZ*Ce%9C%A22%8E%D8NJ%1E%EB%FF%8F%AE%CAP%19*%C3%BAEKe%AC%D1%AAX%8C*%DEH%8F%C5W%A1e%AD%D4%B7%5C%5B%19%C5%DB%0D%EF%9F%19%1D%7B%5E%86%BD%0C%95%A12%AC%5B*%83%96%CAP%19%F62T%86%CAP%19*%83%96%CA%B8Xe%BC%FE)T%19%A1%17xg%7F%DA%CBP%19*%C3%BA%A52T%86%CAP%19%F62T%86%CA%B0n%A9%0CZ%1DV%C6%3D%F3%FCH%DE%B4%B8~%7F%5CZc%F1%D6%1F%AF%84%F9%0F6%E6%EBVt9%0E~%BEr%AF%23%B0%97%A12T%86%CAP%19%B4T%86%CA%B8Re%D8%CBP%19*%C3%BA%A52huX%19%AE%CA%E5%BC%0C%7B%19*CeX%B7h%A9%0C%95%E1%BC%0C%7B%19*CeX%B7T%06%AD%CB%5E%95%2B%BF.%8F%C5%97%D5%E4%7B%EE%82%D6%FB%CF-%9C%FD%B9%CF%3By%7B%19%F62T%86%CA%B0n%D1R%19*%A3%D3%CA%B0%97%A12T%86uKe%D0%EA%B02*%3F1%99%5DB%2B%A4%B5%F8%3A%7C%BA%2B%8Co%7D%5C%EDe%A8%0C%95a%DDR%19%B4T%C66%82fA%B2%ED%DA%9FC%FC%17GZ%06%C9%E1%B3%E5%2C%1A%9FoiB%EB%96%CA%A0%D5qe4%7B%7D%FD%85%F7%5B%ED_%E0s%07%F0k%951%ECr%0D%B5C%D7-g%D1%A8%0C%EB%96%CA%A0%A52T%C6)*%C3%5E%86%CAP%19%D6-%95A%EB*%95q%F8%BB%E3%F9%AB%F6%E21%ACZ%B7%22%B7%9B%3F%02%85%CB%A2%5B%B7%BA%5E%B7%9C%97%E1%BC%0C%EB%16-%95%A12z%AC%0C%BFc%A22T%86uKe%D0%EA%B02V%DD%AD%8A%2B%8CWhe%5E%AF%CF%F5%3B%26%CE%CBh%5C%19%CE%CB%B0%F3%A4%095%A1%CAP%19*Ce%A8%0C%3BO*Ce%A8%0C%95%A12%3A%AD%8C%0A%82%7B%F0v%1F%2FD%A9%5B%9F%EE%EA%26%AF%03%CA%DF9%7B%19*Ce%A8%0C%95%A12T%86%CA%B8Ze%D8%CBP%19*Ce%A8%0C%95%D1ae%EC%F7%89I%E1%B4%D7M%D7P%8BjU%5C%BB%3E%F2%20%D8%CBP%19*Ce%A8%0C%95%A12T%C6%D5*%C3%5E%86%CAP%19*Ce%B4O%07%7B%F0W%7Bw%1C%7C%1A%8C%B3%3B%D1%EE%AA%5C%D6-%EBV%83%80%5E%D0%CA%10%5CU%2BD%E07YU%86%CAP%19*%E3%9A%95%91%D9%A0%C8%AD%5B%EDv%9E%82%FFKOee%E4%8FUe%A8%0C%95%A12T%C6%1F%A9%8C%C8%3D%5B%A5%15%FD%14%22r%E7B%9F%17l%F8%BF%ED%EAf%2B%7F%CF%ECe%D8%CBP%19*Ce%A8%0C%95%E1%93~%7B%19%F62T%86%CAP%19*Ce%A8%0C%E7%13%DA%CBP%19*Ce%A8%0CZf%8B%16-Z%B4h%D1R%19f%8B%16-Z%B4h%D1R%19%B4%CC%16-Z%B4h%D1R%19%B4%CC%16-Z%B4h%D1%A2%A52%CC%16-Z%B4h%D1%A2%A52h%99-Z%B4h%D1%A2%A52h%99-Z%B4h%D1%A2EKe%98-Z%B4h%D1%A2EKe%D02%5B%B4h%D1%A2EKe%D02%5B%B4h%D1%A2E%8B%96%CA0%5B%B4h%D1%A2E%8B%96%CA%A0e%B6h%D1%A2E%8B%96%CA%A0e%B6h%D1%A2E%8B%16-%95a%B6h%D1%A2E%8B%16-%95A%CBl%D1%A2E%8B%16-%95A%CBl%D1%A2E%8B%16-Z*%C3l%D1%A2E%8B%16-Z*%83%96%D9%A2E%8B%16-Z*%83%96%D9%A2E%8B%16-Z%B4T%86%D9%A2E%8B%16-Z%B4T%06-%B3E%8B%16-Z%B4T%06-%B3E%8B%16-Z%B4h%A9%0C%B3E%8B%16-Z%B4h%A9%0CZf%8B%16-Z%B4h%A9%0CZf%8B%16-Z%B4h%D1R%19f%8B%16-Z%B4h%D1R%19%B4%CC%16-Z%B4h%D1R%19%B4%CC%16-Z%B4h%D1%A2%A52%CC%16-Z%B4h%D1%A2%A52h%99-Z%B4h%D1%A2%A52h%99-Z%B4h%D1%A2EKe%98-Z%B4h%D1%A2EKe%D02%5B%B4h%D1%A2EKe%D02%5B%B4h%D1%A2E%8B%96%CA0%5B%B4h%D1%A2E%8B%96%CA%A0e%B6h%D1%A2E%8B%96%CA%A0e%B6h%D1%A2E%8B%16-%95a%B6h%D1%A2E%8B%16-%95A%CBl%D1%A2E%8B%16-%95A%CBl%D1%A2E%8B%16-Z*%C3l%D1%A2E%8B%16-Z*%83%96%D9%A2E%8B%16-Z*%83%96%D9%A2E%8B%16-Z%B4T%86%D9%A2E%8B%16-Z%B4T%06-%B3E%8B%16-Z%B4T%06-%B3E%8B%16-Z%B4h%A9%0C%B3E%8B%16-Z%B4h%A9%0CZf%8B%16-Z%B4h%A9%0CZf%8B%16-Z%B4h%D1R%19f%8B%16-Z%B4h%D1R%19%B4%CC%16-Z%B4h%D1R%19%B4%CC%16-Z%B4h%D1%A2%A52%CC%16-Z%B4h%D1%A2%A52h%99-Z%B4h%D1%A2%A52h%99-Z%B4h%D1%A2EKe%98-Z%B4h%D1%A2EKe%D02%5B%B4h%D1%A2EKe%D02%5B%B4h%D1%A2E%8B%96%CA0%5B%B4h%D1%A2E%8B%96%CA%A0e%B6h%D1%A2E%8B%96%CA%A0e%B6h%D1%A2E%8B%16-%95a%B6h%D1%A2E%8B%16-%95A%CBl%D1%A2E%8B%16-%95A%CBl%D1%A2E%8B%16-Z*%C3l%D1%A2E%8B%16-Z*%83%96%D9%A2E%8B%16-Z*%83%96%D9%A2E%8B%16-Z%B4T%86%D9%A2E%8B%16-Z%B4T%06-%B3E%8B%16-Z%B4%AE%A4%F5%25%C0%00%DE%BF%5C'%0F%DA%B8q%00%00%00%00IEND%AEB%60%82") repeat-y !important;
                border-left: 1px solid #BBBBBB !important;
                border-right: 1px solid #000000 !important;
                border-bottom: 1px dashed #BBBBBB !important;
            }

            .overflowRulerX > .firebugRulerV {
                left: 0 !important;
            }

            .overflowRulerY > .firebugRulerH {
                top: 0 !important;
            }

            /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
            .fbProxyElement {
                position: fixed !important;
                pointer-events: auto !important;
            }
        </style></head>
    <body class="" onload="selectOperator('Airtel');
            showTariff('Airtel', 'Chennai');">
        
        <div class="container">
            <div class="row">
                <!-- Modal Start-->
                <div aria-hidden="true" style="display: none;" class="modal" id="triselect">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <form role="form" class="triform">
                                    <div class="form-group">
                                        <label>Operator</label>
                                        <select class="form-control input-sm width180" id="trisprov">
                                          
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Location</label>
                                        <select class="form-control input-sm width180" id="triloc">
                                            <option selected="selected" value="Andhra Pradesh">Andhra Pradesh</option>
                                            <option value="Assam">Assam</option>
                                            <option value="Bihar and Jharkhand">Bihar and Jharkhand</option>
                                            <option value="Chennai">Chennai</option>
                                            <option value="Delhi">Delhi</option>
                                            <option value="Gujarat">Gujarat</option>
                                            <option value="Haryana">Haryana</option>
                                            <option value="Himachal Pradesh">Himachal Pradesh</option>
                                            <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                            <option value="Karnataka">Karnataka</option>
                                            <option value="Kerala">Kerala</option>
                                            <option value="Kolkata">Kolkata</option>
                                            <option value="Maharashtra and Goa">Maharashtra and Goa</option>
                                            <option value="MP and Chattisgarh">MP and Chattisgarh</option>
                                            <option value="Mumbai">Mumbai</option>
                                            <option value="North East">North East</option>
                                            <option value="Orissa">Orissa</option>
                                            <option value="Punjab">Punjab</option>
                                            <option value="Rajasthan">Rajasthan</option>
                                            <option value="Tamil Nadu">Tamil Nadu</option>
                                            <option value="UP East">UttarPradesh East</option>
                                            <option value="UP(West) and Uttarakhand">UP(West) and Uttarakhand</option>
                                            <option value="West Bengal">West Bengal</option>
                                        </select>
                                    </div>	
                                    <button type="button" class="btn btn-primary btn-xs tribtn" id="btntri" name="btntri" data-dismiss="modal" aria-hidden="true">Show Tariff</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal End-->
                <!--Middle Container Start-->
                <div class="col-md-12 middlecontainer">
                    <div class="row">
                        <!--<div class="col-md-12 hidden-xs pd0">
                            <div id="rcflow" class="rcfolw">
                                <ul class="nav nav-justified">
                                    <li id="menuselect" class="selectrcstep lipadding">
                                        <h1 class="h13-black" id="menusel">ezRecharge.in / <span class="label seoname">Online Recharge</span> <i class="icon-double-angle-right icon-large selectright"></i></h1>
                                    </li>
                                    <li id="menuconfirm" class="confirmrcstep lipadding">
                                        <h1 class="h13-nobold" id="confirmtxt"><i class="icon-star-half-empty icon-large"></i> Confirm Recharge Order <i class="icon-double-angle-right icon-large confirmright"></i></h1>
                                    </li>
                                    <li id="menufinish" class="finishstep lipadding">
                                        <i class="icon-thumbs-up icon-large"></i> <span>Finish !!!</span>
                                    </li>
                                </ul>
                            </div>
                        </div>-->
                        <div class="col-md-12 h405">
                            <div id="rcflowcontent" class="row rcflowcontent">
                                <div id="selectrc" class="col-md-12 firststep">
                                    <div class="row">
                                        <div class="col-md-4 commonlayer">
                                            <div class="col-md-12 rcmenu">
                                                <ul id="rctab" class="nav nav-tabs">
                                                    <li class="active" id="pretab">
                                                        <a href="#prerc" data-toggle="tab">
                                                            <!--<i class="icon-signal icon-2x"></i>--><span class="postop">Prepaid Recharge</span>
                                                        </a>
                                                    </li>
                                                    <li class="" id="posttab">
                                                        <a href="#postrc" data-toggle="tab">
                                                            <!--<i class="icon-list-alt icon-2x"></i>--> <span class="postop">Postpaid Bill</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-content content">
                                                <!-- Prepaid Recharge Start-->
                                                <div class="tab-pane menucontent active" id="prerc">
                                                    <ul id="prerctabs" class="nav nav-pills">
                                                        <li class="active" id="prercmobpill">
                                                            <a href="#prercmob" data-toggle="pill">
                                                                <!--<i class="icon-mobile-phone icon-2x"></i>--> <span class="postop">Mobile</span>
                                                            </a>
                                                        </li>
                                                        <li class="" id="prercdthpill">
                                                            <a href="#prercdth" data-toggle="pill">
                                                                <!--<i class="icon-desktop icon-2x"></i>--> <span class="postop">DTH</span>
                                                            </a>
                                                        </li>
                                                        <li class="" id="prercdcpill">
                                                            <a href="#prercdc" data-toggle="pill">
                                                                <!--<i class="icon-rss icon-2x"></i>--> <span class="postop">Data Card</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="pill-content innercontent">
                                                        <span style="display: none;" id="prercerror" class="label label-danger ezerror">Mobile Number cannot be empty</span>
                                                        <div class="pill-pane active" id="prercmob">
                                                            <form role="form" class="rcform">
                                                                <div class="form-group">
                                                                    <label for="premobnum">Mobile Number</label>
                                                                    <input style="" class="form-control input-sm" id="premobnum" name="premobnum" placeholder="Enter Mobile Number" onkeyup="fetchOperator('premobnum');" data-mask="9999999999" type="text">	
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="premobamt">Amount</label>
                                                                    <input value="46" style="" class="form-control input-sm" id="premobamt" name="premobamt" placeholder="Enter Amount" data-mask="99?99" type="text">
                                                                    <input value="Delhi" id="premobloc" name="premobloc" type="hidden">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="premobsprov">Operator</label>
                                                                    <select style="" class="form-control" id="premobsprov" name="premobsprov" onclick="rcType();">
                                                                        <option value="">-----Select Operator-----</option>
                                                                           <? //=$mobile->fetchoperators(); ?>
                                                                    </select>
                                                                    <div style="display: none;" id="rctype" class="selrctype">
                                                                        <input value="normal" name="rctypes" id="normal" checked="checked" type="radio"> <span class="seltypeopt"> Top up</span> <br> <span class="seltypeoptinfo">TalkTime Recharge</span><br>
                                                                        <input value="Special" name="rctypes" id="special" type="radio"><span class="seltypeopt"> Special Recharge</span> <br> <span class="seltypeoptinfo">Booster,SMS,2G,3G Data</span><br>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="pill-pane" id="prercdth">
                                                            <form role="form" class="rcform">
                                                                <div class="form-group">
                                                                    <label for="predthid">Subscriber ID</label>
                                                                    <input class="form-control input-sm" id="predthid" name="predthid" placeholder="Enter Subscriber ID" data-mask="99999999?9999" type="text">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="predthamt">Amount</label>
                                                                    <input class="form-control input-sm" id="predthamt" name="predthamt" placeholder="Enter Amount" data-mask="99?99" type="text">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="predthsprov">Operator</label>
                                                                    <select class="form-control" id="predthsprov" name="predthsprov">
                                                                        <option selected="selected" value="">-----Select Operator-----</option> 
                                                                        <option value="TataSKY">TataSKY</option><option value="DishTV">DishTV</option><option value="BigTV-Reliance">BigTV-Reliance</option><option value="VideoconD2H">VideoconD2H</option><option value="DigitalTV-Airtel">DigitalTV-Airtel</option><option value="SunDirectDTH">SunDirectDTH</option>																	</select>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="pill-pane" id="prercdc">
                                                            <form role="form" class="rcform">
                                                                <div class="form-group">
                                                                    <label for="predcnum">Data Card Number</label>
                                                                    <input class="form-control input-sm" id="predcnum" name="predcnum" placeholder="Enter Data Card Number" data-mask="9999999999" type="text">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="predcamt">Amount</label>
                                                                    <input class="form-control input-sm" id="predcamt" name="predcamt" placeholder="Enter Amount" data-mask="99?99" type="text">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="predcsprov">Operator</label>
                                                                    <select class="form-control" id="predcsprov" name="predcsprov">
                                                                        <option selected="selected" value="">-----Select Operator-----</option> 
                                                                        <option value="RelianceNetconnect">RelianceNetconnect</option><option value="TataPhotonPlus">TataPhotonPlus</option><option value="TataWhiz">TataWhiz</option><option value="Idea-NetSetter">Idea-NetSetter</option><option value="Vodafone">Vodafone</option><option value="Aircel">Aircel</option><option value="MTS">MTS</option>																	</select>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Prepaid Recharge End-->
                                                <!-- Postpaid Bill Start-->
                                                <div class="tab-pane menucontent" id="postrc">
                                                    <ul id="postrctabs" class="nav nav-pills">
                                                        <li class="active" id="postrcmobpill">
                                                            <a href="#postrcmob" data-toggle="pill">
                                                                <!--<i class="icon-mobile-phone icon-2x"></i>-->
                                                                <span class="postop">Mobile</span>
                                                            </a>
                                                        </li>
                                                        <li class="" id="postrcdthpill">
                                                            <a href="#postrcln" data-toggle="pill">
                                                                <!--<i class="icon-phone icon-2x"></i>--> <span class="postop">Landline</span>
                                                            </a>
                                                        </li>
                                                        <li class="" id="postrcdcpill">
                                                            <a href="#postrcdc" data-toggle="pill">
                                                                <!--<i class="icon-rss icon-2x"></i>--> <span class="postop">DataCard</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="pill-content innercontent">
                                                        <span style="display: none;" id="postrcerror" class="label label-danger ezerror">Invalid Recharge Request...</span>
                                                        <div class="pill-pane active" id="postrcmob">
                                                            <form role="form" class="rcform">
                                                                <div class="form-group">
                                                                    <label for="postmobnum">Mobile Number</label>
                                                                    <input class="form-control input-sm" id="postmobnum" name="postmobnum" placeholder="Enter Mobile Number" data-mask="9999999999" type="text">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="postmobamt">Amount</label>
                                                                    <input class="form-control input-sm" id="postmobamt" name="postmobamt" placeholder="Enter Amount" data-mask="99?99" type="text">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="postmobsprov">Operator</label>
                                                                    <select class="form-control" id="postmobsprov" name="postmobsprov">
                                                                        <option selected="selected" value="">-----Select Operator-----</option> 
                                                                        <option value="Airtel Postpaid">Airtel Postpaid</option><option value="Vodafone Postpaid">Vodafone Postpaid</option><option value="BSNL Postpaid">BSNL Postpaid</option><option value="IDEA Postpaid">IDEA Postpaid</option><option value="Reliance Postpaid">Reliance Postpaid</option><option value="Docomo Postpaid">Docomo Postpaid</option>																	</select>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="pill-pane" id="postrcln">
                                                            <form role="form" class="rcform">
                                                                <div class="form-group">
                                                                    <label for="postlnnum">Land Line Number</label>
                                                                    <input class="form-control input-sm" id="postlnnum" name="postlnnum" placeholder="Enter Land Line Number" data-mask="99999999?999" type="text">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="postlnamt">Amount</label>
                                                                    <input class="form-control input-sm" id="postlnamt" name="postlnamt" placeholder="Enter Amount" data-mask="99?99" type="text">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="postlnsprov">Operator</label>
                                                                    <select class="form-control" id="postlnsprov" name="postlnsprov">
                                                                        <option selected="selected" value="">-----Select Operator-----</option> 
                                                                        <option value="BSNL Landline">BSNL Landline</option><option value="Airtel Landline">Airtel Landline</option><option value="Reliance Landline">Reliance Landline</option><option value="MTNL Delhi">MTNL Delhi</option><option value="Docomo Landline">Docomo Landline</option>																	</select>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="pill-pane" id="postrcdc">
                                                            <form role="form" class="rcform">
                                                                <div class="form-group">
                                                                    <label for="postdcnum">Data Card / Account Number</label>
                                                                    <input class="form-control input-sm" id="postdcnum" name="postdcnum" placeholder="Data Card / Account Number" data-mask="999999?9999999" type="text">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="postdcamt">Amount</label>
                                                                    <input class="form-control input-sm" id="postdcamt" name="postdcamt" placeholder="Enter Amount" data-mask="99?99" type="text">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="postdcsprov">Operator</label>
                                                                    <select class="form-control" id="postdcsprov" name="postdcsprov">
                                                                        <option selected="selected" value="">-----Select Operator-----</option> 
                                                                        <option value="Tikona">Tikona</option>																	</select>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Recharge Button Start-->
                                            <div class="col-md-12 txtright">
                                                <button type="submit" class="btn btn-primary" id="dorecharge"><i class="icon-credit-card icon-large"></i> Recharge</button>
                                            </div>
                                            <!-- Recharge Button End-->
                                        </div>
                                        <!-- Tariff content Start-->
                                        <div class="col-md-8 tricontainer">
                                            <div class="row">
                                                <div class="col-md-12 tricontinner">
                                                    <!--<div class="row">
                                                        <div class="col-md-8">
                                                            <h1 class="trihead" id="trioptloc" style="font-size:14px;font-weight:bold;margin-top:5px;">Aircel Online Recharge For Delhi</h1>
                                                        </div>
                                                        <div class="col-md-4 txtright pdright0">
                                                            <a type="submit" class="btn btn-primary btn-xs" data-toggle="modal" href="#triselect">Choose Tariff </a>
                                                        </div>
                                                    </div>-->
                                                </div>
                                                <div class="col-md-12 pd0" id="tariffdata"><div class="row">
                                                        <div class="col-md-12" style="background-color:#f2f2f2;">
                                                            <ul class="nav nav-tabs" role="tablist">
                                                                <li class="" style="display:none" id="lastRCpill"><a href="#lastRC" data-toggle="tab">Last Recharges</a></li>
                                                                <li class="" id="fttpill"><a href="#FTT" data-toggle="tab">Full TalkTime</a></li>
                                                                <li class=""><a href="#topup" data-toggle="tab">Topup</a></li>
                                                                <li class=""><a href="#sms" data-toggle="tab">SMS</a></li>
                                                                <li class=""><a href="#data" data-toggle="tab">2G/3G Data</a></li>
                                                                <li class="active"><a href="#booster" data-toggle="tab">Booster</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-12" style="border:1px solid #F2f2f2;border-top:0px;padding:0px;">
                                                            <div class="tab-content">
                                                                <div role="tabpanel" class="tab-pane" id="FTT" style="min-height:286px;max-height:286px;overflow:auto;">
                                                                    <table class="table table-hover" style="margin-bottom:0px;">
                                                                        <thead style="background-color:#FFFBEB;">
                                                                            <tr><th style="border-bottom:1px;width:67px;"></th>
                                                                                <th style="border-bottom:1px;">MRP</th>
                                                                                <th style="border-bottom:1px;">Talktime</th>
                                                                                <th style="border-bottom:1px;">Validity</th>
                                                                                <th style="border-bottom:1px;">Description</th>
                                                                            </tr></thead>
                                                                        <tbody id="tri-FTT">
                                                                            <tr id="FTT1" onclick="SelectTriAmount(this.id);" onmouseover="trihover(this.id)" onmouseout="trihoverout(this.id)" style="cursor: pointer;">
                                                                                <td style="text-align:center;">
                                                                                    <button id="pointFTT1" style="display: none;" class="btn btn-primary btn-xs"><i class="icon-reply"></i> Pick</button>
                                                                                </td>
                                                                                <td id="amtFTT1">26</td>
                                                                                <td id="talk1">26</td>
                                                                                <td id="valid1">3 days</td>
                                                                                <td id="info1">15p/sms (L/|N) for 3 days</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div><div role="tabpanel" class="tab-pane" id="topup" style="min-height:286px;max-height:286px;overflow:auto;">
                                                                    <table class="table table-hover" style="margin-bottom:0px;">
                                                                        <thead style="background-color:#FFFBEB;">
                                                                            <tr><th style="border-bottom:1px;width:67px;"></th>
                                                                                <th style="border-bottom:1px;">MRP</th>
                                                                                <th style="border-bottom:1px;">Talktime</th>
                                                                                <th style="border-bottom:1px;">Validity</th>
                                                                                <th style="border-bottom:1px;">Description</th>
                                                                            </tr></thead>
                                                                        <tbody id="tri-topup">
                                                                            <tr id="topup1" onclick="SelectTriAmount(this.id);" onmouseover="trihover(this.id)" onmouseout="trihoverout(this.id)" style="cursor: pointer;">
                                                                                <td style="text-align:center;">
                                                                                    <button id="pointtopup1" style="display: none;" class="btn btn-primary btn-xs"><i class="icon-reply"></i> Pick</button>
                                                                                </td>
                                                                                <td id="amttopup1">10</td>
                                                                                <td id="talk1">7.9</td>
                                                                                <td id="valid1">-</td>
                                                                                <td id="info1"><h1 style="font-size:11px;font-weight:bold;margin:0;color:#CC3366;">Aircel Online Recharge - TOPUP</h1></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div><div role="tabpanel" class="tab-pane" id="sms" style="min-height:286px;max-height:286px;overflow:auto;">
                                                                    <table class="table table-hover" style="margin-bottom:0px;">
                                                                        <thead style="background-color:#FFFBEB;">
                                                                            <tr><th style="border-bottom:1px;width:67px;"></th>
                                                                                <th style="border-bottom:1px;">MRP</th>
                                                                                <th style="border-bottom:1px;">Talktime</th>
                                                                                <th style="border-bottom:1px;">Validity</th>
                                                                                <th style="border-bottom:1px;">Description</th>
                                                                            </tr></thead>
                                                                        <tbody id="tri-sms">
                                                                            <tr id="sms1" onclick="SelectTriAmount(this.id);" onmouseover="trihover(this.id)" onmouseout="trihoverout(this.id)" style="cursor:pointer;">
                                                                                <td style="text-align:center;">
                                                                                    <button id="pointsms1" style="display:none;" class="btn btn-primary btn-xs"><i class="icon-reply"></i> Pick</button>
                                                                                </td>
                                                                                <td id="amtsms1">19</td>
                                                                                <td id="talk1">0</td>
                                                                                <td id="valid1">30 days</td>
                                                                                <td id="info1">200 L/N SMS , 20 p/min A2A Night Calling (11pm to 6 am)</td>
                                                                            </tr>
                                                                          </tbody>
                                                                    </table>
                                                                </div><div role="tabpanel" class="tab-pane" id="data" style="min-height:286px;max-height:286px;overflow:auto;">
                                                                    <table class="table table-hover" style="margin-bottom:0px;">
                                                                        <thead style="background-color:#FFFBEB;">
                                                                            <tr><th style="border-bottom:1px;width:67px;"></th>
                                                                                <th style="border-bottom:1px;">MRP</th>
                                                                                <th style="border-bottom:1px;">Talktime</th>
                                                                                <th style="border-bottom:1px;">Validity</th>
                                                                                <th style="border-bottom:1px;">Description</th>
                                                                            </tr></thead>
                                                                        <tbody id="tri-data">
                                                                            <tr id="data1" onclick="SelectTriAmount(this.id);" onmouseover="trihover(this.id)" onmouseout="trihoverout(this.id)" style="cursor: pointer;">
                                                                                <td style="text-align:center;">
                                                                                    <button id="pointdata1" style="display: none;" class="btn btn-primary btn-xs"><i class="icon-reply"></i> Pick</button>
                                                                                </td>
                                                                                <td id="amtdata1">14</td>
                                                                                <td id="talk1">0</td>
                                                                                <td id="valid1">28 days</td>
                                                                                <td id="info1">100 FB usage post usage charging 1 paise/ 10 KB. Activation codes: *121*114#</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div><div role="tabpanel" class="tab-pane active" id="booster" style="min-height:286px;max-height:286px;overflow:auto;">
                                                                    <table class="table table-hover" style="margin-bottom:0px;">
                                                                        <thead style="background-color:#FFFBEB;">
                                                                            <tr><th style="border-bottom:1px;width:67px;"></th>
                                                                                <th style="border-bottom:1px;">MRP</th>
                                                                                <th style="border-bottom:1px;">Talktime</th>
                                                                                <th style="border-bottom:1px;">Validity</th>
                                                                                <th style="border-bottom:1px;">Description</th>
                                                                            </tr></thead>
                                                                        <tbody id="tri-booster">
                                                                            <tr id="booster1" onclick="SelectTriAmount(this.id);" onmouseover="trihover(this.id)" onmouseout="trihoverout(this.id)" style="cursor: pointer;">
                                                                                <td style="text-align:center;">
                                                                                    <button id="pointbooster1" style="display: none;" class="btn btn-primary btn-xs"><i class="icon-reply"></i> Pick</button>
                                                                                </td>
                                                                                <td id="amtbooster1">11</td>
                                                                                <td id="talk1">0</td>
                                                                                <td id="valid1">14 days</td>
                                                                                <td id="info1">All Local A-A @ 10p/min</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12" style="border:1px solid #F2f2f2;background-color:#f2f2f2;border-top:1px solid #CCCCCC;padding:2px 15px">
                                                            <span class="cltom">Disclaimer:</span> These are indicative plans
                                                            only. For more precise details, please contact your operator before 
                                                            doing recharge. We are not responsible/liable incase if you do not get 
                                                            the specified benefits.
                                                        </div>
                                                    </div></div>
                                            </div>
                                        </div>
                                        <!-- Tariff content End-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Middle Container End--> 

            </div>
        </div>
        <!--Footer Container End-->
    </div>
</div>
<!--Main Container End-->
<!--javascript Start -->	
<script src="/amit/b/css/analytics.js" async=""></script>
<script src="/amit/b/css/jquery.js"></script>
<script src="/amit/b/css/bootstrap.js"></script>
<script src="/amit/b/css/bootstrap-inputmask.js"></script>
<script src="/amit/b/css/index.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js"></script>
<script type="text/javascript">
  WebFont.load({
    google: {
      families: ['Cantarell']
    }
  });
</script>
<style type="text/css">
  .wf-loading h1 { visibility: hidden; }
  .wf-active h1, .wf-inactive h1 { 
    visibility: visible; font-family: 'Cantarell'; 
  }
</style>
<!-- OLD CODE
<script type="text/javascript">

var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-12893494-2']);
_gaq.push(['_setDomainName', 'ezrecharge.in']);
_gaq.push(['_trackPageview']);

(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>
-->
<script>
        /*
         (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
         (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
         m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
         })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
         
         ga('create', 'UA-12893494-2', 'auto');
         ga('send', 'pageview');
         */
</script>		<a href="https://plus.google.com/+ezrecharge" rel="publisher"></a>
<!--javascript End -->	

</body></html>
<div class="site-index">

    <div class="jumbotron">
        <!--<h1>Congratulations!</h1>

        <p class="lead">You have successfully installed Yii2 improved application template</p>

        <p><a class="btn btn-lg btn-success" href="http://www.freetuts.org/tutorial/view?id=6">Read our tutorial</a></p>-->
    </div>

    <div class="body-content">


        <div class="row">
            <!--<div class="col-lg-3">
                <h3>Yii documentation</h3>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-3">
                <h3>Yii forum</h3>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-3">
                <h3>Yii extensions</h3>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
            <div class="col-lg-3">
                <h3>Freetuts.org</h3>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.freetuts.org/">Freetuts.org &raquo;</a></p>
            </div>-->
        </div>

    </div>
</div>

