const passwordInput = document.getElementById("password");
const toggleButton = document.getElementById("btn-toggle-password-visibility");

function showPasswordField() {
    passwordInput.type = "text";
    toggleButton.innerHTML = "Hide";
}

function hidePasswordField() {
    passwordInput.type = "password";
    toggleButton.innerHTML = "Show";
}

toggleButton.addEventListener("click", togglePasswordVisibility);

function togglePasswordVisibility() {
    if (passwordInput.type === "password") {
        showPasswordField();
    } else {
        hidePasswordField();
    }
}

function updateToggleButton() {
    const isEmpty = !(passwordInput.value) && passwordInput != document.activeElement
    if (isEmpty) {
        hidePasswordField();
    }

    if (passwordInput.value || passwordInput === document.activeElement) {
        toggleButton.style.display = "inline";
    } else {
        toggleButton.style.display = "none";
    }
}

passwordInput.addEventListener("focus", updateToggleButton);
passwordInput.addEventListener("blur", updateToggleButton);
passwordInput.addEventListener("input", updateToggleButton);

// Initial call to hide the button if the password field is empty
updateToggleButton();
