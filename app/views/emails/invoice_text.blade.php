{{ $clientName }},

To view your invoice for {{ $invoiceAmount }}, click the link below:

{{ $link }}

@if ($emailFooter)
{{ $emailFooter }}
@else
Best regards,
{{ $accountName }}
@endif