<table>
    <tr>
        <th>Name</th>
        <th>Password</th>
    </tr>

    <?php
            require('library/mySql.php');
            require('dbCon/dbCon.php');
            $sql = "SELECT * FROM user";
            $result = array();
            $result = mySqlRetriveMultiple($sql,$dbCon);
            foreach($result as $data){
            echo "<tr><td>{$data['name']}</td>";
            echo "<td>{$data['password']}</td></tr>";
            }
        ?>


</table>