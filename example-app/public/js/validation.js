// validation.js

document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("id");

    form.addEventListener("submit", function (event) {
        if (!validateForm()) {
            event.preventDefault();
        }
    });

    function validateForm() {
        let isValid = true;

        const mandatoryFields = document.querySelectorAll(".mandatory");
        mandatoryFields.forEach(function (field) {
            if (!validateMandatoryField(field)) {
                isValid = false;
            }
        });

        return isValid;
    }

    function validateMandatoryField(field) {
        const value = field.value.trim();
        const errorMessageElement = document.getElementById(
            field.id + "-error"
        );

        if (value === "") {
            errorMessageElement.textContent = "This field is mandatory.";
            return false;
        } else {
            errorMessageElement.textContent = "";
            return true;
        }
    }
});
