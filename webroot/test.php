 <?php

include('../autoload.php');

    $Cfmessage = new \..\Cfmessage();
    return $Cfmessage;


// Room for other services, modules, controllers

// Starts the session 
$app->session;

// Extra stylesheet
$app->theme->addStylesheet('css/cfmessage.css');

// Routes
$app->router->add('', function() use ($app) {

    $app->theme->setTitle("flash");

    $app->session;

    $app->Cfmessage->addInfo('This is an information message');  
    $app->Cfmessage->addError('This is an error message');  
    $app->Cfmessage->addWarning('This is a warning message');  
    $app->Cfmessage->addSuccess('This is a success message');  
    

    $app->theme->setVariable('title', "flash")
           ->setVariable('main', $app->Cfmessage->printMessage()); 
});

$app->router->handle();
$app->theme->render();  