<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $fillable = [
        'idInvoice',
        'InvoiceNameReceiver',
        'InvoiceAddressReceiver',
        'InvoicePhoneReceiver',
        'InvoiceDate',
        'TotalInvoice',
        'PaymentsInvoice',
        'StatusInvoice',
        'Paid',
        'NoteInvoice',
        'idAccount'
    ];
}
