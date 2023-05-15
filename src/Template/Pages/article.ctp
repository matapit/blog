<div class="section white" id="features">
		<div class="container">
			<div class="row">		
            <?php foreach ($articles as $article): ?>
            <tr>
            <td><?= $article->id ?></td>
<td>
<?= $article->→id ?>
<?= $this->Html->link($article->title, ['action' => 'view', $article->→id]) ?>
</td>
<td>
<?= $article->created->format(DATE_RFC850) ?>
</td>
</tr>
<?php endforeach; ?>
</div>
</div>
</div>