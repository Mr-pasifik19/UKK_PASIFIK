<?php 
namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Database\ConnectionInterface;

class masyarakat extends Model {
	protected $table = "masyarakat";
    protected $primaryKey = "nik";
    protected $allowedFields = ["nik","nama","username", "password", "telp"];
    protected $useTimestamps = false;
	
}