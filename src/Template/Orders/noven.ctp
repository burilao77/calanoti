<div class="posts index large-9 medium-8 columns content">
<br>
    <h3><?= __('Productos validos') ?></h3>
    <div>
        <?= $this->Html->link('No vencidos', ['action' => 'noven']); ?>
    </div>
          <div>
        <?= $this->Html->link('vencidos', ['action' => 'index']); ?>
    </div>
    <table class="table table-hover">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('nombre') ?></th>
                <th><?= $this->Paginator->sort('precio') ?></th>
                <th><?= $this->Paginator->sort('description') ?></th>
                <th><?= $this->Paginator->sort('Estado') ?></th>    
            </tr>
        </thead>
        <tbody>

            <?php foreach ($orders as $order): ?>

                         
            
            <tr>
                <td><?= $this->Number->format($order->id) ?></td>
                <td><?= h($order->name) ?></td>
                <td><?= h($order->price) ?></td>
                <td><?= h($order->description) ?></td>
               <td>
               <?php echo " no vencidos"; ?>
                 </td>

            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>












<!--<div>
    <p id="fechai">10-09-2013</p><br>
    <p id="fechaf">10-09-2013</p> 
</div>

<script type="text/javascript">

var fecha_inicio  = $("#fechai").val(); //05-09-2013
var  fecha_fin    = $("#fechaf").val(); //10-09-2013

    
    if(fecha_inicio == fecha_fin)
{
    alert('mensaje');
}
</script>-->