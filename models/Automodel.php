<?php
class AutoModel {
    private $db;

    public function __construct() {
        // Conexión a la base de datos sin usuario y contraseña
        $dsn = 'mysql:host=localhost;dbname=conse;charset=utf8';
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];

        try {
            $this->db = new PDO($dsn, null, null, $options);
        } catch (PDOException $e) {
            exit('Error al conectar a la base de datos: ' . $e->getMessage());
        }
    }

    public function getAllAutos() {
        $query = "SELECT autos.*, vendedores.nombre AS nombre_vendedor, vendedores.telefono
                  FROM autos
                  INNER JOIN vendedores ON autos.id_vendedor = vendedores.id_vendedor";
        $stmt = $this->db->query($query);
        return $stmt->fetchAll();
    }
}
?>
