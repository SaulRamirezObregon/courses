<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Administrator!</title>
    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../endors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="DataTables/jquery.datatables.min.js">
    <script type="text/javascript" src="DataTables/jquery.datatables.min.css" ></script>



</head>

<body class="nav-md">

    <?php   include('NavVertical.php');  ?>

    <!-- Contenido de la pagina -->
    <div class="right_col" role="main" style="margin-top: 10px;"> 

      <div class="panel panel-default">
          <div class="panel-heading">USERS</div>
          <div class="panel-body">
            <table class="table table-hover" id="Userss">
                <thead class="thead-default">
                    <tr>
                        <th>Id</th>
                        <th>Names</th>
                        <th>Last Names</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Permissions</th>
                    </tr>
                </thead>
                <tbody>

                    <?php 
                    require '../../../../Model/database.php';

                    $db = Database::connect();

                    $statement = $db->query('SELECT id,names,lastnames,username,password,permission FROM users ; ' );


                    while ($item = $statement->fetch())
                    {
                        echo '<tr>';
                         echo '<td>'. $item['id']  . ' </td>';
                        echo '<td>'. $item['names']  . ' </td>';
                        echo '<td>'. $item['lastnames']  . ' </td>';
                        echo '<td>'. $item['username']  . ' </td>';
                        echo '<td>'. $item['password']  . ' </td>';
                        echo '<td>'. $item['permission'] .  ' </td>';
                         echo '<tr>';
                    }


                    ?>


                </tbody>
            </table> 







           <!--  <table class="table table-hover" id="Userss">
                <thead class="thead-default">
                    <tr>
                        <th>Id</th>
                        <th>Names</th>
                        <th>Last Names</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Permissions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php // $wish = new conexion(); ?>
                    <?php //foreach ($users as $user) : ?>
                        <tr>

                         <td class=""><?php// echo $this->escapeHtml($users->$this->wish->SelectUsers());?></td>
                       

                     </tr>
                 <?php //endforeach; ?>
             </tbody>
         </table> -->
     </div>
 </div>
</div>
<?php   include('ImportsImport.php');  ?>
</body>
</html>
