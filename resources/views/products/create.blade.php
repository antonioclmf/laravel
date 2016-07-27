<h3>Novo Produto</h3>

<form action="/products" method="post">
    <input type="hidden" name="_token" value="<?php echo csrf_token();?>">
   Titulo: <input type="text" name="title"><br>
   Descriçao: <textarea name="body" id="" cols="30" rows="10"></textarea><br>
   Valor: <input type="text" name="value"><br>
   Quantidade: <input type="text" name="qtd"><br>
   url: <input type="text" name="url"><br>
    <input type="submit">
</form>