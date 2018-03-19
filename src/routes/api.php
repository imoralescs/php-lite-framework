<?php 

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use League\Route\Http\Exception\BadRequestException;

// Used to run JavaScript
use Nacmartin\PhpExecJs\PhpExecJs;

$route->get('/api', function(ServerRequestInterface $request, ResponseInterface $response){
    // Retrieve data from $request. Do what you need to do and build your $content.

    // Render JavaScript array
    // $phpexecjs = new PhpExecJs();
    /* $content = $phpexecjs->evalJs("
        'red yellow blue'.split(' ')
    ");
    */
    // $response->getBody()->write(json_encode($content));

    // Render JavaScript function
    $phpexecjs = new PhpExecJs();
    $content = $phpexecjs->evalJs("
        var worlds = 'Worlds';
        const hello = 'Hello';
        function greeting(str) {
            return hello + ', ' + str + '!';
        }

        greeting(worlds);
    ");

    $response->getBody()->write(json_encode($content));

    return $response->withStatus(200);
});

$route->get('/api/{id}', function(ServerRequestInterface $request, ResponseInterface $response, array $args){
    $itemId = $args['id'];
    $requestBody = json_decode($request->getBody(), true);

    // Possibly update a record.

    $response->getBody()->write(json_encode($itemId));
    return $response->withStatus(202);
});

/*
$route->get('/api/400', function(ServerRequestInterface $request, ResponseInterface $response){
    // If we fail to bad request.
    throw new BadRequestException;
});
*/