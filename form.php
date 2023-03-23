<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
function validateNow() {
    let operation = "validation";
    let formdata = $("#validateForm").serialize();
    let data = "operation=" + operation + "&" + formdata;
    //alert(data);
    connect_ajax_task(data);
}

function ajax_replay(data) {

    if (data == 'Sucessfull') {
        alert(data);
        $("#message").text('Sucessfull');
        $("#tableContent").load(location.href + " #tableContent");
    }
    // if (data.substring(0, 14) == "Task Sucessful") {
    //     window.location.href = "?page=childTASK";
    // } else if (data.substring(0, 14) == "Task Failed000") {
    //     toastr.warning("Something Wrong Try again");
    // }

}

function connect_ajax_task(data) {
    $.ajax({
        method: "POST",
        url: 'crud/submit.php',
        data: data,
        success: function(dataReturn) {
            ajax_replay(dataReturn)
        }
    });
}
</script>
<form id="validateForm" method="POST" onsubmit="return false">
    <label for="Name" id="name">Name</label>
    <input type="text" name="name">
    <label for="Name">PassWord</label>
    <input type="text" name="Password">
    <button onclick="validateNow()">Validate</button>


</form>
<div id="message">test</div>



<table id="tableContent">
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