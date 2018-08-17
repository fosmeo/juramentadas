<!DOCTYPE html>

<html>
   <head>
   	<title>Contato Orçamentos - Juramentadas.com</title>
   </head>

   <body>
   	<h1>CONTATO - WhatsApp</h1>
   	<p>{{ $orcamentodados -> nome}}</p>
      <p>{{ $orcamentodados -> cidade}}</p>
      <p>{{ $orcamentodados -> estado}}</p>
      <p>{{ $orcamentodados -> telefone}}</p>
      <p>{{ $orcamentodados -> email}}</p>
      <p>{{ $orcamentodados -> mensagem}}</p>
      <p>IP: {{ $_SERVER["REMOTE_ADDR"] }}</p>
      <a href="orcamentos/{{ $orcamentodados -> file('arquivo_orcamento') -> getClientOriginalName() }}">Download Arquivo </a>
   </body>

</html>
