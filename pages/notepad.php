<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    include '../config.php';

    $nameSaved = '';
    $valueSaved = '';

    // Get name and open the file with that name
    if(isset($_POST['open'])) {
        $nameSaved = $_POST['nameSaved'];
    }

    $get = "SELECT * FROM notepad WHERE name='$nameSaved'";
    $result = $conn->query($get);
    $row = $result->fetch_assoc();

    $valueSaved = $row['value'];

    if (isset($_POST['submit'])){
        if (strpos($_POST['name'], '.txt') == true){
            $name = $_POST['name'];
        } else {
            $name = $_POST['name'] . ".txt";
        }
        $value = $_POST['value'];

        $update = "SELECT * FROM notepad WHERE `name` = '$name'";
        $result = $conn->query($update);

        if ($result->num_rows > 0){
            $query = "UPDATE notepad SET value='$value' WHERE name='$name'";
        } else {
            $query = "INSERT INTO notepad (name, value) VALUES ('$name', '$value')";
        }
        $conn->query($query);
    }
?>
<body style="margin: 0;">
    <div style="border-bottom: 2px solid #808080; height: 25px; background-color: #afafaf;">
        <form id="open" action="#" method="post">
            <label for="nameSaved"><select name="nameSaved" id="nameSaved">
                    <option value="">Select a file</option>
                <?php
                    $sql = "SELECT `name` FROM notepad";
                    $result = $conn->query($sql);
                    while ($rowSelect = $result->fetch_assoc()){
                        echo "<option value='" . $rowSelect['name'] . "'>" . $rowSelect['name'] . "</option>";
                    }
                ?>
            </select>
            <button name="open" type="submit">Open</button>
        </form>
    </div>
    <br/>
    <div style="width: 100%; height: 100%">
        <form id="form" name="notepad" action="#" method="post" style="font-family: Arial">
            File name: <br/>
            <input placeholder="" id="fileName" name="name" type="text" value="<?php echo $nameSaved; ?>"><br/>
            <textarea placeholder="" name="value" maxlength="1000000" style="font-family: Arial; font-size: 12pt; width: 100%; height: 100vw; margin-top: 5px;"><?php echo $valueSaved; ?></textarea>
            <button onclick="saveFile();" name="submit" type="submit">Save</button>
        </form>
    </div>

    <script>
        function saveFile(){
                var targetId = document.getElementById('fileName').value +  ".txt";

                parent.savedFile(targetId);
        }

    </script>
</body>