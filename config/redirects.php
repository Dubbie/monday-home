<?php

// config/redirects.php
// - Key is the old path
// - Value is the new route's name (ex. route('services))
return [
    'page/services.html' => 'services',
    'page/contract_2018.html' => 'contract',
    'page/contact.html' => 'contact-us',
    'page/transfer.html' => 'transfer',
    'page/navigator_fuzetek.html' => 'mnb',
    'page/regulations_complaints.html' => 'complaints',
    'ceg-biztositas' => 'insurance.company',
    'tarsashaz-biztositas' => 'insurance.condominium',
    'mezogazdasagi-biztositas' => 'insurance.agriculture'
];
