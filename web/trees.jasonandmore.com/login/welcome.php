<?php include_once ('../view/header.php');?>


    <h1>Welcome <?php echo $uname['name'];?> to TREES</h1>
    
    <div id="myDIV2">
        <p  id="myDIV"><div>Feel free to <a href="/controller/?action=upload_tree">Upload A Tree</a> or just look around. Enjoy!</div></p>
</div>
      

    <form action=".?action=signout" method="post">
    <input type="hidden" name="action" value="signout">
    <input type="submit" value="Sign Out">   

</form>
<?php include_once ('../view/footer.php');?>