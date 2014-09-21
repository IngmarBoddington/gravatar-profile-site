<?php
//Forked from https://github.com/jrtashjian/gravatar-profile-site, modified to use static values

$name = 'Ingmar Boddington';
$services = array(
    'GitHub' => 'https://github.com/IngmarBoddington',
    'GoodReads' => 'https://www.goodreads.com/user/show/20528983-ingmar-boddington',
    'Last.fm' => 'http://www.last.fm/user/Ingmar1337',
    'LinkedIn' => 'http://uk.linkedin.com/in/ingmarboddington',
    'Steam' => 'http://steamcommunity.com/id/IngBoss',
    'Twitter' => 'https://twitter.com/IBoddington'
);

//Just use false to disable any related elements
$profileImage = 'image/profile.jpeg';
$backgroundImage = 'image/background.jpg';
$text = 'Code monkey living in Sheffield, I used to blog on <a href="http://www.glowingminds.co.uk/">glowingminds.co.uk</a>. Work at <a href="http:///www.plus.net/">plus.net</a>.';

?>
<!DOCTYPE html>
<html>
    <head>
	    <title><?php echo $name ? $name : ''; ?></title>
	    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" user-scalable="no" >
	    <link rel="stylesheet" type="text/css" href="style.css" />
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
