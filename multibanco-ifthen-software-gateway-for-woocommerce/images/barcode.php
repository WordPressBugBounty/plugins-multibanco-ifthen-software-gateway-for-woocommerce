<?php

	require_once '../includes/tcpdf_barcodes_1d.php';

	$code = intval( filter_var( trim( $_GET['code'] ), FILTER_SANITIZE_NUMBER_INT ) );

	$tcpdfBarcode = new \TCPDFBarcode( $code, 'C39' );

	$pngContent = $tcpdfBarcode->getBarcodePngData( 1, 40, array( 0, 0, 0 ) );

	header( 'Content-Type: image/png' );

	echo $pngContent;