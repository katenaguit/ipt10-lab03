<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>IPT10 Laboratory Activity #2 - Uploaded</title>
    <link rel="icon" href="https://phpsandbox.io/assets/img/brand/phpsandbox.png">
    <link rel="stylesheet" href="https://assets.ubuntu.com/v1/vanilla-framework-version-4.15.0.min.css">
    <style>
        body {
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: #AA4A44;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .header img {
            max-width: 150px;
            margin: 0 20px;
        }

        .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            max-width: 1000px;
            margin: 20px auto;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .file-upload {
            flex: 1;
            margin-right: 20px;
        }

        .file-upload h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }

        .p-card {
            border: 1px solid #ddd;
            padding: 15px;
            border-radius: 8px;
            background-color: #f9f9f9;
            margin-bottom: 20px;
        }

        .p-card h3 {
            margin-top: 0;
            color: #AA4A44;
        }

        .p-card__content {
            margin: 10px 0;
        }

        button {
            background-color: #AA4A44;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #922e2b;
        }

        .logo-section {
            flex-shrink: 0;
        }

        .logo-section img {
            max-width: 200px;
        }

        .upload-result {
            margin-top: 20px;
            font-size: 18px;
            color: #333;
        }

        .upload-result a {
            color: #AA4A44;
            text-decoration: none;
        }

        .upload-result a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div class="header">
        <img src="https://www.auf.edu.ph/home/images/logo2.png" alt="Angeles University Foundation">
    </div>

    <div class="container">
        <div class="file-upload">
            <h1>File Upload Result</h1>
            <div class="upload-result">
                <?php
                $upload_directory = getcwd() . '/uploads/';
                $relative_path = '/uploads/';

                // Ensure the upload directory exists
                if (!is_dir($upload_directory)) {
                    mkdir($upload_directory, 0755, true);
                }

                // Check if a file was uploaded
                if (isset($_FILES['image_file']) && $_FILES['image_file']['error'] === UPLOAD_ERR_OK) {
                    $uploaded_video_file = $upload_directory . basename($_FILES['image_file']['name']);
                    $temporary_file = $_FILES['image_file']['tmp_name'];

                    // Move the uploaded file
                    if (move_uploaded_file($temporary_file, $uploaded_video_file)) {
                        echo 'File Uploaded Successfully.<br>';
                        echo '<a href="' . $relative_path . basename($_FILES['image_file']['name']) . '" target="_blank">Click to View the Image File</a>';
                    } else {
                        echo 'Failed to Upload File';
                    }
                } else {
                    echo 'No File Uploaded or Upload Error.';
                }
                ?>
            </div>
            <br><button onclick="window.history.back();">Go Back</button></br>
        </div>

        <div class="logo-section">
            <img src="aufccs1.png" alt="College of Computing Studies">
        </div>
    </div>

</body>

</html>
