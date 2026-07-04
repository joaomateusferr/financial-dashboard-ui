const FormValidator = {

    validateForm: function(Form, AlertBox) {

        if (!Form.checkValidity()) { //HTML field validations

            const InvalidField = Form.querySelector(':invalid');

            let LabelText = '';

            if (InvalidField.id) {

                const Label = document.querySelector('label[for="'+InvalidField.id+'"]');

                if (Label){

                    LabelText = Label.textContent + ': ';

                }

            }

            AlertBox.textContent = LabelText + InvalidField.validationMessage;
            AlertBox.hidden = false;

            InvalidField.focus();

            return false;

        }

    }

};