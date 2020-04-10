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
    }