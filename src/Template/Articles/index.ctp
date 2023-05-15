<!-- Fichier : src/Template/Articles/index.ctp -->
<div class="section white" id="features">
		<div class="container">
<h1>Articles</h1>
<table>
<tr>
<th>Titre</th>
<th>Créé le</th>
</tr>
<!-- C'est ici que nous bouclons sur notre objet Query $articles pour afficher
˓→les informations de chaque article -->
<?php foreach ($articles as $article): ?>
<tr>
<td>


<?= $this->Html->link($article->title, ['action' => 'view', $article->id]) ?>
</td>
<td>
<?= $article->created->format(DATE_RFC850) ?>
</td>
</tr>
<?php endforeach; ?>
</table>

</div>
</div>
</div>