<!DOCTYPE html>
<html>

<head>
<?php echo $header; ?>
</head>

<body class="home">
    
    <!-- start div #wrapper -->
    <div id="wrapper">
        
        <!-- start header -->
        <header>
            <?php echo $menu; ?>
        </header>
        <!-- end header -->

        <!-- start content -->
        <?php echo $content; ?>
	    <!-- end content -->
    
    </div>
	<!-- end div #wrapper -->    
    
    <!-- start footer -->
    <footer>
        <?php echo $footer; ?>  
    </footer>
    <!-- end footer -->

    <?php echo $js; ?> 

</body>

</html>