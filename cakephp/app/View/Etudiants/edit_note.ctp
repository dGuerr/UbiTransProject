<!-- Fichier: /app/View/Etudiants/edit_note.ctp -->

<h1>Editer note</h1>

<?php
	echo $this->Form->create('Note');
	echo $this->Form->input('nomMatiere');
	echo $this->Form->input('note');
	echo $this->Form->end('Sauvegarder');
?>