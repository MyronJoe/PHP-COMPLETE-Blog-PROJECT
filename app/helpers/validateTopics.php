<?php 

function validateTopic($topic, $errors){
    if (empty($topic["name"])) {
        array_push($errors, 'Name is required');
    }
    //checking if an email already exist
    $existingTopic= selectOne('topics', ['name' => $topic["name"]]);
    if($existingTopic){
        if (isset($topic['edit-topic']) && $existingTopic['id'] != $topic['id']) {
            array_push($errors, 'Topic already exists');
        }

        if (isset($topic['add-topic'])) {
            array_push($errors, 'Topic already exists');
        }
        
    }
    // dump($errors);
    return $errors;
}


?>