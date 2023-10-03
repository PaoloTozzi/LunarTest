email= admin@test.it  
password = 12345678
Aggiungere al localhost :8000

<!--* Per ricevere i dati in ingresso dei campi precostruiti devo usare il metodo translateAttribute('nome dato')  -->
<p>{{ $product->translateAttribute('name') }}</p>

<!--* In questo caso non metto la descrizione dentro un tag <p></p> in quanto di default arriva lì -->
{!! $product->translateAttribute('description') !!}

<!--* Per visualizzare il prezzo uso questo metodo sfruttando la relazione tra prezzo e prodotto e aggiungendo first() -->
<p>{{ $product->prices()->first()->price }}</p>

<!--* Per ricavare l'immagine sfrutto la relazione media per prendere poi la prima e ricavare l'url -->
<img src="{{ $product->media->first()->getUrl()}}" alt="">

<!-- TODO -->

Aggiungere Stripe
Ad acquisto effettuato inviare una mail all'utente
Testare ricerca con MeiliSearch https://github.com/meilisearch/meilisearch-php/

<!--! Problemi -->
Lato hub risulta un po' lento e macchinoso
la descrizione non può cambiare di colore in quanto riceve già un {!! !!} con all'interno un <p></p> che non mi permette al momento della creazione di personalizzare se non con bold italic underline e tutte cose a meno che non si usi un div o uno span

<!--*  -->
Mi fa usare livewire 2, probabilmente dovuto al fatto che la parte hub che viene pre salvata ha livewire 2

Posso usare una named route per accedere alla dashoboard non come Nova
----------------------------------------------------------------------------------------------------------------------------------

sk_test_51NiZskB5c4rV0qlyUvL9KFTnRcgpvofJRycXFu46lvjsg8oweSyioLiOOYBDDNkKLQuD3Nb8waJPXupfdBKMqup600kWTcuYvfs