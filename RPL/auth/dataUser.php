<html>
    <body style="overflow: auto;">
    <table width="513" border="1" align="center" cellspacing="0" cellpadding="10px">
        <tr bgcolor="#FFFFCC" >
            <td width="20">id</td>
            <td width="100">email</td>
            <td width="100">username</td>
            <td width="74">password</td>
            <td width="135">number_phone</td>
        </tr>
        <?php
        include_once 'koneksi.php';
        $query="select * from tb_user";
        $result=$mysqli->query($query);
        if($result->num_rows > 0){
            while($data=$result->fetch_assoc())
            {
            ?>
                <tr>
                    <td><?php echo $data['id']; ?></td>
                    <td><?php echo $data['email']; ?></td>
                    <td><?php echo $data['username']; ?></td>
                    <td><?php echo $data['password']; ?></td>
                    <td><?php echo $data['number_phone']; ?></td>
                </tr>
            <?php
            }
        }
        ?>
    </table>
    </body>
</html>