<?php 
namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Database\ConnectionInterface;

class masyarakat extends Model {
	
	protected $db;
	public function __construct(ConnectionInterface &$db) {
		$this->db =& $db;
	}

	function add($data) {
		return $this->db
                        ->table('masyarakat')
                        ->insert($data);
	}
	
}