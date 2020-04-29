<?php

namespace App\O;

use App\O\SaverInterface\SaverInterface;

/**
 * Class DBSave
 */
class DBSave implements SaverInterface
{
    /**
     * @var $pdo
     * @var $host
     * @var $root
     * @var $pass
     * @var $db
     */
    private $pdo, $host, $root, $pass, $db;

    /**
     * DataBaseSave constructor.
     * @param $host
     * @param $root
     * @param $pass
     * @param $db
     */
    public function __construct($host, $root, $db, $pass = '')
    {
        $this->host = $host;
        $this->root = $root;
        $this->pass = $pass;
        $this->db = $db;
    }

    /**
     * @return void
     */
    public function connect(): void
    {
        $this->pdo = new \PDO("mysql:dbname={$this->db};host={$this->host}", $this->root, $this->pass);
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    /**
     * @param $data
     */
    public function save($data): void
    {
        try {
            $this->connect();
            $this->pdo->query("INSERT INTO `reports` (report) VALUES ('{$data}')");
        } catch (\Exception $exception) {
            echo $exception->getTrace();
        }
    }
}