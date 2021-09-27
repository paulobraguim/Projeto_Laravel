<<<<<<< HEAD
=======
{{ $slot }}
>>>>>>> Projeto Laravel
<form action="{{ route('site.contato') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="inputNome">Nome</label>
        <input type="text" class="form-control" id="inputNome" name="nome" placeholder="Digite seu nome">                        
    </div>

    <div class="form-group">
        <label for="inputTelefone">Telefone</label>
        <input type="text" class="form-control" id="inputTelefone" name="telefone" placeholder="Digite seu telefone">                        
    </div>

    <div class="form-group">
      <label for="inputEmail">E-mail</label>
      <input type="email" class="form-control" id="inputEmail" name="email" aria-describedby="emailHelp" placeholder="email@example.com">
      <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
    </div>

    <div class="form-group">
        <label for="selectContato" class="form-label">Motivo</label>
        <select class="form-select custom" id="selectContato" name="motivo_contato" aria-label="Default select example">
            <option selected>Qual o motivo do contato? </option>
            <option value="1">Reclamação</option>
            <option value="2">Sugestão</option>
            <option value="3">Elogio</option>
        </select>
    </div>

    <div class="form-group">
        <label for="mensagem" class="form-label">Mensagem</label>
        <textarea class="form-control custom" id="mensagem" name="mesagem" rows="3" placeholder="Digite sua mensagem"></textarea>
    </div>
    
    <button type="submit" class="btn btn-primary btn-custom">Enviar</button>
</form>