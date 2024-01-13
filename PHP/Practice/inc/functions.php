<?php
function seed() {
    $data           = array(
        array(
            'id'    => 1,
            'fname' => 'Kamal',
            'lname' => 'Ahmed',
            'roll'  => '11',
            'phone'=>"01740267189"
        ),
        array(
            'id'    => 2,
            'fname' => 'Jamal',
            'lname' => 'Ahmed',
            'roll'  => '12',
            'phone'=>"01869323430"
        ),
        array(
            'id'    => 3,
            'fname' => 'Ripon',
            'lname' => 'Ahmed',
            'roll'  => '9',
            'phone'=>"01590079157"
        ),
        array(
            'id'    => 4,
            'fname' => 'Nikhil',
            'lname' => 'Chandra',
            'roll'  => '8',
            'phone'=>"01740267189"
        ),
        array(
            'id'    => 5,
            'fname' => 'John',
            'lname' => 'Rozario',
            'roll'  => '7',
            'phone'=>"01740267189"
        ),
    );
    $serializedData = serialize( $data );
    file_put_contents( "db.txt", $serializedData, LOCK_EX );
}
function showData(){
    $serializedData = file_get_contents( "db.txt");
    $students=unserialize($serializedData);
    ?>
    <?php foreach ($students as $student){?>
  <table>
    <tr>
        <th>Name</th>
        <th>Roll</th>
        <th>Phone NO</th>
        <th width="50%">Action</th>
    </tr>
    <tr>
        <td><?php printf('%s %s',$student["fname"],$student["lname"]);?></td>
        <td><?php printf('%s',$student["roll"]);?></td>
        <td><?php printf('%s',$student["phone"]);?></td>
        <td><?php printf('<a href="index.php?task=edit& id=%s">Edit</a> | <a href="index.php?task=delete&id=%s">Delete</a>',$student["id"],$student["id"]);?></td>
    </tr>
  </table>      
    
  <?}?>
<?}
function addStudent( $fname, $lname, $roll ,$phone){
    $found=false;
    $serializedData = file_get_contents( "db.txt");
    $students=unserialize($serializedData);
    foreach($students as $student){
        if($student["roll"]==$roll){
            $found=true;
            break;
        }
    }
    if(!$found){
        $newId=count($students)+1;
        $student=array(
            'id'    => $newId,
            'fname' => $fname,
            'lname' => $lname,
            'roll'  => $roll,
            'phone'=>$phone
        );
        array_push($students,$student);
        
        $serializedData = serialize( $students );
        file_put_contents( "db.txt", $serializedData, LOCK_EX );
        return true;
    }
    return false;
     
}
function getStudent($id){
    $found=false;
    $serializedData = file_get_contents( "db.txt");
    $students=unserialize($serializedData);
    foreach($students as $student){
        if($student["id"]==$id){
            return $student;
        }
       
    }
    return false;

}
function updateStudent( $id, $fname, $lname, $roll, $phone ) {
    $found          = false;
    $serialziedData = file_get_contents( "db.txt" );
    $students       = unserialize( $serialziedData );
    foreach ( $students as $_student ) {
        if ( $_student['roll'] == $roll && $_student['id'] != $id ) {
            $found = true;
            break;
        }
    }
    if ( ! $found ) {
        $students[ $id - 1 ]['fname'] = $fname;
        $students[ $id - 1 ]['lname'] = $lname;
        $students[ $id - 1 ]['roll']  = $roll;
        $student[$id-1]['phone']=$phone;
        $serializedData               = serialize( $students );
        file_put_contents( "db.txt", $serializedData, LOCK_EX );

        return true;
    }

    return false;
}
?>
