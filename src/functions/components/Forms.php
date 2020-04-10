<?php

    class Forms {
        function getNewRecipeForm() {
            // TODO -> create functions to get form components like input fields.
            $recipeName = "recipeName";
            $recipeNameLabel = "Name";
            $recipeNameHelp = "recipeNameHelp";
            $recipeNameHelpContent = "Type in the name of your recipe.";

            $recipeCategory = "recipeCategory";
            $recipeCategoryLabel = "Category";

            $recipeDuration = "recipeDuration";
            $recipeDurationLabel = "Duration";
            $recipeDurationHelp = "recipeDurationHelp";
            $recipeDurationHelpContent = "The amount of time this meal needs to be cooked.";

            $recipeServes = "recipeServes";
            $recipeServesLabel = "Serves";
            $recipeServesHelp = "recipeServesHelp";
            $recipeServesHelpContent = "How many people will be served with the given amount of ingredients?";

            $recipeSteps = "recipeStep1";
            $recipeStepsLabel = "recipeStep1";

            $recipeIngredientsName = "recipeIngredientsName";
            $recipeIngredientsNameLabel = "Ingredientname";
            $recipeIngredientsAmount = "recipeIngredientsAmount";
            $recipeIngredientsAmountLabel = "Amount";
            $recipeIngredientsAmountType = "recipeIngredientsAmountType";
            $recipeIngredientsAmountTypeLabel = "Unit of measure";

            $recipeTags = "recipeTags";
            $recipeTagsLabel = "Tags";
            $recipeTagsHelp = "recipeTagsHelp";
            $recipeTagsHelpContent = "You can input multiple tags by separating them with a comma.";

            $newRecipeForm = '
                <form data-form="addNewRecipe">
                    <div class="form-group">
                        <label for="'.$recipeName.'">'.$recipeNameLabel.'</label>
                        <input type="text" class="form-control" id="'.$recipeName.'" aria-describedby="'.$recipeNameHelp.'">
                        <small id="'.$recipeNameHelp.'" class="form-text text-muted"'.$recipeNameHelpContent.'</small>
                    </div>
                    <div class="form-group">
                        <label for="'.$recipeCategory.'">'.$recipeCategoryLabel.'</label>
                        <select class="form-control" id="'.$recipeCategory.'">
                            <option>Lunch</option>
                            <option>Breakfast</option>
                            <option>BBQ</option>
                            <option>Backery</option>
                            <option>Desert</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="'.$recipeDuration.'">'.$recipeDurationLabel.'</label>
                        <input type="number" class="form-control" id="'.$recipeDuration.'" aria-describedby="'.$recipeDurationHelp.'">
                        <small id="'.$recipeDurationHelp.'" class="form-text text-muted"'.$recipeDurationHelpContent.'</small>
                    </div>
                    <div class="form-group">
                        <label for="'.$recipeServes.'">'.$recipeServesLabel.'</label>
                        <input type="number" class="form-control" id="'.$recipeServes.'" aria-describedby="'.$recipeServesHelp.'">
                        <small id="'.$recipeServesHelp.'" class="form-text text-muted"'.$recipeServesHelpContent.'</small>
                    </div>
                    <div class="form-group">
                        <label for="'.$recipeSteps.'">'.$recipeStepsLabel.'</label>
                        <textarea class="form-control" id="'.$recipeSteps.'" rows="3"></textarea>
                    </div>
                    <div data-form-item="recipeIngredients">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="'.$recipeIngredientsName.'">'.$recipeIngredientsNameLabel.'</label>
                                <input type="text" class="form-control" id="'.$recipeIngredientsName.'">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="'.$recipeIngredientsAmount.'">'.$recipeIngredientsAmountLabel.'</label>
                                <input type="number" class="form-control" id="'.$recipeIngredientsAmount.'">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="'.$recipeIngredientsAmountType.'">'.$recipeIngredientsAmountTypeLabel.'</label>
                                <select id="'.$recipeIngredientsAmountType.'" class="form-control">
                                    <option selected>Select type...</option>
                                    <option>g</option>
                                    <option>kg</option>
                                    <option>ml</option>
                                    <option>l</option>
                                    <option>Stk</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="'.$recipeTags.'">'.$recipeTagsLabel.'</label>
                        <input type="text" class="form-control" id="'.$recipeTags.'" aria-describedby="'.$recipeTagsHelp.'">
                        <small id="'.$recipeTagsHelp.'" class="form-text text-muted"'.$recipeTagsHelpContent.'</small>
                    </div>
                </form>';

            return $newRecipeForm;
        }
    }