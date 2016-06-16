<?php

    // 資料庫設定
    $host_sql = 'localhost';
    $username_sql = 'root';
    $password_sql = 't875568543777';

    // 聯結資料庫
    $link = mysql_connect('localhost','root','t875568543777') or die('無法連結資料庫');
    mysql_select_db('2', $link);
    mysql_query('SET NAMES UTF8');

    // 預設選項
    $data['0'] = '請選擇';

    // 只有在 parentId 與 levelNum 都存在的情況下，才進行資料庫的搜尋
    if (0 !== (int) $_GET['id'] ) {
        $id = (int) $_GET['id'];
        
        $query = sprintf("SELECT no, area_name FROM area WHERE city.no = area.city_no AND levelNum = %d", $parentId, $levelNum);
        $result = mysql_query($query, $link);
        while ($row = mysql_fetch_assoc($result)) {
        
            // 將取得的資料放入陣列中
            $data[$row['id']] = $row['name'];
        }
    }
    
    // 將陣列轉換為 json 格式輸入
    echo json_encode($data);
    ?>