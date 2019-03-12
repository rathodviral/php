<?php
class Product{

    // Connection instance
    private $connection;

    // table name
    private $table_name = "product";

    // table columns
    public $srno;
    public $panelname;
    public $tdsppm;
    public $collection;
    public $powerusage;
    public $recharge;
    public $quantity;
    public $tankempty;
    public $tanklevellow;

    public function __construct($connection){
        $this->connection = $connection;
    }

    //C
    public function create(){
		// INSERT INTO `product` (`srno`, `panelname`, `tdsppm`, `collection`, `powerusage`, `recharge`, `tankempty`, `tanklevellow`) VALUES (NULL, 'test333', '0000', '0000', '0000', '0000', '1', '1');
		$query = "INSERT INTO " . $this->table_name . " (srno, panelname, tdsppm, collection, powerusage, recharge, tankempty, tanklevellow) VALUES (NULL, '" . $this->$panelname . "','" . $this->$tdsppm . "','" . $this->$collection . "','" . $this->$powerusage . "','" . $this->$recharge . "','" . $this->$tankempty . "','" . $this->$tanklevellow . "')";
		$stmt = $this->connection->prepare($query);
        $stmt->execute();
		return $stmt;
		/*if($stm != 0){
			return true;
		}else{
			return false;
		}*/
    }
    //R
    public function read(){
        // $query = "SELECT c.name as family_name, p.id, p.sku, p.barcode, p.name, p.price, p.unit, p.quantity , p.minquantity, p.createdAt, p.updatedAt FROM" . $this->table_name . " p LEFT JOIN Family c ON p.family_id = c.id ORDER BY p.createdAt DESC";
		$query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        return $stmt;
    }
	
	public function readById($id){
        $query = "SELECT * FROM " . $this->table_name . " WHERE srno = " . $id;
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        return $stmt;
    }
    //U
    public function update($id){
		// UPDATE `product` SET `panelname` = 'TEST234', `tdsppm` = '0001', `collection` = '0001', `powerusage` = '0001', `recharge` = '0001', `tankempty` = '1', `tanklevellow` = '1' WHERE `product`.`srno` = 4;
		$query = "UPDATE " . $this->table_name . " SET panelname = '" . $this->$panelname . "', tdsppm = '" . $this->$tdsppm . "', collection = '" . $this->$collection . "', powerusage = '" . $this->$powerusage . "', recharge = '" . $this->$recharge . "', tankempty = '" . $this->$tankempty . "', tanklevellow = '" . $this->$tankempty . "' WHERE srno = " . $srno;
		echo $query;
		$stmt = $this->connection->prepare($query);
        $stmt->execute();
		return $stmt;
	}
    //D
    public function delete(){
		// DELETE FROM `product` WHERE `product`.`srno` = 5
	}
}