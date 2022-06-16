$has_orders = 1;

$customer_orders = (object)['orders'];

for ($i = 0; $i <= 40; $i++) {
	$customer_orders->orders[] = get_mock_order();
}

function get_mock_order() {
	$names = [
		'Test',
		'John',
		'Adam',
		'Eve',
		'Tim'
	];

	$orderData = array(
		'order-date' => date("d M Y", mt_rand(1, time())),
		'order-number' => uniqid(),
		'order-ref-number' => uniqid(),
		'order-contact' => $names[rand(0, count($names) - 1)],
		'order-contect-reference' => 'Testbolaget AB',
		'order-total-amount' => rand(200, 9000) . ' SEK',
		'order-status' => [1 => 'processing', 2 => 'completed', 3 => 'part-delivered'][rand(0, 2)]
	);

	return $orderData;
}
