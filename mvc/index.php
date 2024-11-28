<?php
require_once 'Config/conf.php';
require_once 'App/Controllers/MahasiswaController.php';

$action = isset($_GET['action']) ? $_GET['action'] : 'index';

$controller = new MahasiswaController($conn);

switch ($action) {
    case 'add':
        $controller->add();
        break;

    case 'update':
        if (isset($_GET['id']) && is_numeric($_GET['id'])) {
            $id = $_GET['id'];
            $controller->update($id);
        } else {
            echo "ID tidak valid untuk update.";
        }
        break;

    case 'delete':
        if (isset($_GET['id']) && is_numeric($_GET['id'])) {
            $id = $_GET['id'];
            $controller->delete($id);
        } else {
            echo "ID tidak valid untuk delete.";
        }
        break;

    default:
        $controller->index(); 
        break;
}
