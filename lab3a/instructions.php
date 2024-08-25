<?php
# Check if the HTTP method is **POST**; if not, redirect to the index page
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit();
}

$complete_name = $_POST['complete_name'];
$email = $_POST['email'];
$birthdate = $_POST['birthdate'];
$contact_number = $_POST['contact_number'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>IPT10 Laboratory Activity #3A</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css" />
    <script>
        function toggleStartButton() {
            const checkbox = document.querySelector('input[name="agree"]');
            const button = document.querySelector('button[type="submit"]');
            button.disabled = !checkbox.checked;
        }

        document.addEventListener('DOMContentLoaded', () => {
            const checkbox = document.querySelector('input[name="agree"]');
            checkbox.addEventListener('change', toggleStartButton);
            toggleStartButton(); 
        });
    </script>
    <style>
        .scrollable-box {
            height: 100px; 
            width: 100%;
            overflow-y: auto; 
            border: 1px solid #ccc; 
            padding: 10px; 
            box-sizing: border-box; 
        }
    </style>
</head>
<body>
<section class="section">
    <h1 class="title">Instructions</h1>
    <h2 class="subtitle">
        Hello <?php echo htmlspecialchars(explode(' ', $complete_name)[0]); ?>, Please read the Instructions first.
    </h2>

    <!-- Form for agreeing to terms and starting the quiz -->
    <form method="POST" action="quiz.php">
        <input type="hidden" name="complete_name" value="<?php echo htmlspecialchars($complete_name); ?>" />
        <input type="hidden" name="email" value="<?php echo htmlspecialchars($email); ?>" />
        <input type="hidden" name="birthdate" value="<?php echo htmlspecialchars($birthdate); ?>" />
        <input type="hidden" name="contact_number" value="<?php echo htmlspecialchars($contact_number); ?>" />

        <p>
        Welcome to the quiz. Before you proceed, please take a moment to review the instructions provided. Understanding these guidelines is essential for completing the quiz effectively. If you have any questions, feel free to reach out. Best of luck. Should you have any questions or require clarification, do not hesitate to reach out for assistance. We wish you the best of luck and hope you find this quiz both challenging and enjoyable.
        </p>

        <div class="field">
            <br>
            <label class="label"><strong>Terms and conditions</strong></label>
    </br>
            <div class="control scrollable-box">
                <p><strong>Eligibility:</strong> Participation in this quiz is open to individuals who meet the eligibility criteria outlined by the organizer. By proceeding, you confirm that you meet these criteria.</p>
                <p><strong>Quiz Conduct:</strong> You are expected to complete the quiz independently and without unauthorized assistance. Collaboration or the use of external resources is prohibited unless explicitly allowed.</p>
                <p><strong>Intellectual Property:</strong> All content within the quiz, including questions and answers, is the intellectual property of the organizer. Reproduction or distribution of quiz materials without permission is prohibited.</p>
                <p><strong>Results and Disputes:</strong> Quiz results are final and non-negotiable. Any disputes or issues should be addressed promptly through the designated channels. The organizer reserves the right to make final decisions regarding any disputes.</p>
                <p><strong>Liability:</strong> The organizer is not liable for any technical issues, interruptions, or errors that may affect the completion or results of the quiz. Participation is at your own risk.</p>
                <br><p>By proceeding with the quiz, you acknowledge that you have read, understood, and agree to these terms and conditions.</p></br>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <br> <label class="checkbox">
                    <input type="checkbox" name="agree">
                    I agree to the <a href="#"><strong>Terms and Conditions</strong></a>
                </label> </br>
            </div>
        </div>

        <!-- Start Quiz button -->
        <button type="submit" class="button is-link is-light" disabled>Start Quiz</button>
    </form>
</section>
</body>
</html>
