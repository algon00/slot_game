<!DOCTYPE html>
<html lang="ja">
 
<head>
    <?php include_once('../common/config.php'); ?>
    <title>ゲーム画面 / スロットゲーム</title>
    <meta name="description" content=”ゲーム画面です">
</head>
<body class="game-page text-center">
    <div class="main text-center">
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <h1>スロットゲーム</h1>
        <div class="box-main">
            <div class="box">
                <div class="box-img">
                    <img id="saikoro1" src="../img/sai1_fkmhnd.png">
                </div>
            </div>
            <div class="box">
                <div class="box-img">
                    <img id="saikoro2" src="../img/sai1_fkmhnd.png">
                </div>
            </div>
            <div class="box">
                <div class="box-img">
                    <img id="saikoro3" src="../img/sai1_fkmhnd.png">
                </div>
            </div>
        </div>
        <div class="btn-box">
            <button class="btn" id="tag">サイコロをふる</button>
        </div>

        <div class="log">
            <a href="../controllers/sign-out.php">ログアウト</a>
        </div>
            

        <div id="saiten"></div>
            <script>
                var suzi=[]
                var img=new Array();
                img[0]=new Image();
                img[0]="../img/sai1_fkmhnd.png";
                img[1]=new Image();
                img[1]="../img/sai2_izaujk.png";
                img[2]=new Image();
                img[2]="../img/sai3_wwvtn8.png";
                img[3]=new Image();
                img[3]="../img/sai4_h9fhkf.png";
                img[4]=new Image();
                img[4]="../img/sai5_czmrc8.png";
                img[5]=new Image();
                img[5]="../img/sai6_n0mqlo.png";

                $('#tag').on('click', function() {
                    for (let i = 0; i < 3; i++) {
                        suzi.push(Math.floor(Math.random()*6)+0);    
                        console.log(suzi[i]);
                    }
                    switch(suzi[0]){
                            case 0:
                                document.getElementById('saikoro1').src=img[0];
                                break;
                            case 1:
                                document.getElementById('saikoro1').src=img[1];
                                break;
                            case 2:
                                document.getElementById('saikoro1').src=img[2];
                                break;
                            case 3:
                                document.getElementById('saikoro1').src=img[3];
                                break;
                            case 4:
                                document.getElementById('saikoro1').src=img[4];
                                break;
                            case 5:
                                document.getElementById('saikoro1').src=img[5];
                                break;
                    }
                    switch(suzi[1]){
                            case 0:
                                document.getElementById('saikoro2').src=img[0];
                                break;
                            case 1:
                                document.getElementById('saikoro2').src=img[1];
                                break;
                            case 2:
                                document.getElementById('saikoro2').src=img[2];
                                break;
                            case 3:
                                document.getElementById('saikoro2').src=img[3];
                                break;
                            case 4:
                                document.getElementById('saikoro2').src=img[4];
                                break;
                            case 5:
                                document.getElementById('saikoro2').src=img[5];
                                break;
                    }
                    switch(suzi[2]){
                            case 0:
                                document.getElementById('saikoro3').src=img[0];
                                break;
                            case 1:
                                document.getElementById('saikoro3').src=img[1];
                                break;
                            case 2:
                                document.getElementById('saikoro3').src=img[2];
                                break;
                            case 3:
                                document.getElementById('saikoro3').src=img[3];
                                break;
                            case 4:
                                document.getElementById('saikoro3').src=img[4];
                                break;
                            case 5:
                                document.getElementById('saikoro3').src=img[5];
                                break;
                    }
                    suzi.length =0; 
                });
            </script>   
        </div>
    </div>
</body>
</html>