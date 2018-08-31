<?php 

	class Orders 
	{
		public $customers;
		public $products;
		public $quantity;
		public $price;
		public $reduction;
		public $shippingCosts;
		public $totalPrice;
		public $VAT;
		public $shippingAddress;
		public $billingAddress;
		public $date;
	}

	public function __construct($customers, $products, $quantity, $price, $reduction, $shippingCosts, $totalPrice, $VAT, $shippingAddress, $billingAddress, $date)
	{
		$this -> customers = $customers;
		$this -> products = $products;
		$this -> quantity = $quantity;
		$this -> price = $price;
		$this -> reduction = $reduction;
		$this -> shippingCosts = $shippingCosts;
		$this -> totalPrice = $totalPrice;
		$this -> VAT = $VAT;
		$this -> shippingAddress = $shippingAddress;
		$this -> billingAddress = $billingAddress;
		$this -> date = $date;
	}

	// trie par odre croissant
	function getOrderOrderByAsc($orderBy)
	{

        $orders = $bdd->query('SELECT * FROM Orders ORDER BY '.$orderBy.' ASC');

        return $orders;

    }

    //trie par ordre decroissant
    function getOrderOrderByDesc($orderBy)
    {

        $orders = $bdd->query('SELECT * FROM Orders ORDER BY '.$orderBy.' DESC');

        return $orders;

    }

    //Ajouter une commande >>>> table nom Orders
    function addOrder($order_products,$order_quantity,$order_price,$order_reduction,$order_postal_charges,$order_totalprice,$order_taxes,$order_delivery_address,$order_billing_address,$order_date,$order_state,$order_delivery_date,$customer_id)
    {

        $req = $bdd->prepare('INSERT INTO Orders(order_products,order_quantity,order_price,order_reduction,order_postal_charges,order_totalprice,order_taxes,order_delivery_address,order_billing_address,order_date,order_state,order_delivery_date,customer_id)

        VALUES (:order_products,:order_quantity,:order_price,:order_reduction,:order_postal_charges,:order_totalprice,:order_taxes,:order_delivery_address,:order_billing_address,:order_date,:order_state,:order_delivery_date,:customer_id)');

        $req->execute(array(

            ':order_products' => $order_products,

            ':order_quantity' => $order_quantity,

            ':order_price' => $order_price,

            ':order_reduction' => $order_reduction,

            ':order_postal_charges' => $order_postal_charges,

            ':order_totalprice' => $order_totalprice,

            ':order_taxes' => $order_taxes,

            ':order_delivery_address' => $order_delivery_address,

            ':order_billing_address' => $order_billing_address,

            ':order_date' => $order_date,

            ':order_state' => $order_state,

            ':order_delivery_date' => $order_delivery_date,

            ':customer_id' => $customer_id, 

        ));

        return $req;

    }

    //Modifier une commande
    function updateOrder($order_products,$order_quantity,$order_price,$order_reduction,$order_postal_charges,$order_totalprice,$order_taxes,$order_delivery_address,$order_billing_address,$order_date,$order_state,$order_delivery_date,$customer_id)
    {

        $req = $bdd->query("UPDATE Order SET order_products='$order_products',order_quantity='$order_quantity'order_price,='$order_price',order_reduction='$order_reduction',order_postal_charges='$order_postal_charges',order_totalprice='$order_totalprice',order_taxes='$order_taxes',order_delivery_address='$order_delivery_address',order_billing_address='$order_billing_address',order_date='$order_date',order_state='$order_state',order_delivery_date='$order_delivery_date',customer_id='$customer_id'");

        return $req;

    }

    //Annulé une commande
    function cancelOrder($order_id)
    {

        $req = $bdd->query('UPDATE Orders SET order_state = "Annulé" WHERE order_id ='.$order_id);

        return $req;

    }

 ?>