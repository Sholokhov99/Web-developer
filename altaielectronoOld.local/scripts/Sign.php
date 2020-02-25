<?
    echo $_POST['login']. "<br><br>";
    if(isset($_POST['login']) && isset($_['password'])){
        echo "True";
    } else{
        echo "False";
    }
?>