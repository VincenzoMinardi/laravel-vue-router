"Email inviata in automatico da M4lt0_Bot, l'amico di chi trova sempre un motivo per bere"

<h1>Gentile Cliente {{ $email->name }}!</h1>
<br>
<br>
<p style="font-size: 20px;">Abbiamo ricevuto la tua email con il seguente messaggio:</p>
<h2>"{{ $email->message}}"</h2>
<br>
<p style="font-size: 20px;">Verrai contattato al seguente indirizzo <strong>{{ $email->email }}</strong> il prima possibile da un nostro operatore.</p>
<div style="color: blue;">
    nel mentre che aspetti di essere contattato ti ricordo che i nostri prodotti sono fatti al 100% da produttori Italiani.<br>
    Inoltre, ti ricordiamo di bere con moderazione per proteggere te e chi ti sta intorno
</div>
<p style="text-align: end; font-size:20px; color: green;">-Il bot che gestisce le email</p>
