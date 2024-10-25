<x-mail::message>
# Új Ajánlatkérés

Az alábbi adatokkal érkezett egy új ajánlatkérés:

Típus: {{ $type }}
@foreach($data as $key => $value)
- {{ $key }}: {{ $value }}
@endforeach

Üdvözlettel,<br>
Monday Weboldal
</x-mail::message>
