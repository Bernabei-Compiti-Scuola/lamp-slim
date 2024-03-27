<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
class SiteController
{
    function get_alunni(Request $request, Response $response, $args) 
    {
        $mysqli_connection = new MySQLi('my_db', 'root', 'ciccio', 'alunni');
        $result = $mysqli_connection->query("SELECT * FROM alunni");
        $results = $result->fetch_all(MYSQLI_ASSOC);
        $response->getBody()->write(json_encode($results));
        return $response->withHeader("Content-type", "application/json")->withStatus(201);
    }
    
    function get_alunni_by_id(Request $request, Response $response, $args) 
    {
        $mysqli_connection = new MySQLi('my_db', 'root', 'ciccio', 'alunni');
        $result = $mysqli_connection->query("SELECT * FROM alunni");
        $results = $result->fetch_all(MYSQLI_ASSOC);
        $response->getBody()->write(json_encode($results));
        return $response->withHeader("Content-type", "application/json")->withStatus(201);
    }
    function post_alunni(Request $request, Response $response, $args) 
    {
        $mysqli_connection = new MySQLi('my_db', 'root', 'ciccio', 'alunni');
        $result = $mysqli_connection->query("SELECT * FROM alunni");
        $results = $result->fetch_all(MYSQLI_ASSOC);
        $response->getBody()->write(json_encode($results));
        return $response->withHeader("Content-type", "application/json")->withStatus(201);
    }
    function put_alunni_by_id(Request $request, Response $response, $args) 
    {
        $mysqli_connection = new MySQLi('my_db', 'root', 'ciccio', 'alunni');
        $result = $mysqli_connection->query("SELECT * FROM alunni");
        $results = $result->fetch_all(MYSQLI_ASSOC);
        $response->getBody()->write(json_encode($results));
        return $response->withHeader("Content-type", "application/json")->withStatus(201);
    }
    function delete_alunni_by_id(Request $request, Response $response, $args) 
    {
        $mysqli_connection = new MySQLi('my_db', 'root', 'ciccio', 'alunni');
        $result = $mysqli_connection->query("SELECT * FROM alunni");
        $results = $result->fetch_all(MYSQLI_ASSOC);
        $response->getBody()->write(json_encode($results));
        return $response->withHeader("Content-type", "application/json")->withStatus(201);
    }


}
