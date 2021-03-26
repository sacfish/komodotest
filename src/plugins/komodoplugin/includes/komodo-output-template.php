<style>
    .komodo-entries{
        width: 100%;
    }

    .komodo-entries th{
        text-align: left;
        color: #010101;
    }

    .komodo-entries th:first-of-type,
    .komodo-entries td:first-of-type{
        color: #010101;
        font-weight: 700;
        text-align: center;
    }
</style>
<h1 class="komodo-title">Komodo Form Entries</h1>
<table class="komodo-entries">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Address</th>
            <th>Email</th>
            <th>Telephone</th>
            <th>Message</th>
        </tr>
    </thead>
    <tbody>
    <?php 
        include_once 'komodo-connect.php';
        $sql = "SELECT * FROM komodo_submissions;";
        $result = mysqli_query($connect, $sql);
        $resultCheck = mysqli_num_rows($result);
        if($resultCheck > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr class='komodo-entry'>" . "<td class='k_id'>" . $row['komodo_id'] . "</td>" . "<td class='k_name'>" . $row['komodo_name'] . "</td>" . "<td class='k_address'>" . $row['komodo_address'] . "</td>" . "<td class='k_email'>" . $row['komodo_email'] . "</td>" . "<td class='k_telephone'>" . $row['komodo_telephone'] . "</td>" . "<td class='k_msg'>" . $row['komodo_message'] . "</td>" . "</tr>";
            }
        }
    ?>
    </tbody>
</table>