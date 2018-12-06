<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Teste site TI-REX</title>
    <script type="text/javascript">
      function validacao(){
        var nome = formcontato.nome.value;
        var email = formcontato.email.value;
        var Telefone = formcontato.telefone.value;
        var mensagem = formcontato.mensagem.value;

        if (nome == "") {
          alert("Campo nome é obrigatório");
          formcontato.nome.focus();
          return false;
        }
      }
    </script>
  </head>
  <body>
      <form class="" name="formcontato" action="" method="post" >
        <label for="nome">nome</label>
        <input type="text" name="nome" value="" onsubmit="return validacao()">
        <label for="nome">nome</label>
        <input type="text" name="Email" value="">
        <input type="text" name="Telefone" value="">
        <textarea name="name" rows="8" cols="80"></textarea>
        <button type="button" name="button">Enviar</button>
      </form>


  </body>

</html>
