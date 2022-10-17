<?php
$gakunen=$_POST['gakunen'];

switch($gakunen)
{
    case '1':
    $kousha='あなたの校舎は南校舎です';
    $bukatsu='部活動にスポーツ系と文化系があります';
    $mokuhyou='まずは学校に慣れましょう';
    break;

    case '2':
    $kousha='あなたの校舎は南校舎です';
    $bukatsu='部活動にスポーツ系と文化系があります';
    $mokuhyou='まずは学校に慣れましょう';
    break;

    case '3':
    $kousha='あなたの校舎舎です';
    $bukatsu='部活動にスポーツ系と文化系があります';
    $mokuhyou='まずは学校に慣れましょう';
    break;

    default:
    $kousha='あなたの校舎は南校舎です';
    $bukatsu='部活動にスポーツ系と文化系があります';
    $mokuhyou='まずは学校に慣れましょう';
    break;
    }
print '校舎  '.$kousha.'<br>';
print '部活  '.$bukatsu.'<br>';
print '目標  '.$mokuhyou.'<br>';
    ?>