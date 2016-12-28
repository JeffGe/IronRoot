<!DOCTYPE html>
<style>

    * {
        margin: 0;
        padding: 0;
    }

    .dashboardPage {
        background: #F7F7F7;
        width: auto;
        margin-left: 200px;
        bottom: 0px;

        /*z-index: 7;*/

    }

    .dashboardTopbar{

        background: white;
        height: 60px;
        width: auto;
        text-align: center;
    }

    .barrelDiv{
        background-color: white;
    }

    table {
        margin-left: auto;
        margin-right: auto;
        border-spacing: 0;
        box-shadow: 0 1px 3px rgba(0,0,0,0.2);
    }

    table th {
        padding: 6px 12px;
        font-weight: 900
    }

    table tr:nth-of-type(even) {
        background:  #e9e9e9;
    }

    table td {
        padding: 6px 40px;
        font-weight: 900
    }

    .header {
        font-weight: 900;
        color: #ffffff;
        background: #ea6153;
    }

    .main {
        width: 100%;
        height: 100%;
    }

    .btnAdd{


        margin: 4em auto;
        width: 100px;
        height: 30px;
        line-height: 30px;
        background: teal;
        color: white;
        font-weight: 700;
        text-align: center;
        cursor: pointer;
        border: 1px solid white;


    }

    .btnAdd:hover{
        background: darkgrey;

    }

    .btnAdd:active { background: #444; }


    #addBarrelPopup{
        display: none;
        position: absolute;
        top:20%;
        left:40%;
        background: blanchedalmond;
        /*z-index: 5;*/
    }

    .editIcon{
        width: 18px;
        height: 18px;
        padding-top: 3px;
    }

</style>
<html>
<link rel="stylesheet" type="text/css" href="styleSheet.css">
<body>
<div class="main">
    <?php
    include '../../src/sideBar/sideBar.php';
    require '../../connect_db.php';

    $q = 'SELECT * FROM BARREL';

    $r = mysqli_query($dbc, $q);


    echo '<div class="dashboardPage">';
    echo '    <div class="dashboardTopbar">
    
               This is Barrel Information page


              </div>';

    echo '    <div class="barrelDiv">';
    echo '       <table>
                    <tr class="header">
                      <th>Barrel Id</th>
                      <th>Barrel Number</th>
                      <th>Company</th>
                      <th>ProductType</th>
                      <th>Size</th>
                      <th>Tare Weight</th>
                      <th>Oak Type</th>
                      <th>Char Type</th>
                      <th>Edit</th>
                    </tr>';

    while ($row = mysqli_fetch_array($r, MYSQLI_NUM)) {
        echo '<tr>';
        echo '<td>' . $row[0] . '</td>';
        echo '<td>' . $row[1] . '</td>';
        echo '<td>' . $row[2] . '</td>';
        echo '<td>' . $row[3] . '</td>';
        echo '<td>' . $row[4] . '</td>';
        echo '<td>' . $row[5] . '</td>';
        echo '<td>' . $row[6] . '</td>';
        echo '<td>' . $row[7] . '</td>';
        echo '<td><a href=#><img class="editIcon" src="../image/editIcon.png"></a></td>';

        echo '</tr>';
    }
    echo '      </table>';
    echo '    </div>';

    echo '<div>
            <button class="btnAdd" onclick="addNewBarrel()">Add</button>
            <button></button>';
    echo ' </div>';

    ?>

    <div id="addBarrelPopup">
        <iframe src="./addBarrelPopup.php" width="512" height="412"></iframe>
    </div>

</div>
<SCRIPT TYPE="text/javascript">
    function  addNewBarrel(){
        $("#addBarrelPopup").fadeIn();
   
    }

    function closeAddPopup() {

        $("#addBarrelPopup").fadeOut();
        
    }

</SCRIPT>
</body>
</html>