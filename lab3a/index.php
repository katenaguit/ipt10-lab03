<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>IPT10 Laboratory Activity #3A</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
    <script>
        function validateForm() {
            const name = document.querySelector('input[name="complete_name"]').value;
            const email = document.querySelector('input[name="email"]').value;
            const button = document.querySelector('button[type="submit"]');
            
            const isNameValid = name.trim() !== '';
            const isEmailValid = email.includes('@') && email.includes('.');

            button.disabled = !(isNameValid && isEmailValid);
        }

        document.addEventListener('DOMContentLoaded', () => {
            document.querySelectorAll('input').forEach(input => {
                input.addEventListener('input', validateForm);
            });
        });
    </script>
</head>
<body>
<section class="section">
    <h1 class="title">User Registration</h1>
    <h2 class="subtitle">
        This is the IPT10 PHP Quiz Web Application Laboratory Activity. Please Register.
    </h2>
    
    <form method="POST" action="instructions.php">
        <div class="field">
            <label class="label">Name</label>
            <div class="control">
                <input class="input" type="text" name="complete_name" placeholder="Complete Name">
            </div>
        </div>

        <div class="field">
            <label class="label">Email</label>
            <div class="control">
                <input class="input" name="email" type="email"/>
            </div>
        </div>

        <div class="field">
            <label class="label">Birthdate</label>
            <div class="control">
                <input class="input" name="birthdate" type="date" required/>
            </div>
        </div>

        <div class="field">
            <label class="label">Contact Number</label>
            <div class="control">
                <input class="input" name="contact_number" type="tel" required/>
            </div>
        </div>

        <br><button type="submit" class="button is-link is-light" disabled>Proceed Next</button></br>
    </form>
</section>

</body>
</html>