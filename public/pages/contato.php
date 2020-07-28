<h2>Contato</h2>

<form action="/pages/forms/contato.php" method="POST">

  <div class="form-group">
    <label for="exampleInputName">Nome</label>
    <input type="text" name="name" class="form-control" id="exampleInputName">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputName">Assunto</label>
    <input type="text" name="subject" class="form-control" id="exampleInputSubject">
  </div>
  <div class="form-group">
    <label for="exampleInputMessage">Mensagem</label>
    <textarea name="message" class="form-control" colls="30" rows="10"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>