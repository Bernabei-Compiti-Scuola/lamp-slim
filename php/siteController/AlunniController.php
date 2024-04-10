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
        $result = $mysqli_connection->query("SELECT * FROM alunni WHERE id = $args[id]");
        $results = $result->fetch_all(MYSQLI_ASSOC);
        $response->getBody()->write(json_encode($results));
        return $response->withHeader("Content-type", "application/json")->withStatus(201);
    }
    //inserisce nuovo alunno
    function post_alunni(Request $request, Response $response, $args) 
    {
        $mysqli_connection = new MySQLi('my_db', 'root', 'ciccio', 'alunni');
        $result = $mysqli_connection->query("INSERT INTO alunni (nome, cognome) values ($args[nome], $args[cognome])");
        $results = $result->fetch_all(MYSQLI_ASSOC);
        $response->getBody()->write(json_encode($results));
        return $response->withHeader("Content-type", "application/json")->withStatus(201);
    }
    //sostituisci dati alunno
    function put_alunni_by_id(Request $request, Response $response, $args) 
    {
        $mysqli_connection = new MySQLi('my_db', 'root', 'ciccio', 'alunni');
        $result = $mysqli_connection->query("UPDATE TABLE alunni SET nome = $args[nome], cognome = $args[cognome] WHERE id = $args[id]");
        $results = $result->fetch_all(MYSQLI_ASSOC);
        $response->getBody()->write(json_encode($results));
        return $response->withHeader("Content-type", "application/json")->withStatus(201);
    }
    function delete_alunni_by_id(Request $request, Response $response, $args) 
    {
        $mysqli_connection = new MySQLi('my_db', 'root', 'ciccio', 'alunni');
        $result = $mysqli_connection->query("DELETE FROM alunni WHERE id = $args[id]");
        $results = $result->fetch_all(MYSQLI_ASSOC);
        $response->getBody()->write(json_encode($results));
        return $response->withHeader("Content-type", "application/json")->withStatus(201);
    }


}
