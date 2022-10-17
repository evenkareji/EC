
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
        require_once('../common/common.php');

        $post=sanitize($_POST);

        $staff_name=$post['name'];
        $staff_pass=$post['pass'];


        $dsn='mysql:dbname=shop;host=localhost;charset=utf8';
        $user='root';
        $password=1234;
        $dbh=new PDO($dsn,$user,$password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        // データベースに追加
        $sql='INSERT INTO mst_staff(name,password) VALUES(?,?)';
        $stmt=$dbh->prepare($sql);
        $data[]=$staff_name;
        $data[]=$staff_pass;
        $stmt->execute($data);

        $dbh=null;

        print $staff_name;
        print 'さんを追加しました。<br>';

    }
catch(Exception $e)
{

print 'ただいま障害により大変ご迷惑をお掛けしております';

exit();
}

?>

<a href="staff_list.php">戻る</a>



</body>
</html>