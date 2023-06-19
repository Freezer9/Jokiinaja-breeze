<?php

namespace App\Helpers;

class InvoiceHelper
{
  public static function generateInvoiceNumber($gameName)
  {
    $prefix = 'INV';
    $date = date('Ymd');
    $gameInitials = strtoupper(substr($gameName, 0, 3));
    $randomChars = self::generateRandomChars(5);

    $invoiceNumber = $prefix . '-' . $date . '-' . $gameInitials . '-' . $randomChars;

    return $invoiceNumber;
  }

  private static function generateRandomChars($length)
  {
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $randomChars = '';

    for ($i = 0; $i < $length; $i++) {
      $randomChars .= $characters[rand(0, strlen($characters) - 1)];
    }

    return $randomChars;
  }
}
