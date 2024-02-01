<?php

function seed() {
    $data = array(
        array(
            'id'    => 1,
            'fname' => 'Kamal',
            'lname' => 'Ahmed',
            'roll'  => '11'
        ),
        array(
            'id'    => 2,
            'fname' => 'Jamal',
            'lname' => 'Ahmed',
            'roll'  => '12'
        ),
        array(
            'id'    => 3,
            'fname' => 'Ripon',
            'lname' => 'Ahmed',
            'roll'  => '9'
        ),
        array(
            'id'    => 4,
            'fname' => 'Nikhil',
            'lname' => 'Chandra',
            'roll'  => '8'
        ),
        array(
            'id'    => 5,
            'fname' => 'John',
            'lname' => 'Rozario',
            'roll'  => '7'
        ),
    );
    $serializedData = serialize($data);
    file_put_contents("db.txt", $serializedData, LOCK_EX);
}

function generateReport() {
    $serializedData = file_get_contents("db.txt");
    $students = unserialize($serializedData);

    echo '<table>';
    echo '<tr>
            <th>Name</th>
            <th>Roll</th>';
           if(isAdmin()|| isEditor()){ 
          echo ' <th width="25%">Action</th>
        </tr>';
           }
    
    foreach ($students as $student) {
        echo '<tr>';
        echo '<td>' . htmlspecialchars($student['fname'] . ' ' . $student['lname']) . '</td>';
        echo '<td>' . htmlspecialchars($student['roll']) . '</td>';
          if(isAdmin()){
        echo '<td><a href="index.php?task=edit&id=' . htmlspecialchars($student['id']) . '">Edit</a> | <a class="delete" href="index.php?task=delete&id=' . htmlspecialchars($student['id']) . '">Delete</a></td>';
          }
          if(isEditor()){
            echo '<td><a href="index.php?task=edit&id=' . htmlspecialchars($student['id']) . '">Edit</a></td>';
              }
        echo '</tr>';
    }

    echo '</table>';
}

function addStudent($fname, $lname, $roll) {
    $found = false;
    $serializedData = file_get_contents("db.txt");
    $students = unserialize($serializedData);

    foreach ($students as $_student) {
        if ($_student['roll'] == $roll) {
            $found = true;
            break;
        }
    }

    if (!$found) {
        $newId = getNewId($students);
        $student = array(
            'id'    => $newId,
            'fname' => $fname,
            'lname' => $lname,
            'roll'  => $roll
        );
        array_push($students, $student);
        $serializedData = serialize($students);
        file_put_contents("db.txt", $serializedData, LOCK_EX);

        return true;
    }

    return false;
}

function getStudent($id) {
    $serializedData = file_get_contents("db.txt");
    $students = unserialize($serializedData);

    foreach ($students as $student) {
        if ($student['id'] == $id) {
            return $student;
        }
    }

    return false;
}

function updateStudent($id, $fname, $lname, $roll) {
    $found = false;
    $serializedData = file_get_contents("db.txt");
    $students = unserialize($serializedData);

    foreach ($students as $_student) {
        if ($_student['roll'] == $roll && $_student['id'] != $id) {
            $found = true;
            break;
        }
    }

    if (!$found) {
        $students[$id - 1]['fname'] = $fname;
        $students[$id - 1]['lname'] = $lname;
        $students[$id - 1]['roll'] = $roll;
        $serializedData = serialize($students);
        file_put_contents("db.txt", $serializedData, LOCK_EX);

        return true;
    }

    return false;
}

function deleteStudent($id) {
    $serializedData = file_get_contents("db.txt");
    $students = unserialize($serializedData);

    foreach ($students as $offset => $student) {
        if ($student['id'] == $id) {
            unset($students[$offset]);
        }
    }

    $serializedData = serialize($students);
    file_put_contents("db.txt", $serializedData, LOCK_EX);
}

function printRaw() {
    $serializedData = file_get_contents("db.txt");
    $students = unserialize($serializedData);
    print_r($students);
}

function getNewId($students) {
    $maxId = max(array_column($students, 'id'));
    return $maxId + 1;
}
function isAdmin() {
	return ( 'admin' == $_SESSION['role'] );
}

function isEditor() {
	return ( 'editor' == $_SESSION['role'] );
}

function hasPrivilege(){
    return (isAdmin() || isEditor());
}
?>
