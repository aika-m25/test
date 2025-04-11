<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>diworksblog 掲示板</title>
    <link rel="stylesheet" type="text/css"href="style.css">
</head>

<body>
    <?php
    mb_internal_encoding("utf8");
    $PDO=new PDO("mysql:dbname=lesson01;host=localhost;","root","");
    $stmt=$PDO->query("select * from diworks_keijiban");
    ?>

    <p><img src="diblog_logo.jpg"></p>
    <header>
        <ul>
            <li>トップ</li>
            <li>プロフィール</li>
            <li>D.I.Blogについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>
        </ul>
    </header>
    <main>
        <div class="main-container"></div>
        <div class="left">
            <h2>プログラミングに役立つ掲示板</h2>
            <h1>入力フォーム</h1>
            <form method="post" action="insert.php">
                <div>
                    <label>ハンドルネーム</label><br>
                    <input type="text" class="text" size="35" name="handlename" required>
                </div>
                <div>
                    <label>タイトル</label>
                    <br>
                    <input type="text" class="text" size="35" name="title" required>
                </div>
                <div>
                    <label>コメント</label>
                    <br>
                    <textarea cols="35" rows="7" name="comments" required></textarea>
                </div>
                <div>
                    <input type="submit" class="submit" value="投稿する">
                </div>
            </form>
            
            <?php
                while($row = $stmt->fetch()){
                    echo"<div class='title_box'>";
                    echo"<h3>".$row['title']."</h3>";
                    echo"<div class='contents'>";
                    echo $row['comments'];
                    echo "<div class='handlename'>
                    posted by".$row['handlename']."</div>";
                    echo "</div>";
                    echo "</div>";
                }
            ?>
                    
                
        </div>
        <div class="right">
            <h3>人気の記事</h3>
            <div class="font-size">
                <p><br>PHPオススメ本</p>
                <P>PHP MyAdminの使い方</P>
                <p>いま人気のエディタTops</p>
                <p>HTMLの基礎</p>
            </div>
            <h3>オススメリンク</h3>
            <div class="font-size">
                <p><br>ﾃﾞｨｰｱｲﾜｰｸｽ株式会社</p>
                <p>XAMPPのダウンロード</p>
                <p>Eclipseのダウンロード</p>
                <p>Bracketsのダウンロード</p>
            </div>
            <h3>カテゴリ</h3>
            <div class="font-size">
                <p><br>HTML</p>
                <p>PHP</p>
                <p>MySQL</p>
                <p>JavaScript</p>
            </div>
        </div>
    
    </main>
</body>
<footer>
    Copyright D.I.Blogs| D.I blog is the one which provides A to Z about programming
</footer>
</script>

















