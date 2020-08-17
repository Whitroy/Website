<?php
    
    if(isset($_POST)) {
        $Name=$_POST['Name'];
        $Email=$_POST['Email'];
        $Rating=$_POST['Rating'];
        $feedback=$_POST['feedback'];

        $String=$Name.",".$Email.",".$Rating.",".$feedback."\n";

        $fp = fopen('data.txt', 'a'); 
        fwrite($fp,$String);  
        fclose($fp); 

    }
    
?>
<script>
    setTimeout(function(){
        window.location.replace("/docs/index.html");
    }, 1000);
</script>