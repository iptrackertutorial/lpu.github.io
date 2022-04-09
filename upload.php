<h5 style="color:blue;">PLEASE UPLOAD DOCUMENT</h5>
        <form method="post" enctype="multipart/form-data">
    <input type="file" name="doc[]" multiple/>
    <input  style="color:red"type="submit" name="submit"/>
    <br>
</form>
 

<?php
if(isset($_POST['submit'])){
    echo "<pre>";
    print_r($_FILES);
    //move_uploaded_file
    foreach($_FILES['doc']['name'] as $key=>$val){
        move_uploaded_file($_FILES['doc']['tmp_name'][$key],'image/'.$val);
        $alert="<script>alert('Document upload successfully');</script>";
        echo $alert;

    }
    

}
 
?>
 

 
