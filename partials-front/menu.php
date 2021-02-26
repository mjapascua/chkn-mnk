<?php include('config/constants.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Website</title>

    
    <link rel="stylesheet" href="css/style.css">
    <script src="js/index.js" defer></script>
</head>

<body>
    <!-- Navbar Section Starts Here -->
    <section class="nav">
        <div class="container">
            <div class="logo">
                <a href="<?php echo SITEURL; ?>" >
                    CHKN MNK
                </a>
            </div>

            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="<?php echo SITEURL; ?>">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>categories.php">Categories</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>foods.php">Foods</a>
                    </li>
                    
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->