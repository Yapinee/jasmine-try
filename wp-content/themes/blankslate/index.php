<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin&family=Josefin+Sans&family=Outfit&family=Zen+Kaku+Gothic+New&display=swap" rel="stylesheet">
    <title>COVID in Indonesia</title>
</head>
<body>
    <div id="container">
        <!-- ----- HEADER ----- -->
        <div id="header-wrapper">
            
            <div id="header" class="container">
                <div id="logo">
                    <div class="navbar">
                        <nav class="menu">
                        <?php get_header(); ?>
                            <ul>
                                <li class="nav-item">
                                    <a class="nav-link active" href="#home">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#today">Today</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#news">News</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#about">About</a>
                                </li>
                            </ul>
                        </nav>
                     </div>
                </div>
            </div>
        </div>

        <div id="content">
            <br><br><br><br><br><br><br><br><br><br><br>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
            get_template_part( 'entry' );
            comments_template();
            endwhile; endif;
            get_template_part( 'nav', 'below' ); ?>
        </div>

        <!-- ----- FOOTER ----- -->
        <div id="footer">
            <?php get_footer(); ?>
        </div>
    </div>
</body>
</html>



