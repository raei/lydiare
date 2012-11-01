<?php

// PHASE: BOOTSTRAP
//
define('LYDIA_INSTALL_PATH', dirname(__FILE__));
define('LYDIA_SITE_PATH', LYDIA_INSTALL_PATH . '/site');

require(LYDIA_INSTALL_PATH . '/src/CLydia/bootstrap.php');

$ly = CLydia::Instance();
//
// PHASE: FRONTCONTROLLER ROUTE
//

$ly->FrontControllerRoute();
//
// PHASE: THEME ENGINE RENDER
//
$ly->ThemeEngineRender();

//"bootstrap" är initieringsfasen där de oundvikliga grunderna 
//etableras och defineras. Dessa behövs i varje förfrågan.

//"frontController->route" tar hand om förfrågan och tolkar 
//ut vilken kontroller och metod som skall anropas. 
//Därefter sker all bearbetning i kontrollern.

//"themeEngine->render" skapar själva slutresultatet, 
//webbsidan. Allt innehåll finns tillgängligt och med 
//hjälp av template-filer överförs innehållet till HTML-filer.
