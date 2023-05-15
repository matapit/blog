<?php
// src/Controller/ArticlesController.php
namespace App\Controller;
class ArticlesController extends AppController
{
public function index()
{
$this->loadComponent('Paginator');
$articles = $this->Paginator->paginate($this->Articles->find());
$this->set(compact('articles'));

}




public function view($id = null)
{
    
$article = $this->Articles->get($id);
$this->set(compact('article'));
}

public function add()
{
    
    $article = $this->Articles->newEntity();
    if ($this->request->is('post')) {
    $article = $this->Articles->patchEntity($article, $this->request->getData());
    // L'écriture de 'user_id' en dur est temporaire et
    // sera supprimé quand nous aurons mis en place l'authentification.
    $article->user_id = 1;
    if ($this->Articles->save($article)) {
    $this->Flash->success(__('Votre article a été sauvegardé.'));
    return $this->redirect(['action' => 'index']);
    }
    $this->Flash->error(__('Impossible d\'ajouter votre article.'));
    }
    $this->set('article', $article);
    


}




}

