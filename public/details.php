<?php
require_once __DIR__ . '/../config/twig.php';

$details = 'nouvelle page';
echo $twig->render('details.html.twig', ['details' => $details]);
