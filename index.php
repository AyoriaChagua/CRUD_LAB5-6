<?php include_once('crud.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="form">
    <h1>CRUD, SURNAMES AND NAMES</h1>
        <form method="POST">
            <table width="100%" border="1px" cellpadding="15">
                <tr>
                    <td>
                        <input type="text" name="name" placeholder="Name" value="<?php
                            if(isset($_GET['edit'])){
                                echo $getRow['name'];
                            }
                        ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="last_name" placeholder="Last name" value="<?php
                            if(isset($_GET['edit'])){
                                echo $getRow['last_name'];
                            }
                        ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php 

                            if (isset($_GET['edit'])){
                                ?>
                                <button type="submit" name="update"> Edit</button>
                                <?php
                            }else{
                                ?>
                                <button type="submit" name="save"> Register</button>
                                <?php
                            }
                        ?>
                    </td>
                </tr>
            </table>
        </form>                 
        <table width="100%" border="1px" cellpadding="15" align="center" id="contend">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Last Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
            <?php
                $res = $mySQLiconn -> query("SELECT * FROM data");
                while($row = $res->fetch_array()){
                ?>
                        <tbody>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['last_name']; ?></td>
                            <td>
                                <div class="container-button">
                                    <div class="button">
                                        <a href="?edit=<?php echo $row['id'] ?>" onclick="return confirm('Confimar actualizacion')">Editar</a>
                                    </div>
                                    
                                    <div class="button">
                                        <a href="?del=<?php echo $row['id'] ?>" onclick="return confirm('Confirm that you want to edit')">Eliminar</a>
                                    </div>
                                </div>
                            </td>                     
                        </tr>
                        </tbody>
                <?php
                }
            ?>
        </table>
    </div>
</body>
</html>