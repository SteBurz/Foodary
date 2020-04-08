import { postToDb } from './dbOperations';


export function newRecipe() {
    $('[data-form="addNewRecipe"]').on('submit', () => {
        var data = {
            "url": "./recipes/new.php",
            "formData": $(this).serialize()
        }
        postToDb(data);
    });     
}   
