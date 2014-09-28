<?php
//Forked from https://github.com/jrtashjian/gravatar-profile-site, modified to use static values

$name = 'Ingmar Boddington';
$services = array(
    'GitHub' => 'https://github.com/IngmarBoddington',
    'Gists' => 'https://gist.github.com/IngmarBoddington',
    'GoodReads' => 'https://www.goodreads.com/user/show/20528983-ingmar-boddington',
    'Last.fm' => 'http://www.last.fm/user/Ingmar1337',
    'LinkedIn' => 'http://uk.linkedin.com/in/ingmarboddington',
    'StackOverflow' => 'http://stackoverflow.com/users/1237595/ing',
    'Steam' => 'http://steamcommunity.com/id/IngBoss',
    'Strava' => 'http://www.strava.com/athletes/ingmar_boddington',
    'Twitter' => 'https://twitter.com/IBoddington'
);

//Just use false to disable any related elements
$profileImage = 'image/profile.jpeg';
$backgroundImage = 'image/background.jpg';
$text = 'Codemonkey / metalhead living in Sheffield, UK. Currently working at <a href="http://www.plus.net/">plus.net</a> on their php based sites and backend systems, has a (dormant) codey blog at <a href="http://www.glowingminds.co.uk/">glowingminds.co.uk</a>. Used to work at <a href="http://www.bunches.co.uk/">Bunches.co.uk</a>, Nottingham Uni Graduate, Zend Certified Engineer.';
$trackingCode = 'UA-7152965-11';

?>
<!DOCTYPE html>
<html>
    <head>
	    <title><?php echo $name ? $name : ''; ?></title>
	    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" user-scalable="no" >
	    <link rel="stylesheet" type="text/css" href="style.css" />
        <?php if ($trackingCode): ?>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', '<?php echo $trackingCode; ?>', 'auto');
            ga('send', 'pageview');

        </script>
        <?php endif; ?>
    </head>

    <body<?php $backgroundImage ? '' : ' class="no-background"'; ?>>

        <div id="container" class="h-card vcard">

            <?php if ($backgroundImage) : ?>
            <div id="cover" style="background-image:url( <?php echo $backgroundImage; ?> );"></div>
            <?php endif; ?>

            <div id="profile">

                <div id="bio" class="section">
                    <?php if ($profileImage) : ?>
                    <img class="u-photo photo" height="80" width="80" src="<?php echo $profileImage; ?>?s=160" />
                    <?php endif; ?>
                    <h1 class="p-name fn"><?php echo $name; ?></h1>
                    <?php if (isset($text)) : ?>
                    <p class="p-note"><?php echo $text; ?></p>
                    <?php endif; ?>
                </div>

                <?php if ( !empty( $services ) ) : ?>
                <ul id="accounts" class="section">
                    <?php foreach ( $services as $service => $url ) : ?>
                    <li class="<?php echo strtolower(str_replace('.', '', $service)); ?>"><a class="u-url url" rel="me" href="<?php echo $url; ?>"><?php echo $service; ?></a></li>
                    <?php endforeach; ?>
                </ul>
                <?php endif; ?>

            </div>
        </div>
    </body>
</html>
