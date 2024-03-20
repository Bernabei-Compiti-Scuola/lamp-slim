<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
class SiteController
{
    function index(Request $request, Response $response, $args) 
    {
        $mysqli_connection = new MySQLi('my_db', 'root', 'ciccio', 'db1');
        $result = $mysqli_connection->query("SELECT * FROM rilevatori");
        $results = $result->fetch_all(MYSQLI_ASSOC);
        $response->getBody()->write(json_encode($results));
        return $response->withHeader("Content-type", "application/json")->withStatus(201);
    }
}

