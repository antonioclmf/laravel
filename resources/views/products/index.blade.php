<h3>Produtos</h3>

<table>
    <thead>
    <tr>
        <th>#</th>
        <th>titulo</th>
        <th>qtd</th>
        <th>ações</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($data as $product): ?>
      <tr>
        <th><?php echo $product->id; ?></th>
        <th><?php echo $product->title; ?></th>
        <th><?php echo $product->qtd; ?></th>
        <th>#</th>
      </tr>
    <?php endforeach; ?>
    </tbody>
</table>