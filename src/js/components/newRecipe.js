import { postToDb } from './dbOperations';


export function newRecipe() {
    // Implement eventHandler for adding more steps
    // Implement eventHandler for adding more Ingredients

    $('[data-form="addNewRecipe"]').on('submit', () => {
        var data = {
            "url": "./communication/new.php",
            "formData": $(this).serialize()
        }
        postToDb(data);
    });     
}   
