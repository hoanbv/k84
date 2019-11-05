<?php

function showError($errors, $nameInput)
{
    //neu bi loi $errors se co key = name input
//has($nameInput) : kieem tra key bi loi trong input
    if ($errors->has($nameInput)){
        echo '<div class="alert alert-danger role=alert">';
        echo '<strong>'.$errors->first($nameInput).'</strong>';
        echo '</div>';
    }
               
    
    
}