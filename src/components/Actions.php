<?php

    class Actions {
        
        function addButtonWithModal($options) {
            // buttonName
            // modal.id
            // modal.title
            // modal.body
            // modal.button

            echo
                '<button class="btn" data-toggle="modal" data-target=#'.$options->modal->id.'>
                    '.$options->buttonName.'
                </button>
                <div class="modal fade" id="'.$options->modal->id.'" tabindex="-1" role="dialog" aria-labelledby="'.$options->modal->title.'" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="'.$options->modal->title.'">
                                    '.$options->modal->title.'
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">
                                        &times;
                                    </span>
                                </button>
                            </div>
                            <div class="modal-body">
                                '.$options->modal->body.'
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                    Close
                                </button>
                                <button type="button" class="btn btn-primary">
                                    '.$options->modal->buttonName.'
                                </button>
                            </div>
                        </div>
                    </div>
                </div>';
        }


        function getNewRecipeForm() {
            $FORMS = new Forms;

            $newRecipeForm = '
                <form data-form="addNewRecipe">
                    '.$FORMS->inputField("recipeName", "Name").'
                    '.$FORMS->selectOption("recipeCategory", "Category", ["Lunch", "Breakfast", "Dinner"]).'
                    '.$FORMS->inputField("recipeDuration", "Duration", "number").'
                    '.$FORMS->inputField("recipeServes", "Serves", "number").'
                    '.$FORMS->textarea("recipeStep1", "Steps").'
                    <div data-form-item="recipeIngredients">
                        <div class="form-row">
                            '.$FORMS->inputField("recipeIngredientsName", "Ingredientname", "text", "col-md-6").'
                            '.$FORMS->inputField("recipeIngredientsAmount", "Amount", "number", "col-md-2").'
                            '.$FORMS->selectOption("recipeIngredientsAmountType", "Unit of measure", ["g", "kg", "ml", "l", "Stk"], "col-md-4").'
                        </div>
                    </div>
                    '.$FORMS->inputField("recipeTags", "Tags", "recipeTagsHelp", "You can input multiple tags by separating them with a comma.").'
                </form>';

            return $newRecipeForm;
        }
    }