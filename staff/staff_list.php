
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    try
    {

        $dsn='mysql:dbname=shop;host=localhost;charset=utf8';
        $user='root';
        $password=1234;
        $dbh=new PDO($dsn,$user,$password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $sql='SELECT code,name FROM mst_staff WHERE 1';
        $stmt=$dbh->prepare($sql);
        $stmt->execute();

        $dbh=null;

        print 'スタッフ一覧<br><br>';

        print '<form method="post" action="staff_branch.php">';
        while(true)
        {
            $rec=$stmt->fetch(PDO::FETCH_ASSOC);
            if($rec==false)
            {
                break;
            }
            // パースするには二重引用符( " ) で括る必要がある.連結演算子で繋ぐ
            //     print '<input type="radio" name="staffcode" value="
            //     $rec['code']
            //     ">';
            print '<input type="radio" name="staffcode" value="'.$rec['code'].'">';
            print $rec['name'];
            print '<br>';
        }
        print '<input type="submit" name="disp" value="参照">';
        print '<input type="submit" name="add" value="追加">';
        print '<input type="submit" name="edit" value="修正">';
        print '<input type="submit" name="delete" value="削除">';
        print '</form>';

    }
    catch(Exception $e)
    {
        print 'ただいま障害により大変ご迷惑をお掛けしております';
        exit();
    }

    ?>
<br>
<a href="../staff_login/staff_top.php">トップメニューへ</a>
</body>
</html>