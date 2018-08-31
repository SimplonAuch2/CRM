<?php 

	// creation de la class produit
	class Products 
	{
		public $name;
		public $price;
		public $stock;
		public $place;
		public $description;
		public $size;
		public $weight;
		public $reference;
	}

	// function pour creer un nouveau produit
	public function __construct($name, $price, $stock, $place, $description, $size, $weight, $reference)
	{
		$this -> name = $name;
		$this -> price = $price;
		$this -> stock = $stock;
		$this -> place = $place;
		$this -> description = $description;
		$this -> size = $size;
		$this -> weight = $weight;
		$this -> reference = $reference;
	}

	// trie par ordre croissant
	function getProductOrderByAsc($orderBy)
	{

        $products = $bdd->query('SELECT * FROM products ORDER BY '.$orderBy.' ASC');

        return $products;

    }

    // trie par ordre decroissant
    function getProductOrderByDesc($orderBy){

        $products = $bdd->query('SELECT * FROM products ORDER BY '.$orderBy.' DESC');

        return $products;

    }

    //Ajouter un produit
    function addProduct($product_name,$product_price,$product_stock,$product_place,$product_description,$product_size,$product_weight,$product_reference,$product_state)

    {

        $req = $bdd->prepare('INSERT INTO products(product_name,product_price,product_stock,product_place,product_description,product_size,product_weight,product_reference,product_state)

        VALUES (:product_name,:product_price,:product_stock,:product_place,:product_description,:product_size,:product_weight,:product_reference,:product_state)');

        $req->execute(array(

            ':product_name' => $product_name,

            ':product_price' => $product_price,

            ':product_stock' => $product_stock,

            ':product_place' => $product_place,

            ':product_description' => $product_description,

            ':product_size' => $product_size,

            ':product_weight' => $product_weight,

            ':product_reference' => $product_reference,

            ':product_state' => $product_state

        ));

        return $req;

    }

    //Modifier un produit
    function updateProduct($product_name,$product_price,$product_stock,$product_place,$product_description,$product_size,$product_weight,$product_reference,$product_state)

    {

        $req = $bdd->query("UPDATE products SET product_name ='$product_name',product_price ='$product_price',product_stock ='$product_stock',product_place ='$product_place',product_description ='$product_description',product_size ='$product_size',product_weight ='$product_weight',product_reference ='$product_reference',product_state ='$product_state'");

        return $req;

    }

    //Retiré un produit
    function cancelProduct($product_id){

        $req = $bdd->query('UPDATE products SET product_state = "Retiré" WHERE product_id ='.$product_id);

        return $req;

    }

 ?>