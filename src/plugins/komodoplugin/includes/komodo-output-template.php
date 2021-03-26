<style>
    .komodo-entries{
        width: calc(100% - 20px);
        border-collapse: collapse;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 0 9px rgba(0,0,0,0.05);
    }

    .komodo-entries thead{
        background: #204484;
    }

    .komodo-entries tbody{
        background: #fff;
    }

    .komodo-entry:nth-child(2n+2){
        background: #f2f8ff;
    }

    .komodo-entries th,
    .komodo-entries td{
        text-align: left;
        color: #010101;
        font-size: 1.3em;
        padding: 10px 20px;
        vertical-align: top;
        line-height: 1.4;
    }

    .komodo-entries th{
        color: #fff;
    }

    .k_msg,
    .k_msg_head{
        width: 30%;
    }
</style>
<h1 class="komodo-title">Komodo Form Entries</h1>
<table class="komodo-entries">
    <thead>
        <tr>
            <th class="k_name_head">Name</th>
            <th class="k_address_head">Address</th>
            <th class="k_email_head">Email</th>
            <th class="k_telephone_head">Telephone</th>
            <th class="k_msg_head">Message</th>
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
                echo "<tr class='komodo-entry'>" . "<td class='k_name'>" . $row['komodo_name'] . "</td>" . "<td class='k_address'>" . $row['komodo_address'] . "</td>" . "<td class='k_email'>" . $row['komodo_email'] . "</td>" . "<td class='k_telephone'>" . $row['komodo_telephone'] . "</td>" . "<td class='k_msg'>" . $row['komodo_message'] . "</td>" . "</tr>";
            }
        }
    ?>
    </tbody>
</table>