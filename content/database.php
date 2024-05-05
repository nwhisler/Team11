<?php

function updateColorsFile($colorsArray) {
    $content = "<?php\n\$colorsArray = " . var_export($colorsArray, true) . ";\n?>";
    file_put_contents('colors.php', $content);
}

function initializeColors() {
    $colorsArray = array(
        array('Name' => 'Red', 'hex_value' => '#ff0000'),
        array('Name' => 'Yellow', 'hex_value' => '#ffff00'),
        array('Name' => 'Green', 'hex_value' => '#00ff00'),
        array('Name' => 'Blue', 'hex_value' => '#0000ff'),
        array('Name' => 'Purple', 'hex_value' => '#800080'),
        array('Name' => 'Grey', 'hex_value' => '#808080'),
        array('Name' => 'Brown', 'hex_value' => '#a52a2a'),
        array('Name' => 'Black', 'hex_value' => '#000000'),
        array('Name' => 'Teal', 'hex_value' => '#008080')
    );
    updateColorsFile($colorsArray);
}

if (isset($_POST['reset_table'])) {
    initializeColors();
}

include_once("colors.php");

function addColor($name, $hex_value) {
    global $colorsArray;
    // Replace spaces with underscores in the color name
    $name = str_replace(' ', '_', $name);
    $name = strtolower($name);
    if (strpos($hex_value, '#') !== 0) {
        $hex_value = '#' . $hex_value;
    }

    foreach ($colorsArray as $color) {
        if (strtolower($color['Name']) == $name || $color['hex_value'] == $hex_value) {
            return "Color already exists";
        }
    }
    $newColor = array('Name' => ucfirst($name), 'hex_value' => $hex_value);
    $colorsArray[] = $newColor;
    updateColorsFile($colorsArray);
    return "Color added successfully";
}

function editColor($id, $name, $hex_value) {
    global $colorsArray;
    // Replace spaces with underscores in the color name
    $name = str_replace(' ', '_', $name);
    $name = strtolower($name);
    if (isset($colorsArray[$id - 1])) {
        foreach ($colorsArray as $color) {
            if ((strtolower($color['Name']) == $name || $color['hex_value'] == $hex_value) && $color['id'] != $id) {
                return "Color already exists";
            }
        }
        $colorsArray[$id - 1]['Name'] = ucfirst($name);
        $colorsArray[$id - 1]['hex_value'] = $hex_value;
        updateColorsFile($colorsArray);
        return "Color edited successfully";
    } else {
        return "Color not found";
    }
}

function deleteColor($id) {
    global $colorsArray;
    if (count($colorsArray) <= 2) {
        return "Cannot delete color. There must be at least two colors.";
    }
    if (isset($colorsArray[$id - 1])) {
        $colorName = $colorsArray[$id - 1]['Name'];
        unset($colorsArray[$id - 1]);
        $colorsArray = array_values($colorsArray);
        updateColorsFile($colorsArray);
        return "Color deleted successfully";
    } else {
        return "Color not found";
    }
}

if (isset($_POST['add_color'])) {
    $result = addColor($_POST['name'], $_POST['hex_value']);
} elseif (isset($_POST['edit_color'])) {
    $result = editColor($_POST['color_id'], $_POST['name'], $_POST['hex_value']);
} elseif (isset($_POST['delete_color'])) {
    $confirmation = $_POST['color_name'];
}
elseif (isset($_POST['confirm_delete'])) {
    $result = deleteColor($_POST['color_id']);
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Database</title>
</head>
<body>
    <div class='content'>
        <nav>
            <li><a href='../index.php'>Home</a></li>
            <li><a href='about.php'>About</a></li>
            <li><a href='color.php'>Color Coordinate Generation</a></li>
            <li><a href='database.php'>Color Selector</a></li>
        </nav>
        <div class='input-box'>
        
            <form method="post" action="">
                <input type="text" name="name" placeholder="Color Name" required>
                <input type="text" name="hex_value" placeholder="Hex Value" required>
                <button type="submit" name="add_color">Add Color</button>
            </form>

            <form method="post" action="">
                <select name="color_id">
                    <?php
                    foreach ($colorsArray as $key => $color) {
                        echo "<option value='".($key + 1)."'>".$color['Name']."</option>";
                    }
                    ?>
                </select>
                <input type="text" name="name" placeholder="New Name">
                <input type="text" name="hex_value" placeholder="New Hex Value">
                <button type="submit" name="edit_color">Edit Color</button>
            </form>

            <form method="post" action="">
                <?php if (isset($confirmation)) : ?>
                    <p id='conf-mes'>Are you sure you want to delete this color</p>
                    <form method="post" action="">
                        <input type="hidden" name="color_id" value="<?php echo $_POST['color_id']; ?>">
                        <button type="submit" name="confirm_delete">Confirm</button>
                        <button type="button" onclick="history.back()">Cancel</button>
                    </form>
                <?php else: ?>
                    <select name="color_id">
                        <?php
                        foreach ($colorsArray as $key => $color) {
                            echo "<option value='".($key + 1)."'>".$color['Name']."</option>";
                        }
                        ?>
                    </select>
                    <input type="hidden" name="color_name" value="<?php echo $color['Name']; ?>">
                    <button type="submit" name="delete_color">Delete Color</button>
                <?php endif; ?>
            </form>

            <form method="post" action="">
                <button type="submit" name="reset_table">Reset Table</button>
            </form>

            <div id='errortext'>
                <?php
                if (isset($result)) {
                    echo "<p id='error-message'>$result</p>";
                }
                ?>

                <script>
                    setTimeout(function(){
                        var errorMessage = document.getElementById('error-message');
                        if (errorMessage) {errorMessage.remove();}}, 4000);
                </script>
            </div>
        </div>
    </div>
    <footer id="homeFooter">
        Copyright &#169 Team 11
    </footer>
</body>

    <style type="text/css">
        <?php
            $css = file_get_contents("../css/style.css");
            echo $css;
        ?>
    </style>

</html>
