<?php

    class Forms {

        function inputField($id, $label, $type = "text", $cssClass = null) {
            return '
                <div class="form-group '.$cssClass.'">
                    <label for="'.$id.'">'.$label.'</label>
                    <input type="'.$type.'" class="form-control" id="'.$id.'"/>
                </div>';
        }

        function selectOption($id, $label, $options, $cssClass = null) {
            $printedOptions = '';

            foreach ($options as &$option) {
                $printedOptions = $printedOptions.'<option>'.$option.'</option>';                   
            }

            return '
                <div class="form-group '.$cssClass.'">
                    <label for="'.$id.'">'.$label.'</label>
                    <select class="form-control" id="'.$id.'">
                        '.$printedOptions.'
                    </select>
                </div>';
        }

        function textarea($id, $label, $cssClass = null){
            return '
                <div class="form-group '.$cssClass.'">
                    <label for="'.$id.'">'.$label.'</label>
                    <textarea class="form-control" id="'.$id.'" rows="3"></textarea>
                </div>';
        }
    }