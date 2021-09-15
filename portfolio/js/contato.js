function validaForm() {

    var nome = document.getElementById('nome');
    var email = document.getElementById('email');
    var msg = document.getElementById('mensagem');
    var erro = document.getElementById('erro');
    


    // para limpar campo de erro usamos o seguinte comando
    erro.innerHTML = '';
    nome.classList.remove('campoErro');
    email.classList.remove('campoErro');
    msg.classList.remove('campoErro');

    if (nome.value == '') {
        erro.innerHTML = '>> Preencha o nome!';

        nome.classList.add('campoErro');
        nome.focus();
        
        return false;
    }

  if (email.value == '') {
      erro.innerHTML = '>> Preencha o e-mail!';

      email.classList.add('campoErro');
      email.focus();

      return false;
  }

  var regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

  if (regex.test(email.value) == false) {
      erro.innerHTML = 'E-mail inválido!'

      email.classList.add('campoErro');
      email.focus();

      return false;
  }

  if (msg.value == '') {
      erro.innerHTML = '>> Preencha a mensagem!';

    msg.classList.add('campoErro');
     mensagem.focus();

     return false;  
  }









return true;
}