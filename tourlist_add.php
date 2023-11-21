
<?php
include_once 'server.php'; 

if(isset($_POST['submit']))
{
    $title=$_POST['title'];
    $country=$_POST['country'];
    $subtitle=$_POST['subtitle'];
    $description=$_POST['description'];
    $detailstatus=$_POST['detailstatus'];
    $price=$_POST['price'];
    $location=$_POST['location'];
    $tripprice=$_POST['tripprice'];
    $lowprice=$_POST['lowprice'];
    $file=$_FILES['file']['name'];       
    $tmp_name=$_FILES['file']['tmp_name'];
    $galleryone=$_FILES['galleryone']['name'];       
    $tmp_name1=$_FILES['galleryone']['tmp_name'];
    $gallerytwo=$_FILES['gallerytwo']['name'];       
    $tmp_name2=$_FILES['gallerytwo']['tmp_name'];
    $gallerythree=$_FILES['gallerythree']['name'];       
    $tmp_name3=$_FILES['gallerythree']['tmp_name'];
    $galleryfour=$_FILES['galleryfour']['name'];       
    $tmp_name4=$_FILES['galleryfour']['tmp_name'];




    $target_dir="assets/upload/".$file;  
    
    if(move_uploaded_file($tmp_name,$target_dir))
    {
      echo "";
    }

    
    $target_dir1="assetsone/upload/".$galleryone;  
    
    if(move_uploaded_file($tmp_name1,$target_dir1))
    {
      echo "";
    }
     
     
    $target_dir2="assetsone/upload/".$gallerytwo;  
    
    if(move_uploaded_file($tmp_name2,$target_dir2))
    {
      echo "";
    }
     
      
    $target_dir3="assetsone/upload/".$gallerythree;  
    
    if(move_uploaded_file($tmp_name3,$target_dir3))
    {
      echo "";
    }
     
    $target_dir4="assetsone/upload/".$galleryfour;  
    
    if(move_uploaded_file($tmp_name4,$target_dir4))
    {
      echo "";
    }


    $sqlinsert = "INSERT INTO tourslist(title,country,subtitle,description,detailstatus,price,location,tripprice,lowprice,toursimage,galleryimageone,galleryimagetwo,galleryimagethree,galleryimagefour) 
                  VALUES ('$title','$country','$subtitle','$description','$detailstatus','$price','$location','$tripprice','$lowprice','$file','$galleryone','$gallerytwo','$gallerythree','$galleryfour')";
    
    mysqli_query($conn, $sqlinsert);

    echo "<script>window.location.href='admin-add.php';</script>";
        
    if($sqlinsert===trait_uses_recursive('Foo\Bar\Baz'))
    {
        alert('Register Successfully');
    }else{
       alert('Unsuccessfully Register');
    }
     

}

$conn->close();
 
?>