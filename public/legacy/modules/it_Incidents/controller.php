<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once 'include/MVC/Controller/SugarController.php';

class it_IncidentsController extends SugarController
{
    public function action_list()
    {
        // Pobierz instancję DBManager
        $db = DBManagerFactory::getInstance();

        // Zdefiniuj zapytanie SQL dla pobrania danych z modułu Kontakty
        $queryIt_Claim = "SELECT * FROM it_Claim WHERE deleted = 0" ;

        // Zdefiniuj zapytanie SQL dla pobrania danych z modułu Kontahenci
        $query_it_Complaiants = "SELECT * FROM it_Complaiants WHERE deleted = 0";

        // Połącz oba zapytania za pomocą UNION
        $queryUnion = $db->get_union_all_query([$queryIt_Claim, $query_it_Complaiants]);

        // Wykonaj zapytanie do bazy danych
        $result = $db->query($queryUnion);

        // Przetwórz wynik zapytania i przekaż do widoku

        // Przykładowa logika przetwarzania wyniku zapytania
        $data = [];
        while ($row = $db->fetchByAssoc($result)) {
            $data[] = $row;
        }

        // Przekaż dane do widoku
        $this->view = 'list';
        $this->view_object_map['data'] = $data;
    }

    // Dodaj inne metody obsługujące inne rodzaje żądań (np. edycja, zapis)
}